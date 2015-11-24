<?php  

require "../../resource/db.php";


	$db = Conectar();

	$id = $_POST['id_em'];


    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $banner = $_POST['banner'];
    $titulo = $_POST['titulo'];



	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', banner='$banner'  WHERE id_em='$id'");
	$resultado = $db->query($sql);

	echo "<script language='JavaScript'>";
    echo "location = '../../emprendimiento.php'";
    echo "</script>";





?>