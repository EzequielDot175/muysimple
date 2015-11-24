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




<div class="image-loader-container">
  <div class="image-loader-content">
  <img src="crop/close.png" alt="close" class="close" title="Cerrar" class="Cerrar" id="closeCropper">
  <form action="#" id="crop-form">
      <div class="image-editor">
        
        <div class="cropit-image-preview">
          <img src="crop/loader.gif" alt="Cargando" title="Cargando..." id="cropper-loader">
        </div>
        
        <ul>
          <li> <span class="circle-number">1</span> Seleccionar imagen <input type="file" class="cropit-image-input"></li>
          <li> <span class="circle-number">2</span> Ajustar la imagen mediante el zoom  <input type="range" class="cropit-image-zoom-input"></li>
          <li> <span class="circle-number">3</span> Subir imagen  <button type="submit" class="btn-upload-croppit" id="trigger-btn-croppit">Subir imagen</button></li>
        </ul>
        <input type="hidden" name="image-data" class="hidden-image-data" />
        
      </div>
    </form>
  </div>
</div>

<script src="crop/jquery.cropit.js"></script>
<script src="crop/cropper.js"></script>
<script>
      $(function() {

        $('.image-editor').cropit({
            width: 1024,
            height: 450
          });
        $('#launch-image-loader').OpenCropper();
        $('#crop-form').onCropSubmit();

        $("#closeCropper").CloseCropper();
        
      });
</script>



<?php require "template/footer.php"; ?>