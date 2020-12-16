<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Doctor
{
	private $pdo;
	public function add($name,$email,$phone,$degree,$address,$experience,$fullpath,$speciality){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into doctor (name,email,phone,address,degree,experience,image,speciality) values (:name,:email,:phone,:address,:degree,:experience,:fullpath,:parentid)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':phone',$phone);
		$stmt->bindParam(':address',$address);
		$stmt->bindParam(':degree',$degree);
		$stmt->bindParam(':experience',$experience);
		$stmt->bindParam(':fullpath',$fullpath);

		$stmt->bindParam(':parentid',$speciality);
		$stmt->execute();
		
		

}
public function show(){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from doctor";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function view($docid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select doctor.*,category.name as cname from doctor inner join category ON doctor.id=:did AND doctor.speciality=category.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':did',$docid);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function update($docid,$name,$email,$phone,$degree,$address,$experience,$fullpath,$speciality){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update doctor set name=:name,email=:email,phone=:phone,address=:address,degree=:degree,experience=:experience,image=:fullpath,speciality=:parentid where id=:docid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':docid',$docid);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':email',$email);
		$stmt->bindParam(':phone',$phone);
		$stmt->bindParam(':address',$address);
		$stmt->bindParam(':degree',$degree);
		$stmt->bindParam(':experience',$experience);
		$stmt->bindParam(':fullpath',$fullpath);
		$stmt->bindParam(':parentid',$speciality);
		$stmt -> execute();
}
public function  delete($docid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from doctor where id=:docid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':docid',$docid);
		$stmt -> execute();
}
public function doc($sub){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from doctor where speciality=:parentid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':parentid',$sub);
		$stmt -> execute();
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;

}
public function showinfo($info){

	$this->pdo=Database::connect();
	$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//sql query
	$sql="select * from doctor where id=:info";
	//prepare sql statement
	$stmt=$this->pdo->prepare($sql);
	$stmt->bindParam(':info',$info);
	$stmt -> execute();
	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
	return $results;

}
public function name($doctor){
	
	$this->pdo=Database::connect();
	$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//sql query
	$sql="select * from doctor where id=:info";
	//prepare sql statement
	$stmt=$this->pdo->prepare($sql);
	$stmt->bindParam(':info',$doctor);
	$stmt -> execute();
	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
	return $results;


}
}
?>