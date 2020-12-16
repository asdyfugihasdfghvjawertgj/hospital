<?php
include_once("controller/bookingcontroller.php");
// include_once("controller/patientcontroller.php");
include_once("controller/bookingregcontroller.php");
$uid=$_GET['session'];
//echo $uid;
$bookingController=new BookingController();
//$patientController=new PatientController();
$bookingregController=new BookingregController();
$results=$bookingregController->ShowRegs($uid);
//$presults=$patientController->ShowRegs($uid);
$bresults=$bookingController->Patient($uid);
$output=null;
$i=1;
$output.="<table class='table table-striped'>";
$output.="<thead><tr>";
$output.="<td>"."Booking No"."</td>";
$output.="<td>"."Register Information"."</td>";
$output.="<td>"."Patient Information"."</td>";
$output.="</tr></thead>";
$output.="<tbody>";

foreach($bresults as $bresult){
//foreach($presults as $presult){
foreach($results as $result)
{
    $output.="<tr>";
    $output.="<td>";
    $output.=$i;
    $output.="</td>";
    $output.="<td>";
    $output.="Name :".$result['name']."</br>";
    $output.="Email :".$result['email']."</br>";
    $output.="Phone Number:" .$result['phone']."</br>";
    $output.="</td>";

    $output.="<td>";
    $output.="Name :".$bresult['fname'].$bresult['lname']."</br>";
    $output.="Date of Birth:" .$bresult['dob']."</br>";
    $output.="Gender :" .$bresult['gender']."</br>";
    $output.="Email :" .$bresult['email']."</br>";
    $output.="</td>";

    $output.="</tr>";
    $i++;
}
}

$output.="</tbody>";
$output.="</table>";

//}



echo $output;





?>