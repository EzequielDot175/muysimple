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
                    <div class='fecha-mesDia'>".date('d/m', strtotime($data->fecha))."</div>
                    <div class='fecha-ano'>".date('Y', strtotime($data->fecha))."</div>
                </aside> 
                <p class='parrafo-nota'>".$data->titulo."</p>
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
             <a href='#''><span class='icon vineta nota-vineta'></span></a>
        </article>
        ";

    }

    return $resultado;
}

?>