
<?php
session_start();
require("header.php");
?>
<?php
$input1="";
$input2="";
$input3="";
$input4="";
$inputerror1="";
$inputerror2="";
$inputerror3="";
$inputerror4="";
if(isset($_POST['continue'])){
	  	if (!empty($_POST['in1'])) {
	  	$input1=$_POST['in1'];	
	  	}
	  	else{
	  		$inputerror1="please select something";
	  	}
	  	if (!empty($_POST['in2'])) {
	  	$input2=$_POST['in2'];	
	  	}
	  	else{
	  		$inputerror2="please select something";
	  	}
	  	if (!empty($_POST['in3'])) {
	  	$input3=$_POST['in3'];
	  	}
	  	else{
	  		$inputerror3="please select something";
	  	}
	  	if (!empty($_POST['in4'])) {
	  	$input4=$_POST['in4'];
	  	}
	  	else{
	  		$inputerror4="please select something";
	  	}
	if ($input1=="yes" && $input2=='no' && $input3=='no' && $input4=='no') { 
		echo'<script>alert("Your registeration is successful,are you want to continue");window.location.href= "bloodregister.php";</script>';
	}
	if ($input1=="yes" && $input2=='yes' && $input3=='yes' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="yes" && $input2=='yes' && $input3=='yes' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="yes" && $input2=='no' && $input3=='yes' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="yes" && $input2=='no' && $input3=='no' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="yes" && $input2=='yes' && $input3=='no' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="yes" && $input2=='yes' && $input3=='no' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="yes" && $input2=='no' && $input3=='yes' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='yes' && $input3=='yes' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='no' && $input3=='yes' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='no' && $input3=='no' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='no' && $input3=='no' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='yes' && $input3=='no' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='yes' && $input3=='yes' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='no' && $input3=='yes' && $input4=='no') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
	if ($input1=="no" && $input2=='yes' && $input3=='no' && $input4=='yes') { 
		echo'<script>alert("!sorry,please try again later");</script>';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood donation</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/blood.css">
<style>
#show{
	background: linear-gradient(45deg, #9ED9E1 20%, rgb(32, 88, 105) 80%);
	
}
</style>

</head>
<body>
<div class="container">
        <ul class="progressbar">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
    </div>
<div class="container bg-light mt-5" id="show">
<div class="pt-4">
		<h4 style="text-align:center;">Before you register as a blood donar,please select the following because it is important</h4>
	</div>
<div class="row">
<div class="col-md-4">

</div>
<div class="col-md-8">
<form class="mt-2" action="" method="POST">

		<h5>1.Are you 18-65 years old?</h5>
		<div name="input1">
			<input type="radio" name="in1" value="yes" class="radio" <?php if (isset($_POST['in1']) && $_POST['in1'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Yes
			<input type="radio" name="in1" value="no"  class="radio" <?php if (isset($_POST['in1']) && $_POST['in1'] ==  'no'): ?>checked='checked'<?php endif; ?> /> No

		</div>
		<span style="color: red;"><?php echo $inputerror1; ?></span>
		<br>
		<h5>2.Do you currently weight less than 50kg?</h5>
		<div id="input2">
			<input type="radio" name="in2" value="yes" class="radio" <?php if (isset($_POST['in2']) && $_POST['in2'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Yes
			<input type="radio" name="in2" value="no"  class="radio" <?php if (isset($_POST['in2']) && $_POST['in2'] ==  'no'): ?>checked='checked'<?php endif; ?> /> No
		</div>
		<span style="color: red;"><?php echo $inputerror2; ?></span>
		<br>
		<h5>3.Have you had a blood donation since last four months?</h5>
		<div id="input3">
			<input type="radio" name="in3" value="yes" class="radio" <?php if (isset($_POST['in3']) && $_POST['in3'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Yes
			<input type="radio" name="in3" value="no"  class="radio" <?php if (isset($_POST['in3']) && $_POST['in3'] ==  'no'): ?>checked='checked'<?php endif; ?> /> No
		</div>
		<span style="color: red;"><?php echo $inputerror3; ?></span>
		<br>
		<h5>4.Have you ever had a cancer other than basal cell carcinoma or cervical carcinoma?</h5>
		<div id="input4">
			<input type="radio" name="in4" value="yes" class="radio" <?php if (isset($_POST['in4']) && $_POST['in4'] == 'yes'): ?>checked='checked'<?php endif; ?> /> Yes
			<input type="radio" name="in4" value="no"  class="radio" <?php if (isset($_POST['in4']) && $_POST['in4'] ==  'no'): ?>checked='checked'<?php endif; ?> /> No
		</div>
		<span style="color: red;"><?php echo $inputerror4; ?></span>
		<br>
	<div class=" mt-3 pb-3">
		<button type="submit" name="continue" class="btn btn-outline-dark" style="border-radius: 5%; background-color: rgb(179, 179, 216); border-left:1px solid black;">Continue</button>	
	</div>
	
	</form>
</div>
</div>
</div>
	
</body>
</html>
<?php
require("footer.php");
?>