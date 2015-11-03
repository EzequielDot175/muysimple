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
    echo"<div id='divCarousel'>
   <section class='slider_galeria'>
        <div class='Galeriaswiper-container'>
            <div id='divIzquierda'></div>
            <div id='divCentro'>
                <ul>
                    
                    
               ";
        
     while ($data = $resultado->fetch_object()){
      
       echo "
       <li><img src='upload/".$data->galeria."'></li>
       ";

    }

    echo  "</ul>
            </div>
            <div id='divDerecha'></div>
            <div class='clsSalto'></div>
            </div>
            </div>
        </div>";

    return $resultado;

}

?>