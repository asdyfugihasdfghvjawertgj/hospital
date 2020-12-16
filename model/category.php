<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Category
{
	private $pdo;
	public function add($name,$parent){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="insert into category (name,parent) values (:name,:parent)";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':parent',$parent);
		if ($stmt->execute())
		 {
			return true;
		}
		else {
			return false;
		}

}
public function showCategs(){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from category";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function viewCats($catid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from category where id=:catid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':catid',$catid);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function update($catid,$name,$parent){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="update category set name=:name,parent=:parent where id=:catid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':parent',$parent);
		$stmt->bindParam(':catid',$catid);
		$stmt -> execute();
    	//$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
public function  delete($catid){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="delete from category where id=:catid";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':catid',$catid);
		$stmt -> execute();
}
public function showPar(){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from category where parent!=0";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function show($speciality){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from category where parent=$speciality";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function special(){
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select *from category where parent='no parent'";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt -> execute();
    	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
public function showspecial($sub){

	$this->pdo=Database::connect();
	$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="select * from category where id=:did";
	$stmt=$this->pdo->prepare($sql);
	//bind parameter
	$stmt->bindParam(':did',$sub);
	$stmt -> execute();	
	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
	return $results;
}
public function doc($doctor){

	$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$sql="select category.* from category inner join doctor ON doctor.id=:did AND doctor.speciality=category.id";
		$stmt=$this->pdo->prepare($sql);
		//bind parameter
		$stmt->bindParam(':did',$doctor);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
}
?>