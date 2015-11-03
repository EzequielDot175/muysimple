<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion';
require("template/header.php");
?>

<div class="container">


	<div class="row">
	<?php 
	require "template/nav_capacitacion.php"; 
	?>
	<div class="grid col-9">
	<div class="row">
		<h2>TESTIMONIOS</h2>
		<hr>
	</div>
	<a class="btn-add" href="testimonio_add.php">Agregar</a>

<script lagnuaje="javascript"> 
   function confirmar(){ 
    return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 
	
	<?php 
	require "functions/testimonios.inc.php";
	traerTestimonios(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>