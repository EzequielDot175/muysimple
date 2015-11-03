<?php
require_once "resource/db.php";
require_once "class/pagination.php";


$db = Conectar();

$usuario = $_POST["user"];   
$contrasena = $_POST["pass"];

$sql = ("SELECT * FROM usuarios WHERE user = '$usuario'");
$resultado = $db->query($sql);

if($data = $resultado->fetch_array())
{     

 if($data["pass"] == $contrasena)
 {

  session_start();  

  $_SESSION['user'] = $usuario;  
  $_SESSION['user_id'] = $data["id_user"]; 

  header("Location: galeria_home.php");  
 }
 else
 {
 
?>
   <script languaje="javascript">
    alert("Password incorrecto");
    location.href = "index.php";
   </script>
<?php
            
 }
}
else
{

?>
 <script languaje="javascript">
  alert("Usuario incorrecto!");
  location.href = "index.php";
 </script>
<?php  
        
}

?>