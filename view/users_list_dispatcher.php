<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../controller/UsersListController.php';
require_once '../model/User.php';

if( isset($_POST['userName']) ){
    $username = $_POST['userName'];
    
    $userListController = new UsersListController();
    $user = new User();
    $user = $userListController->selectUser($username);
    $data = array(
        "username" => $user->getUserName(),
        "firstname" => $user->getFirstName(),
        "lastname" => $user->getLastName(),
        "email" => $user->getEmail()
    );
   echo json_encode( $data )  ;
    
}



