<?php 
$page = 'revista';
$page2 = 'nav-encuesta';
require("template/header.php");
?>
<div class="container">
	
	<div class="row">
	<?php require "template/nav_revista.php"; ?>
	<div class="grid col-9">

	<div class="row">
		<h2>ENCUESTAS</h2>
		<hr>
	</div>

	<a class="btn-add" href="revista_add.php">Agregar</a>
	
	<?php 
	require "functions/encuestas.inc.php";
	traerEncuestas1();
	traerEncuestas2();
	traerEncuestas3();
	traerEncuestas4(); 
	traerEncuestas5(); 
	traerEncuestas6();
	traerEncuestas7();   
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>