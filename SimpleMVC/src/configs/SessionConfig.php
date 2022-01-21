<?php
class SessionConfig {

    // User
    public static function set_user($user_data) {
        $_SESSION[ConstantsConfig::$user_session_id] = $user_data;    
    }
    public static function get_user() {
        if( isset( $_SESSION[ConstantsConfig::$user_session_id]) ) {
           return $_SESSION[ConstantsConfig::$user_session_id];
        }
        return null;
    }
    public static function del_user(){
        unset($_SESSION[ConstantsConfig::$user_session_id]);
    }

    public static function kill() {                
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
    }

}