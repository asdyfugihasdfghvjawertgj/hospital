<?php
include_once('model/blood.php');
class BloodController extends Blood
{
	public function addBlood($name,$email,$phone,$dob,$type){
		return $this->add($name,$email,$phone,$dob,$type);
	}
	public function showBlood(){
		return $this->show();
	}
	public function viewBlood($bloodid){
		return $this->view($bloodid);
	}
	public function updateBlood($name,$email,$phone,$dob,$tob,$bloodid){
		return $this->update($name,$email,$phone,$dob,$tob,$bloodid);
	}
	public function deleteBlood($bloodid){
		return $this->delete($bloodid);
	}
}

?>