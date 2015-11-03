<?php
$nombre_d=$_POST['nombre_d'];
$page = 'testimonios';
$page2 = 'nav-empresas';
error_reporting(E_ALL ^ E_NOTICE);


/* PRODUCCION
define('DB_HOST','localhost');
define('DB_USER','msimple_simple');
define('DB_PASS','msimple1243**');
define('DB_NAME','msimple_muy');
*/

/* DESARROLLO*/
define('DB_HOST','localhost');
define('DB_USER','msimple_dev');
define('DB_PASS','msimple_dev');
define('DB_NAME','msimple_dev');

// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','muysimple');

function Conectar(){

	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($db->connect_error > 0){
		echo 'Fallo la conexion';
	}
	return $db;
	$db->close();
}
$db = Conectar();
require("template/header.php");
if (isset($_POST["submit-empresa"])):
	Empresa::add($_POST,$_FILES);
endif;

$sql = ("INSERT INTO empresa_nimg (nombre) VALUES ('$nombre_d')");
	$resultado = $db->query($sql);

	if(!$resultado){
		echo 'Error';
	}
	else{
		echo 'Empresa agregada con exito';
	}

	return $resultado;
?>
<div class="container">
	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
		<div class="grid col-9">
			<p>Empresa Agregada correctamente</p>
			<?php echo $nombre_d; ?>
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