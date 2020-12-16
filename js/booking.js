$(document).ready(function(){

	$("#booking").click(function(){
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
			$("#span3").text("!require phone number");
		}
		else{
			$("#span3").text("");
		}
		
		if ($("#input4").val()=="") {
			$("#span4").text("!require speciality");
		}
		else{
			$("#span4").text("");
		}
		if ($("#input5").val()=="") {
			$("#span5").text("!require sub-speciality");
		}
		else{
			$("#span5").text("");
		}
		if ($("#input6").val()=="") {
			$("#span6").text("!please select doctor");
		}
		else{
			$("#span6").text("");
		}
		if ($("#input7").val()=="") {
			$("#span7").text("!please select date");
		}
		else{
			$("#span7").text("");
		}
		if ($("#input8").val()=="") {
			$("#span8").text("!please select time");
		}
		else{
			$("#span8").text("");
		}
		if ($("#input9").val()=="") {
			$("#span9").text("!require medical concern or request");
		}
		else{
			$("#span9").text("");
		}
		var select4=$("#input4").val();
		var select5=$("#input5").val();
		var select6=$("#input6").val();
		var select8=$("#input8").val();
		if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && select4!="" && select5!="" && select6!="" && $("#input7").val()!="" && select8!="" && $("#input9").val()!="")
		{
	
		return true;	
		}
		else{
		return false;
		}
		})
	
	})
	