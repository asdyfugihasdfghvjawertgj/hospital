
<?php
	  	if (isset($_POST['log'])) {
	  		$email=$_POST['email'];
	  		$password=$_POST['password'];
	  		include_once('controller/registercontroller.php');
	  		$registerController=new RegisterController();
	  		$results=$registerController->getOther();
	  		foreach ($results as $result) {
	  		$email1=$result['email'];
        $password1=$result['password'];
        if ($email==$email1 && $password==$password1) {
	  			header('location:index.php');
	  		}
	  		}
	  		
	  		
	  	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</body>
</head>
<body>
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
.socialbar{
  background-color:#6F6F6F;
 
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
        <i class="far fa-envelope mb-3 mr-3 mail">  hkunpay7@gmail.com</i>
                   <i class="fas fa-phone-alt mb-3 phone">  +95 9954168420</span></i>
            </div>
            
    <div class="nav-item mr-4" style="float: right;">
      <i class="fab fa-instagram mr-3 integram" ></i>
			<i class="fab fa-facebook-f mr-3 fb"></i>
      <i class="fab fa-twitter twitter mr-3"></i>
      <div class="btn btn-primary register mb-3" style="background-color: rgb(179, 179, 216);" onclick="register()">Register</div>
		<div class="btn btn-primary login mb-3" style="background-color: rgb(179, 179, 216);" onclick="login()">Login</div>
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
          <a class="nav-link" href="bookingregister.php">Booking an Appointment</a>
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
          
          
       
      </ul>
      <form class="form-inline">
        <div class="col-auto">
          <label class="sr-only" for="inlineForm">Search</label>
          <div class="input-group mb-2">
            
            <input type="text" class="form-control" id="inlineForm" placeholder="Search">
            <div class="input-group-append search">
              <div class="input-group-text"><i class="fa fa-search fa-lg"></i></div>
            </div>
          </div>
        </div>
      </form>
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



<div class="container bg-light mt-3" id="show">
<form method="POST" >
<div class="col-md-12">
        <h1 style="text-align: center;color:black;font-weight:bold;">Login </h1>
    </div>
	<div class="row pt-3">
  <div class="col-md-4">
  </div>
		<div class="col-md-4">
			<div class="form-group">
				<label>EMAIL</label>
        <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
				<input type="text" name="email" id="input1" class="form-control" placeholder="Enter your Email" style="width:70%;" >
				<span style="color: red;" id="span1"></span>
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
				<label>PASSWORD</label>
        <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
				<input type="password" name="password" id="input2"class="form-control" placeholder="Enter your Password" style="width:70%;">
				<span style="color: red;" id="span2"></span>
        </div>
			</div>
		</div>
    <div class="col-md-4">
    </div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="login" class="btn btn-outline-dark p-2" style="text-align: center; border-radius:5%; background-color: rgb(179, 179, 216); width: 100px;" name="log">Login
		</button>
	</div>
</form>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/userlogin.js"></script>	
</body>
</html>
<?php
require("footer.php");
?>