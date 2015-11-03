<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_em'];


	if($banner = $_FILES['banner']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $banner = $_FILES['banner']['name'];


	move_uploaded_file($_FILES['banner']['tmp_name'], '../../../upload/'.$_FILES['banner']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', banner='$banner'  WHERE id_em='$id'");
	$resultado = $db->query($sql);

	echo "<script language='JavaScript'>";
    echo "location = '../../emprendimiento.php'";
    echo "</script>";

	// de lo contrario quedan imagenes anteriores
	}else{

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video'  WHERE id_em='$id'");
	$resultado = $db->query($sql);

	if ($resultado){
		echo "<script language='JavaScript'>";
        echo "location = '../../emprendimiento.php'";
        echo "</script>";

		// header ("Location: ../../emprendimiento.php");

	}

	else{
		echo 'Error al editar';
	}

	}



?>