<?php 
$page = 'tienda';
$page2 = 'nav-novtienda';

require("template/header.php");
?>

<div class="container">

	<div class="row">
	<?php 
	require "template/nav_tienda.php"; 
	?>
	<div class="grid col-9">

	<div class="row">
		<h2>NOVEDADES DE LA TIENDA</h2>
		<hr>
	</div>

	<a class="btn-add" href="novedades_tienda_add.php">Agregar</a>
<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 

	<?php 
	require "functions/novedades-tienda.inc.php";
	traerNovedadesTienda(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>