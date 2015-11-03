<?php
require "resource/db.php";

function insertIntegrantes(){

    $db = Conectar();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $puesto = $_POST['puesto'];
    $email = $_POST['email'];
    $telefono = (   !empty($_POST['telefono']) ? $_POST['telefono'] : null  );
    $image = $_FILES['image']['name'];
    
   
    move_uploaded_file($_FILES['image']['tmp_name'], '../upload/'.$_FILES['image']['name']);
     

    $sql = "INSERT INTO integrantes SET telefono = '$telefono' ,nombre='$nombre', apellido='$apellido', puesto='$puesto', email='$email', img='$image'";
    $resultado = $db->query($sql);
    
    if (!$resultado){

         echo "<script language='JavaScript'>";
        echo "alert('Error al guardar.');";
        echo "</script>";
    
    }else{
        echo "<script language='JavaScript'>";
        echo "window.location.href = 'integrantes.php'";
        echo "</script>";
    }
}

function deleteIntegrantes(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM integrantes WHERE id = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'integrantes.php'";
        echo "</script>";
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}


?>