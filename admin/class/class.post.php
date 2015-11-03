<?php 
	
	class Post
	{


		public static function input($var){
			return $_POST[$var];
		}

		public static function exist($input,$callback){
			if (isset($_POST[$input])) {
				call_user_func($callback);
			}
		}
		public static function all(){
			return $_POST;
		}

	}

 ?>