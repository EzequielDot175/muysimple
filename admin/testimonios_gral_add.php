<?php 
$page = 'testimonios';
$page2 = 'nav-testimonios';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_testimonios.php"; ?>
  <div class="grid col-9">
  <div class="row">
	<form action="" method="post" enctype="multipart/form-data">

	<?php

	require "functions/testimonios_gral.inc.php";

	if(isset($_POST['nombre']) && ($_POST['testimonio']) && ($_FILES['gravatar'])){

	if(isset($_POST['submit'])) {

	insertTestimoniosGral();
	}
	}
	?>

	<label for="Usuario">Nombre:</label><br>
		<input class="campo-login" type="text" name="nombre">
		<br>
		<label for="Usuario">Testimonio:</label><br>
		<textarea class="campo-login-textarea" type="text" name="testimonio"></textarea>
		<br>
		<br>
		<input type="file" name="gravatar"> 
		<br>
		<label for="background">Cargar imagen de fondo</label><br>
        <input type="file" name="background">
		<br>
		<p><input class="btn" type="submit" name="submit" value="AGREGAR"> 
		<br>
		<a class="btn" href="javascript:history.back(1)">Volver</a></p>
		<br>
		
	</form>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>