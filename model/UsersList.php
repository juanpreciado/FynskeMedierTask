<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersList
 *
 * @author jpreciado
 */

include_once 'User.php';
include_once 'UsersListDAO.php';
class UsersList {
    //put your code here
    
    public function selectAllUsers(){
        $userListDAO = new UsersListDAO();
        $resultSet = $userListDAO->selectAllUsers();
        $usersList = $userListDAO->parseDataFromResultSet($resultSet);
        return $usersList;
    }
}
