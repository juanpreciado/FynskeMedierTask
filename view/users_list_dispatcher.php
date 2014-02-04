<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../controller/UsersListController.php';
require_once '../model/User.php';

//if( isset($_POST['userName']) ){
//    $username = $_POST['userName'];
//    
//    $userListController = new UsersListController();
//    $user = new User();
//    $user = $userListController->selectUser($username);
//    $data = array(
//        "username" => $user->getUserName(),
//        "firstname" => $user->getFirstName(),
//        "lastname" => $user->getLastName(),
//        "email" => $user->getEmail()
//    );
//   echo json_encode( $data )  ;
//    
//}

if( isset($_POST['action']) ){
    $action = $_POST['action'];
    if( $action == "save" ){
        $userListController = new UserslistController();
        $result = $userListController->saveUser($_POST['userName'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['email']);
        echo $result;
    }
    
    if( $action == "update" ){
        $userListController = new UsersListController();
        $result = $userListController->updateUser($_POST['userName'], $_POST['password'], $_POST['firstName'], $_POST['lastName'], $_POST['email']);
        echo $result;
    }
    
    if( $action == "select" ){
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
        echo json_encode($data);
    }
    
}



