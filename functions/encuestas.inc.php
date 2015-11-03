<?php  

function insertEncuesta(){

	$db = Conectar();

	$op1 = $db->real_escape_string($_POST['option1']);
	$op2 = $db->real_escape_string($_POST['option2']);
	$op3 = $db->real_escape_string($_POST['option3']);
	$op4 = $db->real_escape_string($_POST['option4']);
	$op5 = $db->real_escape_string($_POST['option5']);
	$op6 = $db->real_escape_string($_POST['option6']);
	$op7 = $db->real_escape_string($_POST['option7']);
	$otros = $db->real_escape_string($_POST['otros']);

	$sql = ("INSERT INTO encuestas (option1, option2, option3, option4, option5, option6, otros) 
			VALUES ('$op1', '$op2', '$op3', '$op4', '$op5', '$op6', '$otros')");
	$resultado = $db->query($sql);

	if (!$resultado){
		echo 'Error';
	}
	else {
		echo '<p style="color:red">Gracias por su encuesta</p>';
	}
}
?>