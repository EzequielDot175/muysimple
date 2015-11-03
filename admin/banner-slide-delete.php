<?php
	require "class/class.emprendimiento.php";
	if(isset($_POST["action"]) && $_POST["action"] == "delete"):
		$id = (int)$_POST["id"];
		Emprendimientos::delete($id);
		die();
	endif;
 ?>