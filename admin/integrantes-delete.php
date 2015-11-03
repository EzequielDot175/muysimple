<?php
require "class/class.integrantes.php";
$int = (int)$_GET["delete"];
$x = new Integrante();
$x->delete($int);
 ?>