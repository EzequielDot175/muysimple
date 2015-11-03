<?php
$page = 'testimonios';
$page2 = 'nav-integrantes';
require("template/header.php");
require("functions/integrantes.inc.php");
$x = new Integrante();
if (isset($_POST["submit"])) {
	$x->edit();
}
$data = $x->get((int)$_GET["edit"]);

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
						<input type="text" name="nombre" id="nombre" value="<?php echo($data->nombre); ?>">
						<label for="">Apellido</label>
						<input type="text" name="apellido" id="apellido" value="<?php echo($data->apellido); ?>">
						<label for="">Puesto</label>
						<input type="text" name="puesto" id="puesto" value="<?php echo($data->puesto); ?>">
						<label for="">Email</label>
						<input type="text" name="email" id="email" value="<?php echo($data->email); ?>">
						<label for="">Telefono</label>
						<input type="text" name="telefono" id="telefono" value="<?php echo($data->telefono); ?>">
						<label for="">Imagen de perfil</label>
						<img src="../upload/<?php echo($data->img); ?>" width="243" height="198">
						<input  type="file" name="image">
						
						<input type="hidden" name="edit" value="<?php echo $data->id; ?>">
						<input type="hidden" name="submit">
						<input type="hidden" name="old-image" value="<?php echo($data->img); ?>">
						<input type="submit" value="Guardar integrante" class="button-submit">
					</div>
					<br>
					<br>
					<a class="btn" href="delete_integrantes.php?id=<?php echo($data->id); ?>">Eliminar</a>
				</form>

			</div>
		</div>
	</div>

</div>
<!--<div class="container">
	<div class="row">
	<?php //require "template/nav_testimonios.php"; ?>
		<div class="grid col-9">
			<div class="row back-integrante">
				<div><?php //echo($x->success) ?></div>
				<h2>Agregar integrante</h2>
				<hr>
				<form action="" class="agregar-integrante" method="post" enctype="multipart/form-data" id="add-integrante">
					<div>
						<label for="">Nombre</label>
						<input type="text" name="nombre" id="nombre" value="<?php //echo($data["nombre"]) ?>">
						<label for="">Apellido</label>
						<input type="text" name="apellido" id="apellido" value="<?php //echo($data["apellido"]) ?>">
						<label for="">Puesto</label>
						<input type="text" name="puesto" id="puesto" value="<?php //echo($data["puesto"]) ?>">
						<label for="">Email</label>
						<input type="text" name="email" id="email" value="<?php //echo($data["email"]) ?>">
						<div class="img-box">
							<label for="">Imagen de perfil</label>
							<span class="field">Imagen:</span>
							<span class="imgname" id="text-image"><?php //echo($data["img"]) ?></span><br>
							<button class="button-cargar-imagen" id="add-image">Cargar Imagen</button>
						</div>
						<input type="file" name="imagen" id="file">
						<input type="hidden" name="edit" value="<?php //echo($data["id"]) ?>">
						<input type="hidden" name="old-image" value="<?php //echo($data["img"]) ?>">
						<input type="hidden" name="submit">
						<input type="submit" value="Guardar integrante" class="button-submit">
						<input type="submit" value="Eliminar integrante" class="button-submit" id="delete">
					</div>
				</form>
			</div>
		</div>
	</div>

</div>-->
<script>
	function id(a){return document.getElementById(a)};
	function lite(name){
		this.type = classification(name);
		this.element; 
		function classification(name){
			if(	name.search("#") != -1 ){
				return "id";
			}else if( name.search(".") != -1  ){
				return "class";
			}
		}
		this.ifClass = function(){
			return "asdas";
		}
		this.depure = function(){
			if (this.type == "id") {
				this.element = document.getElementById(name.replace(/#/,""));
			}else{
				this.element = document.getElementById(name.replace(/./,""));
			}
		}
		this.getClassification = function(){
			console.log(this.type);
		}
		this.on = function(argument,func){
			this.depure();
			if(this.type == "id"){
				this.element.addEventListener(argument, func);
			}
			else{
				for (var i = 0; i < this.element.length; i++) {
					this.element[i].addEventListener(arg, func);
				};
			}
		}
		this.val = function(){
			this.depure();
			return this.element.value;
		}
		this.getCurrentId = function(){
			var len = window.location.search.length;
			return window.location.search[len-1];
		}

	}

	function $(name){
		return new lite(name);
	}
</script>
<script>
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
	$("#delete").on("click",function(event){
		event.preventDefault();
		window.location.href = "integrantes-delete.php?delete="+$("#delete").getCurrentId();
	});
</script>

<?php require "template/footer.php"; ?>