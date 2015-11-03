<?php
$page = 'novedades';
$page2 = 'nav-novedades';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php 
  require "template/nav_novedades.php"; 
  ?>
  <div class="grid col-9">
  <div class="row">

  <?php

  require "functions/novedades.inc.php";
  editNovedades();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>