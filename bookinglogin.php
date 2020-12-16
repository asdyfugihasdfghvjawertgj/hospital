<?php
session_start();
$_SESSION['did']=$_GET['id'];
//echo $_SESSION['did'];
include_once('controller/bookingregcontroller.php');
		$bookinregController=new BookingregController();
		$results=$bookinregController->showBookreg();
		foreach ($results as $result) {
			if (isset($_POST['log'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
				if ($email==$result['email'] && $password==$result['password'] ) {
          include_once('controller/bookingregcontroller.php');
		      $bookinfregController=new BookingregController();
		      $presults=$bookinfregController->showBookingreg($email);
          
          foreach ($presults as $presult) {
            $_SESSION['uid']=$presult['id'];
            $_SESSION['uname']=$presult['name'];
          }$_SESSION['did'];
					header('location:patient1.php');
				}

			}
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
    
    <title>login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>

     .form{
        background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
     }
    </style>
</body>
</head>
<body>
<div class="container mt-2 form">
<form method="POST" >
    <div class="col-md-12">
        <h1 style="text-align: center;color:white;">Booking Login</h1>
    </div>
	<div class="row pt-3">
		<div class="col-md-4">
			
        </div>
        <div class="col-md-4">
			<div class="form-group">
                <label>EMAIL</label>
                  <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
				<input type="text" name="email" id="input1" class="form-control" style="border-radius:0px 5px 5px 0px;width:70%;" placeholder="Enter Email" " >
				<span style="color: red;" id="span1"></span>
			</div>
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
                <label>PASSWORD</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
				<input type="password" name="password" id="input2"class="form-control" style="border-radius:0px 5px 5px 0px; width:70%;" placeholder="Enter Password">
				<span style="color: red;" id="span2"></span>
			</div>
        </div>
        </div>
        <div class="col-md-4">
			
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="login" name="log" class="btn-outline-dark p-2" style="text-align: center; border-radius: 5%;background-color: rgb(179, 179, 216);  width: 100px;">login
		</button>
	</div>
</form>
</div>
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bookinglogin.js"></script>
</body>
</html>
<?php
require("footer.php");
?>