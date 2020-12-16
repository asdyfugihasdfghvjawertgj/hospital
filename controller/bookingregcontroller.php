<?php
include_once('model/bookingreg.php');
class BookingregController extends Bookingreg
{
	public function addBookingreg($name,$phone,$email,$confirm){
		return $this->add($name,$phone,$email,$confirm);
	}
	public function showBookingreg($email){
		return $this->show($email);
	}
	public function showBookreg(){
		return $this->showReg();
	}
	public function ShowRegs($uid){
		return $this->Reg($uid);
	}

}

?>