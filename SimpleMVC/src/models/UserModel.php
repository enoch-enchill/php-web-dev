<?php
class UserModel {

    // Data object fields
    private static $id;
    private static $username;
    private static $email_address;
    private static $phone_number;
    private static $is_admin;
    private static $is_active;
    private static $created_at;
    private static $updated_at;

    // Object setter
    public static function set($id, $username, $email_address, $phone_number, $is_admin, $is_active, $created_at, $updated_at){
        self::$id = $id;
        self::$username = $username;
        self::$email_address = $email_address;
        self::$phone_number = $phone_number;
        self::$password = $password;
        self::$is_admin = $is_admin;
        self::$is_active = $is_active;
        self::$created_at = $created_at;
        self::$updated_at = $updated_at;
    }

    // Obejct getter
    public static function get(){
        return array(
            "id" => self::$id,
            "username" => self::$username,
            "email_address" => self::$email_address,
            "phone_number" => self::$phone_number,
            "is_admin" => self::$is_admin,
            "is_active" => self::$is_active,
            "created_at" => self::$created_at,
            "updated_at" => self::$updated_at,
        );
    }

}