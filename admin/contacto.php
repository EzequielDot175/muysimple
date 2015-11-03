<?php
$page = 'contacto';
$page2 = 'nav-contacto';
require("template/header.php");
?>

<div class="container">


	<div class="row">
	<?php 
	require "template/nav-contacto.php"; 
	?>
	<div class="grid col-9">
	<div class="row">
	<h2>MENSAJES DE CONTACTO</h2>
	<hr>
	</div>
<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 	
	<?php 
	require "functions/contacto.inc.php";
	traerContactos(); 
	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>