<?php  

/************ Tienda productos *******************/

/* select all */


function traerProductos(){

$db = Conectar();

$url = "LaTienda.php";

$sql = "SELECT id_prod FROM tienda_prod";
$resultado = $db->query($sql);

$num_total_registros = $resultado->num_rows;

if ($num_total_registros > 0) {

  $tamano_pagina = 12;
        $pagina = false;

        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
        
  if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
  }
  else {
    $inicio = ($pagina - 1) * $tamano_pagina;
  }
  $total_paginas = ceil($num_total_registros / $tamano_pagina);

  $sql = "SELECT * FROM tienda_prod ORDER BY detalle ASC LIMIT ".$inicio."," . $tamano_pagina;
  $resultado = $db->query($sql);
  while ($data= $resultado->fetch_object()) {
    echo '
        <a href="#" class="Elemento clearfix" title="#title"><article class="ImagenesProductos">
            <figure><img src="upload/'.$data->imagen.'" width="245" height="246"></figure>
            <figcaption class="NombreProducto">'.$data->detalle.'</figcaption>
            </article>
        </a>
        ';
  }
}
echo '<div class="align-pagenation">';
echo '<div class="paginacion">';

if ($total_paginas > 1) {
    if ($pagina != 1)
    echo '<a href="'.$url.'?pagina='.($pagina-1).'" class="icon-left"></a>';
    for ($i=1;$i<=$total_paginas;$i++) {
    if ($pagina == $i)
    echo '<div class="activo">'.$pagina.'</div>';
    
    else

    echo '<a href="'.$url.'?pagina='.$i.'"><li><p>'.$i.'</p></li></a>';
    }
    if ($pagina != $total_paginas)
    echo '<a href="'.$url.'?pagina='.($pagina+1).'" class="icon-right"></a>';
}
    echo '</div>';
    echo '</div>';

}

?>