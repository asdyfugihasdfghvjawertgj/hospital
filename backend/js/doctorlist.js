$(document).ready(function(){

    $("#add").click(function(){
        if ($("#name").val()=="") {
            $("#span1").text("!require enter your name");
        }
        else{
            $("#span1").text("");
        }
        if ($("#email").val()=="") {
            $("#span2").text("!require enter your email");
        }
        else{
            $("#span2").text("");
        }
        if ($("#phone").val()=="") {
            $("#span3").text("!require enter your ph no");
        }
        else{
            $("#span3").text("");
        }
        
        if ($("#degree").val()=="") {
            $("#span4").text("!require enter your degree");
        }
        else{
            $("#span4").text("");
        }
        if ($("#address").val()=="") {
            $("#span5").text("!require enter your address");
        }
        else{
            $("#span5").text("");
        }
        
        if ($("#experience").val()=="") {
            $("#span6").text("!require enter your experience");
        }
        else{
            $("#span6").text("");
        }
        if ($("#speciality").val()=="") {
            $("#span7").text("!require enter your speciality");
        }
        else{
            $("#span7").text("");
        }
        
        if($("#name").val()!="" && $("#email").val()!="" && $("#phone").val()!="" && $("#degree").val()!="" && $("#address").val()!="" && $("#experience").val()!="" && $("#speciality").val()!="")
        {
    
        return true;	
        }
        else{
        return false;
        }
        })
    
    })