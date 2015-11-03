<?php
$page = 'testimonios';
$page2 = 'nav-testimonios';

require("template/header.php");
?>
<div class="container">
  <div class="row">
  <?php require "template/nav_testimonios.php"; ?>
  <?php
  	if(Utils::checkPost("add")):
  		if(Config::exist("bgtestimonios")):
          $edit = array(
          "value"=>File::upload("background")
          );
  			$confirm = Config::edit($edit,array("name","=","bgtestimonios"));
  		else:
          $new = array(
          "name" => "bgtestimonios",
          "value"=>File::upload("background")
          );
  			$confirm = Config::add($new);
  		endif;
  	endif;
   ?>
  
  
  <div class="grid col-9">
  <div class="row">
	<form action="" method="post" enctype="multipart/form-data" >
    <p><?php 
     if(isset($confirm) && $confirm > 0):
      echo("Modificación exitosa");
     endif;
     ?>
   </p>
		<h3>Ingrese la imagen de fondo</h3>
		<input type="file" name="background" accept="image/*">
		<br>
		<br>
		<input type="submit" value="Enviar" class="btn">
		<input type="hidden" name="add" val="">
	</form>
    <h3>Preview</h3>
    <img src="<?php echo(File::url(Config::option('bgtestimonios'))) ?>" alt="Preview imagen testimonios">
    
  </div>
  
  </div>
  </div>
</div>

<?php require "template/footer.php"; ?>