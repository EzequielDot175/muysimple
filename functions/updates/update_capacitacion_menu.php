<?php  

require "../../resource/db.php";

	$db = Conectar();


	$id = $_POST['id_menu'];

	if($imagen = $_FILES['imagen']['name'] !=""){

	$titulo = $_POST['titulo'];
	$imagen = $_FILES['imagen']['name'];

	move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);

	$sql = ("UPDATE capacitacion_menu SET titulo='$titulo', imagen='$imagen' WHERE id_menu='$id'");
	$resultado = $db->query($sql);

		echo "<script language='JavaScript'>";
        echo "location = '../../capacitacion_menu.php'";
        echo "</script>";
     }

	else{

	$titulo = $_POST['titulo'];


	$sql = ("UPDATE capacitacion_menu SET titulo='$titulo' WHERE id_menu='$id'");
	$resultado = $db->query($sql);

		echo "<script language='JavaScript'>";
        echo "location = '../../capacitacion_menu.php'";
        echo "</script>";
		
	}


?>