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



	$header = 'From: ' . $email . " <br>";
	$header .= "X-Mailer: PHP/" . phpversion() . " <br>";
	$header .= "Mime-Version: 1.0 <br>";
	$header .= "Content-Type: text/plain";
	
	$mensaje = "Este mensaje fue enviado por " . $nombre_apellido . ",
	cuyo telefono es " . $telefono . " <br>";
	$mensaje .= "Su e-mail es: " . $email . " <br>";
	$mensaje .= "Empresa: " . $empresa . " <br>";
	$mensaje .= "Comentarios: " . $comentario . " <br>";
	$mensaje .= "Tipo/s: <br>" ."". $check1 . " <br>"."". $check2 . " <br>"."". $check3 . " <br>"."". $check4 .""." <br>". $otros. " <br>";
	$mensaje .= "Enviado el " . date('d/m/Y', time());


	// $mails = array(
	// 	"ezequiel@dot175.com",
	// 	// "ursula.carle@muysimple.org",
	// 	// "anaquevedo91@gmail.com"
	// 	);
	$mails = array(
				"ursula.carle@muysimple.org",
				"anaquevedo91@gmail.com",
				"dot175.ar@gmail.com"
				);



	$mail = new Mail(	$mails	);
	$mail->Subject = 'Mensaje desde el formulario de donacion - Muysimple.org';
	$mail->Body    = $mensaje;
	$mail->AltBody = '';
	$mail->send();



	
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