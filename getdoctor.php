<?php
session_start();
//echo $_SESSION['uid'];
include_once("controller/doctorcontroller.php");
include_once("controller/categorycontroller.php");
$sub=$_GET['sub'];
$categoryController=new CategoryController();
$doctorController=new DoctorController();
$presults=$categoryController->showspeciality($sub);
$results=$doctorController->showDocs($sub);
$output=null;
$output.="<div class='row'>";
foreach($results as $result){
$_SESSION['doc']=$result['id']; 
foreach($presults as $presult)
{
    
    $output.="<div class='card' style='width:33%;'>";
    $output.="<center><img class='card-img-top mt-3' style='text-align:center;border-radius:100%;border:3px solid gray;width:200px;' src='backend/".$result['image']."'
    
    
    alt=''></center><div class='card-body'>";
    $output.="<h4 style='text-align:center;'>".$result['name']."</h4>";
    $output.="<br>";
    $output.=$presult['name']."(Speciality)";
    
    $output.="</div>";
    $output.="<div class='card-footer bg-white'>";
    $output.="<div class='row'>";
    $output.="<div class='col-md-6'>";
    $output.="<h6 style='text-align:left;'>".'View Profile'."</h6>";
$output.="<div onclick='profile()'><img src='image/profile.png' style='opacity:0.5;float:left; width:40px;height:40px;'></div>";
$output.="</div>";
$output.="<div class='col-md-6'>";
    $output.="<h6 style='text-align:right;'>".'Booking'."</h6>";
$output.="<div  onclick='booking()'><img src='image/booking.png' style='opacity:0.5; float:right; width:40px;height:40px;'></div>";

$output.="</div>";
$output.="</div>";
$output.="</div>";
$output.="</div>";


   
}
}

$output.="</div>";
echo $output;


?>
<script>
function booking(){

 <?php
  if(isset($_SESSION['uid'])){
    ?>
 window.location.href="patient1.php?id="+<?php echo $_SESSION['doc']; ?>;
 <?php
}

else{
  ?>
  window.location.href="checkaccount1.php?id="+<?php echo $_SESSION['doc']; ?>;
  <?php
}
?>
}
function profile(){
window.location.href="profile.php?id="+<?php echo $_SESSION['doc']; ?>;  
}
</script>
