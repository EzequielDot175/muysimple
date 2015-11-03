<?php 
$page = 'capacitacion';
$page2 = 'nav-capacitacion-menu';

require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_capacitacion.php"; ?>
	<div class="grid col-9">

	<div class="row">


	<form id="datos" action="" method="post" enctype="multipart/form-data">


	<?php

	require "functions/capacitacion_menu.inc.php";

	if(isset($_POST['titulo'])  && ($_FILES['imagen'])){

	if(isset($_POST['submit'])) {

	insertCapacitacionMenu();
	}
	}
	?>


	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>

		<label for="Usuario">Imagen:</label><br>
		<input type="file" name="imagen">
		<br>
		<br>
		
		
		<br>
		<br>
		

		<p><input class="btn" type="submit" name="submit" value="AGREGAR"> 
		<br>
		<a class="btn" href="javascript:history.back(1)">Volver</a></p>
	</form>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>