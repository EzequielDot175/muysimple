<?php  

/************ Novedades de la Tienda ***********/

/* select all */

function traerNovedadesTienda(){

    $db = Conectar();

    if(isset($_GET['tienda-novedades'])):
        $resultado = newShopPage();
    else:
        $sql = "SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC LIMIT 6";
        $resultado = $db->query($sql);
        $resultado = $resultado->fetch_all(MYSQLI_ASSOC);
    endif;


    foreach($resultado as $k => $data):
        $data = (Object)$data;

        if($data->imagen!=""){

        echo "
         <article class='NotasTienda'>
        <header>
                <aside class='fecha'>
                    <div class='fecha-mesDia'>".date('d M', strtotime($data->fecha))."</div>
                    <div class='fecha-ano'>".date('Y', strtotime($data->fecha))."</div>
                </aside> 
                <h2 class='TituloNotaDetalle'><p class='parrafo-nota'>".$data->titulo."</p></h2>
             </header>
             <img src='upload/".$data->imagen."'/>
             
             <a href='novedades-detalle_tienda.php?id=".$data->id_novtienda."'><span class='icon vineta nota-vineta'></span></a>
        </article>
        ";}else{
              echo "
         <article class='NotasTienda'>
        <header>
                <aside class='fecha'>
                    <div class='fecha-mesDia'>".date('d M', strtotime($data->fecha))."</div>
                    <div class='fecha-ano'>".date('Y', strtotime($data->fecha))."</div>
                </aside> 
                <h2 class='TituloNotaDetalle'><p class='parrafo-nota'>".$data->titulo."</p></h2>
             </header>
             
            
             <a href='novedades-detalle_tienda.php?id=".$data->id_novtienda."'><span class='icon vineta nota-vineta'></span></a>
        </article>
        ";

        }
       

    endforeach;

    return $resultado;
}


function newsShopPaginator(){
    /**
     * Odio hacer codigo procedural................................
     * Ezequiel;
     */
    $sql = "SELECT COUNT(id_novtienda) as cantidad FROM novedades_tienda";
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

function newShopPage(){
/**
    * Odio hacer codigo procedural................................
    * Ezequiel;
*/
    $page = ( isset($_GET['tienda-novedades']) ? $_GET['tienda-novedades'] : 1 );
    $offset =  ($page > 1 ? ($page - 1)*6 : 0);
    $sql = "SELECT * FROM novedades_tienda ORDER BY id_novtienda DESC LIMIT ".$offset.",6";
    $db = Conectar();
    $result = $db->query($sql);
    $result = $result->fetch_all(MYSQLI_ASSOC);

    return $result;
}

?>