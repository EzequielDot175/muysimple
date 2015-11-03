<?php 
$page = 'novedades';
$page2 = 'nav-novedades';

require("template/header.php");
?>

<div class="container">



	<div class="row">
	<?php 
	require "template/nav_novedades.php"; 
	?>
	<div class="grid col-9">

	<div class="row">
		<h2>NOVEDADES</h2>
		<hr>
	</div>

	<a class="btn-add" href="novedades_add.php">Agregar</a>
	
<script lagnuaje="javascript"> 
   function confirmar(){ 
      return confirm("Estas seguro de querer borrar el registro?") 
  } 
</script> 

	<?php 
	require "functions/novedades.inc.php";
	traerNovedades(); 
	?>
	</div>
	</div>
</div>


<div id="fb-root"></div>
<script type="text/javascript">
(function() {
var element = document.createElement('script'); 
element.type = "text/javascript"; 
element.async = true;
element.id = "facebook-jssdk"
element.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
var s = document.getElementsByTagName('script')[0]; 
s.parentNode.insertBefore(element, s);
})();
</script>

<div class="fb-like"></div>

<?php require "template/footer.php"; ?>