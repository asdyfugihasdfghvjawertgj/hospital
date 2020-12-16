<?php

?>
<?php

$input1="";
$input2="";
$input3="";
$input4="";
$input5="";
$input6="";
$input7="";
$inputerror1="";
$inputerror2="";
$inputerror3="";
$inputerror4="";
$inputerror5="";
$inputerror6="";
$inputerror7="";
if(isset($_POST['register'])){
	  	if (!empty($_POST['input1'])) {
	  	$input1=$_POST['input1'];	
	  	}
	  	else{
	  		$inputerror1="require first name";
	  	}
	  	if (!empty($_POST['input2'])) {
	  	$input2=$_POST['input2'];	
	  	}
	  	else{
	  		$inputerror2="require last name";
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
	  		$inputerror4="require your birth";
	  	}
	  	if (!empty($_POST['input5'])) {
	  	$input5=$_POST['input5'];
	  	}
	  	else{
	  		$inputerror5="require email or ph";
	  	}
	  	if (!empty($_POST['input6'])) {
	  	$input6=$_POST['input6'];
	  	}
	  	else{
	  		$inputerror6="require password";
	  	}
	  	if (!empty($_POST['input7'])) {
	  	$input7=$_POST['input7'];
	  	}
	  	else{
	  		$inputerror7="require confirm password";
	  	}
	  	if (!empty($input1) && !empty($input2) && !empty($input3) && !empty($input4) && !empty($input5) && !empty($input6) && !empty($input7) && $input7== $input6) {
			include_once('controller/registercontroller.php');
			$registerController=new RegisterController();
		$registerController->createRegister($input5,$input7);
	  header('location:userlogin.php');
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/home.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="js/home.js"></script>

	<script>
    function Re(){
window.location.href=("first.php");
}
function pageRedirect(){
window.location.href=("bookingregister.php");
}
function Redirect(){
window.location.href=("service.php");
}

function direct(){
window.location.href=("contact.php");
}

function register(){

window.location.href=("userregister.php");
}

function login(){

window.location.href=("userlogin.php");
}
</script>
<style>
body{

font-family: 'ZCOOL XiaoWei', serif;

}
.logo{
      margin-top:20px;
      color:White;
      font-size:30px;
      font-weight:bold;
    }
    .stroke, #inlineForm{
    background-color:  rgb(32, 88, 105);
    text-align: center;
}
.socialbar{
  background-color:#6F6F6F;
 
}

#show{

background: linear-gradient(45deg,rgb(32, 88, 105) 50%,#9ED9E1 50%);
border-radius: 10px 10px 10px 10px;
    -webkit-box-shadow: 5px 5px 16px 5px #000000; 
box-shadow: 5px 5px 16px 5px #000000;
   
}
</style>
</head>
<body>

<div class="container-fluid socialbar">
		<div class="navbar bar" style="color: white;">
			<div class="nav-item" style="float: left;">
      <i class="far fa-envelope mb-3 mr-3 mail">  newacademy@gmail.com</i>
                   <i class="fas fa-phone-alt mb-3 phone"> 1-855-404-3304</span></i>
            </div>
            
    <div class="nav-item mr-4" style="float: right;cursor:pointer;">
    <i class="fab fa-facebook-square" style="font-size:30px;"></i>
    <i class="fas fa-at" style="font-size:30px;"></i>
    <i class="fab fa-linkedin" style="font-size:30px;"></i>
  
    <i class="fab fa-twitter-square" style="font-size:30px;"></i>
		</div>
		</div>
  </div>
<nav class="navbar navbar-expand-lg navbar-light  stroke">
    <a class="navbar-brand" href="index.php"><img src="image/logo8.png" width="120" height="120"  alt="" loading="lazy">
      <span class="logo">New Academy</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="first.php">Find Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkaccount.php">Booking an Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="blood.php">Blood Donation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Abouts Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact US</a>
          </li>
          
      <?php
     
           if(isset($_SESSION['uid'])){
           	?>
          <div class="dropdown">
		 
          <div class="btn text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['uname']; ?>
		   </div>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="logout.php">Logout</a>   
        </div>
        </div>
      <?php 
      } 
      else{
      	?>
      	
      <?php
      }
      ?>

       
      </ul>
     
    </div>
  </nav> 

  <!-- image and button -->
  <div class="container  banner mt-2">
    <div id="blocks-wrapper">
    <div class="row">
      <div class="col-md-6 col1 bannerimg">

        <!-- <img src="image/banner.jpg" class=" w-100 shadow-2-strong" alt="Responsive image"> -->
        <h1 class="hy mt-5"> Healthy Hygienic</h1>
        <h1 class="ml-5">Hospital </h1>
          <h1>With Humanity</h1>
      </div>


     <div class="col-md-6 bannerbtn">
        <div class="row">
          <div class="col-md-6 col2" id="one" onclick="Re()">
        
            <div class="block green">
                         
              <i class="fas fa-user-md" data-aos="flip-left"
              data-aos-easing="ease-out-cubic"
              data-aos-duration="2000"
              data-aos="zoom-out-left"></i>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              
                <h3 class="mb-3">Find a doctor</h3>
            </div>
          </div>
          <div class="col-md-6 col2" id="two" onclick="pageRedirect()">
            <div class="block green">
                         
              <i class="fas fa-user-md" 
              data-aos="fade-up"
              data-aos-duration="2000"></i>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
                <h3>Book an Appointment</h3>
            </div>
          </div>
        </div>
  
        <div class="row">
          <div class="col-md-6 col2" id="three" onclick="Redirect()">
            <div class="block green">
                         
              <i class="fas fa-concierge-bell"></i>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
                <h3>Services</h3>
            </div>
          </div>
          <div class="col-md-6 col2" id="four" onclick="direct()">
            <div class="block green">
                         
              <i class="fas fa-id-card-alt" data-aos="fade-up"></i> 
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              
                <h3>Contacts Us</h3>
            </div>
          </div>
        </div>
      </div> 
    </div>
    </div>
  </div> 




<div class="container bg-light mt-2" id="show">
<form method="POST" action="">
<div class="col-md-12 mt-3 ">
        <h1 style="text-align: center;color:black;font-weight:bold;">Register </h1>
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
				<input type="text" name="input1" class="form-control" placeholder="Enter First Name" style="width:70%;"  value=<?php echo $input1;?>>
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
				<input type="text" name="input2" class="form-control" placeholder="Enter Last Name" style="width:70%;"  value=<?php echo $input2;?>>
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
				<input type="date" name="input4" class="form-control" value=<?php echo $input4;?>>
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
        <label>Email or Phone Number<span style="color: red;">*</span></label>
        <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
				<input type="text" name="input5" class="form-control" placeholder="Enter your Email or Phone" style="width:70%;"  value=<?php echo $input5;?>>
        <span style="color: red"><?php echo $inputerror5; ?></span>
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
				<input type="password" name="input6" class="form-control" placeholder="Enter your Password" style="width:70%;"  value=<?php echo $input6;?>>
        <span style="color: red"><?php echo $inputerror6; ?></span>
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
				<input type="password" name="input7" class="form-control" placeholder="Enter your Confirm Password" style="width:70%;"  value=<?php echo $input7;?>>
        <span style="color: red"><?php echo $inputerror7; ?></span>
      </div>
			</div>
    </div>
    <div class="col-md-4">

    </div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="register" id="reg" class=" p-2" style="text-align: center; border-radius: 5%;width: 100px;background-color: rgb(179, 179, 216);" >Register
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