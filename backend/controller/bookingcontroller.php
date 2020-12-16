<?php
include_once('model/booking.php');
class BookingController extends Booking{
 public function addBooking($user, $patient,$doctor,$date,$medical){
 	
 	return $this->add($user, $patient,$doctor,$date,$medical);
 }
 public function showBooking($uid){
 	return $this->show($uid);
 }
 public function Patient($uid){
		return $this->showPat($uid);
	}
public function Booking(){
		return $this->showBoo();
	}
	public function view($bookid){
		return $this->viewBook($bookid);
	}
	public function bookingRegister($bookid){
		return $this->Register($bookid);
	}
	public function doctor($bookid){
		return $this->Doc($bookid);
	}
	public function updateBooking($bookid,$user, $patient,$doctor,$date,$medical){
		return $this->update($bookid,$user, $patient,$doctor,$date,$medical);
	}
	public function viewMedical($bookid){
		return $this->medical($bookid);
	}
	public function deleteBooking($bookid){
		$this->delete($bookid);
	}
	
}
?>