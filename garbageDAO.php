<?php
require_once('connection.php');
require_once('Garbage.php');


class garbageDAO extends connection {
	function __construct() {
        try{
            parent::__construct();
        } catch(mysqli_sql_exception $e){
            throw $e;
        }
    }
	
	
	public function getCustomer(){
        //The query method returns a mysqli_result object
        $result = $this->mysqli->query('SELECT `week number`,`from date`,`to date`,`schedule A`,`schedule B` FROM `table 2`');
        $garbage = Array();
        
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
                //Create a new employee object, and add it to the array.
                $garbage = new Garbage($row['`week number`'], $row['`from date`'], $row['`to date`'], $row['`schedule`'], $row['`schedule A`'], $row['`schedule B`']);
                $garbageZ[] = $garbage;
            }
           $result->free();
            //return $result;
           return $garbageZ;
        }
       // $result->free();
        return false;
    }
	}
	
?>