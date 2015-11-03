<?php 
	/**
	* 
	*/
	class File
	{


		public static function get($param = null){
			return (is_null($param) ? $_FILES : $_FILES[$param]);
		}
		public static function upload($param = null){
			if(is_null($param)):
				
			else:
				$file = $_FILES[$param];
				if(self::move($file)):
					return $file["name"];
				else:
					return "";
				endif;
			endif;
		}
		public static function move($file){
			return move_uploaded_file($file["tmp_name"], self::path($file["name"]));
		}
		public static function path($name = null){
			return Session::get('UPLOAD_PATH').(!is_null($name) ? "/".$name : "");
		}
		public static function random(){
			return substr(md5(md5(rand(0,20)."keyfile".rand(0,20))), 0, 10);	
		}
		private static function ext($name){
			return pathinfo($name, PATHINFO_EXTENSION);
		}
		public static function url($name = null){
			return "http://".$_SERVER["SERVER_NAME"]."/upload/".(!is_null($name) ? $name : "");
		}
		
	}

 ?>