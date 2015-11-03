<?php 
$page = 'capacitacion';
$page2 = 'nav-capacitacion-menu';
require("template/header.php");
?>
<div class="container">

	
	<div class="row">
	<?php require "template/nav_capacitacion.php";  ?>
	<div class="grid col-9">
	<div class="row">
		<h2>OFICIOS</h2>
		<hr>
	</div>

	<?php
	require "resource/db.php";
	
	$db = Conectar();


    $sql = "SELECT * FROM capacitacion ORDER BY id_cap DESC";
    $resultado = $db->query($sql);

    $data = $resultado->fetch_object();

        echo "
        <div class='row'>
        <p>
        <a class='btn' href='capacitacion_menu_add.php?id=".$data->id_cap."'>Agregar Menú Oficio</a>
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