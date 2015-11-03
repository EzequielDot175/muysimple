<?php  

require "resource/db.php";
require_once "class/pagination.php";


/************ Emprendimiento *******************/

/* select all */

function traerEmprendimiento(){

    $data = Pagination::setLimits();
    $db = Conectar();

    $sql = "SELECT * FROM emprendimientos ORDER BY id_em DESC LIMIT ".$data["offset"].",".$data["limit"];
    $resultado = $db->query($sql);


    while ($data = $resultado->fetch_object()){

        echo '
        <div class="row">
        <h1>'.$data->titulo.'</h1>
        <p>'.$data->detalle.'</p>
        <img src="../upload/'.$data->banner.'">
        ';
        $link = str_replace("watch?v=", "/embed/", $data->video);
        echo "
        <iframe width='560' height='315' src=".$link." frameborder='0'allowfullscreen></iframe>
        <br>
        <br>
        <p>
        <a class='btn' href='galeria_emprendimiento_add.php?id=".$data->id_em."'>Agregar imagenes</a>
        <a class='btn' href='delete_emprendimiento.php?id=".$data->id_em."' onClick='return confirmar();'>Eliminar</a>
        <a class='btn' href='edit_emprendimiento.php?id=".$data->id_em."'>Editar</a>
        </p>
        <hr>
        </div>
        ";


    }
    Pagination::getLinks($db,"emprendimientos");

    return $resultado;
}

/* insert */

function insertEmprendimiento(){

    $db = Conectar();


    $titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $banner = $_FILES['banner']['name'];

    move_uploaded_file($_FILES['banner']['tmp_name'], '../upload/'.$_FILES['banner']['name']);

    $sql = ("INSERT INTO emprendimientos (titulo, detalle, video, banner) 
    VALUES ('$titulo', '$detalle', '$video', '$banner')");
    $resultado = $db->query($sql);

    
    if (!$resultado){

        echo "Error al guardar";
        echo '<br>';
    
    }else{
        echo "<script language='JavaScript'>";
        echo "location = 'agregar_imagen_galeria.php'";
        echo "</script>";
      // header("Location: emprendimiento.php");
    }
    return $resultado;

}

/* edit */

function editEmprendimiento(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM emprendimientos WHERE id_em = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_emprendimiento.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_em" value="'.$id.'">
    
    <label for="Usuario">Titulo:</label><br>
        <input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
        <br>

        <label for="Usuario">Detalle:</label><br>
        <input class="campo-login" type="text" name="detalle" value="'.$data->detalle.'">
        <br>
        <br>
        

        <label for="Usuario">Video:</label><br>
        <input class="campo-login" type="text" name="video" value="'.$data->video.'">
        <br>
        <br>

        <img src="../upload/'.$data->banner.'" width="165"><br>
        <input id="campo-imagen" type="file" name="banner" value="'.$data->banner.'">
        <br>
        <br>
     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteEmprendimiento(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM emprendimientos WHERE id_em = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'emprendimiento.php'";
        echo "</script>";
    // header ("Location: emprendimientos.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}


?>