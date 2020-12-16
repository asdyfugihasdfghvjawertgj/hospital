<?php
include_once('model/doctor.php');
class DoctorController extends Doctor{
 public function addDoctor($name,$email,$phone,$degree,$address,$experience,$fullpath,$speciality){
 	return $this->add($name,$email,$phone,$degree,$address,$experience,$fullpath,$speciality);
 }
 public function showDoc(){
 	return $this->show();
 }
 public function viewDoc($docid){
 	return $this->view($docid);
 }
  public function viewDocs($docid){
 	return $this->views($docid);
 }
public function updateDoc($docid,$name,$email,$phone,$degree,$address,$experience,$fullpath,$speciality){
 	return $this->update($docid,$name,$email,$phone,$degree,$address,$experience,$fullpath,$speciality);
 }
 public function deleteDoc($docid){
 	return $this->delete($docid);
 }
 public function showDocs($sub){
 	return $this->doc($sub);
 }

 public function info($info){
	 return $this->showinfo($info);
 }
 public function doctorProfile($id){

	return $this->profile($id);
 }
 public function doctors($doctor){

	return $this->showdoctor($doctor);
 }
}
?>