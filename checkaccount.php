<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <!-- fontlink end -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
  function Re(){
window.location.href=("first.php");
}
function pageRedirect(){
window.location.href=("checkaccount.php");
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
.nav-item{
    padding: 5px;
}
nav ul li a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #aaa;
    font-weight: 400;
    margin: 0 10px;
  }
  #reg{

    background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
  }
</style>
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
        
          <div class="col-md-6 col2" id="one" onclick=" Re()" >
        
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
          <div class="col-md-6 col2" id="four" onclick="direct()" >
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

<div class="container bg-light mt-2" id="reg" >
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 style="text-align: center;">Have you already an account?</h3>
            </div>
        </div>
   
        <div class="row mt-4"> 
            <div class="col-md-2">
            
        </div>
    
    
        <div class="col-md-2">
            
        
    </div>
    <div class="col-md-2">
        <button id="register" class="btn btn-outline-dark" style="border-left:1px solid black;background-color: rgb(179, 179, 216);">Register</button>
    </div>


    <div class="col-md-2 mb-5">
        <button id="login" class="btn btn-outline-dark" style="border-left:1px solid black;background-color: rgb(179, 179, 216);">Login</button>
    
</div>
<div class="col-md-2">
   
</div>


<div class="col-md-2">
    

</div>


        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
	$("#login").click(function()
    {
      window.location.href="bookinglogin.php";
    });

    $("#register").click(function()
    {
        window.location.href="bookingregister.php";
    });
   
});
        
</script>
</body>
</html>
<?php
require("footer.php");
?>