<?php
	class Garbage{
		private $weekNumber;
		private $fromDate;
		private $toDate;
		private $schedleA;
		private $schedleB;
		
		function __construct($weekNumber, $fromDate, $toDate, $schedleA, $schedleB){
			$this->setEmailAddress($weekNumber);
			$this->setFirstName($fromDate);
			$this->setToDate($toDate);
			$this->setScheduleA($schedleA);
			$this->setScheduleB($schedleB);
		}
		
		public function getWeekNumber(){
			return $this->weekNumber;
		}
		
		public function setWeekNumber($WeekNumber){
			$this->weekNumber = $WeekNumber;
		}
		
		public function getFromDate(){
			return $this->fromDate;
		}
		
		public function fromDate($fromDate){
			$this->fromDate = $fromDate;
		}
		
		public function getToDate(){
			return $this->toDate;
		}
		
		public function setToDate($toDate){
			$this->toDate = $toDate;
		}
		
		public function getScheduleA(){
			return $this->$schedleA;
		}
		
		public function setScheduleA($schedleA){
			$this->schedleA = $schedleA;
		}
		
		public function getScheduleB(){
			return $this->$schedleB;
		}
		
		public function setScheduleB($schedleB){
			$this->schedleB = $schedleB;
		}
		
	}
?>