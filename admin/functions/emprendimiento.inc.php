<?php  
ob_start();
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
        <p>
        <a class='btn' href='galeria_emprendimiento_add.php?id=".$data->id_em."'>Galería</a>
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
function traerGaleriaEmprendimiento(){
    $data = Pagination::setLimits();
    $id = $_GET['id'];
    $sql = "SELECT * FROM galeria_emprendimiento WHERE id_em = '$id'";
    $resultado = $db->query($sql);
    while($data = $resultado->fetch_object()){
        echo "
        <div class='row'>
         <img src='../upload/".$data->galeria."'>
         <br>
         <hr>
         </div>
        ";
    }
    
}
/* insert */
function insertEmprendimiento(){

  

    $db = Conectar();
    $titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $video = $_POST['video'];
    $video1 = substr($video, 32, 11);
    $banner = $_POST['banner'];
    $sql = "INSERT INTO emprendimientos SET titulo='$titulo', detalle='$detalle', video='$video1', banner='$banner'";
    $resultado = $db->query($sql);
    
    if (!$resultado){
        echo "Error al guardar";
        echo '<br>';
        
    }else{
        echo "<script language='JavaScript'>";
        echo "location = 'agregar_imagen_galeria.php'";
        echo "</script>";
      @header("Location: emprendimiento.php");
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
        <textarea name="detalle" class="campo-login-textarea" id="" cols="30" rows="10" maxlength="200">'.$data->detalle.'</textarea>
        <br>
        <br>
        
        <label for="Usuario">Video:</label><br>
        <input class="campo-login" type="text" name="video" value="'.$data->video.'">
        <br>
       
        <br>
        <img src="../upload/'.$data->banner.'" width="165" id="preview"><br>
        <button class="btn" id="launch-image-loader">Seleccionar imagen</button><br><br>
        <input id="image-name" type="hidden" name="banner" value="'.$data->banner.'"> 
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