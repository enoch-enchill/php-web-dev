<?php

// Used in UsersController.php
class UsersRepository {
    
    private static $table = "tbl_users";
    
    public static function getAll() {
        // Get users from database
        $dbConn = ConstantsConfig::dbConn();
        $stmt = $dbConn->prepare("SELECT * FROM " . self::$table);
        $stmt->execute();
        $results = $stmt->get_result();
        
        // Close connection
        $stmt->close();
        $dbConn->close();

        // Prepare user list
        $user_list = [];
        while ($row = $results->fetch_assoc()) {
            UserModel::set(
                $row['id'],
                $row['username'],
                $row['email_address'],
                $row['phone_number'],
                $row['is_admin'] > 0 ? true : false,
                $row['is_active'] > 0 ? true : false,
                $row['created_at'],
                $row['updated_at']
            );
            array_push($user_list, UserModel::get());
        }

        // return user list
        return $user_list;
    }

    public static function find($id) {
        // Get users from database
        $dbConn = ConstantsConfig::dbConn();
        $stmt = $dbConn->prepare("SELECT * FROM " . self::$table . " WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Close connection
        $stmt->close();
        $dbConn->close();

        // Prepare result
        $row = $result->fetch_assoc();
        UserModel::set(
            $row['id'],
            $row['username'],
            $row['email_address'],
            $row['phone_number'],
            $row['is_admin'] > 0 ? true : false,
            $row['is_active'] > 0 ? true : false,
            $row['created_at'],
            $row['updated_at']
        );
        return UserModel::get();
    }

    public static function get_by_email_address($email_address) {
        // Get users from database
        $dbConn = ConstantsConfig::dbConn();
        $stmt = $dbConn->prepare("SELECT * FROM " . self::$table . " WHERE email_address = ?");
        $stmt->bind_param("s", $email_address);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Close connection
        $stmt->close();
        $dbConn->close();

        // Prepare result
        $row = $result->fetch_assoc();
        UserModel::set(
            $row['id'],
            $row['username'],
            $row['email_address'],
            $row['phone_number'],
            $row['is_admin'] > 0 ? true : false,
            $row['is_active'] > 0 ? true : false,
            $row['created_at'],
            $row['updated_at']
        );
        return UserModel::get();
    }

    public static function create($user_data) {
        // Get users from database
        $dbConn = ConstantsConfig::dbConn();
        $stmt = $dbConn->prepare("INSERT INTO " . self::$table . " (username, email_address, phone_number, password, is_admin, is_active, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        $is_admin = ConstantsConfig::int_false;
        $is_active = ConstantsConfig::int_true;
        $date_time = date("Y-m-d H:i:s");
        $password_hash = password_hash($user_data->password, PASSWORD_DEFAULT);
        $stmt->bind_param("ssssiiss", $user_data->username, $user_data->email_address, $user_data->phone_number, $password_hash, $is_admin, $is_active, $date_time, $date_time);
        $stmt->execute();
        $result = $stmt->get_result();

        // Close connection
        $stmt->close();
        $dbConn->close();

        return get_by_email_address($user_data->email_address);
    }
}