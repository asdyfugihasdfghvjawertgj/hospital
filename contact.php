<?php
session_start();
require("header.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
    </head>
    <body>
       
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4" >
                    <i class="fas fa-phone-alt"></i>  1-855-404-3304
                        </div>
                        <div class="col-md-4">
                            <i class="far fa-envelope"></i>  newacademy@gmail.com
                        </div>
                          <div class="col-md-4">
                            <i class="fas fa-map-marker-alt"></i>  Mandalay
                        </div>
                       
               </div>
    </div>

    

        <div class="container mt-3">
            <div class="row">            

                    <div class="col-md-6">
                        <h2>Contact Us</h2>
                        <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name"   placeholder="Enter your name">
                        <span style="color: red" id="span1"></span>
                        </div>
                        <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email"  placeholder="Enter your email">
                        <span style="color: red" id="span2"></span>
                        </div>
                        <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone"  placeholder="Enter your phone no">
                        <span style="color: red" id="span3"></span>
                        </div>
                        <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" name="address"  placeholder="Enter your address">
                        <span style="color: red" id="span4"></span>
                        </div>
                        <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" id="date" name="date" >
                        <span style="color: red" id="span5"></span>
                        </div>
                        <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                        <span style="color: red" id="span6"></span>
                        </div>
                </div>
                    <div class="col-md-6">
                    <img style="float:right;" src="image/welcome.jpg" width="450" height="585">
                </div>
            </div>
        </div>
       
        <div style="text-align: center;" class="pt-4 pb-3">
            <button type="submit" name="send" id="send" class="p-2" style="text-align: center; border-radius: 5%; background-color: rgb(179, 179, 216); width: 150px;">Send Message
            </button>
        </div>
        <script src="jquery/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mycontact.js"></script>
  
                        
        
    </body>
</html>
<?php
require("footer.php");
?>