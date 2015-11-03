<?php 
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento';
require("template/header.php");
?>
<div class="container">

	
	<div class="row">
	<?php require "template/nav_emprendimientos.php";   ?>
	<div class="grid col-9">
	<div class="row">
		<h2>Desea Agregar imagenes a la Galería?</h2>
		<hr>
	</div>

	<?php
	require "resource/db.php";
	
	$db = Conectar();


    $sql = "SELECT * FROM galeria_emprendimiento ORDER BY id_glem DESC";
    $resultado = $db->query($sql);

    $data = $resultado->fetch_object();

        echo "
        <div class='row'>
        <p>
        <a class='btn' href='galeria_emprendimiento_add.php?id=".$data->id_em."'>Si</a>
        <a class='btn' href='emprendimiento.php'>No</a>
        </p>
        <hr>
        </div>
        <br>
        ";

	?>
	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>