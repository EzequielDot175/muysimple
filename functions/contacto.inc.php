<?php  
require "resource/db.php";

function traerContactos(){
$db = Conectar();

$sql = "SELECT * FROM contacto ORDER BY id_contact DESC";
$resultado = $db->query($sql);

 while($data = $resultado->fetch_object()){

 	echo "
        <div class='row'>
		   <p><strong>Nombre y apellido:</strong> ".$data->nombre_apellido."</p>
	     <p><strong>Telefono:</strong> ".$data->telefono."</p>
	     <p><strong>E-mail:</strong> ".$data->email."</p>
	     <p><strong>Empresa:</strong> ".$data->empresa."</p>
       <p><strong>Comentario:</strong> ".$data->comentario."</p>
	     <br>
	     <p>
	     <a class='btn' href='delete_contacto.php?id=".$data->id_contact."' onClick='return confirmar();'>Eliminar</a>
	     </p>
	     <hr>
	     </div>
		";
 }
}

 /* delete */
function deleteContacto(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM contacto WHERE id_contact = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'contacto.php'";
        echo "</script>";
    // header ("Location: emprendimientos.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>