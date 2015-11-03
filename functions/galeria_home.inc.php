<?php  
function traerGaleriaPrincipal(){
    
	$db = Conectar();

	$sql = ("SELECT * FROM galeria_principal ORDER BY id_gal DESC");
  	$resultado = $db->query($sql);

   	while($data = $resultado->fetch_object()){

		echo '

        <div class="swiper-slide MobileSliderEmprendimiento_3">
        <img class="img_full_width" src="upload/'.$data->imagen.'">
        <div class="row">
        <a href="LaTienda.php"><div class="slider-data PlacaTienda"><h1 class="'.bannerIndexLenght($data->titulo).'">'.$data->titulo.'</h1>
        <p class="SacarSeccionCelular">'.$data->descripcion.'</p>
        </div>
        </a>
        </div>
        </div>

		';
	}
	return $resultado;

    // 
}


function bannerIndexLenght($str){
    $lenght = strlen($str);

   if($lenght > 15 && $lenght < 25):
    return 'fz36';
   elseif ($lenght > 25 && $lenght < 45):
    return 'fz31';

   elseif ($lenght > 45):
    return 'fz28';
   
   endif;
}

?>