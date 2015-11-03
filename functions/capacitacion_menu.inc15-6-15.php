<?php  

/************ Capacitación *******************/

/* select all */

function traerCapacitacionMenu(){

    $db = Conectar();


    $sql = "SELECT * FROM capacitacion ORDER BY id_cap DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

    	echo '

		<article class="CursosImagenes col" >
      	<h2><a class="LinkCursos" href="curso_detalle.php?id='.$data->id_cap.'#aqui" >'.length($data->titulo).'</a></h2>
      
      	<a href="curso_detalle.php?id='.$data->id_cap.'#aqui" rel="nofollow" >   
        <div class="ImagenCurso"><img class="SacarSeccionCelular" src="upload/'.$data->imagen.'"/><div class="HoverCursos"><div class="SimboloMas"></div></div></div>
      	</a>
    	</article>
    	';

    }

    return $resultado;
}
function length($str){
  $len = strlen($str);
  if($len > 20):
    return mb_substr($str, 0 , 21, "UTF-8")."..";
  else:
    return $str;
  endif;
}

?>