$(document).ready(function(){

    $("#categories").click(function(){
        if ($("#input1").val()=="") {
            $("#span1").text("!require speciality");
        }
        else{
            $("#span1").text("");
        }
        if ($("#input2").val()=="") {
            $("#span2").text("!require sub-speciality");
        }
        else{
            $("#span2").text("");
        }
        if($("#input1").val()!="" && $("#input2").val()!="")
        {
    
        return true;	
        }
        else{
        return false;
        }
        })
    
    })