<?php

//Used to throw mysqli_sql_exceptions for database
//errors instead or printing them to the screen.
mysqli_report(MYSQLI_REPORT_STRICT);
/**
 * Abstract data access class. Holds all of the database
 * connection information, and initializes a mysqli object
 * on instantiation.
 * 
 * @author Matt
 */
class connection {
    protected $mysqli;
    
    /* Host address for the database */
    protected static $DB_HOST = "127.0.0.1";
    /* Database username */
    protected static $DB_USERNAME = "elimt";
    /* Database password */
    protected static $DB_PASSWORD = "";
    /* Name of database */
    protected static $DB_DATABASE = "garbagepickup";
    
    protected static $DB_PORT = "3306";
    
    
    
    /* Create connection
    $db = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $datab$DB_DATABASE);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";
    /*
     * Constructor. Instantiates a new MySQLi object.
     * Throws an exception if there is an issue connecting
     * to the database.
     */
    function __construct() {
         echo '<script>console.log("connection script");</scipt>';
       try{
           $this->mysqli = new mysqli(self::$DB_HOST, self::$DB_USERNAME, 
             self::$DB_PASSWORD, self::$DB_DATABASE);
              echo '<script>console.log("connected");</scipt>';
        }catch(mysqli_sql_exception $e){
           throw $e;
       }
   }
    
   public function getMysqli(){
       return $this->mysqli;
        
    }
    
}

?>
