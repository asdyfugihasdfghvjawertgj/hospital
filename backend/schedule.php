<?php
include_once("controller/schedulecontroller.php");
$schedule_control=new ScheduleController();
$schedule_control->createSchedule($_POST["doctor"],$_POST["day"],$_POST["start_time"]);


?>