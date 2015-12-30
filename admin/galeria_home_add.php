<?php 
$page = 'emprendimientos';
$page2 = 'nav-emprendimiento-gal';
require("template/header.php");
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_emprendimientos.php"; ?>
	<div class="grid col-9">
	<div class="row">
	<form action="" method="post">

	<?php

	require "functions/galerias.inc.php";

	if(isset($_POST['titulo']) && ($_POST['descripcion']) ){

		if(isset($_POST['submit'])) {

			insertGaleriaPrincipal();
		}
	}
	?>

	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>
		<label for="Usuario">Descripcion:</label><br>
		<textarea class="campo-login-textarea" type="text" name="descripcion" maxlength="200"></textarea>
		<br>
		<br>
		<input type="hidden" name="imagen"  id="image-name">
		<br>
		<img src=""  id="preview" width="100">
		<br>
		<button class="btn" id="launch-image-loader">Seleccionar imagen</button>
		<br>
		<p><input class="btn" type="submit" name="submit" value="AGREGAR"> 
		<br>
		<a class="btn" href="javascript:history.back(1)">Volver</a></p>
	</form>
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