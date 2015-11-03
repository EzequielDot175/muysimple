<?php 
	/**
	* 
	*/
	class Utils
	{
		public function __construct(){}


		public static function upload($array){
			echo "<pre>";
			print_r(expression);
			echo "</pre>";
		}
		public static function checkPost($name){
			return isset($_POST[$name]);
		}
		public static function sanitize($str){
			return addslashes($str);
		}
		public static function applyStyle($array){
			if($array != "" && !is_null($array) && !empty($array)):
				switch ($array['style']) {
					case 'background':
							echo('style="background: url('.$array['value'].')"');
						break;
					
					default:
						# code...
						break;
				}
			endif;
		}
		public static function twitter($text = null,$via = null){
	        $http = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			$twitter = "https://twitter.com/intent/tweet?original_referer=".$http;
	        $twitter.= "&text=".htmlspecialchars($text);
	        $twitter.= "&tw_p=tweetbutton";
	        $twitter.= "&url=".$http."&via=".$via;
			return $twitter;
		}
		public static function Dev(){
			if(isset($_GET["debug"])):
				return true;
			else:
				return false;
			endif;
		}

		public static function limitText($str, $num, $html = false){
			if(!$html):
				return strip_tags(substr($str, 0, $num));
			else:
				return substr($str, 0, $num);
			endif;
		}

		public static function classByLenght($str){
			$count = strlen($str);
			echo($count);
			if($count > 15):
				echo('fontz-36');
			elseif($count > 25):
				echo('fontz-31');
			endif;
		}
	}

	

 ?>