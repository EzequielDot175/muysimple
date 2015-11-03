<?php  
function traerGaleriaEmprendimiento($sid = ""){

    $db = Conectar();

    if(!empty($sid)):
        $id = $db->real_escape_string((int)$sid);
    else:
        $id = $db->real_escape_string((int)$_GET['id']);
    endif;

    $sql = "SELECT * FROM galeria_emprendimiento WHERE id_em ='$id'";
    $resultado = $db->query($sql);
    echo "
     <section class='slider_galeria'>
        <div class='Galeriaswiper-container'>
        <button type='button' class='arrow-left3 slider-button left'>
        <span class='icon sliderLeft'></span>
        </button> 
        <button type='button' class='arrow-right3 slider-button right'>
        <span class='icon sliderRight'></span>
        </button>
        <div class='swiper-wrapper'>
    ";
        
     while ($data = $resultado->fetch_object()){
      
      if(!empty($data->galeria)):
         echo "
        <div class='swiper-slide'>
        <div class='title'><a href='upload/".$data->galeria."' rel='lytebox[imagen]''><img src='timthumb.php?src=upload/".$data->galeria."&h=266&q=100&a=c' width='241' height='167'/></a></div>
        </div>
       ";
      endif;

    }

    echo "</div>
        <div class='pagination'></div>
        </div>
        </section>";

    return $resultado;

}

?>