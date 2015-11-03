<?php
$page = 'testimonios';
$page2 = 'nav-integrantes';
require("template/header.php");
$x = new Integrante();
function attr($img){
	return 'style="background:url(../upload/'.$img.');"';
}
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
					<?php foreach($x->fetch() as $k => $v): 
						$img = (	!empty($v['img']) ? attr($v["img"]) : attr('logo_muysimple_default.png')	);


					?>
					<div class="integrante" <?php echo $img ?>	> 
						<h3 style="background-color:black;"><?php echo($v["nombre"]." ".$v["apellido"]) ?></h3>
						<p class="to-bottom1" style="background-color:black;">Puesto : <?php echo($v["puesto"]) ?></p>
						<p class="to-bottom2" style="background-color:black;">Email: <a href="mailto:<?php echo($v["email"]) ?> "><?php echo($v["email"]) ?></a></p>
						<?php if(!is_null($v["telefono"])): ?>
						<p class="to-bottom1" style="background-color:black;">Telefono:<?php echo($v["telefono"]) ?></a></p>
						<?php endif; ?>
						<input type="hidden" value="<?php echo($v["id"]) ?>" class="box_id">
					</div> 
            		<?php endforeach; ?>
            	<?php endif; ?>
				</div>

				<h2>Orden de integrantes</h2>
				<hr>
				<p>Arraste según el orden deseado</p>
				<ul id="sortable" class="integrantes-list">
				<?php foreach($x->fetch() as $k => $v ):  ?>
				  <li class="ui-state-default" value="<?php echo $v['id'] ?>"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo $v['nombre']." ".$v['apellido'] ?></li>
				<?php endforeach; ?>
				</ul>
				<button class="integrantes-save">Guardar orden</button>

				<button onclick="window.location.href='integrantes-add.php'" class="button-submit">Agregar integrante</button>
			
			</div>
		</div>
	</div>

</div>

<script>

	jQuery(document).ready(function($) {
		$('.integrante').click(function(event) {
			var id = parseInt($(this).children('.box_id').val());
			window.location.href = "integrantes-edit.php?edit="+id;
		});
	});	

</script>

				 <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();

    $('.integrantes-save').click(function(event) {
    	event.preventDefault();
    	var collection = $( "#sortable" ).children('li');
    	var sort = [];
    	collection.each(function(index, el) {
    		sort.push($(el).val());
    	});

    	$.post('./class/ajax.php', {sort: sort}, function(data) {
    		alert('Orden guardado correctamente!');
    	});
    	
    });

  });
  </script>

<?php require "template/footer.php"; ?>