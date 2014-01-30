<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersListController
 *
 * @author jpreciado
 */
include_once '../model/UsersList.php';
class UsersListController {
    //put your code here
    
    public function selectAllUsers(){
        $userList = new UsersList();
        return $userList->selectAllUsers();
    }
    
    public function invoke(){
        if( isset($_POST['usernameinput']) ){
            $userName = $_POST['usernameinput'];
            $password = $_POST['passwordinput'];
            $firstName = $_POST['firstnameinput'];
            $lastName = $_POST['lastnameinput'];
            $email = $_POST['emailinput'];
            $this->saveUser($userName, $password, $firstName, $lastName, $email);
        }
    }
    
    public function saveUser ($userName, $password, $firstName, $lastName,$email){
        $user = new User();
        $user->setUserName($userName);
        $user->setPassword($password);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setEmail($email);
        $user->saveUser();
    }
    
    public function selectUser($userName){
        $user = new User();
        $user->selectUser($userName);
        return $user;
    }
}
