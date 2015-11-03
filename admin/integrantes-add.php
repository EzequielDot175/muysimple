<?php
$page = 'testimonios';
$page2 = 'nav-integrantes';
require("template/header.php");
require "functions/integrantes.inc.php";
	
	if(!empty($_POST)):
		insertIntegrantes();
	endif;

?>
<div class="container">
	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
		<div class="grid col-9">
			<div class="row back-integrante">
				<h2>Agregar integrante</h2>
				<hr>
				<form action="" class="agregar-integrante" method="post" enctype="multipart/form-data" id="add-integrante">
					<div>
						<label for="">Nombre</label>
						<input type="text" name="nombre" id="nombre" required>
						<label for="">Apellido</label>
						<input type="text" name="apellido" id="apellido">
						<label for="">Puesto</label>
						<input type="text" name="puesto" id="puesto">
						<label for="">Email</label>
						<input type="text" name="email" id="email">
						<label for="">Telefono</label>
						<input type="text" name="telefono" id="telefono">
						<label for="">Imagen de perfil</label>
						<input  type="file" name="image">
						
						
						<input type="hidden" name="submit">
						<input type="submit" value="Guardar integrante" class="button-submit">
					</div>
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
	_("add-integrante").addEventListener("submit", function(even){
		var error = "";
		
		if(_("nombre").value == ""){
			error += "Debe ingresar un nombre para el integrante \n";
		}
		if(_("apellido").value == ""){
			error += "Debe ingresar un apellido para el integrante \n";
		}
		if(_("puesto").value == ""){
			error += "Debe ingresar un puesto para el integrante \n";
		}
		if(_("email").value == ""){
			error += "Debe ingresar un email para el integrante \n";
		}

		if(error != ""){
			alert(error);
			event.preventDefault();
		}
	});
</script>

<?php require "template/footer.php"; ?>