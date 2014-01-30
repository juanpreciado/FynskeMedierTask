<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
        <script type="text/javascript" src="lib/loginScripts.js"></script>
        <script type="text/javascript" src="lib/jquery.js"></script>
        <title>Login</title>
    </head>
    <body>
        <header>
            <center><h1>LOGIN PAGE</h1></center>
            <center><h3>Developed as a part of Fynske Medier selection process</h3></center>
        </header>
        <div class="content"> 
            <form id="formLogin" action="..\dispatcher.php" method="POST">
                <div class="left_side_content" >
                    <div class="login">
                        <br/><br/><br/><br/><br/>
                        <center>
                            <table>
                                <tr>
                                    <td><strong>UserName</strong></td>
                                    <td><input type="text" id="usernameField" name="usernameField"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><div id="errorMessage" class="errorMessages"></div></td>
                                </tr>
                                <tr>
                                    <td><strong>Password</strong></td>
                                    <td><input type="password" id="passwordField" name="passwordField"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><div id="passwordErrorMessage" class="errorMessages"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><center><input type="button" id="submitLogin" name="Submit" value="Submit" onclick="submitListener();"/></center></td>
                                </tr>
                            </table>
                        </center>
                        <br/><br/><br/><br/><br/>
                    </div>
                </div>
                <div class="right_side_content">
                    <div class="textBlock">
                        <p>
                            Hello!!, my name is Juan Preciado, I'm from Medell&iacute;n <br/>
                            Colombia, I have developed this webpage using PHP programming <br/>
                            language with technologies like Javascript, JQuery, AJAX, CSS, <br/>
                            REGEX and MySQL, using object oriented programming and MVC pattern.
                            <br/><br/>
                            In order to login, please use the next credentials:<br/>
                            <strong>USERNAME: </strong>1<br/>
                            <strong>PASSWORD: </strong>1<br/>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
