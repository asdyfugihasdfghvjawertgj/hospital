<?php
include_once('controller/bookingcontroller.php');
$bookid=$_GET["id"];
$bookingcontroller=new BookingController();
$bookingcontroller->deleteBooking($bookid);
header('location:bookingindex.php');
?>