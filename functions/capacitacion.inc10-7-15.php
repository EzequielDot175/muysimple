<?php  
/************ Capacitación *******************/

/* select all */
function proccessDate($date){
 $months = array('Jan'=> 'Enero',
    'Feb'=> 'Febrero',
    'Mar'=> 'Marzo',
    'Apr'=> 'Abril',
    'May'=> 'Mayo',
    'Jun'=> 'Junio',
    'Jul'=> 'Julio',
    'Aug'=> 'Agosto',
    'Sep'=> 'Septiembre',
    'Oct'=> 'Octubre',
    'Nov'=> 'Noviembre',
    'Dec'=> 'Diciembre');
 $days = array(
    'Sun' => 'Domingo',
    'Mon' => 'Lunes',
    'Tue' => 'Martes',
    'Wed' => 'Miercoles',
    'Thu' => 'Jueves',
    'Fri' => 'Viernes',
    'Sat' => 'Sabado'
    );
    $currentMonth = date("M",strtotime($date));
    $currentDay = date("D",strtotime($date));
    $currentDayNum = date("d",strtotime($date));
    return $currentDayNum." de ".$months[$currentMonth]." - ".$days[$currentDay];
}
function traerCapacitacion(){

    $db = Conectar();


    $sql = "SELECT * FROM capacitacion ORDER BY id_cap DESC";
    $resultado = $db->query($sql);

    while ($data = $resultado->fetch_object()){

        $sede = (!empty($data->sede)                 ? '<li><span>Sede:</span> '.$data->sede.'</li>' : "");
        $duracion = (!empty($data->duracion)         ? '<li><span>Duración:</span> '.$data->duracion.'</li>' : "");
        $horarios = (!empty($data->horarios)         ? '<li><span>Horarios:</span> '.$data->horarios.'</li>' : "");
       /* $fecha_inicio = (!empty($data->fecha_inicio) ? '<li><span>Fecha de Inicio:</span> '.proccessDate($data->fecha_inicio).'</li>' : "");*/
        $profesor = (!empty($data->profesor)         ? '<li><span>Profesor:</span> '.$data->profesor.'</li>' : "");
        $imagen = (!empty($data->imagen)             ? '<img src="upload/'.$data->imagen.'" width="259">' : "");

        $html = '
        <div class="hideme">
        <article class="CapacitacionTestiomonio">
        <div class="Text-Curso">
        <h2>'.$data->titulo.'</h2>  
        <p>'.$data->detalle.'</p>
        <ul>';
        
        $html .= $sede;
        $html .= $duracion;
        $html .= $horarios;
        $html .= $fecha_inicio;
        $html .= $profesor;
        $html .= $imagen;

        $html .='</ul></div>';
        $html .= $imagen;
        $html .= '</article></div>    
        ';
        echo($html);
    
    }

    return $resultado;
}

/* get */

function getCapacitacion(){

    $db = Conectar();

    $id = $db->real_escape_string($_GET['id']);

    $sql = "SELECT * FROM capacitacion WHERE id_cap ='$id'";
    $resultado = $db->query($sql);

    $data = $resultado->fetch_object();

    if ($data->imagen_2!=""){

        if ($data->video!=""){
        echo '
        <article class="CapacitacionTestiomonio">
        <div class="Text-Curso">
        <h2>'.$data->titulo.'</h2>  
        <p>'.$data->titulo.'</p>
        <ul>
        <li><span>Sede:</span> '.$data->sede.'</li>
        <li><span>Duración:</span> '.$data->duracion.'</li>
        <li><span>Horarios:</span> '.$data->horarios.'</li>
        
        <li><span>Profesor:</span> '.$data->profesor.'</li>
        </ul>
        </div>
        <img src="upload/'.$data->imagen_2.'" width="259">
        <iframe width="600" height="407" src="https://www.youtube.com/embed/'.$data->video.'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </article>    
        ';}else{
         echo '
        <article class="CapacitacionTestiomonio">
        <div class="Text-Curso">
        <h2>'.$data->titulo.'</h2>  
        <p>'.$data->titulo.'</p>
        <ul>
        <li><span>Sede:</span> '.$data->sede.'</li>
        <li><span>Duración:</span> '.$data->duracion.'</li>
        <li><span>Horarios:</span> '.$data->horarios.'</li>
       
        <li><span>Profesor:</span> '.$data->profesor.'</li>
        </ul>
        </div>
        <img src="upload/'.$data->imagen_2.'" width="259">
        </article>  ';  
        }}else{

           if ($data->video!=""){
        echo '
        <article class="CapacitacionTestiomonio">
        <div class="Text-Curso">
        <h2>'.$data->titulo.'</h2>  
        <p>'.$data->detalle.'</p>
        <ul>
        <li><span>Sede:</span> '.$data->sede.'</li>
        <li><span>Duración:</span> '.$data->duracion.'</li>
        <li><span>Horarios:</span> '.$data->horarios.'</li>
        
        <li><span>Profesor:</span> '.$data->profesor.'</li>
        </ul>
        </div>
        <img src="resources/images/logo_muysimple.png" width="165">
        <iframe width="600" height="407" src="https://www.youtube.com/embed/'.$data->video.'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </article>    
        ';}else{
         echo '
        <article class="CapacitacionTestiomonio">
        <div class="Text-Curso">
        <h2>'.$data->titulo.'</h2>  
        <p>'.$data->detalle.'</p>
        <ul>
        <li><span>Sede:</span> '.$data->sede.'</li>
        <li><span>Duración:</span> '.$data->duracion.'</li>
        <li><span>Horarios:</span> '.$data->horarios.'</li>
       
        <li><span>Profesor:</span> '.$data->profesor.'</li>
        </ul>
        </div>
        <img src="resources/images/logo_muysimple.png" width="165">
        </article>  ';  
        } 

        }

    return $resultado;
}



?>