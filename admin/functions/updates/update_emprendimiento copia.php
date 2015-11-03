<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_em'];

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];

    $banner = $_FILES['banner']['name'];
    $imagen1 = $_FILES['imagen1']['name'];
    $imagen2 = $_FILES['imagen2']['name'];
    $imagen3 = $_FILES['imagen3']['name'];
    $imagen4 = $_FILES['imagen4']['name'];
    $imagen5 = $_FILES['imagen5']['name'];



    if ((!empty($_FILES["banner"])) && (!empty($_FILES["imagen1"])) && (!empty($_FILES["imagen2"])) && (!empty($_FILES["imagen3"])) && (!empty($_FILES["imagen4"])) && (!empty($_FILES["imagen5"]))){

	move_uploaded_file($_FILES['banner']['tmp_name'], '../../../upload/'.$_FILES['banner']['name']);

	move_uploaded_file($_FILES['imagen1']['tmp_name'], '../../../upload/'.$_FILES['imagen1']['name']);
	move_uploaded_file($_FILES['imagen2']['tmp_name'], '../../../upload/'.$_FILES['imagen2']['name']);
	move_uploaded_file($_FILES['imagen3']['tmp_name'], '../../../upload/'.$_FILES['imagen3']['name']);
	move_uploaded_file($_FILES['imagen4']['tmp_name'], '../../../upload/'.$_FILES['imagen4']['name']);
	move_uploaded_file($_FILES['imagen5']['tmp_name'], '../../../upload/'.$_FILES['imagen5']['name']);

	}

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', banner='$banner', imagen1='$imagen1', imagen2='$imagen2', imagen3='$imagen3', imagen4='$imagen4', imagen5='$imagen5'  WHERE id_em='$id'");
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


?>