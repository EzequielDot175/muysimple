<?php 

/************** Novedades ***************/

/* select all */

function traerNovedades(){


    if(isset($_GET['pagina-novedades'])):
        $fetch = newsPage();
   
    else:
    	$db = Conectar();

    	$sql = "SELECT * FROM novedades ORDER BY id_novedad DESC Limit 6";
    	$resultado = $db->query($sql);

        $fetch = $resultado->fetch_all(MYSQLI_ASSOC);
    endif;
    
    

    foreach($fetch as $k => $v):
        $obj = (Object)$v;

       
        $html = '<article class="notas ">
        <header class="cabeza-notas">
        <aside class="fecha">
        <div class="fecha-mesDia">'.date("d M", strtotime($obj->fecha)).'</div>
        <div class="fecha-ano">'.date("Y", strtotime($obj->fecha)).'</div>
        </aside>
        <h2><a href="novedades-detalle.php?id='.$obj->id_novedad.'">'.$obj->titulo.'</a></h2>
        </header>
        <p>'.$obj->detalle.'</p>
        '.(!empty($obj->imagen) ? '<img src="upload/'.$obj->imagen.'">' : '' ).'
        
        <div class="nota-share">
        <a href="http://www.facebook.com/sharer.php?u=http://www.muysimple.org/novedades-detalle.php?id='.$obj->id_novedad.'&t='.$obj->titulo.'" target="_blank"title="Compartir en Facebook" target="_blank" rel="nofollow" class="fblink">
        <span class="icon smFbBlanco"></span>
        </a>
        <a href="'.Utils::twitter($obj->titulo, "fmuysimple").'">
        <span class="icon smTwBlanco"></span>
        </a>
        </div>
        <a href="novedades-detalle.php?id='.$obj->id_novedad.'"><span class="icon vineta nota-vineta"></span></a>
        </article>';
        
        // if($k % 4 == 0 && $k > 0):
        //     $html .= "<div style='clear:both;'></div>";
        // endif;
        echo($html);



    endforeach;


	return $resultado;
}

/*** gettter ***/

function getNovedades(){

   $db = Conectar();

   $id = $db->real_escape_string($_GET['id']);

   $sql = "SELECT * FROM novedades WHERE id_novedad = '$id'";
   $resultado = $db->query($sql);
   $data = $resultado->fetch_object();

    if (($data->video=="")&&($data->imagen!="")){
    echo '
	<article class="notas NovedadesDetalleEncabezado col notas_detalle">
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
    <article class="NovedadImagen  col right">
    <img src="upload/'.$data->imagen.'" height="350">
    </article>
    ';}

     if  (($data->video=="")&&($data->imagen=="")){
    echo '
    <article class="notas NovedadesDetalleEncabezado col notas_detalle">
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
    </article>
    ';}

    if ($data->video != ""){
    echo '
    <article class="notas NovedadesDetalleEncabezado col notas_detalle">
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
    <iframe width="450" height="350" src="https://www.youtube.com/embed/'.$data->video.'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </article>
    ';}

    return $resultado;
}

function getNovedadest(){

   $db = Conectar();

   $id = $db->real_escape_string($_GET['id']);

   $sql = "SELECT * FROM novedades_tienda WHERE id_novtienda = '$id'";
   $resultado = $db->query($sql);
   $data = $resultado->fetch_object();

     if (($data->video=="")&&($data->imagen!="")){
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
    ';}

     if  (($data->video=="")&&($data->imagen=="")){
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
    </article>
    ';
     }

     if ($data->video != ""){
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
    <iframe width="450" height="350" src="https://www.youtube.com/embed/'.$data->video.'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </article>
    ';}


    return $resultado;
}



function newsPaginator(){
    /**
     * Odio hacer codigo procedural................................
     * Ezequiel;
     */
    $sql = "SELECT COUNT(id_novedad) as cantidad FROM novedades";
    $db = Conectar();
    $cantidad = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
    $cantidad = $cantidad[0]['cantidad'];

    /**
     * Requerimientos minimos
     * Min: 6
     */
    $min = 6;

 

    $obj = new stdClass();
    $obj->{'hasPages'} = false;
    $obj->{'pages'} = 0;

    if($cantidad > $min):
        $obj->hasPages = true;
        $cantidad = $cantidad / $min;
        $obj->pages = round( (is_float($cantidad) ? $cantidad +1 : $cantidad ) );
    endif;

    return $obj;

}

function newsPage(){
/**
    * Odio hacer codigo procedural................................
    * Ezequiel;
*/
    $page = ( isset($_GET['pagina-novedades']) ? $_GET['pagina-novedades'] : 1 );
    $offset =  ($page > 1 ? ($page - 1)*6 : 0);
    $sql = "SELECT * FROM novedades ORDER BY id_novedad DESC LIMIT ".$offset.",6";
    $db = Conectar();
    $result = $db->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);

    return $result;
}

?>








