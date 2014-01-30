<?php

/**
 * Business Object Login.php
 *
 * @author JFP
 */
require 'LoginDAO.php';
class Login {

    private $userName;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $role;

    public function __construct($username, $password) {
        $this->userName = $username;
        $this->password = $password;
    }
    
    public function login() {
        $loginDAO = new LoginDAO();
        $result = $loginDAO->login($this->getUserName(), $this->getPassword());
        $numberOfRows =  $loginDAO->numberOfRows($result);
        if ($numberOfRows > 0) {
            $this->parseDataFromResultSet($result);
            return "VALID";
        } else {
            return "INVALID";
        }
        
       
        return $result;
    }

    public function parseDataFromResultSet($result){
        while($row = mysql_fetch_array($result)){
            $this->setFirstName($row['first_name_varchar']);
            $this->setLastName( $row['last_name_varchar'] );
            $this->setEmail( $row['email_varchar'] );
            $this->setRole( $row['role_code_fk'] );
        }
    }
    
    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRole($role) {
        $this->role = $role;
    }


}
