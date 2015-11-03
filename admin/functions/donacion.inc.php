<?php 

require_once "resource/db.php";

/*** select all ***/
function traerDonacion(){

	$db  = Conectar();


	$sql = "SELECT * FROM donacion ORDER BY id_dona DESC";
	$resultado = $db->query($sql);

	while($data = $resultado->fetch_object()){

		// <p><strong>Fecha:</strong> ".date('d-m-Y',strtotime($data->fecha))."</p>

		echo " 
        <div class='row'>
		<p><strong>Nombre y apellido:</strong> ".$data->nombre_apellido." Fecha: ".$data->fecha."</p>
	    <p><strong>Telefono:</strong> ".$data->telefono."</p>
	     <p><strong>E-mail:</strong> ".$data->email."</p>
	     <p><strong>Empresa:</strong>: ".$data->empresa."</p>
	     <p><strong>Comentario:</strong>: ".$data->comentario."</p>
	     <br>
	     <p>
	     <a class='btn' href='delete_donacion.php?id=".$data->id_dona."' onClick='return confirmar();'>Eliminar</a>
	     </p>
	     <hr>
	     </div>
		";
	}

	return $resultado;
} 

/* delete */

function deleteDonacion(){

  $db = Conectar();

  $id = $db->real_escape_string($_GET['id']);

  $sql = "DELETE FROM donacion WHERE id_dona = '$id'";
  $resultado = $db->query($sql);

  if($resultado){
  	echo "<script language='JavaScript'>";
    echo "location = 'donacion.php'";
    echo "</script>";
    // header ("Location: donacion.php ");
  }
  else {
    echo 'Error al eliminar';
  }

  return $resultado;

}

?>