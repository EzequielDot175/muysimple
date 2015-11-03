<?php  

function Donacion(){

	
	$db = Conectar();

	$nombre_apellido = $db->real_escape_string($_POST['nombre_apellido']);
	$telefono = $db->real_escape_string($_POST['telefono']);
	$email = $db->real_escape_string($_POST['email']);
	$empresa = $db->real_escape_string($_POST['empresa']);
	$comentario = $db->real_escape_string($_POST['comentario']);
	//$fecha = $db->real_escape_string($_POST['fecha']); 
	$fecha=date('d/m/Y', time());

	$check1 = $db->real_escape_string($_POST['check1']);
	$check2 = $db->real_escape_string($_POST['check2']);
	$check3 = $db->real_escape_string($_POST['check3']);
	$check4 = $db->real_escape_string($_POST['check4']);
	$otros = $db->real_escape_string($_POST['otros']);



$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre_apellido . ",
 cuyo telefono es " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Empresa: " . $empresa . " \r\n";
$mensaje .= "Comentarios: " . $comentario . " \r\n";
$mensaje .= "Tipo/s: \r\n" ."". $check1 . " \r\n"."". $check2 . " \r\n"."". $check3 . " \r\n"."". $check4 .""." \r\n". $otros. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'anaquevedo91@gmail.com';
$copia= 'uyateu@hotmail.com';
$copia2= 'lek.correo@gmail.com';
$asunto = 'Mensaje desde Donación';


mail($para, $asunto, utf8_decode($mensaje), $header);
mail($copia, $asunto, utf8_decode($mensaje), $header);
mail($copia2, $asunto, utf8_decode($mensaje), $header);

	
	$sql = ("INSERT INTO donacion (nombre_apellido, telefono, email, empresa, comentario, fecha, check1, check2, check3, check4, otros) VALUES ('$nombre_apellido', '$telefono', '$email', '$empresa', '$comentario', '$fecha','$check1','$check2','$check3','$check4','$otros')");
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