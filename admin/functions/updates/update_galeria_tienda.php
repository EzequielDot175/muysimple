<?php  

require "../../resource/db.php";

	$db = Conectar();

	$id = $_POST['id_galt'];

    $imagen = $_FILES['imagen']['name'];

	 move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);

	$sql = ("UPDATE galeria_tienda SET imagen='$imagen' WHERE id_galt='$id'");
	$resultado = $db->query($sql);

	if ($resultado){

		echo "<script language='JavaScript'>";
        echo "location = '../../galeria_tienda.php'";
        echo "</script>";

		// header ("Location: ../../galeria_tienda.php");

	}

	else{
		echo 'Error al editar';
	}


?>