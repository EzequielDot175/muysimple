<?php 
$page = 'novedades';
$page2 = 'nav-novedades';
require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_novedades.php"; ?>
	<div class="grid col-9">

	<div class="row">
	<form action="" method="post" enctype="multipart/form-data">

	<?php

	require "functions/novedades.inc.php";

	if(isset($_POST['titulo']) && ($_POST['detalle']) && ($_POST['fecha']) && ($_FILES['imagen'])){

	if(isset($_POST['submit'])) {

	insertNovedades();
	}
	}
	?>
	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>
		<label for="Usuario">Detalle:</label><br>
		<textarea maxlength="2000" class="campo-login-textarea" cols="20" rows="20" type="text" name="detalle"></textarea>
		<br>
		<label for="Usuario">Fecha:</label><br>
		<input class="campo-login" type="date" name="fecha">
		<br>
		<label for="Usuario">URL Video (YouTube):</label><br>
		<input class="campo-login" type="text" name="videonov" placeholder="Copie y pegue el link aquí. Ej: https://www.youtube.com/watch?v=hoZVYHyrIa4">
		<br>

		<br>
		<input type="file" name="imagen"> 
		<br>
		<br>
		<p><input class="btn" type="submit" name="submit" value="AGREGAR"></p>
		<p><a class="btn" href="javascript:history.back(1)">Volver</a></p>
	</form>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>