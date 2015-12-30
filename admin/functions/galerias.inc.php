
<?php  
require_once "resource/db.php";
require_once "class/pagination.php";

/*********** Galería home *****************/

/* select all */

function traerGaleriaPrincipal(){

	$data = Pagination::setLimits();
	$db = Conectar();

	
	$sql = "SELECT * FROM galeria_principal ORDER BY id_gal DESC LIMIT ".$data["offset"].",".$data["limit"];
  	$resultado = $db->query($sql);
   	while($data = $resultado->fetch_object()){

		echo "
		<div class='row'>
		<h1>".$data->titulo."</h1>
	    <p>".$data->descripcion."</p>
	     <img src='../upload/".$data->imagen."'>
	     <br>
	     <p>
	     <a class='btn' href='delete_galeria_home.php?id=".$data->id_gal."' onClick='return confirmar();'>Eliminar</a>
	     <a class='btn' href='edit_galeria_home.php?id=".$data->id_gal."'>Editar</a>
	     </p>
	     <hr>
	     </div>
		";
	}
	Pagination::getLinks($db,"galeria_principal");

}

/* insert */

function insertGaleriaPrincipal(){

	$db = Conectar();

	$titulo = $_POST["titulo"];
	$descripcion = $_POST["descripcion"];
	$imagen = (!empty($_POST['imagen']) ? $_POST['imagen'] : '' );


	//move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

	$sql = ("INSERT INTO galeria_principal (titulo, descripcion,imagen) VALUES ('$titulo','$descripcion','$imagen')");
	$resultado = $db->query($sql);
	
	if (!$resultado){

		echo "Error al guardar";
	
	}else{
		echo "<script language='JavaScript'>";
        echo "location = 'galeria_home.php'";
        echo "</script>";
		// Header ("Location: galeria_home.php");
	}
	return $resultado;
}

/* edit */

function editGaleriaPrincipal(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM galeria_principal WHERE id_gal = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_galeria_home.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_gal" value="'.$id.'">

    <label for="Usuario">Titulo:</label><br>
	<input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
	<br>
	<label for="Usuario">Descripcion:</label><br>
	<textarea name="descripcion" class="campo-login-textarea" id="" cols="30" rows="10" maxlength="200">'.$data->descripcion.'</textarea>
	<br>
	<br>
	<img src="../upload/'.$data->imagen.'" width="165" id="preview"><br>
	<button class="btn" id="launch-image-loader">Seleccionar imagen</button><br><br>
	<input id="image-name" type="hidden" name="imagen" value="'.$data->imagen.'"> 
	<br>
	<br>

     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteGaleriaPrincipal(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM galeria_principal WHERE id_gal = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
  	echo "<script language='JavaScript'>";
    echo "location = 'galeria_home.php'";
    echo "</script>";
    // header ("Location: galeria_home.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

/*********** Galería capacitación *****************/

/* select all */

function traerGaleriaCapacitacion(){

  	$data = Pagination::setLimits();
	$db = Conectar();

	$sql = "SELECT * FROM galeria_capacitacion ORDER BY id_galc DESC LIMIT ".$data["offset"].",".$data["limit"];
  	$resultado = $db->query($sql);

   	while($data = $resultado->fetch_object()){

		echo "
		<div class='row'>
		<h1>".$data->titulo."</h1>
	    <p>".$data->descripcion."</p>
	     <img src='../upload/".$data->imagen."'>
	     <br>
	     <p>
	     <a class='btn' href='delete_galeria_capacitacion.php?id=".$data->id_galc."' onClick='return confirmar();'>Eliminar</a>
		 <a class='btn' href='edit_galeria_capacitacion.php?id=".$data->id_galc."'>Editar</a>
	     </p>
	     <hr>
	     </div>
		";
	}
	Pagination::getLinks($db,"galeria_capacitacion");
	
}

/* insert */

function insertGaleriaCapacitacion(){

	$db = Conectar();

	$titulo = $_POST["titulo"];
	$descripcion = $_POST["descripcion"];
	$imagen = $_FILES['imagen']['name'];


	move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

	$sql = ("INSERT INTO galeria_capacitacion (titulo, descripcion,imagen) VALUES ('$titulo','$descripcion','$imagen')");
	$resultado = $db->query($sql);
	
	if (!$resultado){

		echo "Error al guardar";
	
	}

	else{
		echo "<script language='JavaScript'>";
        echo "location = 'galeria_capacitacion.php'";
        echo "</script>";
		// Header ("Location: galeria_capacitacion.php");
	}
	return $resultado;
}

/* edit */

function editGaleriaCapacitacion(){

	$db = Conectar();

	$id = $_GET['id'];


	$sql = "SELECT * FROM galeria_capacitacion WHERE id_galc = '$id'";
	$resultado = $db->query($sql);
	$data = $resultado->fetch_object();


	echo '
	    <form action="functions/updates/update_galeria_capacitacion.php" method="post" enctype="multipart/form-data">
	    <input type="hidden" name="id_galc" value="'.$id.'"> 
    	<label for="Usuario">Titulo:</label><br>
		<input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
		<br>
		<label for="Usuario">Descripcion:</label><br>
		<input class="campo-login" type="text" name="descripcion" value="'.$data->descripcion.'">
		<br>
		<br>
		
		<img src="../upload/'.$data->imagen.'" width="350"><br>
		<input id="imagen" type="file" name="imagen" /> 
		<br>
		<br>
		 <input class="btn" id="send" type="submit" name="submit" value="Guardar">
		</form>
	';


}

/* delete */
function deleteGaleriaCapacitacion(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM galeria_capacitacion WHERE id_galc = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
  	echo "<script language='JavaScript'>";
        echo "location = 'galeria_capacitacion.php'";
        echo "</script>";
    // header ("Location: galeria_capacitacion.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

/*********** Galería tienda *****************/

/* select all */

function traerGaleriaTienda(){
	$data = Pagination::setLimits();
	$db = Conectar();

	$sql = "SELECT * FROM galeria_tienda ORDER BY id_galt DESC";
  	$resultado = $db->query($sql);

   	while($data = $resultado->fetch_object()){

		echo "
		<div class='row'>
	     <img src='../upload/".$data->imagen."'>
	     <br>
	     <p>
	     <a class='btn' href='delete_galeria_tienda.php?id=".$data->id_galt."' onClick='return confirmar();'>Eliminar</a>
	     <a class='btn' href='edit_galeria_tienda.php?id=".$data->id_galt."'>Editar</a>
	     </p>
	     <hr>
	     </div>
		";
	}
	Pagination::getLinks($db,"galeria_tienda");
	
}

function traerGaleriaEmprendimiento(){
	//$data = Pagination::setLimits();
	$db = Conectar();
	$id = $_GET['id'];

	$sql = "SELECT * FROM galeria_emprendimiento WHERE id_em = '$id'";
  	$resultado = $db->query($sql);

   	while($data = $resultado->fetch_object()){

		echo "
		<div class='row'>
	     <img src='../upload/".$data->galeria."'>
	     <br>
	    
	     <a class='btn' href='delete_galeria_emprendimiento.php?id=".$data->id_glem."'>Eliminar</a>
	     <hr>
	     </div>
		";
	}
	//Pagination::getLinks($db,"galeria_emprendimiento");
	
}
/* insert */

function insertGaleriaTienda(){

	$db = Conectar();

	$imagen = $_FILES['imagen']['name'];


	move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

	$sql = ("INSERT INTO galeria_tienda (imagen) VALUES ('$imagen')");
	$resultado = $db->query($sql);
	
	if (!$resultado){

		echo "Error al guardar";
	
	}

	else{
		echo "<script language='JavaScript'>";
        echo "location = 'galeria_tienda.php'";
        echo "</script>";
		// Header ("Location: galeria_tienda.php");
	}
	return $resultado;
}

/* edit */

function editGaleriaTienda(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM galeria_tienda WHERE id_galt = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_galeria_tienda.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_galt" value="'.$id.'">

    <br>

	<img src="../upload/'.$data->imagen.'" width="165"><br>
	<input id="campo-imagen" type="file" name="imagen" required/> 
	<br>
	<br>

     
     <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteGaleriaTienda(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM galeria_tienda WHERE id_galt = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
  	echo "<script language='JavaScript'>";
        echo "location = 'galeria_tienda.php'";
        echo "</script>";
    // header ("Location: galeria_tienda.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

/******** Galeria emprendimientos *********/


function insertGaleriaEmprendimiento(){

    $db = Conectar();

    $id = $db->real_escape_string((int)$_GET['id']);

    $galeria = $_FILES['galeria']['name'];

   
    move_uploaded_file($_FILES['galeria']['tmp_name'], '../upload/'.$_FILES['galeria']['name']);

    $sql = "INSERT INTO galeria_emprendimiento SET galeria = '$galeria', id_em = '$id'";
    $resultado = $db->query($sql);
    
    if (!$resultado){

        echo "Error al guardar";
        echo '<br>';
    
    }else{
      echo "<script language='JavaScript'>";
        echo "location = 'agregar_imagen_galeria.php'";
        echo "</script>";
    }
    return $resultado;
}

function deleteGaleriaEmprendimiento(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM galeria_emprendimiento WHERE id_glem = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
  	echo "<script language='JavaScript'>";
    echo "location = 'emprendimiento.php'";
    echo "</script>";
    // header ("Location: galeria_home.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>