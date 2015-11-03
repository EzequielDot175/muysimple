<?php  
function traerGaleriaCapacitacion(){

    $db = Conectar();

    $sql = "SELECT * FROM galeria_capacitacion ORDER BY id_galc DESC";
    $resultado = $db->query($sql);

    while($data = $resultado->fetch_object()){

        echo "
        <div class='swiper-slide FotoCapacitacion'>
            <div class='row Col_1Mobile'>
            <img class='slide-img' src='upload/".$data->imagen."'>
                <a href='#CapacitarseEsMuySimple' title='Capacitacion'><div class='slider-data DiplomaCapacitacion'><h1>".$data->titulo."</h1>
                    <p class='SacarSeccionCelular'>".$data->descripcion."</p>
                        <button type='button 'class='ver-novedades tienda manicura-data SacarSeccionCelular'>Más información</button>
                </div></a>
                
           </div>
         </div>
        ";
    }
    
    return $resultado;
}

?>