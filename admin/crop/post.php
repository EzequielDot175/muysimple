<?php 
	error_reporting(E_ALL);
	function path($num = 0){
		$path = explode('/', dirname(__FILE__));
		
			for ($i=0; $i < $num; $i++) { 
				array_pop($path);
			}
		return implode("/", $path);
	}

	require_once(path(1)."/class/class.cropper.php");

	try {
		$cropper = new Cropper($_POST['data']);
		$cropper->setPath(path(2)."/upload/");
	 	$cropper->generate();

	 	echo($cropper->getName());
	} catch (Exception $e) {
		echo $e->getMessage();;
	}

 ?>