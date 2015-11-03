<?php
$page = 'testimonios';
$page2 = 'nav-emprendimiento-gal';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_emprendimientos.php"; ?>
  <div class="grid col-9">
  <div class="row">

  <?php

  require "functions/galerias.inc.php";
  editGaleriaPrincipal();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>