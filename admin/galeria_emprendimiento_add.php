<?php 
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento';
require("template/header.php");
?>

<div class="container">
	<div class="row">
	<?php require "template/nav_emprendimientos.php";  ?>
	<div class="grid col-9">
	<div class="row">
	<form action="" method="post" enctype="multipart/form-data">


	<?php

	require "functions/galerias.inc.php";

	if(isset($_FILES['galeria'])){

	if(isset($_POST['submit'])) {

	
	insertGaleriaEmprendimiento();

	}
	}
	?>

		
		<input type="file" name="galeria">
		<br>

		<p><input class="btn" type="submit" name="submit" value="AGREGAR">
		<br>
		 <a class="btn" href="javascript:history.back(1)">Volver</a></p>
	</form>
	<?php traerGaleriaEmprendimiento(); ?>
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>