<?php  

require "resource/db.php";


/************ Capacitación *******************/

/* select all */

function traerCapacitacion(){

    $db = Conectar();

    $sql = "SELECT * FROM capacitacion ORDER BY id_cap DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo "
        <div class='row'>
        <h1>".$data->titulo."</h1>
        <p>".$data->detalle."</p>
        <img src='../upload/".$data->imagen."'>
        <img src='../upload/".$data->imagen_2."'>
        <p>Sede: ".$data->sede."</p>
        <p>Duración: ".$data->duracion."</p>
        <p>Horario: ".$data->horarios."</p>
        
        <p>Profesor: ".$data->profesor."</p>
        <br>
        <p>
        <a class='btn' href='capacitacion_detalle.php?id=".$data->id_cap."'>Ver Detalle</a>
        <a class='btn' href='testimonio_add.php?id=".$data->id_cap."'>Agregar testimonio</a>
        <a class='btn' href='delete_capacitacion.php?id=".$data->id_cap."' onClick='return confirmar();'>Eliminar</a>
        <a class='btn' href='edit_capacitacion.php?id=".$data->id_cap."'>Editar</a>
        </p>
        <hr>
        </div>
        <br>
        ";
    }

    return $resultado;
}

/* insert */

function insertCapacitacion(){

    $db = Conectar();

    $titulo = $_POST['titulo'];
    $detalle = $_POST['detalle'];
    $imagen = $_FILES['imagen']['name'];
    $imagen_2 = $_FILES['imagen_2']['name'];
    $sede = $_POST['sede'];
    $duracion = $_POST['duracion'];
    $horarios = $_POST['horarios'];
    //$fecha_inicio = $_POST['fecha_inicio'];
    $profesor = $_POST['profesor'];
    $video = $_POST['video'];
    $video1 = substr($video, 32, 11);
   
    move_uploaded_file($_FILES['imagen']['tmp_name'], Session::get('UPLOAD_PATH').$_FILES['imagen']['name']);
     move_uploaded_file($_FILES['imagen_2']['tmp_name'], Session::get('UPLOAD_PATH').$_FILES['imagen_2']['name']);

    $sql = "INSERT INTO capacitacion SET titulo='$titulo', detalle='$detalle', imagen='$imagen', imagen_2='$imagen_2', sede='$sede', duracion='$duracion', horarios='$horarios', profesor='$profesor', video='$video1'";
    $resultado = $db->query($sql);
    
    if (!$resultado){

         echo "<script language='JavaScript'>";
        echo "alert('Error al guardar.');";
        echo "</script>";
    
    }else{
        echo "<script language='JavaScript'>";
        echo "window.location.href = 'capacitacion.php'";
        echo "</script>";
    }
}

/* edit */

function editCapacitacion(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM capacitacion WHERE id_cap = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_capacitacion.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_cap" value="'.$id.'">

    <label for="Usuario">Titulo:</label><br>
        <input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
        <br>
        <label for="Usuario">Detalle:</label><br>
        <textarea class="campo-login-textarea" type="text" name="detalle">'.$data->detalle.'</textarea>
        <br>
        <label for="Usuario">Sede:</label><br>
        <input class="campo-login" type="text" name="sede" value="'.$data->sede.'">
        <br>

        <label for="Usuario">duración:</label><br>
        <input class="campo-login" type="text" name="duracion" value="'.$data->duracion.'">
        <br>

        <label for="Usuario">Horarios:</label><br>
        <input class="campo-login" type="text" name="horarios" value="'.$data->horarios.'">
        <br>

        <label for="Usuario">Fecha de inicio:</label><br>
        <input class="campo-login" type="date" name="fecha_inicio" value="'.$data->fecha_inicio.'">
        <br>

        <label for="Usuario">Profesor:</label><br>
        <input class="campo-login" type="text" name="profesor" value="'.$data->profesor.'">
        <br>

        <br>
        <img src="../upload/'.$data->imagen.'" width="165"><br>
        <input id="campo-imagen" type="file" name="imagen" value="'.$data->imagen.'"> 
        <br><br>

         <br>
        <img src="../upload/'.$data->imagen_2.'" width="165"><br>
        <input id="campo-imagen_2" type="file" name="imagen_2" value="'.$data->imagen_2.'"> 
        <br><br>

        <label for="Usuario">URL Video (YouTube):</label><br>
        <input class="campo-login" type="text" name="video" value="https://www.youtube.com/watch?v='.$data->video.'">
        <br>
     
        <input class="btn" id="send" type="submit" name="submit" value="Guardar">
        </form>
        ';


}


/* delete */
function deleteCapacitacion(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM capacitacion WHERE id_cap = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'capacitacion.php'";
        echo "</script>";
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>