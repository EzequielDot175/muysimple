<?php 
	/**
	* 
	*/
	class Emprendimientos 
	{
		private static $db;
		private static $upload = "../upload/";
		private static $table = "galeria_home_emprendimientos";

		public function __construct(){}
		
		public static function dbconfig(){
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
			// $this->config = $config;
			$attributes = array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				);

			return new PDO('mysql:host=localhost;dbname='.$config->dbname,$config->dbuser,$config->dbpass,$attributes);

		}

		public static function addBanner($post,$files){
			//self::$db = new PDO('mysql:host=localhost;dbname=msimple_muy', "msimple_simple", "msimple1243**", //produccion
			self::$db = self::dbconfig();

			$title = $post["title"];
			$description = $post["description"];
			$file_name = self::name($_FILES["banner"]["name"]);
			$file_tmp = $_FILES["banner"]["tmp_name"];

			if(self::upload($file_name,$file_tmp)):
				$insert = self::$db->prepare("INSERT INTO ".self::$table." (title,description,img) VALUES (:title,:description,:img)");
				$insert->bindParam(":title", $title, PDO::PARAM_STR);
				$insert->bindParam(":description", $description, PDO::PARAM_STR);
				$insert->bindParam(":img", $file_name, PDO::PARAM_STR);
				$insert->execute();
			endif;
		}
		private static function upload($name,$tmp){
			$row = move_uploaded_file($tmp, self::$upload.$name);
			return $row;
		}
		private static function name($name){

			return md5($name.rand(5,15)).substr($name, -4);
		}
		public static function fetch(){
			//self::$db = new PDO('mysql:host=localhost;dbname=msimple_muy', "msimple_simple", "msimple1243**");
			self::$db = self::dbconfig();
			$rows = self::$db->prepare("SELECT * FROM ".self::$table);
			$rows->execute();
			return $rows->fetchAll();
		}
		public static function updateImage($param,$current){
			if(!empty($param["name"])):
				$name = self::name($param["name"]);
				$tmp_name = $param["tmp_name"];
				if(self::upload($name,$tmp_name)):
					$update_img = self::$db->prepare("UPDATE ".self::$table." SET img = :img WHERE id = :current");
					$update_img->bindParam(":img", $name, PDO::PARAM_STR);
					$update_img->bindParam(":current", $current, PDO::PARAM_INT);
					$update_img->execute();
				endif;
				
			endif;

		}
		public static function update($post,$files){
			//self::$db = new PDO('mysql:host=localhost;dbname=msimple_muy', "msimple_simple", "msimple1243**");
			self::$db = self::dbconfig();
			$update = self::$db->prepare("UPDATE ".self::$table." SET title = :title, description = :description WHERE id = :current");
			$update->bindParam(":title", $post["edit-name"], PDO::PARAM_STR);
			$update->bindParam(":description", $post["edit-content"], PDO::PARAM_STR);
			$update->bindParam(":current", $post["current"], PDO::PARAM_INT);
			$update->execute();
			self::updateImage($files["edit-file"],$post["current"]);
			
		}
		public static function galeria(){
			$html = "";
			foreach(self::fetch() as $k => $v):
				$html .= ' 
				<div class="swiper-slide MobileSliderEmprendimiento_3">
	            <div class="row" style="width:100%">
	            <img  src="upload/'.$v["img"].'" style="top: 0;left: 0;margin:0;width: 100%; height: 100%;">
	            <a href="LaTienda.php">
	            	<div class="row">
	            		<div class="slider-data PlacaTienda ">
	            			<h1>'.$v["title"].'</h1>
	            			<p class="SacarSeccionCelular">'.$v["description"].'</p>
	            		</div>
	            	</div>
	            </a>
	            </div>
	            </div>
	            ';
			endforeach;
			echo $html;
			
		}
		public static function delete($current){
			//self::$db = new PDO('mysql:host=localhost;dbname=msimple_muy', "msimple_simple", "msimple1243**");
			self::$db = self::dbconfig();
			$delete = self::$db->prepare("DELETE FROM ".self::$table." WHERE id = :current");
			$delete->bindParam(":current",$current, PDO::PARAM_INT);
			$delete->execute();
		}
	}

 ?>