<?php
session_start();
//echo $_SESSION['id'];

//echo $_SESSION['did'];
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
	  		$inputerror1="Please Enter first name";
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
	  		$inputerror3="please select male or female";
	  	}
	  	if (!empty($_POST['input4'])) {
	  	$input4=$_POST['input4'];
	  	}
	  	else{
	  		$inputerror4="Please Select  your birthday";
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
		// $_SESSION['did'];
		if(!empty($_SESSION['did'])){

			header('location:booking2.php');
		}
		else{
			header('location:booking1.php');
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
	<link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/patient.css">
    <style>
	body{

		font-family: 'ZCOOL XiaoWei', serif;
	}
#show{

	background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
	
}

.blue{
background-color:#6F6F6F;
 
}
	</style>
</head>
<body>


<div class="container mt-2">
	<div class="row">
		<div class="col-md-2">

		</div>
		<div class="col-md-8">
		<ul class="progressbar">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
	</div>
	<div class="col-md-2">
	<button class="btn btn-outline-dark" id="history" style="float:right;background-color: rgb(179, 179, 216); border-radius:5%;">View History</button>
	</div>
		</div>
	</div>
	<div class="container bg-light" id="view">

</div>
<div class="container bg-light mt-1" id="show">

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
				<input type="text" name="input1" class="form-control"  placeholder="Enter First Name" style="width:70%;" value=<?php echo $input1; ?>>
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
				<label>Last Name<span style="color: red;">*</span></label>

				<div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-users"></i></div>
                    </div>
				<input type="text" name="input2" class="form-control"  placeholder="Enter Last Name" style="width:70%;" value=<?php echo $input2; ?>>
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
				<input type="text" name="input5" class="form-control"  placeholder="Enter Your Email" style="width:70%;" value="<?php echo $input5; ?>">
				<span style="color: red"><?php echo $inputerror5; ?></span>
				</div>
			</div>
		</div>

		<div class="col-md-4">
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="patient" class="btn btn-outline-dark p-2" style="text-align: center; border-radius: 5%; width: 100px; background-color: rgb(179, 179, 216);">Continue
		</button>
		</div>
		</form>
	</div>


	<div class="container-fluid">
<footer class="page-footer font-small  pt-4 pl-5 mt-2" style=" background-color:  rgb(32, 88, 105);">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">
<div class="container">
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 link" data-aos="flip-left"
      data-aos-easing="ease-out-cubic"
      data-aos-duration="2000">

        <!-- Links -->
        <h5 class="text-uppercase" data-aos="fade-up" style="text-transform: unset;">Action</h5>

        <ul class="list-unstyled">
          <li>
            <i class="fas fa-clinic-medical"></i>  <a href="#!" style="color: #fff;" class="mb-3">Find Doctor</a>
          </li>
          <li>
            <i class="fas fa-clinic-medical"></i>  <a href="#!" style="color: #fff;" class="mb-3">Book Appointment</a>
          </li>
          <li>
            <i class="fas fa-clinic-medical"></i>  <a href="#!" style="color: #fff;" class="mb-3">Blood Donation</a>
          </li>
          <li>
            <i class="fas fa-clinic-medical"></i>  <a href="#!" style="color: #fff;" class="mb-3">View Services</a>
          </li>
          <li>
            <i class="fas fa-clinic-medical"></i>  <a href="#!" style="color: #fff;" class="mb-3">View Hospital Event</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

     

      <!-- Grid column -->
      <div class="col-md-4 link1 " data-aos="flip-left"
      data-aos-easing="ease-out-cubic"
      data-aos-duration="2000">

        <!-- Links -->
        <h5 class="text-uppercase " data-aos="fade-up">Blog & News</h5>

        <ul class="list-unstyled">
          <li>
            <i class="fas fa-blog"></i>  <a href="#!" style="color:white;">Hospital Event</a>
          </li>
          <li>
            <i class="fas fa-blog"> </i><a href="#!" style="color:white;">Update News</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 link2" data-aos="flip-left"
      data-aos-easing="ease-out-cubic"
      data-aos-duration="2000">

        <!-- Links -->
        <h5 class="text-uppercase" data-aos="fade-up">Contact Information</h5>

        <ul class="list-unstyled">
          <li>
            <i class="far fa-envelope"></i>  <a href="#!" style="color: #fff;" class="mb-3">hkunpay7@gmail.com</a>
          </li>
          <li>
            <i class="fas fa-phone-square-alt"></i>  <a href="#!" style="color:white;">09262888722</a>
          </li>
          <li>
            <i class="fas fa-search-location"></i>  <a href="#!" style="color:white;">Mandalay</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
</div>
  </div>
  <!-- Footer Links -->
 
</footer>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy;Copyright 2020. All Rights Reserved. Designed by Group 4
  </div>
  <!-- Copyright -->

</footer>
</div>
<!-- Footer -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>


    <script type="text/javascript">
	$(document).ready(function(){
	$("#history").click(function()
    {
     $("#view").empty();
     
        $.get("gethistory.php",{session:<?php echo $_SESSION['uid']; ?>},function(data){
			$("#view").html(data);
       
       });
    });
   
	document.getElementById("history").onclick=()=>{
		if(document.getElementById("view").style.display =='block'){
			document.getElementById("view").style.display ='none';
		}
		else{
			document.getElementById("view").style.display ='block';
		}

	}
    });
        
</script>
</body>
</html>
