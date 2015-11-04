<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_novedad'];

	if($imagen = $_FILES['imagen']['name'] !=""){

	$titulo = $_POST['titulo'];
	$detalle = $_POST['detalle'];
	$fecha = $_POST['fecha'];
	$imagen = $_FILES['imagen']['name'];
    $destacado = (isset($_POST['destacado']) ? 1 : 0 );


	move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);

	$sql = ("UPDATE novedades SET titulo='$titulo', detalle='$detalle', fecha='$fecha', imagen='$imagen' , destacado='$destacado' WHERE id_novedad='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../novedades.php'";
        echo "</script>";


	}

	else{
	$titulo = $_POST['titulo'];
	$detalle = $_POST['detalle'];
	$fecha = $_POST['fecha'];
    $destacado = (isset($_POST['destacado']) ? 1 : 0 );
	
	
	$sql = ("UPDATE novedades SET titulo='$titulo', detalle='$detalle', fecha='$fecha' , destacado='$destacado' WHERE id_novedad='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../novedades.php'";
        echo "</script>";
	}


?>