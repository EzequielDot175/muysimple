<?php
$page = 'emprendimientos';
$page2 = 'nav-newsletter';

require("template/header.php");
?>
<div class="container">

	<div class="row">
	<?php require "template/nav_emprendimientos.php"; ?>
	<div class="grid col-9">

	<div class="row">
		<h2>SUSCRIPTOS</h2>
		<hr>
	</div>

<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 

	<?php 
	require "functions/suscripcion.inc.php";
	Suscripcion(); 
	?>
	</div>

	</div>
</div>

<?php require "template/footer.php"; ?>