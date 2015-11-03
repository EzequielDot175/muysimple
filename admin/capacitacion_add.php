<?php 
    ob_start();

$page = 'capacitacion';
$page2 = 'nav-capacitacion';
require("template/header.php");

require "functions/capacitacion.inc.php";
	
	if(!empty($_POST)):
		insertCapacitacion();
	endif;




	// if(isset($_POST['submit'])) {
	// 		
	// 	}
?>

<div class="container">
	<div class="row">
	<?php require "template/nav_capacitacion.php"; ?>
	<div class="grid col-9">
	
	<div class="row">
	<form action="" method="post" enctype="multipart/form-data" id="add_capacitacion">

	

	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>
		<label for="Usuario">Detalle:</label><br>
		<textarea class="campo-login-textarea" type="text" name="detalle"></textarea>
		<br>
		<label for="Usuario">Sede:</label><br>
		<input class="campo-login" type="text" name="sede">
		<br>

		<label for="Usuario">duración:</label><br>
		<input class="campo-login" type="text" name="duracion">
		<br>

		<label for="Usuario">Horarios:</label><br>
		<input class="campo-login" type="text" name="horarios">
		<br>

		<!--<label for="Usuario">Fecha de inicio:</label><br>
		<input class="campo-login" type="date" name="fecha_inicio">
		<br>-->

		<label for="Usuario">Profesor:</label><br>
		<input class="campo-login" type="text" name="profesor">
		<br>

		<label for="Usuario">URL Video (YouTube):</label><br>
		<input class="campo-login" type="text" name="video" placeholder="Copie y pegue el link aquí. Ej: https://www.youtube.com/watch?v=hoZVYHyrIa4">
		<br>

		<label for="Usuario">Imagen para el Menú (Circular):</label><br>
		<input  type="file" name="imagen">
		<br>
		<br>
		<label for="Usuario">Imagen Detalle del curso:</label><br>
		<input  type="file" name="imagen_2">
		<br>

		

		<p><input class="btn" type="submit" name="submit" value="Agregar"> 
		<br> 
		<a class="btn" href="javascript:history.back(1)">Volver</a></p>
	</form>
	</div>

	</div>
	</div>
</div>

<script>
	jQuery(document).ready(function($) {
		var titulo,detalle,sede,duracion,horarios,f_inicio,profesor,imagen,imagen_2,error;

		$('#add_capacitacion').submit(function(event) {
			titulo 		= $('input[name="titulo"]').val();
			detalle 	= $('input[name="detalle"]').val();
			sede 		= $('input[name="sede"]').val();
			duracion 	= $('input[name="duracion"]').val();
			horarios 	= $('input[name="horarios"]').val();
			f_inicio 	= $('input[name="fecha_inicio"]').val();
			profesor 	= $('input[name="profesor"]').val();
			imagen = $('input[name="imagen"]')[0].files.length;
			imagen_2 = $('input[name="imagen_2"]')[0].files.length;
			if (titulo == "" || detalle == "" || sede == "" || duracion == "" || horarios == "" ||/* f_inicio == "" || */ profesor == "" || imagen == "" || imagen == 0 || imagen_2 == "" || imagen_2 == 0) {
				event.preventDefault();
				alert("El formulario no puede contener campos vacios");
			};
		});

	});
</script>

<?php require "template/footer.php"; ?>