<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../controller/UsersListController.php';
$usersListController = new UsersListController();
$usersList = array();
$usersList = $usersListController->selectAllUsers();
$usersListController->invoke();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Users CRUD</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
        <script type="text/javascript" src="lib/usesrs_listScripts.js"></script>
        <script type="text/javascript" src="lib/jquery.js"></script>
        <script type="text/javascript" src="lib/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
            
        </script>
    </head>
    <body>
        <div class="small-header"><STRONG><a href="logout.php">LOGOUT</a></STRONG></div>
        <header>
            <center><h1>Users CRUD</h1></center>
            <center><h3>Developed as a part of Fynske Medier selection process</h3></center>
        </header>
        <div class="content"> 
            <div id="testDiv"></div>
            <form action="" method="POST">
            <center>
                
                <div class="addNewUser">
                    
                        <center><h2>Add New User</h2></center>
                        <br/><br/>
                        <table>
                            <tr>
                                <th><strong>UserName</strong></th>
                                <td><input type="text" id="usernameinput" name="usernameinput"/></td>
                            </tr>
                            <tr>
                                <th><strong>Password</strong></th>
                                <td><input type="password" id="passwordinput" name="passwordinput"/></td>
                            </tr>
                            <tr>
                                <th><strong>Type again your password</strong></th>
                                <td><input type="password" id="password2input" name="password2input"/></td>
                            </tr>
                            <tr>
                                <th><strong>First Name</strong></th>
                                <td><input type="text" id="firstnameinput" name="firstnameinput"/></td>
                            </tr>
                            <tr>
                                <th><strong>Last Name</strong></th>
                                <td><input type="text" id="lastnameinput" name="lastnameinput"/></td>
                            </tr>
                            <tr>
                                <th><strong>Email</strong></th>
                                <td><input type="text" id="emailinput" name="emailinput"/></td>
                            </tr>
                            
                            <tr colspan="2" align="center">
                                <td>
                                    <input type="submit" value="Save"/>
                                </td>
                            </tr>
                        </table>
                    
                </div>
            </center>

            <div>
                <table cellpadding="0" cellspacing="0" border="1" class="display" id="example">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usersList as $u): ?>
                            <tr>
                                <td> <?php echo $u->getUserName() ?> </td>
                                <td> <?php echo $u->getFirstName() ?> </td>
                                <td> <?php echo $u->getLastName() ?> </td>
                                <td> <?php echo $u->getEmail() ?> </td>
                                <td> <input type="button" value="<?php echo $u->getUserName() ?>" onclick="updateUser('<?php echo $u->getUserName() ?>');" </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>User Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                        </tr>
                    </tfoot>
                </table>
               
            </div>
            </form>
        </div>
    </body>
</html>
