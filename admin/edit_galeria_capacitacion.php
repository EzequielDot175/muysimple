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
		);
	$img = File::get('imagen');
	if (!empty($img['name'])) {
		$name = File::upload('imagen');
		
		if (!empty($name) && $name != "") {
			$edit['imagen'] = $name;
		}
	}
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
	<img src="<?php echo Session::get('UPLOAD_URL')."/".$data->imagen; ?>" width="165"><br>
	<input id="campo-imagen" type="file" name="imagen" value=""> 
	<br>
	<br>
	<p>Si selecciona un curso, este sera referenciado para el boton más detalles de la galeria.</p>
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

<?php require "template/footer.php"; ?>