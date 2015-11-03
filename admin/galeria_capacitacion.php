<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion-galeria';

require("template/header.php");



?>
<div class="container">


	<div class="row">
	<?php require "template/nav_capacitacion.php";  ?>
	<div class="grid col-9">
	<div class="row">
		<h2>GALERÍA CAPACITACIÓN</h2>
		<hr>
	</div>
	<a class="btn-add" href="galeria_capacitacion_add.php">Agregar</a>
	<script lagnuaje="javascript"> 
	   function confirmar(){ 
	      return confirm("Estas seguro de querer borrar el registro?") 
	  } 
	</script> 
	<?php 
	// require "functions/galerias.inc.php";
	// traerGaleriaCapacitacion(); 
	
	?>
	<!-- START LOOP -->
	<?php 
        $collection = GCapacitacion::all();
        
        if(!is_null($collection)):
        foreach($collection as $k => $data): 
        ?>
	<div class='row'>
		<h1><?php echo($data->titulo) ?></h1>
	    <p><?php echo($data->descripcion) ?></p>
	     <img src='../upload/<?php echo($data->imagen) ?>'>
	     <br>
	     <p>
		     <a class='btn' href='delete_galeria_capacitacion.php?id=<?php echo($data->id_galc) ?>' onClick='return confirmar();'>Eliminar</a>
			 <a class='btn' href='edit_galeria_capacitacion.php?id=<?php echo($data->id_galc) ?>'>Editar</a>
	     </p>
	     <hr>
	</div>
	<?php 
        endforeach;
        endif;
        ?>

	<!-- END LOOP -->
	</div>

	</div>
</div>

<?php require "template/footer.php"; ?>