<?php
	  	if (isset($_POST['log'])) {
	  		$email=$_POST['email'];
	  		$password=$_POST['password'];
	  		if ($email=="admin@gmail.com" && $password=="admin123") {
	  		header('location:backend/index.php');
	  		}
	  		
	  	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
<style>
.container{
	margin-top:100px;
    width: 900px;
    border-radius: 10px 10px 10px 10px;
    -webkit-box-shadow: 5px 5px 16px 5px #000000; 
box-shadow: 5px 5px 16px 5px #000000;
   
    
    
}

    body{

        background-color: #0398fc;
    }
    .blue{
        background-color: blue;
    }
    #input1{

        border-left:none;
        border-top: 0px;
        border-right: 0px;
        border-radius: 0 0 0 0;

    }
    #input2{
        border-left: 0px;
        border-top: 0px;
        border-right: 0px;
        border-radius: 0 0 0 0;
    }
    h1{
           font-weight: bold;
       }
    body{
font-family:'Times New Roman', Times, serif;
       
       
    }
    #login:hover{
        background-color:blue;
  color: white;
    }
</style>
</head>
<body>
<div class="container bg-white">
<form method="POST" >
    <div class="row">
        <div class="col-md-4 ">

            
        </div>

        <div class="col-md-4">

            <center><img src="image/logo8.png" alt="" style="align-items: center; width: 120px; height: 120px;"></center>
            <center><h1>New Academy</h1></center>
        </div>

        <div class="col-md-4">

            
        </div>
    </div>
	<div class="row pt-3">
		<div class="col-md-4 ">
			
        </div>
        
        <div class="col-md-4 mt-3">
			<div class="form-group">
				
				<input type="text" name="email" id="input1" class="form-control"  placeholder="Email" >
				<span style="color: red;" id="span1"></span>
			</div>
        </div>
        

        <div class="col-md-4">
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			
        </div>
        <div class="col-md-4 mt-3">
			<div class="form-group">
				
				<input type="text" name="password" id="input2"class="form-control" placeholder="Password">
				<span style="color: red;" id="span2"></span>
			</div>
        </div>
        <div class="col-md-4">
			
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="login" name="log" class="btn btn-outline-primary p-2 mb-5" style="text-align: center; border-radius: 5%; border:1px solid blue; width: 200px;">Login
		</button>
	</div>
</form>
</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/userlogin.js"></script>	
</body>
</html>