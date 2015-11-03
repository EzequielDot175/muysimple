<?php
$page = "tienda";
$page2 = 'nav-novtienda-gal';
require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_tienda.php"; ?>
	<div class="grid col-9">
	<div class="row">
	<form action="" method="post" enctype="multipart/form-data">

	<?php

	require "functions/galerias.inc.php";

	if(isset($_FILES['imagen'])){

	if(isset($_POST['submit'])) {

	insertGaleriaTienda();
	}
	}
	?>

		<br>
		<input type="file" name="imagen"> 
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