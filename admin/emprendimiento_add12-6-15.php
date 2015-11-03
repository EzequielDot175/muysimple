<?php
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento';

require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_emprendimientos.php"; ?>
	<div class="grid col-9">

	<div class="row">


	<form id="datos" action="" method="post" enctype="multipart/form-data">


	<?php

	require "functions/emprendimiento.inc.php";

	if(isset($_POST['titulo']) && ($_POST['detalle']) && ($_POST['video']) && ($_FILES['banner'])){

	if(isset($_POST['submit'])) {

	insertEmprendimiento();
	}
	}
	?>

	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>

		<label for="Usuario">Detalle:</label><br>
		<textarea class="campo-login-textarea" type="text" name="detalle"></textarea>
		<br>
		<br>
	    

		<label for="Usuario">Video:</label><br>
		<input class="campo-login" type="text" name="video">
		<br>
		<br>

		<label for="Usuario">Banner:</label><br>
		<input type="file" name="banner" required/>
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