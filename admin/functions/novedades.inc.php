<?php  

require_once "resource/db.php";

/********** Novedades *************/

/* select all */

function traerNovedades(){

    $db = Conectar();

    $sql = "SELECT * FROM novedades ORDER BY id_novedad DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo "
        <div class='row'>
        Fecha: ".date('d M Y', strtotime($data->fecha))."<br>
        <h1>".$data->titulo."</h1>
        <p>".$data->detalle."</p>
        <br>
        <img src='../upload/".$data->imagen."'>
        <br>
        <p>
        <a class='btn' href='delete_novedad.php?id=".$data->id_novedad."' onClick='return confirmar();'>Eliminar</a>
        <a class='btn' href='edit_novedades.php?id=".$data->id_novedad."'>Editar</a>
        </p>
        <hr>
        </div>
        ";

    }

    return $resultado;
}

/* insert */

function insertNovedades(){

    $db = Conectar();

    $titulo = $_POST["titulo"];
    $detalle = $_POST["detalle"];
    $fecha = $_POST["fecha"];
    $video = $_POST["videonov"];
    $imagen = $_FILES['imagen']['name'];
    $video1 = substr($video, 32, 11);


    move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

    $sql = ("INSERT INTO novedades (titulo, detalle,fecha, video, imagen) VALUES ('$titulo','$detalle', '$fecha','$video1', '$imagen')");
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

function editNovedades(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM novedades WHERE id_novedad = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_novedad.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_novedad" value="'.$id.'">
    
    <label for="Usuario">Titulo:</label><br>
    <input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
    <br>
    <label for="Usuario">Detalle:</label><br>
    <textarea name="detalle" id="" class="campo-login-textarea" cols="30" rows="30">'.$data->detalle.'</textarea>
    <br>
    <label for="Usuario">Fecha:</label><br>
    <input class="campo-login" type="date" name="fecha" value="'.$data->fecha.'">
    <br>
    

    <br>
    <img src="../upload/'.$data->imagen.'" width="165"><br>
    <input id="campo-imagen" type="file" name="imagen" value="'.$data->imagen.'"> 
    <br>
    <br>
     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteNovedades(){

  $db = Conectar();


  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM novedades WHERE id_novedad = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'novedades.php'";
        echo "</script>";
    // header ("Location: novedades.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>