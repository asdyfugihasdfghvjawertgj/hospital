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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/home.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="js/home.js"></script>
<link rel="stylesheet" href="css/blooddonar.css">
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
<form method="POST" action="">
<div class="col-md-12">
        <h1 style="text-align: center;color:white;">Blood Donation Registration</h1>
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
				<input type="text" id="input1" name="name" class="form-control" placeholder="Enter Your Name" style="width:70%;">
				<span style="color: red" id="span1"></span>
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
				<label>Email<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
				<input type="text" id="input2" name="email" class="form-control" placeholder="Enter Your Email" style="width:70%;">
				<span style="color: red" id="span2"></span>
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
				<label>Phone Number<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                    </div>
				<input type="text" id="input3" name="ph" class="form-control" placeholder="Enter Your Phone Number" style="width:70%;">
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
				<label>Date of Birth<span style="color: red;">*</span></label>
				<input type="date" id="input4" name="bdate" class="form-control">
				<span style="color: red" id="span4"></span>
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
				<label>Type of Blood<span style="color: red;">*</span></label>

				
				<br>
				<select name="type" id="input5" style="width: 100%; height: 40px;">
				<option value=""></option>
				<option value="AB+">AB+</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
        		<option value="O-">O-</option>
				</select>
				<span style="color: red" id="span5"></span>
			</div>
		</div>
		</div>
		<div class="col-md-4">

		</div>
	
	
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="donation" id="donar" class="btn-outline-dark btn p-2" style="text-align: center; border-radius: 5%; width: 100px;background-color: rgb(179, 179, 216); ">Donation
		</button>
		
        </div>
        </form>
	</div>
	</div>
   
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/blooddonar.js"></script>
</body>
</html>
<?php
require("footer.php");
?>
