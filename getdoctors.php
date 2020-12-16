<?php
include_once("controller/doctorcontroller.php");
$sub=$_GET['sub'];

$doctorController=new DoctorController();
$results=$doctorController->showDocs($sub);
$output=null;
$output="<option>Please select Doctor Name</option>";

foreach($results as $result)
{
   
    $output.="<option value=";
    $output.= $result['id'];
    $output.=">";
    $output.=$result['name'];
    $output.="</option>";
}

echo $output;


?>