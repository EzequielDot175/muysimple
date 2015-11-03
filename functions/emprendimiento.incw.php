<?php  

require "resource/db.php";


/************ Emprendimiento *******************/

/* select all */

function traerEmprendimiento(){

    $db = Conectar();

    $sql = "SELECT * FROM emprendimientos ORDER BY id_em DESC";
    $resultado = $db->query($sql);


    while ($data = $resultado->fetch_object()){

        echo '
        <div class="row">
        <h1>'.$data->titulo.'</h1>
        <p>'.$data->detalle.'</p>
        <img src="../upload/'.$data->banner.'">
        ';
        echo "
        <iframe width='600' height='407' src='https://www.youtube.com/embed/".$data->video."?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>
        <br>
        <br>
        <p>
        <img src='../upload/".$data->imagen1."' width='130'>
        <img src='../upload/".$data->imagen2."' width='130'>
        <img src='../upload/".$data->imagen3."' width='130'>
        <img src='../upload/".$data->imagen4."' width='130'>
        <img src='../upload/".$data->imagen5."' width='130'>
        <img src='../upload/".$data->imagen6."' width='130'>
        <img src='../upload/".$data->imagen7."' width='130'>
        <img src='../upload/".$data->imagen8."' width='130'>
        </p>
        <p>
        <a class='btn' href='delete_emprendimiento.php?id=".$data->id_em."' onClick='return confirmar();'>Eliminar</a>
        <a class='btn' href='edit_emprendimiento.php?id=".$data->id_em."'>Editar</a>
        </p>
        <hr>
        </div>
        ";


    }

    return $resultado;
}

/* insert */

function insertEmprendimiento(){

    $db = Conectar();


    $titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $banner = $_FILES['banner']['name'];
    $imagen1 = $_FILES['imagen1']['name'];
    $imagen2 = $_FILES['imagen2']['name'];
    $imagen3 = $_FILES['imagen3']['name'];
    $imagen4 = $_FILES['imagen4']['name'];
    $imagen5 = $_FILES['imagen5']['name'];
    $imagen6 = $_FILES['imagen6']['name'];
    $imagen7 = $_FILES['imagen7']['name'];
    $imagen8 = $_FILES['imagen8']['name'];

    move_uploaded_file($_FILES['banner']['tmp_name'], '../upload/'.$_FILES['banner']['name']);
    move_uploaded_file($_FILES['imagen1']['tmp_name'], '../upload/'.$_FILES['imagen1']['name']);
    move_uploaded_file($_FILES['imagen2']['tmp_name'], '../upload/'.$_FILES['imagen2']['name']);
    move_uploaded_file($_FILES['imagen3']['tmp_name'], '../upload/'.$_FILES['imagen3']['name']);
    move_uploaded_file($_FILES['imagen4']['tmp_name'], '../upload/'.$_FILES['imagen4']['name']);
    move_uploaded_file($_FILES['imagen5']['tmp_name'], '../upload/'.$_FILES['imagen5']['name']);
    move_uploaded_file($_FILES['imagen6']['tmp_name'], '../upload/'.$_FILES['imagen6']['name']);
    move_uploaded_file($_FILES['imagen7']['tmp_name'], '../upload/'.$_FILES['imagen7']['name']);
    move_uploaded_file($_FILES['imagen8']['tmp_name'], '../upload/'.$_FILES['imagen8']['name']);

    $sql = ("INSERT INTO emprendimientos (titulo, detalle, video, banner, imagen1, imagen2, imagen3, imagen4, imagen5, imagen6, imagen7, imagen8) 
    VALUES ('$titulo', '$detalle', '$video', '$banner', '$imagen1', '$imagen2', '$imagen3', '$imagen4', '$imagen5', '$imagen6', '$imagen7', '$imagen8')");
    $resultado = $db->query($sql);

    
    if (!$resultado){

        echo "Error al guardar";
        echo '<br>';
    
    }else{
        echo "<script language='JavaScript'>";
        echo "location = 'emprendimiento.php'";
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

        <hr>
        <h3>Imagenes de galería</h3>
        <hr><br>
        
        <img src="../upload/'.$data->imagen1.'" width="130"><br>
        <input type="file" name="imagen1" value="'.$data->imagen1.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen2.'" width="130"><br>
        <input type="file" name="imagen2" value="'.$data->imagen2.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen3.'" width="130"><br>
        <input type="file" name="imagen3" value="'.$data->imagen3.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen4.'" width="130"><br>
        <input type="file" name="imagen4" value="'.$data->imagen4.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen5.'" width="130"><br>
        <input type="file" name="imagen5" value="'.$data->imagen5.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen6.'" width="130"><br>
        <input type="file" name="imagen6" value="'.$data->imagen6.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen7.'" width="130"><br>
        <input type="file" name="imagen7" value="'.$data->imagen7.'">
        <br>
        <br>

        <img src="../upload/'.$data->imagen8.'" width="130"><br>
        <input type="file" name="imagen8" value="'.$data->imagen8.'">
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