<?php
$page = 'revista';
$page2 = 'nav-revista';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_revista.php"; ?>
  <div class="grid col-9">
  <div class="row">

  <?php

  require "functions/revista.inc.php";
  editRevista();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>