<?php  

/************ Novedades de la Tienda ***********/

/* select all */

function traerNovedadesTienda(){

    $db = Conectar();

    $sql = "SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo "
         <article class='NotasTienda col_1 col'>
        <header>
                <aside class='fecha'>
                    <div class='fecha-mesDia'>".date('d M', strtotime($data->fecha))."</div>
                    <div class='fecha-ano'>".date('Y', strtotime($data->fecha))."</div>
                </aside> 
                <h2 class='TituloNotaDetalle'><p class='parrafo-nota'>".$data->titulo."</p></h2>
             </header>
             <img src='upload/".$data->imagen."' width='310' height='209'/>
             <div class='nota-share'>
                <a href='#' title='#' target='_blank' rel='nofollow' class='fblink'>
                 <span class='icon smFbBlanco'></span>
                </a>
                <a href='#' title='#' target='_blank' rel='nofollow' class='twlink'>
                <span class='icon smTwBlanco'></span>
                </a>
             </div>
             <a href='novedades-detalle_tienda.php?id=".$data->id_novtienda."'><span class='icon vineta nota-vineta'></span></a>
        </article>
        ";

    }

    return $resultado;
}

?>