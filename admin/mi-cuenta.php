<?php 
$page = '';
$page2 = 'nav-empresas';
require("template/header.php");
require("resource/pdo.php");

$user = new UserInfo();
if (isset($_POST["token"])) :
	$user->changeInfoUser($_POST);
endif;
?>
<div class="container">
	<div class="row">
		<div class="grid col-9">
			<div class="row">
				<h2>Mis detalles</h2>
				<hr>
				<form action="" method="post" id="form">
					<fieldset>
						<legend align= "center">Usuario</legend>
						<input type="text" value="<?php $user->getCurrentUserName(); ?>" id="username" name="username">
					</fieldset>
					<a href="#" id="showPass">¿Desea cambiar su contraseña?</a>
					<fieldset style="display: none;" id="password-form">
						<legend align= "center">Password</legend>
						<label for="password-1" >Contraseña</label>
						<input type="password" value="" id="password-1" name="password-1">
						<label for="password-2">Repita la contraseña nueva</label>
						<input type="password" value="" id="password-2" name="password-2">
					</fieldset>
					<input type="submit" value="Editar">
					<input type="hidden" name="token" value="<?php echo($_SESSION["token"]); ?>">
					<p><?php echo($user->success) ?></p>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	function _(elem){return document.getElementById(elem)};

	var username = _("username");
	var pass1 = _("password-1");
	var pass2 = _("password-2");

	var form = _("form");
	var showPass = _("showPass");
	var passwordForm = _("password-form");

	showPass.addEventListener("click", function(e){
		e.preventDefault();
		passwordForm.style.display = "block";
	})
	form.addEventListener("submit", function(e){
		if (username.value == "" && passwordForm.style.display != "block") {
			e.preventDefault();
			alert("Nose puede tener el campo nombre vacio");
		}

		if (pass1.value != pass2.value) {
			e.preventDefault();
			alert("Contraseñas desiguales, reintente nuevamente");
		}else if(passwordForm.style.display == "block"){
			if (pass1.value == "" || pass2.value == "") {
				e.preventDefault();
				alert("No se puede tener la contraseña vacia");
			};
		}
		
		
	});


</script>
<?php require "template/footer.php"; ?>
