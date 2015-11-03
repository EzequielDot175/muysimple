<?php
$page = 'tienda';
$page2 = 'nav-novtienda';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_tienda.php"; ?>
  <div class="grid col-9">
  <div class="row">

  <?php

  require "functions/novedades-tienda.inc.php";
  editNovedadesTienda();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>