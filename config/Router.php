<?php
class Router{
    public static function handle($method = "GET", $path = "/", $filename = ""){
        $current_method = $_SERVER["REQUEST_METHOD"];
        $current_uri = $_SERVER["REQUEST_URI"];

        if($current_method != $method){
            return false;
        }
        $root = "/router";
        $pattern = '#^'.$root.$path.'$#siD';
        if(preg_match($pattern, $current_uri)){
            require_once $filename;
            exit();
        }
    }
}