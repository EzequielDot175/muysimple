<?php  
require_once "resource/db.php";

/********** Suscripcion ***********/

/* select all */

function Suscripcion(){

	$db = Conectar();

	$sql = "SELECT * FROM suscripcion ORDER BY id_sus";
	$resultado = $db->query($sql);

	while($data = $resultado->fetch_object()){
		echo "
		<div class='row'>
       <p><strong>Nombre y apellido:</strong> ".$data->nombre_apellido."</p>
        <p><strong>E-mail:</strong> ".$data->email."</p>
        <br>
        <p><a class='btn' href='delete_suscriptor.php?id=".$data->id_sus."' onClick='return confirmar();'>Eliminar</a></p><br>
        <hr>

		</div>
		";
	}
}

/* delete */
function deleteSuscripcion(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM suscripcion WHERE id_sus = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
    echo "<script language='JavaScript'>";
        echo "location = 'suscripcion.php'";
        echo "</script>";
    // header ("Location: suscripcion.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>