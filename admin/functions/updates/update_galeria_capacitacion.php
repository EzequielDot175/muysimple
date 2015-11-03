<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_galc'];

	if($imagen = $_FILES['imagen']['name'] !=""){

	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$imagen = $_FILES['imagen']['name'];

	move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);

	$sql = ("UPDATE galeria_capacitacion SET titulo='$titulo', descripcion='$descripcion', imagen='$imagen' WHERE id_galc='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../galeria_capacitacion.php'";
        echo "</script>";

	}

	else{
		
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];


	$sql = ("UPDATE galeria_capacitacion SET titulo='$titulo', descripcion='$descripcion' WHERE id_galc='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../galeria_capacitacion.php'";
        echo "</script>";
	}


?>