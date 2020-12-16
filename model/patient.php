<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Patient
{
	private $pdo;
	public function add($input1,$input2,$input3,$input4,$input5){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into patient (firstname,lastname,gender,dob,email) values (:firstname,:lastname,:gender,:dob,:email)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':firstname',$input1);
		$stmt->bindParam(':lastname',$input2);
		$stmt->bindParam(':gender',$input3);
		$stmt->bindParam(':dob',$input4);
		$stmt->bindParam(':email',$input5);
		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}
	}
	public function show(){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from patient";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function view($patid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select * from patient where id=:patid";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':patid',$patid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function update($first,$last,$gender,$dob,$email,$patid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update patient set firstname=:first,lastname=:last,gender=:gender,dob=:dob,email=:email where id=:patid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':first',$first);
		$stmt->bindParam(':last',$last);
		$stmt->bindParam(':gender',$gender);
		$stmt->bindParam(':dob',$dob);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':patid',$patid);
		$stmt -> execute();
}
public function  delete($patid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from patient where id=:patid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':patid',$patid);
		$stmt -> execute();
}
public function Pat($input5){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select * from patient where email=:email";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':email',$input5);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;

}
public function Reg($uid){

	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select patient.* from patient inner join bookings ON bookings.userid=:uid AND patient.id=bookings.patientid";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':uid',$uid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}

}
?>