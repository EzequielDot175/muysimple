<?php
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_emprendimientos.php"; ?>
  <div class="grid col-9">
  <div class="row">


  <?php

  require "functions/emprendimiento.inc.php";
  editEmprendimiento();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>