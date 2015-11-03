<?php
$page = 'testimonios';
$page2 = 'nav-empresas';
require("template/header.php");
if(isset($_POST["edit-empresa"])):
	Empresa::edit($_POST,$_FILES);
endif;
$current = Empresa::get($_GET["edit"]);

?>
<div class="container">
	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
		<div class="grid col-9">
			<div class="row">
				<div><?php echo(Empresa::$success); ?></div>
				<h2>Empresas Amigas</h2>
				<hr>
				<form action="" method="post" enctype="multipart/form-data" class="add-empresa" id="add-empresa">
					<div class="row-empresa">
						<label for="">Nombre de la empresa</label>
						<input type="text" placehodler="" id="nombre" name="nombre" value="<?php echo($current["name"]) ?>">
					</div>
					<div class="row-empresa">
						<label for="">Adjunte una imagen a la empresa</label>
						<div><span>Imagen:</span> <em id="text-image"><?php echo($current["img"]) ?></em></div>
						<div><img src="../resources/images/<?php echo($current["img"]) ?>" alt="" height="150"></div>
						<button id="add-image">Cambiar imagen</button>
						<input type="file" name="empresa" style="display: none;" id="file">
					</div>
					<input type="hidden" name="empresa-id" value="<?php echo($current["id"]) ?>">
					<input type="hidden" name="old-image" value="<?php echo($current["img"]) ?>">
					<input type="hidden" name="edit-empresa">
					<input type="submit" value="Editar esta empresa">
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function _(a){return document.getElementById(a)};
	_("add-image").addEventListener("click", function(event){
		event.preventDefault();
		var ev = new CustomEvent("click", { "detail": "Example of an event" })
		_("file").dispatchEvent(ev);
	});

	_("file").addEventListener("change", function(){
		elem = this;
		_("text-image").innerHTML = elem.files[0].name;
	});
	_("add-empresa").addEventListener("submit", function(even){
		var error = "";
		if(_("nombre").value == ""){
			error += "Debe ingresar un nombre para la empresa \n";
		}
		if(error != ""){
			alert(error);
			event.preventDefault();
		}
	});
</script>


<?php require "template/footer.php"; ?>