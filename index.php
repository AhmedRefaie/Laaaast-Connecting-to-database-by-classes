<?php

class DatabaseConnect {
	public function __construct($db_host, $db_username, $db_password){
		echo 'Attempting connection... ';
		if(!@$this->Connect($db_host, $db_username, $db_password)){
			echo 'Connection failed.';
		} else if($this->Connect($db_host, $db_username, $db_password)) {
			echo 'Connected to '.$db_host;
		}
	}
	
	public function Connect($db_host, $db_username, $db_password){
		if(!mysqli_connect($db_host, $db_username, $db_password)){
			return false;
		} else {
			return true;
		}
	}
}

$connection = new DatabaseConnect('localhost', 'root', '');

?>  
