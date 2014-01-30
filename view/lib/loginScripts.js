
function validateFields(text, password) {
    var validationString = "^[a-zA-Z0-9-]+$";
    var userNameIsOK = text.match(validationString)
    if (userNameIsOK && password != "") {
        // alert("si");
        return true;
    } else {
        if (!userNameIsOK) {
            $("#errorMessage").text("");
            $("#errorMessage").append("The username field only accepts <br/>letters and numbers, please try again");          
        }
        if ( password == "" ){
            $("#passwordErrorMessage").text("");
            $("#passwordErrorMessage").append("The password can not be empty");         
        }
        return false;
    }
}


function submitListener() {
     $("#errorMessage").text("");
    $("#passwordErrorMessage").text("");
    var validationResult = validateFields($("#usernameField").val(), $("#passwordField").val());
    if (validationResult) {
        login();
    }

}

function login(){
    $.ajax({
        type: "POST",
        url: "../dispatcher.php",
        data: "username=" + $("#usernameField").val() + "&password=" + $("#passwordField").val(),
        success: function(html){
            if (html == 'true')    {
                location.href="welcome.php";
            }
            else    {
                $("#passwordErrorMessage").text("");
                $("#passwordErrorMessage").append("The username or password is incorrect");
            }
        },
        beforeSend:function()
        {
       
        }
          });
}

