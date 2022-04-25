<?php
session_start();
class Database{
	
	private $server  = 'localhost';
    private $username  = 'root';
    private $password   = "";
    private $database  = "canteen";
    
    public function getConnection(){		
		$conn = new mysqli($this->server, $this->username, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>