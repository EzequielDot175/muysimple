<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_test'];

	if($gravatar = $_FILES['gravatar']['name']){

	$nombre = $_POST['nombre'];
    $testimonio = $_POST['testimonio'];
    $gravatar = $_FILES['gravatar']['name'];

	 move_uploaded_file($_FILES['gravatar']['tmp_name'], '../../../upload/'.$_FILES['gravatar']['name']);

	$sql = ("UPDATE testimonios_gral SET nombre='$nombre', testimonio='$testimonio', gravatar='$gravatar' WHERE id_test='$id'");
	$resultado = $db->query($sql);

		echo "<script language='JavaScript'>";
        echo "location = '../../testimonios_gral.php'";
        echo "</script>";


	}

	else{
	$nombre = $_POST['nombre'];
    $testimonio = $_POST['testimonio'];

	$sql = ("UPDATE testimonios_gral SET nombre='$nombre', testimonio='$testimonio' WHERE id_test='$id'");
	$resultado = $db->query($sql);

		echo "<script language='JavaScript'>";
        echo "location = '../../testimonios_gral.php'";
        echo "</script>";
	}


?>