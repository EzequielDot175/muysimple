<?php  
require "resource/db.php";

/************ Revista *******************/

/* select all */

function traerRevista(){

    $db = Conectar();

    $sql = "SELECT * FROM revista ORDER BY id_revista DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo '
        <div class="row">
        Fecha: '.date("d M Y", strtotime($data->fecha)).'<br>
        <p>'.$data->detalle.'</p>
        ';
        
        $link = str_replace("watch?v=", "/embed/", $data->url_video);

        echo '
        <iframe width="560" height="315" src="'.$link.'" frameborder="0" allowfullscreen></iframe>

        <br>
        <p>
        <a class="btn" href="delete_revista.php?id='.$data->id_revista.'" onClick="return confirmar();">Eliminar</a>
        <a class="btn" href="edit_revista.php?id='.$data->id_revista.'">Editar</a>
        </p>
        <hr>
        </div>';

        }

    return $resultado;
}

/* insert */

function insertRevista(){

    $db = Conectar();

    $detalle = $_POST["detalle"];
    $url_video = $_POST["url_video"];
    $video = $_FILES["video"];
    $fecha = $_POST["fecha"];
   
    move_uploaded_file($_FILES['video']['tmp_name'], '../upload/'.$_FILES['video']['name']);

    $sql = ("INSERT INTO revista (detalle, url_video, video, fecha) VALUES ('$detalle','$url_video', '$video', '$fecha')");
    $resultado = $db->query($sql);
    
    if (!$resultado){

        echo "Error al guardar";
    
    }else{
      echo "<script language='JavaScript'>";
        echo "location = 'novedades.php'";
        echo "</script>";
        // Header ("Location: novedades.php");
    }
    return $resultado;
}

/* edit */

function editRevista(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM revista WHERE id_revista = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_revista.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_revista" value="'.$id.'">
    
    <label for="Usuario">Detalle:</label><br>
    <input class="campo-login" type="text" name="detalle" value="'.$data->detalle.'">
    <br>
    <label for="Usuario">Fecha:</label><br>
    <input class="campo-login" type="date" name="fecha" value="'.$data->fecha.'">    
    
    <label for="Usuario">Video:</label><br>
    <input class="campo-login" type="text" name="url_video" value="'.$data->url_video.'">
    <br>
    <br>
     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteRevista(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM revista WHERE id_revista = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'revista.php'";
        echo "</script>";
    // header ("Location: revista.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}


?>