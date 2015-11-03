<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_prod'];

	if($imagen = $_FILES['imagen']['name']){

	$detalle= $_POST['detalle'];
    $imagen = $_FILES['imagen']['name'];

	move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);

	$sql = ("UPDATE tienda_prod SET detalle='$detalle', imagen='$imagen' WHERE id_prod='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../tienda_prod.php'";
        echo "</script>";

	}

	else{
	$detalle= $_POST['detalle'];

	$sql = ("UPDATE tienda_prod SET detalle='$detalle' WHERE id_prod='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../tienda_prod.php'";
        echo "</script>";
	}


?>