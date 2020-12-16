$(document).ready(function(){

$("#reg").click(function(){
	if ($("#input1").val()=="") {
		$("#span1").text("!require name");
	}
	else{
		$("#span1").text("");
	}
	if ($("#input2").val()=="") {
		$("#span2").text("!require email");
	}
	else{
		$("#span2").text("");
	}
	if ($("#input3").val()=="") {
		$("#span3").text("!require password");
	}
	else{
		$("#span3").text("");
	}
	
	if ($("#input4").val()=="") {
		$("#span4").text("!require confirm_password");
	}
	else{
		$("#span4").text("");
	}
	if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && $("#input4").val()==$("#input3").val())
	{

	return true;	
	}
	else{
    return false;
	}
	})

})