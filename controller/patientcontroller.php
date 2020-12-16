<?php
include_once('model/patient.php');
/**
 * 
 */
class PatientController extends Patient
{
	public function createPatient($input1,$input2,$input3,$input4,$input5){
		return $this->add($input1,$input2,$input3,$input4,$input5);
	}
	public function showPatient(){
		return $this->show();
	}
	public function viewPatient($patid){
		return $this->view($patid);
	}
	public function updatePatient($first,$last,$gender,$dob,$email,$patid){
		return $this->update($first,$last,$gender,$dob,$email,$patid);
	}
	public function deletePatient($patid){
		return $this->delete($patid);
	}
	public function showPat($input5){
		return $this->Pat($input5);
	}
	public function ShowRegs($uid){
		return $this->Reg($uid);

	}
	
}
?>