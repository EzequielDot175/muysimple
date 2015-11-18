<?php
$page = 'capacitacion';
$page2 = 'nav-capacitacion-galeria';

require("template/header.php");


/**
* @param nombre de la variable tipo $_POST a detectar
* @param funcion cuando se cumpla la condicion anterior
*/
Post::exist('submit',function(){
	$edit = array(
		"titulo" => Post::input('titulo'),
		"descripcion" => Post::input('descripcion'),
		"capacitacion_id" => Post::input('curso'),
		"imagen" => Post::input('imagen')
		);
	
	GCapacitacion::edit($edit,array("id_galc","=",Post::input('id_gal')));

});

               
$data = GCapacitacion::find($_GET['id']);

?>
<div class="container">
	<div class="row">
	<?php require "template/nav_capacitacion.php"; ?>
	<div class="grid col-9">
	<div class="row">
	

	
	<?php 
	

	 ?>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_gal" value="<?php echo $data->id_galc; ?>">

    <label for="Usuario">Titulo:</label><br>
	<input class="campo-login" type="text" name="titulo" value="<?php echo $data->titulo; ?>">
	<br>
	<label for="Usuario">Descripcion:</label><br>
	<textarea name="descripcion" class="campo-login-textarea" id="" cols="30" rows="10"><?php echo trim($data->descripcion); ?>
	</textarea>
	<br>
	<br>
	<img src="../upload/<?php echo $data->imagen; ?>" width="100"  id="preview" ><br>
	<input id="image-name" type="hidden" name="imagen" value="<?php echo $data->imagen; ?>">
	<br>
	<button class="btn" id="launch-image-loader">Seleccionar imagen</button>
	<br>
	<p>Seleccione un curso para para vincular el banner.</p>
	<select name="curso" id="">
		<option value="">Seleccionar</option>
		<?php foreach(Capacitacion::all() as $k => $v): ?>
			<?php if ($data->capacitacion_id == $v->id_cap): ?>
			<option selected value="<?php echo($v->id_cap) ?>"><?php echo($v->titulo) ?></option>
			<?php else: ?>
			<option value="<?php echo($v->id_cap) ?>"><?php echo($v->titulo) ?></option>
			<?php endif; ?>
		<?php endforeach; ?>
	</select>
	<br>
	<br>

     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
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