<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_revista'];


    $detalle = $_POST['detalle'];
    $url_video = $_POST['url_video'];
    $fecha = $_POST['fecha'];


	$sql = ("UPDATE revista SET detalle='$detalle', url_video='$url_video', fecha='$fecha' WHERE id_revista='$id'");
	$resultado = $db->query($sql);

	if ($resultado){

		echo "<script language='JavaScript'>";
        echo "location = '../../revista.php'";
        echo "</script>";

		// header ("Location: ../../revista.php");

	}

	else{
		echo 'Error al editar';
	}


?>