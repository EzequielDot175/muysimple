<?php 
function MenuEmprendimientos(){
    
    $db = Conectar();

    $sql = "SELECT * FROM emprendimientos ORDER BY id_em DESC";
    $resultado = $db->query($sql);


    while ($data = $resultado->fetch_object()){
    echo '
    <li><a class="SubMenu TinedaSubmenu listadoMenu" href="emprendimientos.php#'.$data->id_em.'">'.$data->titulo.'</a></li>
        ';
    }

    return $resultado;
}
 ?>