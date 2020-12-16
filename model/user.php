<?php
include_once('include/dbconn.php');
/**
 * 
 */
class User
{
	private $pdo;
	public function add($input1,$input2,$input3,$input4,$input5,$input7){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into register (firstname,lastname,gender,dob,email,password) values (:firstname,:lastname,:gender,:dob,:email,:password)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':firstname',$input1);
		$stmt->bindParam(':lastname',$input2);
		$stmt->bindParam(':gender',$input3);
		$stmt->bindParam(':dob',$input4);
		$stmt->bindParam(':email',$input5);
		$stmt->bindParam(':password',$input7);
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
		$sql="select * from register";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function view($userid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select * from register where id=:userid";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':userid',$userid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function update($first,$last,$gender,$dob,$email,$password,$userid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update register set firstname=:first,lastname=:last,gender=:gender,dob=:dob,email=:email,password=:password where id=:userid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':first',$first);
		$stmt->bindParam(':last',$last);
		$stmt->bindParam(':gender',$gender);
		$stmt->bindParam(':dob',$dob);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':userid',$userid);
		$stmt -> execute();
}
public function  delete($userid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from register where id=:userid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':userid',$userid);
		$stmt -> execute();
}
}
?>