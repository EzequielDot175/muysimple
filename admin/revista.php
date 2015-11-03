<?php 
$page = 'revista';
$page2 = 'nav-revista';
require("template/header.php");
?>
<div class="container">
	
	<div class="row">
	<?php require "template/nav_revista.php"; ?>
	<div class="grid col-9">

	<div class="row">
		<h2>REVISTA</h2>
		<hr>
	</div>

	<a class="btn-add" href="revista_add.php">Agregar</a>

<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 
	
	<?php 
	require "functions/revista.inc.php";
	traerRevista(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>