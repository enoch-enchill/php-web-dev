<?php 
class ConstantsConfig {

    // Database Credentials
    const $database_host = "localhost";
    const $database_user = "root";
    const $database_pass = "";
    const $database_name = "address_book";

    // Session Names
    const $user_session_id = "user_session";

    // Int for True
    const $int_true = 1;

    // Int for False
    const $int_false = 0;
    
    // Generate Random Code
    public static function getCode($len){
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, intval($len));
    }

}