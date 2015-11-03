<?php  

/********** Suscripcion ***********/

function Suscripcion(){
	$db = Conectar();

	$nombre_apellido = $db->real_escape_string($_POST['nombre_apellido']);
	$email = $db->real_escape_string($_POST['email']);

	$sql = ("INSERT INTO suscripcion (nombre_apellido, email) VALUES ('$nombre_apellido','$email')");
	$resultado = $db->query($sql);

	if(!$resultado){
		echo 'Error';
	}else{
		echo '<p style="color:red">Gracias por suscribirte!</p>';
	}

	return $resultado;
}
?>