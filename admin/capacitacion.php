<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion';
require("template/header.php");
?>

<div class="container">


	<div class="row">
	<?php 
	require "template/nav_capacitacion.php"; 
	?>
	<div class="grid col-9">
	<div class="row">
		<h2>CURSO CAPACITACIÓN</h2>
		<hr>
	</div>
	<a class="btn-add" href="capacitacion_add.php">Agregar</a>

	<script lagnuaje="javascript"> 
	   function confirmar(){ 
	    return confirm("Estas seguro de querer borrar el registro?") 
	  } 
	</script> 
	
	
<!-- start -->
        <?php 
        $collection = array_reverse(Capacitacion::all());
        

        if(!is_null($collection)): 
        foreach($collection as $k => $data): ?>
        <div class='row'>
	        <h1><?php echo($data->titulo) ?></h1>
	        <p><?php echo($data->detalle) ?></p>
		        <img src='../upload/<?php echo($data->imagen) ?>'>
		        <img src='../upload/<?php echo($data->imagen_2) ?>'>
	        <p>Sede: <?php echo($data->sede) ?></p>
	        <p>Duración: <?php echo($data->duracion) ?></p>
	        <p>Horario: <?php echo($data->horarios) ?></p>
	        
	        <p>Profesor: <?php echo($data->profesor) ?></p>
	        <br>
		        <p>
			        <a class='btn' href='capacitacion_detalle.php?id=<?php echo($data->id_cap) ?>'>Ver Detalle</a>
			        <a class='btn' href='testimonio_add.php?id=<?php echo($data->id_cap) ?>'>Agregar testimonio</a>
			        <a class='btn' href='delete_capacitacion.php?id=<?php echo($data->id_cap) ?>' onClick='return confirmar();'>Eliminar</a>
			        <a class='btn' href='edit_capacitacion.php?id=<?php echo($data->id_cap) ?>'>Editar</a>
		        </p>
	        <hr>
        </div>
        <br>
    <?php 
        endforeach;
        endif;
        ?>
<!-- end -->


	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>