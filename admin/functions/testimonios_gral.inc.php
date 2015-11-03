<?php  

require_once "resource/db.php";

/********** Testimonios *************/

/* select all */

function traerTestimoniosGral(){

    $db = Conectar();

    $sql = "SELECT * FROM testimonios_gral ORDER BY id_test DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo "
        <div class='row'>
        <h1>".$data->nombre."</h1>
        <p>".$data->testimonio."</p>
        <br>
        <img src='../upload/".$data->gravatar."'><br>
        <p>
        <a class='btn' href='delete_testimonios_gral.php?id=".$data->id_test."' onClick='return confirmar();'>Eliminar</a>
        <a class='btn' href='edit_testimonios_gral.php?id=".$data->id_test."'>Editar</a>
        </p>
        <hr>
        </div>
        ";

    }

    return $resultado;
}

/* insert */

function insertTestimoniosGral(){

    $db = Conectar();

    $nombre = $_POST["nombre"];
    $testimonio = $_POST["testimonio"];
    $gravatar = $_FILES['gravatar']['name'];
    $background = "";

    if(!empty($_FILES["background"]["name"])):
      $filename = md5($_FILES["background"]["name"]);
      $extension = substr($_FILES["background"]["name"], -4);
      $background = $filename.$extension;
      move_uploaded_file($_FILES["background"]['tmp_name'], '../upload/'.$filename.$extension);
    endif;


    move_uploaded_file($_FILES['gravatar']['tmp_name'], '../upload/'.$_FILES['gravatar']['name']);

    $sql = ("INSERT INTO testimonios_gral (nombre, testimonio, gravatar,background) VALUES ('$nombre','$testimonio', '$gravatar','$background')");
    $resultado = $db->query($sql);
    
    if (!$resultado){

        echo "Error al guardar";
    
    }else{
      echo "<script language='JavaScript'>";
        echo "location = 'testimonios_gral.php'";
        echo "</script>";
        // Header ("Location: testimonios_gral.php");
    }
   
    return $resultado;
}

/* edit */

function editTestimoniosGral(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM testimonios_gral WHERE id_test = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_testimonio_gral.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_test" value="'.$id.'">

   <label for="Usuario">Nombre:</label><br>
        <input class="campo-login" type="text" name="nombre" value="'.$data->nombre.'">
        <br>
        <label for="Usuario">Testimonio:</label><br>
        <textarea name="testimonio"  class="campo-login-textarea" id="" cols="30" rows="10">'.$data->testimonio.'</textarea>
        <br>
        <br>
        <img src="../upload/'.$data->gravatar.'" width="165"><br>
        <input id="campo-imagen" type="file" name="gravatar" value="'.$data->gravatar.'"><br>
        <img src="../upload/'.$data->background.'" width="165"><br>
        <input id="campo-imagen" type="file" name="gravatar" value="'.$data->background.'"><br>
        <br>
        <br>
     
    <input class="btn" id="send" type="submit" name="submit" value="Guardar">
    </form>
  ';


}

/* delete */

function deleteTestimoniosGral(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM testimonios_gral WHERE id_test = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'testimonios_gral.php'";
        echo "</script>";
    // header ("Location: testimonios_gral.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>