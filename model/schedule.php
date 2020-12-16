<?php
include_once('include/dbconn.php');
/**
 * 
 */
class Schedule
{
	
	private $pdo;
	public function picker($doc){
//var_dump($doc);
		$this->pdo=Database::connect();
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//sql query
		$sql="select * from schedules where doctorid=:doc";
		//prepare sql statement
		$stmt=$this->pdo->prepare($sql);
		$stmt->bindParam(':doc',$doc);
		$stmt -> execute();	
		$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		return $results;
	}
}
?>