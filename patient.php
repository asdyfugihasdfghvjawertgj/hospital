<?php
session_start();
//echo $_SESSION['did'];
//echo $_SESSION['id'];
//$_SESSION['did'];
$input1="";
$input2="";
$input3="";
$input4="";
$input5="";
$inputerror1="";
$inputerror2="";
$inputerror3="";
$inputerror4="";
$inputerror5="";
if(isset($_POST['patient'])){
	  	if (!empty($_POST['input1'])) {
	  	$input1=$_POST['input1'];	
	  	}
	  	else{
	  		$inputerror1="Please Enter  first name";
	  	}
	  	if (!empty($_POST['input2'])) {
	  	$input2=$_POST['input2'];	
	  	}
	  	else{
	  		$inputerror2="Please Enter last name";
	  	}
	  	if (!empty($_POST['gender'])) {
	  	$input3=$_POST['gender'];
	  	}
	  	else{
	  		$inputerror3="Please select male or female";
	  	}
	  	if (!empty($_POST['input4'])) {
	  	$input4=$_POST['input4'];
	  	}
	  	else{
	  		$inputerror4="Please Select Your birthday";
	  	}
	  	if (!empty($_POST['input5'])) {
	  	$input5=$_POST['input5'];
	  	}
	  	else{
	  		$inputerror5="Please Enter Your email";
	  	}
	  	if (!empty($input1) && !empty($input2) && !empty($input3) && !empty($input4) && !empty($input5)) {
	  	include_once('controller/patientcontroller.php');
		$patientController=new PatientController();
		$patientController->createPatient($input1,$input2,$input3,$input4,$input5);	
	
		if(!empty($_SESSION['did'])){
			header('location:booking2.php');

		}
		else{
			header('location:booking.php');
		}
	
	}
	include_once('controller/patientcontroller.php');
		$patientController=new PatientController();
		$results=$patientController->showPat($input5);
		foreach ($results as $result) {
		  $_SESSION['pid']=$result['id'];
		  
	  				$_SESSION['id'];
			
		}
	
}
?>

<?php
require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood registration</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/patient.css">
<style>
#show{
	background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
	
}
</style>
</head>
<body>
<div class="container mb-4">
        <ul class="progressbar ">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
    </div>


	<div class="container bg-light mt-5" id="show"> 
<form method="POST" action="">
<div class="col-md-12">
        <h1 style="text-align: center;color:white;">Patient Information</h1>
    </div>
	<div class="row pt-3">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>First Name<span style="color: red;">*</span></label>

				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-users"></i></div>
                    </div>
				<input type="text" name="input1" class="form-control" placeholder="Enter First Name" style="width:70%;" value=<?php echo $input1; ?>>
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
				<label>last Name<span style="color: red;">*</span></label>

				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-users"></i></div>
                    </div>
				<input type="text" name="input2" class="form-control" placeholder="Enter Last Name" style="width:70%;" value=<?php echo $input2; ?>>
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
			<label>Gender<span style="color: red;">*</span></label>
			
			<div name="input3">
			<input type="radio" name="gender" value="male" class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male'): ?>checked='checked'<?php endif; ?> /> Male
			<input type="radio" name="gender" value="female"  class="radio" <?php if (isset($_POST['gender']) && $_POST['gender'] ==  'female'): ?>checked='checked'<?php endif; ?> /> Female
		</div>
		<span style="color: red"><?php echo $inputerror3; ?></span>
		</div>

		<div class="col-md-4">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label>Date of birth<span style="color: red;">*</span></label>
				
				<input type="date" name="input4" class="form-control" value=<?php echo $input4; ?>>
				<span style="color: red"><?php echo $inputerror4; ?></span>
			
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
				<input type="text" name="input5" class="form-control" placeholder="Enter Your Email" style="width:70%;" value="<?php echo $input5; ?>">
				<span style="color: red"><?php echo $inputerror5; ?></span>
			</div>
			</div>
		</div>

		<div class="col-md-4">
			
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="patient" class="btn-outline-dark p-2" style=" background-color: rgb(179, 179, 216); text-align: center; border-radius: 5%; width: 100px;">Continue
		</button>
		
	</div>
	</form>
	</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
require("footer.php");
?>