<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Booking
{
	private $pdo;
	public function add($user, $patient,$doctor,$date,$medical){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into bookings(userid,patientid,doctorid,preferreddate,medicalconcern) values (:d,:e,:f,:h,:g)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind paramete
		$stmt->bindParam(':d',$user);
		$stmt->bindParam(':e',$patient);
		$stmt->bindParam(':f',$doctor);
		$stmt->bindParam(':h',$date);
		$stmt->bindParam(':g',$medical);
		

		
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
		$sql="select bookings.*,patient.firstname as fname,patient.lastname as lname from bookings inner join patient ON bookings.userid=:uid AND bookings.patientid=patient.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':uid',$uid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function showBoo(){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from bookings";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;	
}
public function viewBook($bookid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select bookings.*,patient.firstname as pname,patient.lastname as plname,patient.id as pid from bookings inner join patient ON bookings.id=:uid AND bookings.patientid=patient.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':uid',$bookid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function Register($bookid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select bookings.*,bookingregister.name as bname,bookingregister.id as bid from bookings inner join bookingregister ON bookings.id=:uid AND bookings.userid=bookingregister.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':uid',$bookid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;	
}
public function Doc($bookid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select bookings.*,doctor.name as dname,doctor.id as did from bookings inner join doctor ON bookings.id=:uid AND bookings.doctorid=doctor.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':uid',$bookid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;

}
public function update($bookid,$user, $patient,$doctor,$date,$medical){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update bookings set userid=:user,patientid=:patient,doctorid=:doctor,preferreddate=:date,medicalconcern=:medical where id=:bid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':user',$user);
		$stmt->bindParam(':patient',$patient);
		$stmt->bindParam(':doctor',$doctor);
		$stmt->bindParam(':date',$date);

		$stmt->bindParam(':medical',$medical);
		$stmt->bindParam(':bid',$bookid);
		$stmt -> execute();
}
public function medical($bookid){
$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from bookings where id=:uid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':uid',$bookid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;	
}
public function delete($bookid){
	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from bookings where id=:did";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':did',$bookid);
		$stmt -> execute();
}

}
?>
