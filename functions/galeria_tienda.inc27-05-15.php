<?php  
function traerGaleriaTienda(){

    $db = Conectar();

    $sql = "SELECT * FROM galeria_tienda ORDER BY id_galt DESC";
    $resultado = $db->query($sql);

    while($data = $resultado->fetch_object()){

        echo "
        <div class='swiper-slide FondoSlideTienda_1'>
        <img class='' src='upload/".$data->imagen."'>
         </div>";

    }

}

?>