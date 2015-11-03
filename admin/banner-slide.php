<?php
$page = 'emprendimientos';
$page2 = 'nav-banner-slide';
require("template/header.php");

if(isset($_POST["action"]) && $_POST["action"] == "add"):
	Emprendimientos::addBanner($_POST,$_FILES);
endif;
if(isset($_POST["ready"]) && $_POST["ready"] == true):
	Emprendimientos::update($_POST,$_FILES);
endif;

?>

	<div class="container">


		<div class="row">
		<?php 
		require "template/nav_emprendimientos.php"; 
		?>
		<div class="grid col-9">
			<div class="row">
				<h2>Banner Slide</h2>
				<hr>
			</div>
			<a class="btn-add" href="#add" id="add-banner-btn">Agregar</a>
			<div id="add-banner">
				<form action="" name="banner-add" method="post" enctype="multipart/form-data">
					<label for="banner">Agregar Banner</label><br>
					<input type="text" name="title" placeholder="Ingrese el titulo del banner"><br>
					<textarea name="description" cols="30" rows="10"></textarea><br>
					<input type="file" name="banner"><br>
					<input type="hidden" name="action" value="add">
					<input type="submit" value="Agregar banner"><br>
				</form>
			</div>
			
			 <?php foreach(Emprendimientos::fetch() as $k => $v): ?>
			<div class="emprendimiento-admin">
				<h3><?php echo $v["title"]; ?></h3>
				<img src="../upload/<?php echo $v["img"]; ?>" alt="" height="300">
				<p><?php echo $v["description"]; ?></p>
				<div class="edit">
					<form name="edit" method="post" enctype="multipart/form-data" class="form-edit">
						<input type="text" name="edit-name" value="<?php echo $v["title"]; ?>">
						<br>
						<textarea name="edit-content" id="" cols="30" rows="10"><?php echo $v["description"]; ?></textarea>
						<br>
						<p>
							Actualizar imagen: 
							<input type="file" name="edit-file">
						</p>
						<input type="hidden" name="ready" value="false">
						<input type="hidden" name="action" value="update">
						<input type="hidden" name="current" value="<?php echo $v["id"]; ?>">
					</form>
				</div>
				<button class="btn-delete">Eliminar</button>
				<button class="btn-edit" >Editar</button>
				<button class="btn-cancel" style="display:none;">Cancelar</button>
				<button class="btn-save" style="display:none;">Guardar</button>
			</div>
			<?php endforeach; ?>


		</div>
	</div>
</div>
<script>
	jQuery(document).ready(function($) {
		$('#add-banner-btn').click(function(event) {
			event.preventDefault();
			$('#add-banner').toggle(500);
		});

		$('.btn-edit').click(function(event) {
			$(this).toggle();
			$(this).parent().children('.edit').toggle();
			$(this).parent().children('.btn-save').toggle();
			$(this).parent().children('.btn-cancel').toggle();
		});
		$('.btn-cancel').click(function(event) {
			$(this).parent().children('.btn-edit').trigger('click');
		});
		$('.btn-save').click(function(event) {
			$(this).parent().children(".edit").children("form").children('input[name="ready"]').val("true");
			$(this).parent().children(".edit").children("form").submit();
		});
		$('.btn-delete').click(function(event) {
			if (confirm("¿Esta seguro que desea realizar esta accion?")) {
				var id = $(this).parent().children(".edit").children("form").children('input[name="current"]').val();
				$.post("./banner-slide-delete.php", {action: "delete", id: id}, function(data, textStatus, xhr) {
					console.log(data);
				});
				$(this).parent().remove();
			};
		});
	});	
</script>

<?php require "template/footer.php"; ?>