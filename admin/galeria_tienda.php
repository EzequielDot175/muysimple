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
		<h2>GALERÍA LA TIENDA</h2>
		<hr>
	</div>

	<a class="btn-add" href="galeria_tienda_add.php">Agregar</a>

<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 

	<?php 
	require "functions/galerias.inc.php";
	traerGaleriaTienda(); 
	?>
	</div>

	</div>
</div>

<?php require "template/footer.php"; ?>