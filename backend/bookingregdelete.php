<?php
include_once('controller/bookingregcontroller.php');
$bookid=$_GET["id"];
$bookingregcontroller=new BookingregController();
$bookingregcontroller->deleteBookingreg($bookid);
header('location:bookingregindex.php');
?>