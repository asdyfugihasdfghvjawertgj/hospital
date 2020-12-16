<?php
session_start();
//echo $_SESSION['uid'];
require("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
    
</head>
<style>
body{
   

font-family: 'ZCOOL XiaoWei', serif;


}
    .button1 {
        -webkit-box-shadow: 5px -1px 37px -1px rgba(0,0,0,0.57); 
box-shadow: 5px -1px 37px -1px rgba(0,0,0,0.57);
        height: 60px;
        margin-right: 20px;
        background-color: rgb(179, 179, 216);
    }
    .button1 h4{
        text-align: center;
        
    }

    .button2 {
        -webkit-box-shadow: 5px -1px 37px -1px rgba(0,0,0,0.57); 
box-shadow: 5px -1px 37px -1px rgba(0,0,0,0.57);
        height: 60px;
        margin-right: 20px;
        cursor:pointer;
        
    }
    .button2 h4{
        text-align: center;
        
        
    }
.border{
  -webkit-box-shadow: 5px -1px 37px -1px rgba(0,0,0,0.57); 
box-shadow: 5px -1px 37px -1px rgba(0,0,0,0.57);

}
    .firstform {
        border-right: 2px solid rgb(85, 72, 72);
        height: 300px;
        margin-right: 20px;
    }

    .subform {
       
        padding: 10px;
    }
    .oragan{
       
        height: 120px;

    }
    .oragan{
        align-items: center;
    }
    .ora{
       
        height: 120px;  
    }
    .blue{
background-color:#6F6F6F;
 
}
</style>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3 button1" onclick="calc()">
                <h4 class="mt-2">Oragan Search</h4>
            </div>
            <div class="col-md-3 button2" onclick="cal()">
                <h4 class="mt-2">Find a Doctor</h4>
            </div>
        </div>
    </div> 
    <div class="container mt-3 border">
        <div class="row">

                    <div class="col-sm-6 subform">
                        <div class="col-md-12">
                            <h4 style="text-align:center;">Select affected organ:</h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-3 oragan ml-1">
                                <img src="image/eye.png" alt="" id="9" class="ml-3">
                                <h3 style="text-align: center;">Eye</h3>
                            </div>
                            
                            <div class="col-sm-3 oragan ml-1">
                                <img src="image/throat.png"alt="" id="1" class="ml-3">
                                <h3 style="text-align: center;">Throat</h3>
                            </div>
                            <div class="col-sm-3 oragan ml-1">
                                <img src="image/brain.png" alt="" id="12" class="ml-3">
                                <h3 style="text-align: center;">brain</h3>
                            </div>
                            
                        </div>

                        <div class="row mt-2">
                            <div class="col-sm-3 oragan ml-1">
                                <img src="image/bone.png" alt="" id="4" class="ml-3">
                                <h3 style="text-align: center;">Bone</h3>
                            </div>
                            <div class="col-sm-3 oragan ml-1">
                                <img src="image/tooth.png" alt="" id="15" class="ml-3">
                                <h3 style="text-align: center;">Tooth</h3>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-sm-6 subform">
                       <div class="col-md-12">
                           <h4 style="text-align: center;">Select Symptom</h4>
                       </div>
                       <div class="form-group col-md-12">
                        <select id="sub-speciality" onchange="" class="form-control">
                        <option selected="selected">...Please Select Sub-speciality</option>
                        <?php

                        foreach($results as $result)
                        {

                        ?>
                        <option value="<?php echo $result['id'];?>"><?php echo $result['name'];?> </option>
                        <?php
                        }
                        ?>     
                      </select>
                      </div>
                    </div>
                    
                </div>
            </div>
            <div class="container bg-light mt-3"  id="doctor" >
                
                  
                    
                    
                
            </div>
            <div class="container-fluid">
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
            <i class="fas fa-blog"></i>  <a href="#!"  style="color:white;">Hospital Event</a>
          </li>
          <li>
            <i class="fas fa-blog"> </i><a href="#!"  style="color:white;">Update News</a>
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
            <i class="fas fa-phone-square-alt"></i>  <a href="#!"  style="color:white;">09262888722</a>
          </li>
          <li>
            <i class="fas fa-search-location"></i>  <a href="#!"  style="color:white;">Mandalay</a>
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
	$("#4").click(function()
    {
      $speciality=4;
      $("#sub-speciality").empty();
        $("#sub-speciality").load("getcategory.php",{speciality:$speciality},function(data){
        $("#sub-speciality").html(data);
       
       });
    });
    $("#1").click(function()
    {
      $speciality=1;
      $("#sub-speciality").empty();
        $("#sub-speciality").load("getcategory.php",{speciality:$speciality},function(data){
        $("#sub-speciality").html(data);
       
       });
    });

    $("#9").click(function()
    {
      $speciality=9;
      $("#sub-speciality").empty();
        $("#sub-speciality").load("getcategory.php",{speciality:$speciality},function(data){
        $("#sub-speciality").html(data);
       
       });
    });


    $("#12").click(function()
    {
      $speciality=12;
      $("#sub-speciality").empty();
        $("#sub-speciality").load("getcategory.php",{speciality:$speciality},function(data){
        $("#sub-speciality").html(data);
       
       });
    });

    $("#15").click(function()
    {
      $speciality=15;
      $("#sub-speciality").empty();
        $("#sub-speciality").load("getcategory.php",{speciality:$speciality},function(data){
        $("#sub-speciality").html(data);
       
       });
    });

     $("#sub-speciality").change(function()
    {
      $sub=$(this).val();
      $("#doctor").empty();
        $.get("getdoctor.php",{sub:$sub},function(data){
        $("#doctor").html(data);
       
       });
    });
    //var friends_arr = $results['id'];


})
        
</script>
<script src="js/form.js"></script>   
  
</body>

</html>
