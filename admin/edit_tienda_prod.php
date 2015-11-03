<?php
$page = 'tienda';
$page2 = 'nav-novtienda-prod';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_tienda.php"; ?>
  <div class="grid col-9">
  <div class="row">


  <?php

  require "functions/tienda_prod.inc.php";
  editProducto();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>