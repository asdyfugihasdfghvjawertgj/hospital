<?php
include_once('include/dbconn.php');
class Schedule{

    
    private $day;
    private $stime;
    private $etime;
    private $pdo;
    public function __construct(){

    }
    
    public function add($doctor,$day,$stime){
        //echo $day[0];
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $number = count($day);
    if($number >= 1)
    {
	for($i=0; $i<$number; $i++)
	{
		if(trim($day[$i] != '') && trim($stime[$i] != ''))
		{
			//$sql = "INSERT INTO schedule(dayname) VALUES('".mysqli_real_escape_string($connect, $_POST["day"][$i])."')";
            //mysqli_query($connect, $sql);
            $sql="insert into schedules(doctorid,dayname,time) values(:doctorid,:dayname,:time)";
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(':doctorid',$doctor);
            $stmt->bindParam(':dayname',$day[$i]);
            $stmt->bindParam(':time',$stime[$i]);
            $stmt->execute();
		}
	}
	
    }
        
        
    }
    public function show(){
     $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
            $sql="select * from schedules";
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute();
            $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
           
    }
    public function view($schid){
      $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       
            $sql="select * from schedules where id=:id";
            $stmt=$this->pdo->prepare($sql);
             $stmt->bindParam(':id',$schid);
            $stmt->execute();
            $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
            return $results;  
    }
    public function schedule($schid){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="select schedules.*,doctor.name as dname,doctor.id as did from schedules inner join doctor ON schedules.id=:did AND doctor.id=schedules.doctorid";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindParam(':did',$schid);
        $stmt -> execute();
        $results = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $results;    
}
public function update($schid,$docid,$date,$time){
   
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $number = count($date);
    if($number >= 1)
    {
    for($i=0; $i<$number; $i++)
    {
        if(trim($date[$i] != '') && trim($time[$i] != ''))
        {
        //sql query
        $sql="update schedules set doctorid=:docid,dayname=:day,time=:time where id=:did";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindParam(':did',$schid);
        $stmt->bindParam(':docid',$docid);
        $stmt->bindParam(':day',$date[$i]);
        $stmt->bindParam(':time',$time[$i]);
        $stmt -> execute();  
}
}
}
}
public function delete($schid){
        $this->pdo=Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="delete  from schedules where id=:did";
        //prepare sql statement
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindParam(':did',$schid);
        $stmt -> execute();   
}

}
?>