<?php
include_once('controller/schedulecontroller.php');
$schid=$_GET["id"];
$schedulecontroller=new ScheduleController();
$schedulecontroller->deleteSch($schid);
header('location:scheduleindex.php');
?>