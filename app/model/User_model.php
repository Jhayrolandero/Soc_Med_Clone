<?php
include "config/Database.php";

class User_model extends Database{

    public function add_user($fname, $lname, $password, $email){
        $sql = "INSERT INTO user (user_fname, user_lname, user_password, user_email)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$fname, $lname, $password, $email]);
    }

    public function check_email($email){
        $sql = "SELECT user_email 
                FROM user
                WHERE user_email = ?";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$email]);        

        $count_row = $stmt->rowCount();

        if($count_row > 0) return true; // Email already exist
    }

    // Validate if user exist in the DB
    public function validate_user($email, $password){
        $sql = "SELECT *
                FROM user
                WHERE user_email = ? AND user_password = ?";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$email, $password]);        

        $count_row = $stmt->rowCount();

        if($count_row > 0){ // User exist
            return $stmt->fetchAll();
        }
        else return false; // Not

    }
}

?>