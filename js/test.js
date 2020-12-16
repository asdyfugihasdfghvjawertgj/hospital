$(document).ready(function(){

    $("#booking").click(function(){
        if ($("#input5").val()=="") {
            $("#span5").text("!require gender");
        }
        else{
            $("#span5").text("");
        }
    });
        });