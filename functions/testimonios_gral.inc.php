<?php  

/********** Testimonios *************/

/* select all */

function traerTestimoniosGral(){

    $db = Conectar();

    $sql = "SELECT * FROM testimonios_gral ORDER BY id_test DESC";
    $resultado = $db->query($sql);
    
    while ($data = $resultado->fetch_object()){
        echo '
        
         <div class="swiper-slide testimonio_1" >
            <input type="hidden" value="'.$data->background.'" >
           <div class="content_background">
             <input type="hidden" value="'.$data->id_test.'">
            <div class="Contenido-Testimonmios row">
            <h1 class="TituloContenidoTestimonio">Testimonios</h1>
            <div style="background:url(upload/'.$data->gravatar.');" class="testimonio-picture"></div>
                
                <div class="declaracion clearfix">
                    <p class="clearfix"><span class="icon comillas"></span>'.$data->testimonio.'
                    <span class="LineaComillas"><img class="comillasCerradas" src="resources/images/iconsComillas.png" width="34" height="24"/></span></p>
                <h1>'.$data->nombre.'</h1>
                </div>
            </div>
           </div>
        </div>
        ';

    }

    return $resultado;
}
?>