<?php
include_once("controller/categorycontroller.php");
$speciality=$_POST['speciality'];
$categoryController=new CategoryController();
$results=$categoryController->showCat($speciality);
$output=null;
$output="<option>--Please Select Sub-Speciality--</option>";
foreach ($results as $result) {
	$output.="<option value=";
    $output.= $result['id'];
    $output.=">";
    $output.=$result['name'];
    $output.="</option>";
}

echo $output;

?>