<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Booking
{
	private $pdo;
	public function add($user, $patient,$doc,$date,$medical){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into bookings(userid,patientid,doctorid,preferreddate,medicalconcern) values (:d,:e,:f,:g,:h)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
	
		
		$stmt->bindParam(':d',$user);
		$stmt->bindParam(':e',$patient);
		$stmt->bindParam(':f',$doc);
		$stmt->bindParam(':g',$date);
		$stmt->bindParam(':h',$medical);
		

		
		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}

}
public function show($uid){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from bookings where userid=:uid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':uid',$uid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function showPat($uid){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select bookings.*,patient.firstname as fname,patient.lastname as lname,patient.dob as dob,patient.gender as gender,patient.email as email from bookings inner join patient ON bookings.userid=:uid AND bookings.patientid=patient.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':uid',$uid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}

}
?>