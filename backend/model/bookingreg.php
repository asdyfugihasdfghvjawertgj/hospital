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
	public function update($name,$email,$password,$phone,$uid){

		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update bookingregister set name=:name,email=:email,phone=:phone,password=:password where id=:uid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':phone',$phone);
		$stmt->bindParam(':password',$password);
		$stmt->bindParam(':uid',$uid);


		$stmt -> execute();
	}
	public function delete($bookid){

		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from bookingregister where id=:did";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':did',$bookid);
		$stmt -> execute();
	}
	public function uname($user){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from bookingregister where id=:uid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam('uid',$user);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;	

	}

}
?>