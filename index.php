<?php
session_start();
?>

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
<script src="js/home.js"></script>
<script>
  function Re(){
window.location.href=("first.php");
}
function booking(){

 <?php
  if(isset($_SESSION['uid'])){
    ?>
 window.location.href="patient1.php";
 <?php
}

else{
  ?>
  window.location.href="checkaccount.php";
  <?php
}
?>
}
function pageRedirect(){
  <?php
  if(isset($_SESSION['uid'])){
    ?>
 window.location.href="patient1.php";
 <?php
}

else{
  ?>
  window.location.href="checkaccount.php";
  <?php
}
?>
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
  .hospital h2,h4 {
  margin: 30px 0;
  font: 700 2em/1.4 'ZCOOL XiaoWei', serif;
 
}
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
.blue{
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
  <div class="container-fluid">

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
          <a class="nav-link" onclick="booking()">Booking an Appointment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="blood.php">Blood Donation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="service.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Abouts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact US</a>
          </li>
       </ul>
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
      <?php } 
      else{
        ?>
        
      <?php }?>
     
     
    </div>
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

<div class="container hospital">
  <div class="row">
    <div class="col-md-12">
      <h2 data-aos="fade-up" data-aos-duration="2000" style="color:gray">Hospital Event</h2>
    </div>
  </div>
</div>

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 body">
  
        <div class="card">
          
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="image/donation1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/donation2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image/donation1.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>

          <div class="card-body">
            <h5 class="card-title">Covid-19 Donation</h5>
            <p class="card-title">6 November 2020</p>
            <p class="card-text">AA Medical Products Ltd., Pacific AA Foundation contributed 837,000 MMK worth of antibiotic injections to Ayeyarwaddy Foundation for prevention, containment & treatment of Covid-19.<span id="dots">...</span><span id="more">AA Medical Products Ltd., Pacific AA Foundation contributed 837,000 MMK worth of antibiotic injections to Ayeyarwaddy Foundation for prevention, containment & treatment of Covid-19. </span></p>
            <button onclick="myFunction()" id="myBtn" class="btn btn btn-outline-dark" style="background-color: rgb(179, 179, 216);color:white;">Read more</button>
          </div>
        </div>
      </div>

      <div class="col-md-4 body">
  
        <div class="card">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/donation3.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="image/donation3.jpg" class="d-block w-100" alt="...">
  </div>
  <div class="carousel-item">
    <img src="image/donation3.jpg" class="d-block w-100" alt="...">
  </div>
  </div>
</div>
<div class="card-body">
  <h5 class="card-title">Blood Donation Pacific-AA Group</h5>
  <p class="card-title">1 December 2020</p>
  <p class="card-text">Blood Donation Event of Pacific-AA Group organized by Pacific-AA Foundation and Feropac was held at National Blood Bank (Yangon) on 6th October 2019 (Sunday).In this event, Dr. Zaw Moe Khine<span id="dots1">...</span><span id="more1"> + Dr. Saw Nay Nwe (Pacific-AA Foundation) (Pacific-AA Group)'s family donated cash 1 million Kyats and Feropac Hamper Gift to National Blood Bank (Yangon). Over 90 Office Staffs donated their fresh blood in this event.erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
  <button onclick="myFunction1()" id="myBtn1" class="btn btn btn-outline-dark" style="background-color: rgb(179, 179, 216);color:white;">Read more</button>
</div>
        </div>
      </div>

      <div class="col-md-4 body">
  
        <div class="card">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/donation7.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/donation7.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/donation7.jpg" class="d-block w-100" alt="...">
            </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">FMI’s Donation to COVID-19 Outbreak</h5>
            <p class="card-title">21 March 2020</p>
            <p class="card-text">Covid-19 poses a serious risk to Myanmar, but the Yoma Group is committed to support where it can and to get through these with its communities.<span id="dots2">...</span><span id="more2">On 21 March 2020, Yoma Group donated two ventilators, three patient monitors, 500 Personal Protective Equipment sets and 10,000 masks to the Ministry of Health and Sports in response to Covid-19.</span></p>
            <button onclick="myFunction2()" id="myBtn2"class="btn btn btn-outline-dark" style="background-color: rgb(179, 179, 216);color:white;">Read more</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container hospital">
    <div class="row">
      <div class="col-md-12">
        <h2 data-aos="fade-up" data-aos-duration="2000" style="color:gray">Hospital Specialities</h2>
        <p data-aos="zoom-in">With Super specialist doctors and state-of-the-art technology, we cover the complete spectrum of medical specialties.</p>
      </div>
    </div>
  </div>
<!-- social and footer -->




<div class="container mt-3  specialist">
  <div class="row">
    <div class="col-md-2 social ml-4 mr-3">
         
      <img data-aos="fade-right" data-aos-duration="2000"  src="image/centre-for-spinal-diseases.png" class="rounded mx-auto d-block" alt="...">
      <h4 data-aos="zoom-in-up" data-aos-duration="2000">Bone</h4>
    </div>
    <div class="col-md-2 social mr-3">
         
      <img data-aos="fade-right" data-aos-duration="2000"  src="image/throat.png" class="rounded mx-auto d-block" alt="...">
      <h4 data-aos="zoom-in-up" data-aos-duration="2000"> Throat</h4>
    </div>
    <div class="col-md-2 social mr-3">
         
      <img src="image/eye.png" class="rounded mx-auto d-block" alt="...">
      <h4>Eye</h4>
    </div>
    <div class="col-md-2 social mr-3">
         
      <img data-aos="fade-left" data-aos-duration="2000"  src="image/brain.png" class="rounded mx-auto d-block" alt="...">
      <h4 data-aos="zoom-in-up" data-aos-duration="2000">Brain</h4>
    </div>
    <div class="col-md-2 social mr-3">
         
      <img data-aos="fade-left" data-aos-duration="2000"  src="image/tooth.png" class="rounded mx-auto d-block" alt="...">
      <h4 data-aos="zoom-in-up" data-aos-duration="2000">Tooth</h4>
    </div>
  </div>
</div>
    <!-- footer -->
   
<footer class="page-footer font-small  pt-4 pl-5 mt-4" style=" background-color:  rgb(32, 88, 105);">

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
            <i class="fas fa-blog"></i>  <a href="#!">Hospital Event</a>
          </li>
          <li>
            <i class="fas fa-blog"> </i><a href="#!">Update News</a>
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
            <i class="fas fa-phone-square-alt"></i>  <a href="#!">09262888722</a>
          </li>
          <li>
            <i class="fas fa-search-location"></i>  <a href="#!">Mandalay</a>
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
  <div class="footer-copyright text-center py-3">
    <span style="color:white;">&copy;Copyright 2020. All Rights Reserved. Designed by Group 4</span>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>