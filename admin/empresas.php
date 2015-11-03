<?php
$page = 'testimonios';
$page2 = 'nav-empresas';
require("template/header.php");
// require("class/class.empresas.php");

?>
<div class="container">
	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
		<div class="grid col-9">
			<div class="row back-empresa">
				<h2>Empresas Amigas</h2>
				<hr>
				<?php foreach(Empresa::fetch() as $k => $v): ?>
				<div>
					<h3><?php echo($v["name"]) ?></h3>
					<img src="../resources/images/<?php echo($v["img"]) ?>" class="logo-back-empresa" alt="<?php echo($v["name"]) ?>">
					<div class="controls-logo">
						<a href="empresas-edit.php?edit=<?php echo($v["id"]) ?>">Editar</a>

						<input type="hidden" value="<?php echo($v["id"]) ?>">
						<a href="#" class="delete">Borrar</a>
					</div>
				</div>
				<?php endforeach; ?>
				<?php foreach(Empresa::fetchtwo() as $k => $v): ?>
				<div>
					<h3><?php echo($v["nombre"]) ?></h3>
					<div class="controls-logo">
						<input type="hidden" value="<?php echo($v["id"]) ?>">
						<a href="#" class="delete_two">Borrar</a>
					</div>
				</div>
				<?php endforeach; ?>
				<div class="controls">
					<a href="empresa-add.php">Agregar empresa</a>
				</div>
			</div>
		</div>
	</div>

</div>
<script>
	$('.delete').click(function(event) {
		event.preventDefault();
		var id = parseInt($(this).parent().children('input[type=hidden]').val());
		var obj = $(this);

		if (confirm('¿Esta seguro que desea realizar esta accion?')) {
			$.post('empresa-delete.php', {delete_empresa: id}, function(data) {
				if (data.trim() == 'success') {
					obj.parent().parent().remove();
				};
			});
		};
	});

	$('.delete_two').click(function(event) {
		event.preventDefault();
		var id = parseInt($(this).parent().children('input[type=hidden]').val());
		var obj = $(this);

		if (confirm('¿Esta seguro que desea realizar esta accion?')) {
			$.post('empresa-delete.php', {delete_empresa_two: id}, function(data) {
				if (data.trim() == 'success') {
					obj.parent().parent().remove();
				};
			});
		};
	});
</script>

<script>
	// for (var i = 0; i < $("delete").length; i++) {
	// 	$("delete")[i].addEventListener("click", function(event){
	// 		event.preventDefault();
	// 		var elem = this;
	// 		var id = parseInt(this.hash.replace(/#/g, ""));
	// 		if (confirm("¿Esta seguro que desea realizar esta accion?")) {
	// 			xmlhttp=new XMLHttpRequest();
	// 			xmlhttp.onreadystatechange = function(){
	// 				if (xmlhttp.readyState==4 && xmlhttp.status==200){
	// 					console.info('Reponse :', xmlhttp.responseText);
	// 					if (xmlhttp.responseText == "success") {
	// 						elem.parentNode.parentNode.outerHTML = "";
	// 					};
	// 				}
	// 			}
	// 			xmlhttp.open("POST","empresa-delete.php",true);
	// 			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	// 			xmlhttp.send("delete_empresa="+id);
	// 		};
	// 	});
	// };
	// function $(a){return document.getElementsByClassName(a)};
</script>

<script>
	// for (var i = 0; i < $("delete_two").length; i++) {
	// 	$("delete_two")[i].addEventListener("click", function(event){
	// 		event.preventDefault();
	// 		var elem = this;
	// 		var id = parseInt(this.hash.replace(/#/g, ""));
	// 		if (confirm("¿Esta seguro que desea realizar esta accion?")) {
	// 			xmlhttp=new XMLHttpRequest();
	// 			xmlhttp.onreadystatechange = function(){
	// 				if (xmlhttp.readyState==4 && xmlhttp.status==200){
	// 					if (xmlhttp.responseText == "success") {
	// 						elem.parentNode.parentNode.outerHTML = "";
	// 					};
	// 				}
	// 			}
	// 			xmlhttp.open("POST","empresa-delete.php",true);
	// 			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	// 			xmlhttp.send("delete_empresa_two="+id);
	// 		};
	// 	});
	// };
	// function $(a){return document.getElementsByClassName(a)};
</script>


<?php require "template/footer.php"; ?>