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
		<h2>TESTIMONIOS</h2>
		<hr>
	</div>
	<a class="btn-add" href="testimonios_gral_add.php">Agregar</a>
	<!-- <a class="btn-add" href="testimonios_gral_background.php" style="margin-right: 142px;">Agregar imagen de fondo</a> -->

<script language="JavaScript"> 
function confirmar ( mensaje ) { 
return confirm( mensaje ); 
} 
</script>
	
	<?php 
	require "functions/testimonios_gral.inc.php";
	traertestimoniosGral(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>