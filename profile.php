
<?php

require("header.php");

?>
<?php
$id=$_GET['id'];
include_once("controller/doctorcontroller.php");
$doctorController=new DoctorController();
$results=$doctorController->doctorProfile($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-3 bg-light">
<div class="row">

<div class="col-md-6">
<?php
foreach($results as $result){
?>
<img src="backend/<?php echo $result['image']; ?>" style="text-align:center;border:3px solid gray;width:400px;" alt="">

</div>
<div class="col-md-6">
<h4>Doctor Information</h4>
Doctor's Name: <?php echo $result['name'];?><br>
Doctor's Email: <?php echo $result['email'];?><br>
Doctor's Phone: <?php echo $result['phone'];?><br>
Doctor's Address: <?php echo $result['address'];?><br>
Doctor's Degree: <?php echo $result['degree'];?><br>
Doctor's Experience: <?php echo $result['experience'];?><br>
Doctor's Speciality: <?php echo $result['speciality'];?><br>
</div>
<?php
}
?>
</div>
</div>
    
</body>
</html>
<?php

require("footer.php");

?>
