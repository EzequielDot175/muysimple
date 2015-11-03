<?php  
/************ Emprendimiento *******************/

/* select all */

function traerEmprendimiento(){

    require_once('admin/class/class.galeria.php');
    require("galeria_emprendimiento.inc.php");
    $db = Conectar();

    $sql = "SELECT * FROM emprendimientos ORDER BY id_em DESC";
    $resultado = $db->query($sql);


    while ($data = $resultado->fetch_object()){
        
        echo "
        <section class='site-emprendimiento clearfix SombraEmprendiminetos2' id='".$data->id_em."'>
        <div class=''>
        <div class='row Contenedor-Emprender'>
        <h2>".$data->titulo."</h2>
         <img src='upload/".$data->banner."' width='1079' />
        </div>
        </div>
        </section>

        <section class='VisitarTienda clearfix'>
            <div class='row Contenedor-Emprender'>
            <article class='Text-TiendaFundacion' style='width:100%;'>
                    <p>".$data->detalle."</p>
                </article>
            </div>
        </section>";

       


    Galeria::get($data->id_em);

    if(!empty($data->video)):
    
        echo("<section class='VisitarTienda clearfix'>
                <div class='row Contenedor-Emprender'>
                <article class='Text-TiendaFundacion' style='width:100%;'>
                    <div class='VideoEmprendimiento'>
                    <iframe width='560' height='315' src='".youTubeLink($data->video)."' frameborder='0' allowfullscreen></iframe>
                    </div> 
                    </article>
                </div>
            </section>");
    endif;
       
    // traerGaleriaEmprendimiento($data->id_em); 
    } 
}

function getEmprendimiento(){

    $db = Conectar();

    $id = $db->real_escape_string($_GET['id']);

    $sql = "SELECT * FROM emprendimientos WHERE id_em = '$id'";
    $resultado = $db->query($sql);
    $data = $resultado->fetch_object();

    echo "

        <section class='site-emprendimiento clearfix SombraEmprendiminetos2' id='".$data->id_em."'>
        <div id='here'></div>
        <div class='row Contenedor-Emprender'>
        <h2>".$data->titulo."</h2>
         <img src='upload/".$data->banner."' width='1000'/>
        </div>
        </section>

        <section class='VisitarTienda clearfix'>
        <div class='row Contenedor-Emprender'>
        <article class='Text-TiendaFundacion'>
        <p>".$data->detalle."</p>";
        
        $link = str_replace("watch?v=", "/embed/", $data->video);

        echo "
        </article>
        <div class='VideoEmprendimiento'>
         <iframe width='540' height='350' src=".$link." frameborder='0'allowfullscreen></iframe>
        </div>     
        </div>
        </section>
        </div>
        ";

}

 
function youTubeLink($str){
    preg_match('/v=\w+/', $str, $matches);
    $match = str_replace("v=", "", $matches[0]);
    return 'https://www.youtube.com/embed/'.$match;
 
}


?>