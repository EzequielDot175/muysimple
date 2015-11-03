<?php 
$page = 'capacitacion';
$page2 = 'nav-capacitacion';
require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_capacitacion.php"; ?>
	<div class="grid col-9">
	
	<div class="row">
	<form action="" method="post" enctype="multipart/form-data">

	<?php

	require "functions/testimonios.inc.php";

	if(isset($_POST['nombre']) && ($_POST['testimonio']) && ($_FILES['gravatar'])){

	if(isset($_POST['submit'])) {

	insertTestimonio();
	}
	}
	?>

		<label for="Usuario">Nombre:</label><br>
		<input class="campo-login" type="text" name="nombre">
		<br>
		
		<br>
		<input type="file" name="gravatar"> 
		<br>

		<label for="Usuario">Testimonio:</label><br>
		<textarea class="campo-login-textarea" type="text" name="testimonio"></textarea>
		<br>
		

		<input class="btn" type="submit" name="submit" value="AGREGAR">
	</form>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>