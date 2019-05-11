<?php  
/*dbAdapter: this module acts as the database abstraction layer for the application
@Author: ritesh basnet
@Modify by:
*/

/*Connection paramaters
*/
require_once('config.php');

/* DBAdpater class performs all required CRUD functions for the application
*/
class DBAdaper {
	/*local variables
	*/
	private $dbConnectionString;
	private $dbUser;
	private $dbPassword;
	private $dbConn; //holds connection object
	private $dbError; //holds last error message

	/* The class constructor
	*/
	public function __construct($dbConnectionString, $dbUser, $dbPassword) {
		$this->dbConnectionString = $dbConnectionString;
		$this->dbUser = $dbUser;
		$this->dbPassword = $dbPassword;
	}
	/*Opens connection to the database
	*/
	public function dbOpen() {
		try {
			$this->dbConn = new PDO($this->dbConnectionString, $this->dbUser, $this->dbPassword);
			// set the PDO error mode to exception
			$this->dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->dbError = null;
		}
		catch(PDOException $e) {
			$this->dbError = $e->getMessage();
			$this->dbConn = null;
		}
	}
	/*Closes connection to the database
	*/
	public function dbClose() {
		//in PDO assigning null to the connection object closes the connection
		$this->dbConn = null;
	}
	/*Return last database error
	*/
	public function lastError() {
		return $this->dbError;
	}

}

?>