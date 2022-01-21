<?php 
class ConstantsConfig {

    // Database Credentials
    public static function dbConn(){
        //new mysqli(host, user, pass, db);
        return new mysqli("localhost", "root", "", "simple_mvc_php");
    }

    // Session Names
    public static $user_session_id = "user_session";

    // WEB [Routes]
    public static $web_routes = [
        ["route" => "/", "path" => "home.php"]
    ];

    // Generate Random Code
    public static function getCode($len){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, intval($len));
    }

    public static $int_true = 1;

    public static $int_false = 0
}