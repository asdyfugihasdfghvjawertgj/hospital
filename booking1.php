<?php
session_start();
//echo $_SESSION['did'];
//echo $_SESSION['id'];
//echo $_SESSION['pid'];
$user=$_SESSION['uid'];
//echo $user;
$patient=$_SESSION['pid'];

include_once('controller/categorycontroller.php');
$categorycontroller=new CategoryController();
$results=$categorycontroller->speciality();
if (isset($_POST['booking'])) {
	
$speciality=$_POST['speciality'];
$sub=$_POST['sub'];
$doctor=$_POST['doctor'];
$medical=$_POST['medical'];

include_once('controller/bookingcontroller.php');
$bookingController=new BookingController();
$bookingController->addBooking($user, $patient,$doctor,$medical);
echo '<script>alert("Your booking registration is Successful!.");
window.location.href="index.php";
</script>';
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
	<link href="css/blooddonar.css" rel="stylesheet">

<style>
body{

font-family: 'ZCOOL XiaoWei', serif;

}
.blue{
background-color:#6F6F6F;
 
}
#show{

background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
}
</style>
</head>
<body>
<body>
<div class="container">
        <ul class="progressbar">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
    </div>
<div class="container bg-light mt-5"id="show" >
<form method="POST" action="">
<div class="col-md-12">
        <h1 style="text-align: center;color:white;">Booking </h1>
    </div>
	<div class="row">
  <div class="col-md-4">
  </div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Please select speciality<span style="color: red;">*</span></label>
				<br>
				<select id="input4" name="speciality" style="width: 100%; height: 40px;">
				<option value="">Please select speciality</option>
				<?php
				foreach ($results as $result) {
					?>
					<option value="<?php echo $result['id'] ?>"><?php echo $result['name']; ?></option>
					<?php
				}
				?>
				</select>
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
				<label>Please select sub-speciality<span style="color: red;">*</span></label>
				<br>
				<select id="input5" name="sub" style="width: 100%; height: 40px;">
				<option value="">Please select sub_speciality</option>
				<?php

                        foreach($results as $result)
                        {

                        ?>
                        <option value="<?php echo $result['id'];?>"><?php echo $result['name'];?> </option>
                        <?php
                        }
                        ?>     
                    </select>
				<span style="color: red" id="span5"></span>
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
				<label>Please select doctor<span style="color: red;">*</span></label>
				<br>
				<select id="input6" name="doctor" style="width: 100%; height: 40px;">
				<option value="">Please select doctor</option>
				<?php

foreach($sresults as $result)
{

?>
<option value="<?php echo $result['id'];?>"><?php echo $result['name'];?> </option>
<?php
}
?>     
				</select>
				<span style="color: red" id="span6"></span>
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
				<label>Preferred Date<span style="color: red;">*</span></label>
				<input type="date" name="date" id="input7" style="width: 100%;">
				<span style="color: red" id="span7"></span>
			</div>
		</div>
	</div>
	<div class="row">
  <div class="col-md-4">
  </div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Mediacal concern or request<span style="color: red;">*</span></label>
        <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-book-medical"></i></div>
                    </div>
				<input type="text" id="input9" name="medical" class="form-control" placeholder="Enter Medical Concern" style="width:70%;">
				<span style="color: red" id="span9"></span>
        </div>
			</div>
		</div>
    <div class="col-md-4">
    </div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="booking" name="booking" class="btn-outline-dark p-2" style="text-align: center; border-radius: 5%;  background-color: rgb(179, 179, 216); width: 100px;">SUBMIT
		</button>
	</div>
</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
    $("#input4").change(function()
    {
      $speciality=$(this).val();
      $("#input5").empty();
        $.get("getsub.php",{speciality:$speciality},function(data){
        $("#input5").html(data);
       
       });
    });
    $("#input5").change(function()
    {
      $sub=$(this).val();
      $("#input6").empty();
        $.get("getdoctors.php",{sub:$sub},function(data){
        $("#input6").html(data);
       });
    });
});
</script>

    <script src="js/booking.js"></script>
	<div class="container-fluid">
<footer class="page-footer font-small  pt-4 pl-5 mt-4" style="background-color:  rgb(32, 88, 105);">

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
</body>

</html>
