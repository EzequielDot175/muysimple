<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_capacitacion.php"; ?>
  <div class="grid col-9">
  <div class="row">


  <?php

  require "functions/capacitacion.inc.php";
  editCapacitacion();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>