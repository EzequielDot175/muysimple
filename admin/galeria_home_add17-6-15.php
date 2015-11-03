<?php 
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento-gal';
require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_emprendimientos.php"; ?>
	<div class="grid col-9">
	<div class="row">
	<form action="" method="post" enctype="multipart/form-data">

	<?php

	require "functions/galerias.inc.php";

	if(isset($_POST['titulo']) && ($_POST['descripcion']) && ($_FILES['imagen'])):

		echo "<pre>";
		print_r($_POST);
		print_r($_FILES);
		echo "</pre>";
		die();
		if(isset($_POST['submit'])) :
			insertGaleriaPrincipal();
		endif;
	endif;
	?>

	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>
		<label for="Usuario">Descripcion:</label><br>
		<textarea class="campo-login-textarea" type="text" name="descripcion"></textarea>
		<br>
		<br>
		<input type="file" name="imagen"> 
		<br>
		<br>
		<p><input class="btn" type="submit" name="submit" value="AGREGAR"> <a class="btn" href="javascript:history.back(1)">Volver</a></p>
	</form>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>