<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

define('LIBS_PATH', dirname(__FILE__));

require_once('PHPMailer/PHPMailerAutoload.php'); 
require_once('admin/class/class.mail.php');
require_once ('location.php');
require_once('admin/class/Facade.php'); 
require "resources/db.php";
require_once('admin/class/db.query.constants.php');
require_once('admin/class/db.constants.php'); 
require_once('admin/class/class.config.php'); 
require_once('admin/class/class.file.php'); 
require_once('admin/class/class.utils.php'); 
require_once('admin/class/class.session.php'); 
require_once('admin/class/class.novedades.php'); 



?>