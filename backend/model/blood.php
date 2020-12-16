<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Blood
{
	private $pdo;
	public function add($name,$email,$phone,$dob,$type){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into blood_donation (name,email,phone,dob,tob) values (:name,:email,:phone,:dob,:tob)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':phone',$phone);
		$stmt->bindParam(':dob',$dob);
		$stmt->bindParam(':tob',$type);
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
		$sql="select * from blood_donation";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function view($bloodid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select * from blood_donation where id=:bloodid";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':bloodid',$bloodid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function update($name,$email,$phone,$dob,$tob,$bloodid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update blood_donation set name=:name,email=:email,phone=:phone,dob=:dob,tob=:tob where id=:bloodid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':phone',$phone);
		$stmt->bindParam(':dob',$dob);
		$stmt->bindParam(':tob',$tob);
		$stmt->bindParam(':bloodid',$bloodid);
		$stmt -> execute();
}
public function  delete($bloodid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from blood_donation where id=:bloodid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':bloodid',$bloodid);
		$stmt -> execute();
}
}
?>