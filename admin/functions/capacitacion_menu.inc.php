<?php  

require "resource/db.php";


/************ Capacitación *******************/

/* select all */

function traerCapacitacionMenu(){

    $db = Conectar();

    $sql = "SELECT * FROM capacitacion_menu ORDER BY id_menu DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){


        echo "
        <div class='row'>
        <h1>".$data->titulo."</h1>
        <img src='../upload/".$data->imagen."'>
        <br>
        <br>
        <p>
        <a class='btn' href='delete_capacitacion_menu.php?id=".$data->id_menu."'>Eliminar</a>
        <a class='btn' href='edit_capacitacion_menu.php?id=".$data->id_menu."'>Editar</a>
        </p>
        <hr>
        </div>
        ";
    }

    return $resultado;
}

/* insert */

function insertCapacitacionMenu(){

    $db = Conectar();

    $id = $db->real_escape_string($_GET['id']);

    $titulo = $_POST['titulo'];
    $imagen = $_FILES['imagen']['name'];

   
    move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

    $sql = "INSERT INTO capacitacion_menu SET titulo = '$titulo', imagen = '$imagen', id_cap = '$id'";
    $resultado = $db->query($sql);
    
    if (!$resultado){

        echo "Error al guardar";
        echo '<br>';
    
    }else{
      echo "<script language='JavaScript'>";
        echo "location = 'capacitacion_menu.php'";
        echo "</script>";
        // Header ("Location: capacitacion_menu.php");
    }
    return $resultado;
}

/* edit */

function editGaleriaCapacitacionMenu(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM capacitacion_menu WHERE id_menu = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_capacitacion_menu.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_menu" value="'.$id.'">
    <label for="Usuario">Titulo:</label><br>
    <input class="campo-login" type="text" name="titulo" value="'.$data->titulo.'">
    <br>

    <img src="../upload/'.$data->imagen.'" width="165"><br>
    <input id="campo-imagen" type="file" name="imagen" value="'.$data->imagen.'">
    <br>
    <br>
    
    
    <br>
    <br>
     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */
function deleteCapacitacionMenu(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM capacitacion_menu WHERE id_menu = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
    echo "location = 'capacitacion_menu.php'";
    echo "</script>";
    // header ("Location: capacitacion_menu.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>