<?php  
require "resource/db.php";

/************ Revista *******************/

/* select all */

function traerEncuestas1(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['option1'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <div class='row'>
    <p>Sitio Web: ".$i."</p>
    ";

}

/* select all */

function traerEncuestas2(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['option2'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <p>Tienda: ".$i."</p>
    ";

}

function traerEncuestas3(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['option3'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <p>Revista: ".$i."</p>
    ";

}

function traerEncuestas4(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['option4'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <p>Facebook: ".$i."</p>
    ";

}

function traerEncuestas5(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['option5'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <p>Avisos en vía pública: ".$i."</p>
    ";

}

function traerEncuestas6(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['option6'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <p>Youtube: ".$i."</p>
    ";

}

function traerEncuestas7(){

    $db = Conectar();

    
    $sql = ("SELECT * FROM encuestas");
    $resultado = $db->query($sql);

    $i=0;
    while($data = $resultado->fetch_assoc()){

        if($data['otros'] != ""){
        $i=$i+1;
  
      }

}   
    echo "
    <p>Otros: ".$i."</p>
    </div>
    ";

}


?>