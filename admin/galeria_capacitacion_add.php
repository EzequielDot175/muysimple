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
			"imagen" => File::upload("imagen"),
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
		<textarea class="campo-login-textarea" type="text" name="descripcion"></textarea>
		<br>
		<br>
		<input type="file" name="imagen"> 
		<br>
		<br>
		<p>Si selecciona un curso, este sera referenciado para el boton más detalles de la galeria.</p>
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

<?php require "template/footer.php"; ?>