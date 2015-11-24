|<?php  
function traerGaleriaCapacitacion(){

    $db = Conectar();

    $sql = "SELECT * FROM galeria_capacitacion ORDER BY id_galc DESC";
    $resultado = $db->query($sql);
    


    while($data = $resultado->fetch_object()){

      

        $link = ( $data->capacitacion_id > 0  ?  "./curso_detalle.php?id=".$data->capacitacion_id : 'capacitacion.php' );
        // echo('<pre>');


        // die();

       
        $html = "
        <div class='swiper-slide FotoCapacitacion'>
            <div class='row Col_1Mobile' style='height:100%'>
            <img style='height:100%; min-width:1350px;' class='slide-img' src='upload/".$data->imagen."'>";

        $html .= "<a href='".$link."' title='Capacitacion'><div class='slider-data PlacaTienda '><h1>".$data->titulo."</h1>
                    <p class='SacarSeccionCelular'>".$data->descripcion."</p>
                        <button type='button'  class='ver-novedades tienda manicura-data SacarSeccionCelular'>Más información</button>
                </div></a>";

        $html .= "</div>
            </div>";
        echo $html;
    }
    
    return $resultado;
}

?>