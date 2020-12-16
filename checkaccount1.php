<?php 
session_start();
//$_SESSION['did']=$_GET['id'];
//echo $_SESSION['id'];
 ?>
<?php
require("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
#reg{
    	
		background: linear-gradient(45deg, #9ED9E1 50%, rgb(32, 88, 105) 50%);
		}
    </style>
</head>
<body>
<div class="container bg-light mt-2" id="reg" >
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3 style="text-align: center;">Have you already an account?</h3>
            </div>
        </div>
   
        <div class="row mt-4"> 
            <div class="col-md-2">
            
        </div>
    
    
        <div class="col-md-2">
            
        
    </div>
    <div class="col-md-2">
        <a href="bookingregister.php?id=<?php echo $_SESSION['did']=$_GET['id']; ?>"><button id="register" class="btn btn-outline-dark" style="border-left:1px solid black;background-color: rgb(179, 179, 216);">Register</button></a>
    </div>


    <div class="col-md-2 mb-5">
    <a href="bookinglogin.php?id=<?php echo $_SESSION['did']=$_GET['id']; ?>"><button id="login" class="btn btn-outline-dark" style="border-left:1px solid black;background-color: rgb(179, 179, 216);">Login</button></a>
    
</div>
<div class="col-md-2">
   
</div>


<div class="col-md-2">
    

</div>


        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
// 	$(document).ready(function(){
// 	$("#login").click(function()
//     {
//       window.location.href="bookinglogin.php";
//     });

//     $("#register").click(function()
//     {
//         window.location.href="bookingregister.php?id=<?php //echo $_SESSION['did'];?>";
//     });
   
// });
        
</script>
</body>
</html>
<?php
require("footer.php");
?>