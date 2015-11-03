<?php  

/********** Suscripcion ***********/

function traerTestimonios(){
	$db = Conectar();

	$id = $db->real_escape_string($_GET['id']);


	$sql = "SELECT * FROM testimonios WHERE id_cap ='$id'";
	$resultado = $db->query($sql);

    echo '
    <article class="CapacitacionTestiomonio clearfix SacarSeccionCelular">
    <h1>Testimonios</h1><div class="linea_titulos"></div>

    ';

	while($data = $resultado->fetch_object()){
        $avatar = (empty($data->gravatar) ? 'img/users_icon.png' : 'upload/'.$data->gravatar);

		echo '
        <figure class="MediaAvatar col">
        <div class="box-perfil-testimonio">
            <a href="#" title="#title">
            <img  src="'.$avatar.'" width="43" />
            </a>
        </div>
        </figure>
        <div class="MediaComentarios">
        <div class="icon PuntaMediaComentarios"></div>
        <h2>'.$data->nombre.'</h2>
        <a href="#title" title="#">
         '.$data->testimonio.'
        </a>
        </div>
        ';
	}

        echo '</article>';

	return $resultado;
}


?>