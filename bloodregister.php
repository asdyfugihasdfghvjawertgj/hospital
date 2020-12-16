<?php
session_start();
require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood registration</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bloodregister.css">
<style>

#show{
	background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
	
}
</style>
</head>
<body>
<div class="container">
        <ul class="progressbar">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
    </div>
<div class="container bg-light mt-5" id="show">
<form method="POST" action="blooddonar.php">
<div class="col-md-12">
        <h1 style="text-align: center;color:white;">Blood Register</h1>
    </div>
	<div class="row pt-3">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Name<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                    </div>
				<input type="text" id="input1" name="name" class="form-control"  placeholder="Enter Your Name" style="width:70%;">
				<span style="color: red" id="span1"></span>
</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Email<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
				<input type="text" id="input2" name="email" class="form-control"  placeholder="Enter Your Email" style="width:70%;">
				<span style="color: red" id="span2"></span>
</div>
			</div>
			<div class="col-md-4">

			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
	<div class="col-md-4">
			<div class="form-group">
				<label>Password<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
				<input type="password" id="input3" name="password" class="form-control"  placeholder="Enter Password" style="width:70%;">
				<span style="color: red" id="span3"></span>
</div>
			</div>
		</div>
		<div class="col-md-4">

		</div>
	</div>
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Confirm-password<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
				<input type="password" id="input4" name="confirm" class="form-control"  placeholder="Enter Confirm Password" style="width:70%;">
				<span style="color: red" id="span4"></span>
</div>
			</div>
		</div>
		<div class="col-md-4">

		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="register" id="reg" class="btn btn-outline-dark p-2" style="text-align:center; border-radius: 5%; width: 100px;background-color: rgb(179, 179, 216); ">Register
		</button>
		</div>
		</form>
	</div>
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script>
$(document).ready(function(){

$("#reg").click(function(){
	if ($("#input1").val()=="") {
		$("#span1").text("!Pleae Enter Your Name");
	}
	else{
		$("#span1").text("");
	}
	if ($("#input2").val()=="") {
		$("#span2").text("!Pleae Enter Your Email");
	}
	else{
		$("#span2").text("");
	}
	if ($("#input3").val()=="") {
		$("#span3").text("!Pleae Enter Your Password");
	}
	else{
		$("#span3").text("");
	}
	
	if ($("#input4").val()=="") {
		$("#span4").text("!Pleae Enter Your Confirm_Password");
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
	</script>
</body>
</html>
<?php
require("footer.php");
?>