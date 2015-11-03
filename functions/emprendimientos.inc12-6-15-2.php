<?php  
/************ Emprendimiento *******************/

/* select all */

function traerEmprendimiento(){

    require("galeria_emprendimiento.inc.php");
    $db = Conectar();

    $sql = "SELECT * FROM emprendimientos ORDER BY id_em DESC";
    $resultado = $db->query($sql);


    while ($data = $resultado->fetch_object()):

        echo "
        <section class='site-emprendimiento clearfix SombraEmprendiminetos2' id='".$data->id_em."'>
        <div class='hideme'>
        <div class='row Contenedor-Emprender'>
        <h2>".$data->titulo."</h2>
         <img src='upload/".$data->banner."' width='1079' height='216'/>
        </div>
        </section>

        <section class='VisitarTienda clearfix'>
        <div class='row Contenedor-Emprender'> ";
        if(empty($data->video)):
             echo "<article class='Text-TiendaFundacion' style='width:100%;'>
            <p>".$data->detalle."</p>
            </article>
            </div>
            </section>
            <br><br>
            ";

        else:
            echo "<article class='Text-TiendaFundacion'>
            <p>".$data->detalle."</p>";
            
            

            echo "
            </article>
            <div class='VideoEmprendimiento'>
            <iframe width='600' height='407' src='https://www.youtube.com/embed/".$data->video."?rel=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe>
            </div>     
            </div>
            </section>
            <br><br>
            ";
        endif;
        
        traerGaleriaEmprendimiento($data->id_em);


    endwhile;
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


?>