<?php 
	/**
	* 
	*/
	class Integrante extends PDO
	{
		private $db;
		private $dir = "../upload";
		public $success =""; 

		public function __construct()
		{

  				$config = new stdClass();

			if(is_numeric(strpos($_SERVER['HTTP_HOST'], 'localhost')) || is_numeric(strpos($_SERVER['REQUEST_URI'], '/dev'))):
				$config->{'dbname'} = 'msimple_dev';
				$config->{'dbuser'} = 'msimple_dev';
				$config->{'dbpass'} = 'msimple_dev'; 
			else:
				$config->{'dbname'} = 'msimple_muy';
				$config->{'dbuser'} = 'msimple_simple';
				$config->{'dbpass'} = 'msimple1243**'; 
			endif;
			$this->config = $config;
			$this->attributes = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				);

			$this->db = new PDO('mysql:host=localhost;dbname='.$config->dbname,$config->dbuser,$config->dbpass,$this->attributes);

		}
		public function add(){
			$row = $this->db->prepare("INSERT INTO integrantes (nombre,apellido,email,puesto,img) VALUES (:nombre , :apellido, :email, :puesto, :img)");
			$img = (!empty($_FILES["imagen"]["name"]) ? $_FILES["imagen"]["name"] : "noname.jpg");
			$row->bindParam(":nombre", $_POST["nombre"], PDO::PARAM_STR);
			$row->bindParam(":apellido", $_POST["apellido"], PDO::PARAM_STR);
			$row->bindParam(":puesto", $_POST["puesto"], PDO::PARAM_STR);
			$row->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
			$row->bindParam(":img", $img, PDO::PARAM_STR);
			if ($img != "noname.jpg") {
				$this->uploadFile($_FILES);
			}
			if($row->execute()){
				$this->success = "El integrante ha sido guardado correctamente.";
			}
		}
		public function edit(){
			$row = $this->db->prepare("UPDATE integrantes SET telefono = :telefono, nombre = :nombre, apellido = :apellido, puesto = :apellido, email = :email, img = :img WHERE id = :id");
			$img = (!empty($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : $_POST["old-image"]);

			$row->bindParam(":nombre", $_POST["nombre"], PDO::PARAM_STR);
			$row->bindParam(":apellido", $_POST["apellido"], PDO::PARAM_STR);
			$row->bindParam(":puesto", $_POST["puesto"], PDO::PARAM_STR);
			$row->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
			$row->bindParam(":telefono",$_POST["telefono"], PDO::PARAM_STR);
			$row->bindParam(":img", $img, PDO::PARAM_STR);
			$row->bindParam(":id", $_POST["edit"], PDO::PARAM_INT);
			if (!empty($_FILES["image"]["name"])) {
				$this->uploadFile($_FILES);
			}

			
			if($row->execute()){
				$this->success = "El integrante ha sido guardado correctamente.";
			}
		}
		public function fetch(){
			$row = $this->db->prepare("SELECT * FROM integrantes");
			$row->execute();
			$collection = $row->fetchAll();
		
			if($row->rowCount() > 0){
				return $this->sort($collection);
			}else{
				return 0;
			}
			
		}

		private function sort($collection){
			$new_sort = array();
			
			for ($i=0; $i < count($collection); $i++) { 
				$new_sort[$i] = "";
			}
			foreach($collection as $key => $val):
				if(is_null($val['sort'])):
					$new_sort[] = $val;
				else:
					$new_sort[$val['sort']] = $val;
				endif;
			endforeach;

			foreach($new_sort as $key => $val):
				if(empty($val)):
					unset($new_sort[$key]);
				endif;
			endforeach;
			
			return $new_sort;
		}
		private function uploadFile($files){
			move_uploaded_file($files["image"]["tmp_name"], $this->dir."/".$files["image"]["name"]);
		}
		public function get($id){
			return $this->db->query("SELECT * FROM integrantes WHERE id=".$id)->fetch(PDO::FETCH_OBJ);
		}
		public function delete($id){
			$row = $this->db->prepare("DELETE FROM integrantes WHERE id = :id");
			$row->bindParam(":id",$id,PDO::PARAM_INT);
			if ($row->execute()) {
				header("location:integrantes.php");
			}
		}

		public function updateSort($sort){
			$query = "UPDATE integrantes SET sort = :num WHERE id = :id";
			// $upd = $this->query()
			foreach($sort as $key => $val):
				$upd = $this->db->prepare($query);
				$upd->bindParam(':num',$key,PDO::PARAM_INT);
				$upd->bindParam(':id',$val,PDO::PARAM_INT);
				$upd->execute();
			endforeach;
		}

		
	}

?>