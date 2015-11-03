<?php
$page = 'testimonios';
$page2 = 'nav-testimonios';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_testimonios.php"; ?>
  <div class="grid col-9">
  <div class="row">

  <?php
  require "functions/testimonios_gral.inc.php";
  editTestimoniosGral();
  
  ?>
  
  </div>

  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>