<?php  

require "resource/db.php";

/************ Tienda productos *******************/

/* select all */

function traerProductos(){

    $db = Conectar();

    $sql = "SELECT * FROM tienda_prod ORDER BY id_prod DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo '
        <div class="row">
        <h1>'.$data->detalle.'</h1>
        <img src="../upload/'.$data->imagen.'">
        <br>
        <p>
        <a class="btn" href="delete_tienda_prod.php?id='.$data->id_prod.'" onClick="return confirmar();">Eliminar</a>
        <a class="btn" href="edit_tienda_prod.php?id='.$data->id_prod.'">Editar</a>
        </p>
        <hr>
        </div>
        ';

    }

    return $resultado;
}

/* insert */

function insertProductos(){

    $db = Conectar();


    $detalle = $_POST['detalle'];
    $imagen = $_FILES['imagen']['name'];

    move_uploaded_file($_FILES['imagen']['tmp_name'], '../upload/'.$_FILES['imagen']['name']);

    $sql = ("INSERT INTO tienda_prod (detalle, imagen) VALUES ('$detalle', '$imagen')");
    $resultado = $db->query($sql);

    
    if (!$resultado){

        echo "Error al guardar";
        echo '<br>';
    
    }else{
      echo "<script language='JavaScript'>";
        echo "location = 'tienda_prod.php'";
        echo "</script>";
        // Header ("Location: tienda_prod.php");
    }
    return $resultado;

}

/* edit */

function editProducto(){

  $db = Conectar();

  $id = $_GET['id'];


  $sql = "SELECT * FROM tienda_prod WHERE id_prod = '$id'";
  $resultado = $db->query($sql);
  $data = $resultado->fetch_object();


  echo '
    <form action="functions/updates/update_tienda_prod.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_prod" value="'.$id.'">
    
     <label for="Usuario">Nombre del producto:</label><br>
        <input class="campo-login" type="text" name="detalle" value="'.$data->detalle.'">
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

function deleteProducto(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM tienda_prod WHERE id_prod = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'tienda_prod.php'";
        echo "</script>";
    // header ("Location: tienda_prod.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>