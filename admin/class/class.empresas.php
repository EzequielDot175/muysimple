<?php 

	require_once('db.constants.php');
	/**
	* 
	*/
	class Empresa
	{
		public static $success = "";

		public function __construct()
		{

		}

		public static function add($vars , $files){
			$db = DB::get();
			$nombre = $vars["nombre"];
			$filename =  $files["empresa"]["name"];
			$tmp_filename =  $files["empresa"]["tmp_name"];
			$dir = "../resources/images/";
			$row = $db->prepare("INSERT INTO empresas (name,img) VALUES ( :name , :img)");
			$row->bindParam(':name', $nombre, PDO::PARAM_STR);
			$row->bindParam(':img', $filename, PDO::PARAM_STR);
			if($row->execute()){
				move_uploaded_file($tmp_filename, $dir.$filename);
				self::$success = "Empresa guardada correctamente";
			}
		}
		public static function fetch($front = false){
			$db = DB::get();
			$sql = "SELECT * FROM empresas ORDER BY id DESC ";
			$row = $db->query($sql)->fetchAll();

			if($front):
				$row = self::formatCollection($row);
			endif;

			return $row;
		}

		public static function formatCollection($collection){
			$limit = 2;
			$newCollection = array();
			array_unshift($collection, '');
			$columns = array();

			$i = 0;
			foreach($collection as $key => $val):
				if($key > 0):
					$newCollection[$i][] = $val;
					if( isset($columns) ):
						$columns[$i]++;
					else:
						$columns[$i] = 0;
					endif;
				endif;
				if($key > 0 && ($key % 5) == 0):
					$i++;
				endif;
			endforeach;

			$obj = new stdClass();
			$obj->columns = $columns;
			$obj->collection = $newCollection;
			return $obj;
			
		}



		public static function attributesOfCollection(Array $array, $keyName = "img"){
			$img_collection = array ();
			$margin_left = 30;

			foreach($array as $key => $val):
				$img = 'resources/images/'.$val[$keyName];
				if(file_exists($img)):
					$info = getimagesize($img);
					array_push($img_collection, $info[0]+$margin_left);
				else:
					array_push($img_collection, 100);
				endif;
			endforeach;

			$result = new stdClass();
			$result->{'withContainer'} = array_sum($img_collection);
			$result->{'marginLeft'} = $margin_left;
			return $result;
		}
		public static function fetchtwo($front = false){
			$db = DB::get();
			$sql = "SELECT * FROM empresa_nimg ORDER BY id ASC ";
			$row = $db->query($sql)->fetchAll();


			if($front):
				$row = self::formatCollection($row);
			endif;


			return $row;
		}
		public static function get($id){
			$db = DB::get();
			$sql = "SELECT * FROM empresas WHERE id =".$id;
			$row = $db->query($sql);
			return $row->fetch();
		}
		public static function edit($vars,$files){
			$db = DB::get();
			$row = $db->prepare("UPDATE empresas SET name = :name , img = :img WHERE id = :id");
			$row->bindParam(':name', $vars["nombre"], PDO::PARAM_STR);
			$row->bindParam(':img', (!empty($files["empresa"]["name"])?$files["empresa"]["name"]:$vars["old-image"] ), PDO::PARAM_STR);
			$row->bindParam(':id', $vars["empresa-id"], PDO::PARAM_STR);
			$tmp_filename =  $files["empresa"]["tmp_name"];
			$dir = "../resources/images/";
			if ($row->execute()) {
				if (!empty($files["empresa"]["name"])) {
					move_uploaded_file($tmp_filename, $dir.$files["empresa"]["name"]);
				}
				self::$success = "Empresa guardada correctamente";
			}
		}
		public static function delete($id){
			$db = DB::get();
			$row = $db->prepare("DELETE FROM empresas WHERE id = :id");
			$row->bindParam(':id', $id, PDO::PARAM_INT);
			$row->execute();
			if ($row->rowCount() > 0) {
				echo("success");
			}else{
				echo("error");
			}

		}
		public static function delete_two($id){
			$db = DB::get();
			$row = $db->prepare("DELETE FROM empresa_nimg WHERE id = :id");
			$row->bindParam(':id', $id, PDO::PARAM_INT);
			$row->execute();
			
			if ($row->rowCount() > 0) {
				echo("success");
			}else{
				echo("error");
			}

		}
	}


?>