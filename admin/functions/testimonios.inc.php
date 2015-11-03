<?php  

require_once "resource/db.php";

/********** Testimonios *************/

/* select all */

function traerTestimonios(){

    $db = Conectar();

    $sql = "SELECT * FROM testimonios ORDER BY id_test";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo "
        <div class='row'>
        <h1>".$data->nombre."</h1>
        <p>".$data->testimonio."</p>
        <p> <img src='../upload/".$data->gravatar."' width='165'></p>
        <br>
        </div>
        ";

    }

    return $resultado;
}

/* insert */

function insertTestimonio(){

    $db = Conectar();


    $id = $db->real_escape_string((int)$_GET['id']);
    $nombre = $db->real_escape_string($_POST["nombre"]);
    $testimonio = $db->real_escape_string($_POST["testimonio"]);
    $gravatar = $db->real_escape_string($_FILES["gravatar"]['name']);

    move_uploaded_file($_FILES['gravatar']['tmp_name'], '../upload/'.$_FILES['gravatar']['name']);

    $sql = "INSERT INTO testimonios SET nombre = '$nombre', testimonio = '$testimonio', gravatar = '$gravatar', id_cap = '$id'";
    $resultado = $db->query($sql);
    
    if (!$resultado){

        echo "Error al guardar";
    
    }else{
        echo "<script language='JavaScript'>";
        echo "location = 'capacitacion.php'";
        echo "</script>";
    }
    return $resultado;
}

?>