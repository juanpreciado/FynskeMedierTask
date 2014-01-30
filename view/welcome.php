<?php
session_start();
if (!isset($_SESSION['s_username'])) {  
   header("Location: login.php");
} else{
    print_r($_SESSION);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
        <title>Welcome!!</title>
    </head>
    <body>
        <div class="small-header"><STRONG><a href="logout.php">LOGOUT</a></STRONG></div>
        <header>
            <center><h1>Page for logged users</h1></center>
            <center><h3>Developed as a part of Fynske Medier selection process</h3></center>
        </header>
        <div class="content"> 
            <br/><br/><br/>
            Hello <strong><?php echo $_SESSION['s_username'];?></strong> welcome to the page for logged users,
             you have logged succesfully
        </div>
    </body>
</html>
