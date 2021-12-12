<?php
$host	= "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "employee";
	
    
	


	function getConnection(){
		global $host,  $dbuser, $dbpass, $dbname ;
	
		$conn = mysqli_connect($host,  $dbuser, $dbpass, $dbname);
		return $conn;
		if (!$conn/*->connect_error*/) {
			die("Connection failed: " . /*$conn->*/mysqli_connect_error());
		  }
		  echo "Connected successfully";
	}

?>