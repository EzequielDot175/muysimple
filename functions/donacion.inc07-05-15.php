<?php  

function Donacion(){

	
	$db = Conectar();

	$nombre_apellido = $db->real_escape_string($_POST['nombre_apellido']);
	$telefono = $db->real_escape_string($_POST['telefono']);
	$email = $db->real_escape_string($_POST['email']);
	$empresa = $db->real_escape_string($_POST['empresa']);
	$comentario = $db->real_escape_string($_POST['comentario']);
	$fecha = $db->real_escape_string($_POST['fecha']); 

	$check1 = $db->real_escape_string($_POST['check1']);
	$check2 = $db->real_escape_string($_POST['check2']);
	$check3 = $db->real_escape_string($_POST['check3']);
	$otros = $db->real_escape_string($_POST['otros']);

	
	$sql = ("INSERT INTO donacion (nombre_apellido, telefono, email, empresa, comentario, fecha, check1, check2, check3, otros) VALUES ('$nombre_apellido', '$telefono', '$email', '$empresa', '$comentario', 'fecha', '$check1', '$check2', '$check3', '$otros')");
	$resultado = $db->query($sql);

	if(!$resultado){
		echo 'Error';
	}
	else{
		echo '<p style="color:red">Gracias por tu ayuda!</p>';
	}

	return $resultado;

}

?>