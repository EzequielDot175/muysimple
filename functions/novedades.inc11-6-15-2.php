<?php 

/************** Novedades ***************/

/* select all */

function traerNovedades(){

	$db = Conectar();

	$sql = "SELECT * FROM novedades ORDER BY id_novedad DESC Limit 4";
	$resultado = $db->query($sql);

	while ($data = $resultado->fetch_object()){

		echo '
		<article class="notas col_1 PrimeraNota">
        <header class="cabeza-notas">
        <aside class="fecha">
        <div class="fecha-mesDia">'.date("d M", strtotime($data->fecha)).'</div>
        <div class="fecha-ano">'.date("Y", strtotime($data->fecha)).'</div>
        </aside>
        <h2><a href="novedades-detalle.php?id='.$data->id_novedad.'">'.$data->titulo.'</a></h2>
       	</header>
        <p>'.$data->detalle.'</p>
        <img src="upload/'.$data->imagen.'" width="310" height="209">
        <div class="nota-share">
        <a href="#" title="Compartir en Facebook" target="_blank" rel="nofollow" class="fblink">
        <span class="icon smFbBlanco"></span>
        </a>
        <a href="#" title="Compartir en Twiter" target="_blank" rel="nofollow" class="twlink">
        <span class="icon smTwBlanco"></span>
        </a>
        </div>
        <a href="novedades-detalle.php?id='.$data->id_novedad.'"><span class="icon vineta nota-vineta"></span></a>
        </article>

		';

	}

	return $resultado;
}

/*** gettter ***/

function getNovedades(){

   $db = Conectar();

   $id = $db->real_escape_string($_GET['id']);

   $sql = "SELECT * FROM novedades WHERE id_novedad = '$id'";
   $resultado = $db->query($sql);
   $data = $resultado->fetch_object();

    echo '
	<article class="notas NovedadesDetalleEncabezado col">
    <header class="NovedadesDetallecabeza-notas">
    <aside class="fecha">
    <div class="fecha-mesDia">'.date("d M", strtotime($data->fecha)).'</div>
    <div class="fecha-ano">'.date("Y", strtotime($data->fecha)).'</div>
    </aside>
    <h2 class="TituloNotaDetalle"><a href="#" title="#title">'.$data->titulo.'</a></h2>
    </header>
    <p>'.$data->detalle.'</p>
    <span class="LinkVolver SacarSeccionCelular"><a href="novedades.php" title="Volver">«Volver</a></span>
    </article>	
    <article class="NovedadImagen col">
    <img src="upload/'.$data->imagen.'" height="350">
    </article>
    ';

    return $resultado;
}

function getNovedadest(){

   $db = Conectar();

   $id = $db->real_escape_string($_GET['id']);

   $sql = "SELECT * FROM novedades_tienda WHERE id_novtienda = '$id'";
   $resultado = $db->query($sql);
   $data = $resultado->fetch_object();

    echo '
    <article class="notas NovedadesDetalleEncabezado col">
    <header class="NovedadesDetallecabeza-notas">
    <aside class="fecha">
    <div class="fecha-mesDia">'.date("d M", strtotime($data->fecha)).'</div>
    <div class="fecha-ano">'.date("Y", strtotime($data->fecha)).'</div>
    </aside>
    <h2 class="TituloNotaDetalle"><a href="#" title="#title">'.$data->titulo.'</a></h2>
    </header>
    <p>'.$data->detalle.'</p>
    <span class="LinkVolver SacarSeccionCelular"><a href="novedades.php" title="Volver">«Volver</a></span>
    </article>  
    <article class="NovedadImagen col">
    <img src="upload/'.$data->imagen.'" height="350">
    </article>
    ';

    return $resultado;
}

?>








