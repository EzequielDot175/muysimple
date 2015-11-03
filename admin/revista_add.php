<?php
$page = 'revista';
$page2 = 'nav-revista';
require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_revista.php"; ?>
	<div class="grid col-9">

	<div class="row">
	
	<form action="" method="post" enctype="multipart/form-data">

	<?php

	require "functions/revista.inc.php";

	if(isset($_POST['detalle']) && ($_POST['fecha'])){

	if(isset($_POST['submit'])) {

	insertRevista();
	}
	}
	?>
	
		<label for="Usuario">Detalle:</label><br>
		<textarea class="campo-login-textarea" type="text" name="detalle"></textarea>
		<br>
		<label for="Usuario">Fecha:</label><br>
		<input class="campo-login" type="date" name="fecha">		
		
		<label for="Usuario">Video:</label><br>
		<input class="campo-login" type="text" name="url_video" placeholder="Inserte la url del video aqui"/>
		<br>
		<br>
		<input class="btn" type="submit" name="submit" value="Agregar">
	</form>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>