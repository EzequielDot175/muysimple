<?php 
$page = 'capacitacion';
$page2 = 'nav-capacitacion-menu';
require("template/header.php");
?>
<div class="container">

	
	<div class="row">
	<?php require "template/nav_capacitacion.php";  ?>
	<div class="grid col-9">
	<div class="row">
		<h2>OFICIOS</h2>
		<hr>
	</div>
	<a class="btn-add" href="capacitacion_menu_add.php">Agregar</a>
<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 
	<?php 
	require "functions/capacitacion_menu.inc.php";
	traerCapacitacionMenu(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>