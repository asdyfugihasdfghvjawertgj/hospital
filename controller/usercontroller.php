<?php
include_once('model/user.php');
class UserController extends User
{
	public function createUser($input1,$input2,$input3,$input4,$input5,$input7){
		return $this->add($input1,$input2,$input3,$input4,$input5,$input7);
	}
	public function showUser(){
		return $this->show();
	}
	public function viewUser($userid){
		return $this->view($userid);
	}
	public function updateUser($first,$last,$gender,$dob,$email,$password,$userid){
		return $this->update($first,$last,$gender,$dob,$email,$password,$userid);
	}
	public function deleteUser($userid){
		return $this->delete($userid);
	}
}

?>