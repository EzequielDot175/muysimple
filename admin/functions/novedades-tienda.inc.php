<?php  
require_once "resource/db.php";

/************ Novedades de la Tienda ***********/

/* select all */

function traerNovedadesTienda(){

    $db = Conectar();

    $sql = "SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC";
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
        <a class='btn' href='delete_novedad_tienda.php?id=".$data->id_novtienda."' onClick='return confirmar();'>Eliminar</a>
        <a class='btn' href='edit_novedad_tienda.php?id=".$data->id_novtienda."'>Editar</a>
        </p>
        <hr>
        </div>
        ";

    }

    return $resultado;
}

/* insert */

function insertNovedadesTienda(){

    $db = Conectar();

    $titulo = $_POST["titulo"];
    $detalle = $_POST["detalle"];
    $fecha = $_POST["fecha"];
    $video = $_POST["videonovt"];
    $imagen = $_FILES['imagen']['name'];
    $video1 = substr($video, 32, 11);


    move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

    $sql = ("INSERT INTO novedades_tienda (titulo, detalle,fecha, video, imagen) VALUES ('$titulo','$detalle', '$fecha','$video1', '$imagen')");
    $resultado = $db->query($sql);
    
    if (!$resultado){

        echo "Error al guardar";
    
    }else{
      echo "<script language='JavaScript'>";
        echo "location = 'novedades_tienda.php'";
        echo "</script>";
        // Header ("Location: novedades_tienda.php");
    }
    return $resultado;
}

/* edit */

function editNovedadesTienda(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM novedades_tienda WHERE id_novtienda = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_novedad_tienda.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_novtienda" value="'.$id.'">
    
    <label for="Usuario">Titulo:</label><br>
    <input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
    <br>
    <label for="Usuario">Detalle:</label><br>
    <textarea name="detalle" class="campo-login-textarea" id="" cols="30" rows="10">'.$data->detalle.'</textarea>
    <br>
    <label for="Usuario">Fecha:</label><br>
    <input class="campo-login" type="date" name="fecha" value="'.$data->fecha.'">
    <br>
    

    <br>
    <img src="../upload/'.$data->imagen.'" width="165"><br>
    <input id="campo-imagen" type="file" name="imagen" value="'.$data->imagen.'" 
    <br>
    <br>

    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteNovedadTienda(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM novedades_tienda WHERE id_novtienda = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'novedades_tienda.php'";
        echo "</script>";
    // header ("Location: novedades_tienda.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}
?>