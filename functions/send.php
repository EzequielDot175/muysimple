<?php 


$nombre_apellido = $_POST['nombre_apellido'];
$telefono = $_POST['telefono'];
$email=$_POST['email'];
$empresa=$_POST['empresa'];
$comentario=$_POST['comentario'];

require_once('../libs.php');
// require_once('../PHPMailer/PHPMailerAutoload.php'); 
// require_once('../admin/class/class.mail.php'); 
	$mensaje = "Este mensaje fue enviado por : " . $nombre_apellido . "<br>";
	$mensaje .= "Su e-mail es: " . $email. "<br>";
	$mensaje .= "Empresa: " . $empresa. "<br>";
	$mensaje .= "Comentario : " . $comentario . "<br>";
	$mensaje .= "Enviado el: " . date('d/m/Y', time());

	$mails = array(
				"ursula.carle@muysimple.org",
				"anaquevedo91@gmail.com",
				"dot175.ar@gmail.com"
				);

	$mail = new Mail(	$mails	);
	$mail->Subject = 'Enviado desde el formulario de contacto de Muysimple.org';
	$mail->Body    = $mensaje;
	$mail->AltBody = '';
	
	$db = Conectar();


	$sql = ("INSERT INTO contacto (nombre_apellido, telefono, email, empresa, comentario) VALUES('$nombre_apellido', '$telefono', '$email', '$empresa', '$comentario')");
	$resultado = $db->query($sql);

if($mail->send()){

	header("Location: ../contacto.php");

}else{
	echo "Error al enviar";
}

?>