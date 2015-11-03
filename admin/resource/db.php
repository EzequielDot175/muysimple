<?php

ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

//defino la rutas
// define('TEMPLATE_DIR','http://localhost/backend/template');
// define('BASEURL','http://localhost/backend');

/*PRODUCCION
define('DB_HOST','localhost');
define('DB_USER','msimple_simple');
define('DB_PASS','msimple1243**');
define('DB_NAME','msimple_muy');
*/

// if($_SERVER['HTTP_HOST']):

// else:

// endif;

$config = new stdClass();

if(is_numeric(strpos($_SERVER['HTTP_HOST'], 'localhost')) || is_numeric(strpos($_SERVER['REQUEST_URI'], '/dev'))):
	$config->{'dbname'} = 'msimple_dev';
	$config->{'dbuser'} = 'msimple_dev';
	$config->{'dbpass'} = 'msimple_dev'; 
else:
	$config->{'dbname'} = 'msimple_muy';
	$config->{'dbuser'} = 'msimple_simple';
	$config->{'dbpass'} = 'msimple1243**'; 
endif;
			



/* DESARROLLO*/
define('DB_HOST','localhost');
define('DB_USER',$config->dbuser);
define('DB_PASS',$config->dbpass);
define('DB_NAME',$config->dbname);

// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','muysimple');

function Conectar(){

	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($db->connect_error > 0){
		echo 'Fallo la conexion';
	}
        $db->set_charset("utf8");
	return $db;
	$db->close();
}
?>