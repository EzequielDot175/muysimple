<?php 
$page = 'testimonios';
$page2 = 'nav-donacion';
require("template/header.php");
?>

<div class="container">



	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
	<div class="grid col-9">
	<div class="row">
		<h2>DONACIONES</h2>
		<hr>
	</div>
<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 	
	<?php 
	require "functions/donacion.inc.php";
	traerDonacion(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>