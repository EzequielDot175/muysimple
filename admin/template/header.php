<?php
session_start();
if(!isset($_SESSION['user'])){
header('Location: index.php');



exit();
}

require_once('../location.php');
require_once('class/class.session.php');
require_once('class/Facade.php');
// LOAD STATIC METHODS - ezequiel
require_once("class/db.query.constants.php");

require_once("class/db.constants.php");
require_once("class/class.utils.php");


require_once("class/class.capacitacion.php");
require_once("class/class.empresas.php");
require_once("class/class.emprendimiento.php");
require_once("class/class.integrantes.php");
require_once("class/class.post.php");
require_once("class/class.get.php");
require_once("class/class.file.php");
require_once("class/class.config.php");




?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="resource/css/layout.css">
	<link rel="stylesheet" href="resource/css/jquery-ui.css">
	<link rel="stylesheet" href="resource/css/jquery-ui.structure.min.css">
	<script src="../resources/scripts/libs/jquery-1.11.0.min.js"></script>
	<script src="resource/js/jquery-ui.min.js"></script>
	<title>Admin</title>
</head>
<body>
	
<header>
<div class="inner">
	<div id="logo">
		<img src="resource/img/logo_muysimple.png" alt="Fundación Muy Simple">
	</div>
	<div class="menu">
	<ul>
	<li <?php echo ($page == 'testimonios') ? 'class="active"' : '';?>> <a href="galeria_home.php">La fundación</a></li>
	<li <?php echo ($page == 'capacitacion') ? 'class="active"' : '';?>> <a href="galeria_capacitacion.php">Capacitación</a></li>
	<li <?php echo ($page == 'emprendimientos') ? 'class="active"' : '';?>> <a href="emprendimiento.php">Emprendimientos</a></li>
	<li <?php echo ($page == 'tienda') ? 'class="active"' : '';?>> <a href="galeria_tienda.php">La Tienda</a></li>
    <li <?php echo ($page == 'novedades') ? 'class="active"' : '';?>> <a href="novedades.php">Novedades</a> </li>
    <li <?php echo ($page == 'revista') ? 'class="active"' : '';?>> <a href="revista.php">Revista</a></li>
    <li <?php echo ($page == 'contacto') ? 'class="active"' : '';?>> <a href="contacto.php">Contacto</a></li>     
	</ul>
	</div>
</div>
<div class="logout" id="logout" >
Mi cuenta
<ul id="listAccount">
	<li><a href="mi-cuenta.php">Mi detalles</a></li>
	<li><a href="salir.php">Salir</a></li>
</ul>
</div>
<script>
	function _(elm){return document.getElementById(elm);}
	var div = _("logout");
	var lista = _("listAccount");

	div.onmouseover = function(e){
		lista.style.display = "block";
	}
	div.onmouseleave = function(e){
		lista.style.display = "none";

	}
</script>
</header>
