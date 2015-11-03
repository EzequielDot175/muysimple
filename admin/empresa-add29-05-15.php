<?php
$page = 'testimonios';
$page2 = 'nav-empresas';
require("template/header.php");
require("class/class.empresas.php");
if (isset($_POST["submit-empresa"])):
	Empresa::add($_POST,$_FILES);
endif;
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
						<input type="text" placehodler="" id="nombre" name="nombre">
					</div>
					<div class="row-empresa">
						<label for="">Adjunte una imagen a la empresa</label>
						<div><span>Imagen:</span> <em id="text-image"></em></div>
						<button id="add-image">Agregar imagen</button>
						<input type="file" name="empresa" style="display: none;" id="file">
					</div>
					<input type="hidden" name="submit-empresa">
					<input type="submit" value="Agregar esta empresa">
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
		if(_("file").files.length == 0){
			error += "Debe ingresar una imagen \n";
		}
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