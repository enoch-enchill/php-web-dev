<?php
class DatabaseConfig {
    
    // Database Credentials
    public static function connection(){
        //new mysqli(host, user, pass, db);
        return new mysqli(
            ConstantsConfig::database_host,
            ConstantsConfig::database_user,
            ConstantsConfig::database_pass,
            ConstantsConfig::database_name
        );
    }
}