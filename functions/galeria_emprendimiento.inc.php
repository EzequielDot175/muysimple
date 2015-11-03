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
    
    echo"<div class='divCarousel'>
   
            <div class='divIzquierda'></div>
            <div class='divCentro'>
                <ul>
                    
                    
               ";
        
     while ($data = $resultado->fetch_object()){
        
       echo "
       <li><a href='' class='expandGalery'><img class='img_emp' src='upload/".$data->galeria."' /></a>'</li>
       ";

    }

    echo  "</ul>
            </div>
            <div class='divDerecha'></div>
            <div class='clsSalto'></div>
           
        </div>";

    return $resultado;

}

?>