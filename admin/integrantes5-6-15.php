<?php
$page = 'testimonios';
$page2 = 'nav-integrantes';
require("template/header.php");
require("class/class.integrantes.php");
$x = new Integrante();

?>
<div class="container">
	<div class="row">
	<?php require "template/nav_testimonios.php"; ?>
		<div class="grid col-9">
			<div class="row back-integrante">
				<h2>Integrantes</h2>
				<hr>
				<div>
					<?php if($x->fetch() != 0): ?>
					<?php foreach($x->fetch() as $k => $v): ?>
					<div class="integrante" style="background:url(../resources/images/<?php echo($v["img"]) ?>)">
						<h3><?php echo($v["nombre"]." ".$v["apellido"]) ?></h3>
						<p class="to-bottom1">Puesto : <?php echo($v["puesto"]) ?></p>
						<p class="to-bottom2">Email: <a href="mailto:<?php echo($v["email"]) ?> "><?php echo($v["email"]) ?></a></p>
						<input type="hidden" value="<?php echo($v["id"]) ?>">
					</div>
            		<?php endforeach; ?>
            	<?php endif; ?>
				</div>
				<button onclick="window.location.href='integrantes-add.php'" class="button-submit">Agregar integrante</button>
			</div>
		</div>
	</div>

</div>

<script>
	
	for (var i = 0; i < _("integrante").length; i++) {
		_("integrante")[i].addEventListener("click", function(event){
			var id = this.childNodes[7].value;
			window.location.href = "integrantes-edit.php?edit="+id;
		});
	};


	function _(a){return document.getElementsByClassName(a)};
</script>



<?php require "template/footer.php"; ?>