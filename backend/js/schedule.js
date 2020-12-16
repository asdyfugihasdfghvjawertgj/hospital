$(document).ready(function(){

    $("#schedule").click(function(){
        if ($("#input1").val()=="") {
            $("#span1").text("!require start-date");
        }
        else{
            $("#span1").text("");
        }
        if ($("#input2").val()=="") {
            $("#span2").text("!require end-date");
        }
        else{
            $("#span2").text("");
        }
        if ($("#input3").val()=="") {
            $("#span3").text("!require time1");
        }
        else{
            $("#span3").text("");
        }
        if ($("#input4").val()=="") {
            $("#span4").text("!require time2");
        }
        else{
            $("#span4").text("");
        }
        if ($("#input5").val()=="") {
            $("#span5").text("!require time3");
        }
        else{
            $("#span5").text("");
        }
    
        if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && $("#input4").val()!=""&& $('#input5').val()!="")
        {
    
        return true;	
        }
        else{
        return false;
        }
        })
    
    });
    
        