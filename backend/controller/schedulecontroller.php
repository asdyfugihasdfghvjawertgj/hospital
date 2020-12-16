<?php
    include_once("model/schedule.php");
    class ScheduleController extends Schedule{
        public function createSchedule($doctor,$day,$stime){
            $this->add($doctor,$day,$stime);
        }
        public function showSchedule(){
        return	$this->show();
        }
        public function viewSchedule($schid){
 		return	$this->view($schid);
 		}
 		public function scheduleDoc($schid){
 		return $this->schedule($schid);
	 	}
	 	public function updateSchedule($schid,$docid,$date,$time){
	 		$this->update($schid,$docid,$date,$time);
	 	}
	 	public function deleteSch($schid){
	 		$this->delete($schid);
		 }
	
 
    }
?>