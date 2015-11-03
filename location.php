<?php

$init = dirname(__FILE__);
$url = 'http://'.$_SERVER['HTTP_HOST'];

$develop = true;


$_SESSION['APP_PATH'] = $init;
$_SESSION['ADMIN_PATH'] = $init."/admin";
$_SESSION['UPLOAD_PATH'] = $init."/upload";
$_SESSION['APP_URL'] = $url;
$_SESSION['UPLOAD_URL'] = $url."/upload";

if($develop){
    $_SESSION['UPLOAD_URL'] = $url."/muysimple/upload";
}

