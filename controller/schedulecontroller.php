<?php
include_once('model/schedule.php');
class ScheduleController extends Schedule
{
public function dpicker($doc){

return $this->picker($doc);
}
}
?>