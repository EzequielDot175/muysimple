<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion-galeria';

require("template/header.php");
?>

<?php 
	if(Utils::checkPost('add')):
		$new = array(
			"titulo" => Utils::sanitize(Post::input("titulo")),
			"descripcion" => Utils::sanitize(Post::input("descripcion")),
			"imagen" => Utils::sanitize(Post::input("imagen")),
			"capacitacion_id" => Post::input("curso")
			);
		
        GCapacitacion::add($new);
	endif;

 ?>
<div class="container">
	<div class="row">
	<?php require "template/nav_capacitacion.php"; ?>
	<div class="grid col-9">
	<div class="row">
	<form action="" method="post" enctype="multipart/form-data">

	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo">
		<br>
		<label for="Usuario">Descripcion:</label><br>
		<textarea class="campo-login-textarea" type="text" name="descripcion" maxlength="200"></textarea>
		<br>
		<br>
		<img src=""  id="preview" width="100">
		<input type="hidden" name="imagen" id="image-name"> 
		<br>
		<button class="btn" id="launch-image-loader">Seleccionar imagen</button>
		<br>
		<p>Seleccione un curso para para vincular el banner.</p>
		<select name="curso" id="">
			<option value="">Seleccionar</option>
			<?php foreach(Capacitacion::all() as $k => $v): ?>
			<option value="<?php echo($v->id_cap) ?>"><?php echo($v->titulo) ?></option>
			<?php endforeach; ?>
		</select>

		<p><input class="btn" type="submit" name="submit" value="AGREGAR"> 
		<br>
		<a class="btn" href="javascript:history.back(1)">Volver</a></p>
		<input type="hidden" name="add">
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