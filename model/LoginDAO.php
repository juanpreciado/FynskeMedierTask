<?php



/**
 * Data access object, this class has the sql sentences used for validate de username and password
 *
 * @author JFP
 */
require 'Database.php';

class LoginDAO extends Database{
    
    
    public function login($username, $password){
        $sql = "select * from users_table where username_varchar = '$username'"
                . " and password_varchar = '$password'";
        $this->connect();
        $result = $this->query($sql);      
        $this->disconnect();
        return $result;
    }
}
