<?php

class Session {

    function __construct() {
        
    }
    
    public static function get($name){
        return $_SESSION[$name];
    }

}

