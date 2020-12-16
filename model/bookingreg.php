<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Bookingreg
{
	private $pdo;
	public function add($name,$phone,$email,$confirm){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="INSERT INTO `bookingregister`( `name`,`phone`,`email`,`password`) VALUES (:name,:ph,:email,:confirm)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':confirm',$confirm);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':ph',$phone);
		
		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}

}
public function show($email){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from bookingregister where email=:email";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':email',$email);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function showReg(){
	$this->pdo=Database::connect();
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//sql query
			$sql="select *from bookingregister";
			//prepare sql statement
			$stmt=$this->pdo->prepare($sql);
			$stmt->bindParam(':email',$email);
			$stmt -> execute();
			$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
			return $results;	
	}
	public function Reg($uid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from bookingregister where id=:uid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam('uid',$uid);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;	
	}

}
?>