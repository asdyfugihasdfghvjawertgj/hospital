<?php
include_once('controller/schedulecontroller.php');
$schedulecontroller=new ScheduleController();
$doc=$_GET['doc'];
$sresults=$schedulecontroller->dpicker($doc);
$index=0;
$day=null;
foreach($sresults as $result)
{
  $day.=$result['dayname'];
}

echo $day;


?>