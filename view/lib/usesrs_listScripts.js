/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$(document).ready(function() {
//    $('#example').dataTable({
//        "aaSorting": [[4, "desc"]]
//    });
//
//
//});

$(document).ready(
        function() {
            $("#updateButton").hide();
            $("#cancelUpdateButton").hide();
        }
);

function selectUserForUpdating(value) {
    $("#updateButton").show();
    $("#cancelUpdateButton").show();
    $("#saveButton").hide();
    $.ajax({
        type: 'POST',
        url: "../view/users_list_dispatcher.php",
        data: "action=select&userName=" + value,
        success: function(response) {
            var data = $.parseJSON(response);
//               $("#testDiv").html("");
            $("#testDiv").append(data);
            alert(data.username);

            $("#usernameinput").val(data.username);
            $("#usernameinput").prop("disabled", true);
            $("#passwordinput").prop("disabled", true);
            $("#password2input").prop("disabled", true);
            $("#firstnameinput").val(data.firstname);
            $("#lastnameinput").val(data.lastname);
            $("#emailinput").val(data.email);
            
            $("#saveButton").hide();
            $("#updateButton").show();
            $("#cancelUpdateButton").show();
        },
        error: function() {
            alert("error");
        }

    });

}

function saveUser() {
    $.ajax({
        type: 'POST',
        url: "../view/users_list_dispatcher.php",
        data: "action=save&userName=" + $("#usernameinput").val()
                + "&password=" + $("#passwordinput").val() + "&firstName=" + $("#firstnameinput").val()
                + "&lastName=" + $("#lastnameinput").val() + "&email=" + $("#emailinput").val(),
        success: function(response) {
            if (response == 1 || response == "1") {
                $("#successMessageDiv").show();
                $('#formUsers').each(function() {
                    this.reset();
                });
            } else {
                $("#failureMessageDiv").show();
            }
        }
    }

    );
}
function updateUser() {
    $.ajax({
        type: 'POST',
        url: "../view/users_list_dispatcher.php",
        data: "action=update&userName=" + $("#usernameinput").val()
                + "&password=" + $("#passwordinput").val() + "&firstName=" + $("#firstnameinput").val()
                + "&lastName=" + $("#lastnameinput").val() + "&email=" + $("#emailinput").val(),
        success: function(response) {
            if (response == 1 || response == "1") {
                $("#successMessageDiv").show();
                $('#formUsers').each(function() {
                    this.reset();
                });
            } else {
                $("#failureMessageDiv").show();
            }
        }
    }

    );
}

function cancelUpdating() {

}


