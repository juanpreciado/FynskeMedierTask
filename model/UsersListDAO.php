<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersListDAO
 *
 * @author jpreciado
 */
include_once 'User.php';
require 'Database.php';
class UsersListDAO extends Database{
    //put your code here
    
    public function selectAllUsers() {
        $sql = "select * from users_table order by last_name_varchar asc";
        $this->connect();
        $result = $this->query($sql);    
        $this->disconnect();
        return $result;
    }
    
    public function selectUser($userName){
        $sql = "select * from users_table where userName_varchar = '$userName' ";
        $this->connect();
        $result = $this->query($sql);
        $this->disconnect();
        return $this->parseDataFromResulSetForOneElement($result);
    }
    
    public function parseDataFromResultSet($result){
        $userList = array();
        while($row = mysql_fetch_array($result)){
           
            $user = new User();
            $user->setUserName($row['userName_varchar']);
            $user->setFirstName($row['first_name_varchar']);
            $user->setLastName( $row['last_name_varchar'] );
            $user->setEmail( $row['email_varchar'] );
            $user->setRole( $row['role_code_fk'] );
           
            $userList[] = $user;
        }
        return $userList;
    }
    
    public function parseDataFromResulSetForOneElement($result){
        $user = new User();
        while($row = mysql_fetch_array($result)){
            $user->setUserName($row['userName_varchar']);
            $user->setFirstName($row['first_name_varchar']);
            $user->setLastName( $row['last_name_varchar'] );
            $user->setEmail( $row['email_varchar'] );
            $user->setRole( $row['role_code_fk'] );
        }
        return $user;
    }
    
    public function saveUser($userName, $password, $firstName, $lastName,$email){
        $sql = "INSERT INTO users_table ( userName_varchar, password_varchar, first_name_varchar, "
                . "last_name_varchar, email_varchar, role_code_fk ) VALUES ('$userName', '$password', '$firstName', '$lastName', '$email', 1);";
        $this->connect();
        $this->query($sql);
        $this->disconnect();
    }   
}
