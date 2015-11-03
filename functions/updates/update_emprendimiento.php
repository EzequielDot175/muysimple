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

// imagen 1

	if($imagen1 = $_FILES['imagen1']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen1 = $_FILES['imagen1']['name'];


	move_uploaded_file($_FILES['imagen1']['tmp_name'], '../../../upload/'.$_FILES['imagen1']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen1='$imagen1'  WHERE id_em='$id'");
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
// imagen 2

	if($imagen2 = $_FILES['imagen2']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen2 = $_FILES['imagen2']['name'];


	move_uploaded_file($_FILES['imagen2']['tmp_name'], '../../../upload/'.$_FILES['imagen2']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen2='$imagen2'  WHERE id_em='$id'");
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

// imagen 3

	if($imagen3 = $_FILES['imagen3']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen3 = $_FILES['imagen3']['name'];


	move_uploaded_file($_FILES['imagen3']['tmp_name'], '../../../upload/'.$_FILES['imagen3']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen3='$imagen3'  WHERE id_em='$id'");
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

// imagen 4

	if($imagen4 = $_FILES['imagen4']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen4 = $_FILES['imagen4']['name'];


	move_uploaded_file($_FILES['imagen4']['tmp_name'], '../../../upload/'.$_FILES['imagen4']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen4='$imagen4'  WHERE id_em='$id'");
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

// imagen 5

	if($imagen5 = $_FILES['imagen5']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen5 = $_FILES['imagen5']['name'];


	move_uploaded_file($_FILES['imagen5']['tmp_name'], '../../../upload/'.$_FILES['imagen5']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen5='$imagen5'  WHERE id_em='$id'");
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

// imagen 6

	if($imagen6 = $_FILES['imagen6']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen6 = $_FILES['imagen6']['name'];


	move_uploaded_file($_FILES['imagen6']['tmp_name'], '../../../upload/'.$_FILES['imagen6']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen6='$imagen6'  WHERE id_em='$id'");
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

// imagen 7

	if($imagen7 = $_FILES['imagen7']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen7 = $_FILES['imagen7']['name'];


	move_uploaded_file($_FILES['imagen7']['tmp_name'], '../../../upload/'.$_FILES['imagen7']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen7='$imagen7'  WHERE id_em='$id'");
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

// imagen 8

	if($imagen8 = $_FILES['imagen8']['name'] != ""){

	$titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $imagen8 = $_FILES['imagen8']['name'];


	move_uploaded_file($_FILES['imagen8']['tmp_name'], '../../../upload/'.$_FILES['imagen8']['name']);

	$sql = ("UPDATE emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video', imagen8='$imagen8'  WHERE id_em='$id'");
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