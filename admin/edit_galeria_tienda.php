<?php
$page = "tienda";
$page2 = 'nav-novtienda-gal';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_tienda.php"; ?>
  <div class="grid col-9">
  <div class="row">


  <?php

  require "functions/galerias.inc.php";
  editGaleriaTienda();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>