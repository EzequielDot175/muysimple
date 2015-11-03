<?php  
/************ Revista *******************/

/* select all */

function traerRevista(){

    $db = Conectar();

    $sql = "SELECT * FROM revista ORDER BY id_revista DESC";
    
    $a = 0;
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){
    $a++;
    if($a == $data){

        echo '
        <article class="noticia">
        <div  class="noticia-data NoticiaDestacada">
            <div class="clearfilx">
                <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title" class="noticia-categoria">Revista</a>
                    <time datetime="#">| '.date("d M Y", strtotime($data->fecha)).'</time>
            </div>
        
        <h1 class="noticia-titulo">
            <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title">
            '.$data->detalle.'
            </a>
        </h1>
        
        <p class="noticia-fuente">
            
        </p>
        </div>';
        $link = str_replace("watch?v=", "/embed/", $data->url_video);

        if(!empty($link)):
            echo '
            <figure class="noticia-imagen">
                    <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title">
                    <iframe width="337" height="281" src="'.$link.'" frameborder="0" allowfullscreen></iframe>
                    </a>
                </figure>';
        endif;
        // VEO CODIGO MUERTO

        echo '
        <div class="noticiasMedia">
        <a href="#" title="Compartir en Facebook" rel="nofollow" class="social-noticia fblink"> 
            <span class="icon smFbBlanco"></span>
            </a>
         <a href="#" title="Compartir en Twitter" rel="nofollow"  class="social-noticia twlink">
            <span class="icon smTwBlanco"></span>
            </a>
        </div>
        </article>
        
        ';
        }else{

        echo '

        <article class="noticia">
            
        <div  class="noticia-data">
            <div class="clearfilx">
                <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title" class="noticia-categoria">Revista</a>
                    <time datetime="#">| '.date("d M Y", strtotime($data->fecha)).'</time>
            </div>
        
        <h1 class="noticia-titulo">
            <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title">'.$data->detalle.'</a>
        </h1>
        
        <p class="noticia-fuente">
            
        </p>
        </div>';

        $link = str_replace("watch?v=", "/embed/", $data->url_video);

        echo '
        <figure class="noticia-imagen">
                <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#">
                    <iframe width="162" height="138" src="'.$link.'" frameborder="0" allowfullscreen></iframe>
                </a>
            </figure>
        <div class="noticiasMedia">
        <a href="#" title="Compartir en Facebook" rel="nofollow" class="social-noticia fblink"> 
            <span class="icon smFbBlanco"></span>
            </a>
         <a href="#" title="Compartir en Twitter" rel="nofollow"  class="social-noticia twlink">
            <span class="icon smTwBlanco"></span>
            </a>
        </div>
        </article>';


    }
}

    return $resultado;
}





/***** getter ***************************/

function getRevista(){

   $db = Conectar();

   $id = $db->real_escape_string($_GET['id']);

    $sql = "SELECT * FROM revista WHERE id_revista = '$id'";
    $resultado = $db->query($sql);
    $data = $resultado->fetch_object();
     
   echo '
        <article class="noticia EncabezadoTitular col">
        <div  class="clearfix Col_1Mobile">
            <div class="clearfilx">
                <a href="Revista.php" title="#title" class="noticia-categoria">Revista</a>
                    <time datetime="#">| '.date("d M Y", strtotime($data->fecha)).'</time>
            </div>
        
        <h1 class="DetaleNoticia-titulo">
            <a href="#" title="#title">
            '.$data->detalle.'
            </a>
        </h1>
        
        <p class="noticia-fuente"></p>
        <a href="Revista.php?id='.$data->id_revista.'" title="Volver" class="LinkVolver SacarSeccionCelular">«Volver</a>
        
        </div>
        <div class="noticiasMedia RevistaNoticiasMedia">
        <a href="#" title="Compartir en Facebook" class="fblink" target="_blank" rel="nofollow" class="social-noticia"> 
            <span class="icon smFbBlanco"></span>
            </a>
         <a href="#" title="Compartir en Twitter" class="twlink" target="_blank" rel="nofollow"  class="social-noticia">
            <span class="icon smTwBlanco"></span>
            </a>
        </div>
        </article>';

        $link = str_replace("watch?v=", "/embed/", $data->url_video);
        echo '
        <article class="RevistaMedia col">
         <iframe width="555" height="344" src="'.$link.'" frameborder="0" allowfullscreen></iframe>
        </article>';
        
    return $resultado;
}

/* select all */

function traerRevistaHome($limit = null){

    $db = Conectar();

    $sql = "SELECT * FROM revista ORDER BY id_revista DESC".(!is_null($limit) ? ' Limit '.$limit : '');
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        echo '

        <article class="noticia">
            
        <div  class="noticia-data">
            <div class="clearfilx">
                <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title" class="noticia-categoria">Revista</a>
                    <time datetime="#">| '.date("d M Y", strtotime($data->fecha)).'</time>
            </div>
        
        <h1 class="noticia-titulo">
            <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#title">'.$data->detalle.'</a>
        </h1>
        
        <p class="noticia-fuente">
            
        </p>
        </div>';

        $link = str_replace("watch?v=", "/embed/", $data->url_video);

        echo '
        <figure class="noticia-imagen">
                <a href="Revista-detalle.php?id='.$data->id_revista.'" title="#">
                    <iframe width="162" height="138" src="'.$link.'" frameborder="0" allowfullscreen></iframe>
                </a>
            </figure>
       
        </article>';


    }

    return $resultado;
}

?>