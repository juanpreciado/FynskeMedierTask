<?php
session_start();
/**
 * This file connects the view and the controller  

 */
require  'controller/LoginController.php';
if( isset($_POST['username']) && isset($_POST['password']) )//muestra el buscador y los resultados
 {  $userName = $_POST['username'];
    $password = $_POST['password'];
    $password = sha1($password);
  //  echo $userName;
   // echo $password;
    $loginController = new LoginController ($userName, $password );
    $result = $loginController->login();
   // echo $page;
    if($result){
     $_SESSION["s_username"] = $userName;
     echo "true";
    }else{
        echo "false";
    }
    //header("Location: view/$page");
 }