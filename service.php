<?php
session_start();
require("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Services</title>
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
    <div class="col-md-6">
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
<!--Indicators-->
<ol class="carousel-indicators">
<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-1z" data-slide-to="1"></li>
<li data-target="#carousel-example-1z" data-slide-to="2"></li>
</ol>
<!--/.Indicators-->
<!--Slides-->
<div class="carousel-inner" role="listbox">
<!--First slide-->
<div class="carousel-item active">
<img class="d-block w-100" src="image/room1.jpg"
  alt="First slide">
</div>
<!--/First slide-->
<!--Second slide-->
<div class="carousel-item">
<img class="d-block w-100" src="image/room2.jpg"
  alt="Second slide">
</div>
<!--/Second slide-->
<!--Third slide-->
<div class="carousel-item">
<img class="d-block w-100" src="image/room3.jpg"
  alt="Third slide">
</div>
<!--/Third slide-->
</div>
<!--/.Slides-->
<!--Controls-->
<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
<!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    </div>
    <div class="col-md-6 mt-4">
        <h1>Best Room 1</h1>
        <p style="line-height:35px;">
            Separate kiving room and patient room , one bedroom for family (Twin beds) , two bathrooms , one toilet , sofa, refrigerator and drinking water , minibar (free) , dishware dining table , 2TVs , Free Wi-Fi , Safety box , 140 square meters.
            Room Price is $700 and service charge is $200. Total Price is $900.</p>
    </div>
</div>
<div class="row">

    <div class="col-md-6 mt-4">
        <h1>Best Room 2</h1>
        <p style="line-height:35px;">
            Separate kiving room and patient room , one bathrooms , one toilet , sofa, refrigerator and drinking water , minibar (free for first set) , dishware , dining table , 2TVs , Free Wi-Fi , Safety box , 90 square meters.Room Price is $500 and service charge is $200. Total Price is $700.</p>
    </div>
    <div class="col-md-6">
        <div id="ca" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#ca" data-slide-to="0" class="active"></li>
              <li data-target="#ca" data-slide-to="1"></li>
              <li data-target="#ca" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" src="image/room4.jpg"
                  alt="First slide">
              </div>
              <!--/First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="image/room5.jpg"
                  alt="Second slide">
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="image/room6.jpg"
                  alt="Third slide">
              </div>
              <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6">
        <div id="example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#example-1z" data-slide-to="0" class="active"></li>
              <li data-target="#example-1z" data-slide-to="1"></li>
              <li data-target="#example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
              <!--First slide-->
              <div class="carousel-item active">
                <img class="d-block w-100" src="image/room7.jpg"
                  alt="First slide">
              </div>
              <!--/First slide-->
              <!--Second slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="image/room8.jpg"
                  alt="Second slide">
              </div>
              <!--/Second slide-->
              <!--Third slide-->
              <div class="carousel-item">
                <img class="d-block w-100" src="image/room9.jpg"
                  alt="Third slide">
              </div>
              <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
          </div>
    </div>
    <div class="col-md-6 mt-4">
        <h1>Best Room 3</h1>
        <p style="line-height:35px;">
            Separate kiving room and patient room , one bathrooms , one toilet , sofa, refrigerator and drinking water , minibar (free for first set) , dishware , dining table , 2TVs , Free Wi-Fi , Safety box , 90 square meters.
            Room Price is $450 and service charge is $200. Total Price is $650.</p>
    
    </div>
</div>
</div>          
        
    </body>
</html>
<?php
require("footer.php");
?>