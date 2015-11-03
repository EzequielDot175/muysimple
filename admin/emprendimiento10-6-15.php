<?php
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento';
require("template/header.php");
?>

<div class="container">


	<div class="row">
	<?php 
	require "template/nav_emprendimientos.php"; 
	?>
	<div class="grid col-9">
	<div class="row">
		<h2>EMPRENDIMIENTOS</h2>
		<hr>
	</div>
	<a class="btn-add" href="emprendimiento_add.php">Agregar</a>

<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 
	
	<?php 
	require "functions/emprendimiento.inc.php";
	traerEmprendimiento(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>