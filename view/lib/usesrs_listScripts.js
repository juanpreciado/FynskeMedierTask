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



    function updateUser(value) {              
        $.ajax({
            type: 'POST',
            url: "../view/users_list_dispatcher.php",
            data: "userName="+value,
            success: function(response){
              var data = $.parseJSON(response);
//               $("#testDiv").html("");
                $("#testDiv").append(data);
                alert(data.username);
                
                $("#usernameinput").val(data.username);
                $("#usernameinput").prop( "disabled", true );
                $("#passwordinput").prop( "disabled", true );
                $("#password2input").prop( "disabled", true );
                $("#firstnameinput").val(data.firstname);
                $("#lastnameinput").val(data.lastname);
                $("#emailinput").val(data.email);
            },
            error: function(){
                alert("error");
            }
                    
        });

    }


