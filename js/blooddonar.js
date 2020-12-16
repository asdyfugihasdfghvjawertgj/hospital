$(document).ready(function(){

    $("#donar").click(function(){
        if ($("#input1").val()=="") {
            $("#span1").text("!Please Enter Your name");
        }
        else{
            $("#span1").text("");
        }
        if ($("#input2").val()=="") {
            $("#span2").text("!Please Enter Your Email");
        }
        else{
            $("#span2").text("");
        }
        if ($("#input3").val()=="") {
            $("#span3").text("!Please Enter Your Phone Number");
        }
        else{
            $("#span3").text("");
        }
        
        if ($("#input4").val()=="") {
            $("#span4").text("!Please Enter Your Birthday");
        }
        else{
            $("#span4").text("");
        }
        if ($("#input5").val()=="") {
            $("#span5").text("!Please Enter Your type of Blood");
        }
        else{
            $("#span5").text("");
        }
        
        
        if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && $("#input4").val()!="" && $("#input5").val()!="")
        {
    
        return true;	
        }
        else{
        return false;
        }
        })
    
    })