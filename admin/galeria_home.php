<?php
$page = 'testimonios';
$page2 = 'nav-galeria-home';
require("template/header.php");

?>
<div class="container">


	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
	<div class="grid col-9">
	<div class="row">
		<h2>GALERÍA PRINCIPAL</h2>
		<hr>
	</div>
	<a class="btn-add" href="galeria_home_add.php">Agregar</a>
	
<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 

	<?php 
	require "functions/galerias.inc.php";
	traerGaleriaPrincipal(); 
	?>
	</div>

	</div>
</div>


<?php require "template/footer.php"; ?>