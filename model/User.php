<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author jpreciado
 */
require 'UsersListDAO.php';

class User {

    private $userName;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    private $role;

    public function saveUser() {
        $userDAO = new UsersListDAO();
        $userDAO->saveUser($this->userName, $this->password, $this->firstName, $this->lastName, $this->email);
    }

    public function selectUser($userName) {
        $userDAO = new UsersListDAO();
        $user = $userDAO->selectUser($userName);
        $this->setUserName($user->getUserName());
        $this->setPassword($user->getPassword());
        $this->setFirstName($user->getFirstName());
        $this->setLastName($user->getLastName());
        $this->setEmail($user->getEmail());
        $this->setRole($user->getRole());
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
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

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
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
