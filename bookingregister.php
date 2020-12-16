<?php
session_start();
//$_SESSION['did']=$_GET['id'];
$name="";
$email="";
$phone="";
$password="";
$confirm="";
$inputerror1="";
$inputerror2="";
$inputerror3="";
$inputerror4="";
$inputerror5="";
if(isset($_POST['bookingreg'])){
	  	if (!empty($_POST['name'])) {
	  	$name=$_POST['name'];	
	  	}
	  	else{
	  		$inputerror1="!Please Enter Your name";
	  	}
	  	if (!empty($_POST['email'])) {
	  	$email=$_POST['email'];	
	  	}
	  	else{
	  		$inputerror2="!Please Enter Your email";
	  	}
	  	if (!empty($_POST['ph'])) {
	  	$phone=$_POST['ph'];
	  	}
	  	else{
	  		$inputerror3="!Please Enter Your phone number";
	  	}
	  	if (!empty($_POST['psw'])) {
	  	$password=$_POST['psw'];
	  	}
	  	else{
	  		$inputerror4="!Please Enter Your password";
	  	}
	  	if (!empty($_POST['cpsw'])) {
	  	$confirm=$_POST['cpsw'];
	  	}
	  	else{
	  		$inputerror5="!Please Enter Your Confirm-Password";
	  	}
	  	if (!empty($name) && !empty($email) && !empty($phone) && !empty($password) && !empty($confirm) && $confirm== $password) {
	  	include_once('controller/bookingregcontroller.php');
		$bookinfregController=new BookingregController();
		$bookinfregController->addBookingreg($name,$phone,$email,$confirm);
		  //$_SESSION['email']=$_POST['email'];
		  $_SESSION['did']=$_GET['id'];
		header('location:patient.php');
	}
	include_once('controller/bookingregcontroller.php');
		$bookinfregController=new BookingregController();
		$results=$bookinfregController->showBookingreg($email);
		foreach ($results as $result) {
			$_SESSION['id']=$result['id'];
		}
}
	
?>
<?php
require_once("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood registration</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bookingregister.css">

<style>
#show{
    	
		background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
		}
	
</style>
</head>
<body>
   
<div class="container" id="progress">
        <ul class="progressbar">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
    </div>
	<!-- <div class="container">
	<div class="row">
	<div class="col-md-4">
	<h5 class="ml-5">Have You Already an Account??</h5>
	</div>

	</div></div> -->
	<div class="container bg-light mt-5" id="show">
		
<form method="POST" action="">
<div class="col-md-12">
        <h1 style="text-align: center;color:white;">Booking Register</h1>
    </div>
	<div class="row pt-3">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Name<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-users"></i></div>
                    </div>
				<input type="text"  name="name"  class="form-control" placeholder="Enter Name" style="width:70%;" value=<?php echo $name; ?>>
				
				<span style="color: red"><?php echo $inputerror1; ?></span>
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
				
				<input type="text"  name="email"  class="form-control" placeholder="Enter Email" style="width:70%;" value=<?php echo $email; ?>>
				<span style="color: red"><?php echo $inputerror2; ?></span>
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
				<input type="text"  name="ph"  class="form-control" placeholder="Enter Phone Number" style="width:70%;" value=<?php echo $phone; ?>>
				<span style="color: red"><?php echo $inputerror3; ?></span>
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
				<label>Password<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
				<input type="password"  name="psw"  class="form-control" placeholder="Enter Password" style="width:70%;" value=<?php echo $password; ?>>
				<span style="color: red"><?php echo $inputerror4; ?></span>
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
				<label>Confirm-Password<span style="color: red;">*</span></label>
				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
				<input type="password"  name="cpsw"  class="form-control" placeholder="Confirm Password" style="width:70%;" value=<?php echo $confirm; ?>>

				<span style="color: red"><?php echo $inputerror5; ?></span>
	</div>
			</div>
		</div>

		<div class="col-md-4">
			
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="bookingreg"  class="btn-outline-dark p-2" style="background-color: rgb(179, 179, 216); text-align: center; border-radius: 5%; width: 100px;">Register
		</button>
	</div>
</form>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</body>
</html>

<?php
require("footer.php");
?>