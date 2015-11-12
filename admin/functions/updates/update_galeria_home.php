<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_gal'];


	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$imagen = (!empty($_POST['imagen']) ? $_POST['imagen'] : '');

	//move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);

	$sql = ("UPDATE galeria_principal SET titulo='$titulo', descripcion='$descripcion', imagen='$imagen' WHERE id_gal='$id'");
	$resultado = $db->query($sql);


		echo "<script language='JavaScript'>";
        echo "location = '../../galeria_home.php'";
        echo "</script>";

	

?>