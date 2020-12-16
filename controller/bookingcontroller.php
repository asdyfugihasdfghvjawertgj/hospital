<?php
include_once('model/booking.php');
class BookingController extends Booking{
 public function addBooking($user, $patient,$doc,$date,$medical){
 	
 	return $this->add($user, $patient,$doc,$date,$medical);
 }
 public function showBooking($uid){
 	return $this->show($uid);
 }
 public function Patient($uid){
		return $this->showPat($uid);
	}
	
}
?>