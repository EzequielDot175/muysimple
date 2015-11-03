<?php  

require "../../resource/db.php";

	$db = Conectar();


	$id = $_POST['id_cap'];

	if (($imagen = $_FILES['imagen']['name'] != "")||($imagen_2 = $_FILES['imagen_2']['name'] != "")){

	$titulo = $_POST['titulo'];
	$detalle = $_POST['detalle'];
	$imagen = $_FILES['imagen']['name'];
	$imagen_2 = $_FILES['imagen_2']['name'];
	$video = $_POST['video'];
	$sede = $_POST['sede'];
	$duracion = $_POST['duracion'];
	$horarios = $_POST['horarios'];
	$fecha_inicio = $_POST['fecha_inicio'];
	$profesor = $_POST['profesor'];


	move_uploaded_file($_FILES['imagen']['tmp_name'], '../../../upload/'.$_FILES['imagen']['name']);
	move_uploaded_file($_FILES['imagen_2']['tmp_name'], '../../../upload/'.$_FILES['imagen_2']['name']);

	$sql = ("UPDATE capacitacion SET titulo='$titulo', detalle='$detalle', imagen='$imagen', imagen_2='$imagen_2', sede='$sede', duracion='$duracion', horarios='$horarios', fecha_inicio='$fecha_inicio', profesor='$profesor', video='$video' WHERE id_cap='$id'");
	$resultado = $db->query($sql);

	echo "<script language='JavaScript'>";
    echo "location = '../../capacitacion.php'";
    echo "</script>";

	// de lo contrario quedan imagenes anteriores
	}else{

	$titulo = $_POST['titulo'];
	$detalle = $_POST['detalle'];
	$sede = $_POST['sede'];
	$duracion = $_POST['duracion'];
	$horarios = $_POST['horarios'];
	$fecha_inicio = $_POST['fecha_inicio'];
	$profesor = $_POST['profesor'];
	$video = $_POST['video'];

	$sql = ("UPDATE capacitacion SET titulo='$titulo', detalle='$detalle', sede='$sede', duracion='$duracion', horarios='$horarios', fecha_inicio='$fecha_inicio', video='$video' WHERE id_cap='$id'");
	$resultado = $db->query($sql);

	if ($resultado){
		echo "<script language='JavaScript'>";
        echo "location = '../../capacitacion.php'";
        echo "</script>";
    	}

	}

?>