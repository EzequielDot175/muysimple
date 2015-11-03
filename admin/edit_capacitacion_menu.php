<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion-menu';

require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_capacitacion.php"; ?>
	<div class="grid col-9">
	<div class="row">

	<?php

	require "functions/capacitacion_menu.inc.php";
	editGaleriaCapacitacionMenu();
	
	?>
	
	</div>

	</div>
	</div>
</div>

<?php require "template/footer.php"; ?>