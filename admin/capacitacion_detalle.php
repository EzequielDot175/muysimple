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

	
	<?php 
	require "resource/db.php";
	    $db = Conectar();

    $id = $db->real_escape_string($_GET['id']);

    $sql = "SELECT * FROM capacitacion WHERE id_cap ='$id'";
    $resultado = $db->query($sql);

    $data = $resultado->fetch_object();


        echo '
        <div class="row">
        <h2>'.$data->titulo.'</h2>  
        <p>'.$data->detalle.'</p>
        <ul>
        <p><strong>Sede:</strong> '.$data->sede.'</p>
        <p><strong>Duración:</strong> '.$data->duracion.'</p>
        <p><strong>Horarios:</strong> '.$data->horarios.'</p>
        <p><strong>Fecha de Inicio:</strong> '.date('d', strtotime($data->fecha_inicio)). ' de '.date('M D', strtotime($data->fecha_inicio)).'</p>
        <p><strong>Profesor:</strong> '.$data->profesor.'</p>
        <p><img src="../upload/'.$data->imagen.'" width="259"></p>
        </div>    
        ';

        
    	$id = $db->real_escape_string($_GET['id']);

		$sql = "SELECT * FROM testimonios WHERE id_cap ='$id'";
    	$resultado = $db->query($sql);

        echo "<div class='row'> <hr> <h2>TESTIMONIOS</h2><br>";
        
    	while ($data = $resultado->fetch_object()){

        
        echo "
        <p style='display:inline'><img src='../upload/".$data->gravatar."' width='43' height='43'> <strong>".$data->nombre." </strong></p>
        <p>".$data->testimonio."</p>
        <br>

        
        ";
    }

    echo "</div>";

	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>