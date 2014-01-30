<?php



/**
 * Controller class
 *
 * @author JFP
 */
require './model/Login.php';
class LoginController {
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
    
    public function login(){
        $login = new Login($this->getUserName(), $this->getPassword());
        $loginStatus = $login->login();
        if($loginStatus == "VALID"){
            $this->setFirstName($login->getFirstName());
            $this->setLastName($login->getLastName());
            $this->setEmail($login->getEmail());
            $this->setRole($login->getRole());
            return true;
        }else{
            return false;
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
