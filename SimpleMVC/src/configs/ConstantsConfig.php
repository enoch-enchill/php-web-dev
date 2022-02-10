<?php 
class ConstantsConfig {

    // Database Credentials
    public static $database_host = "localhost";
    public static $database_user = "root";
    public static $database_pass = "";
    public static $database_name = "address_book";

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

    public static $int_false = 0;
}