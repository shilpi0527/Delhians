<?php
		$server = "localhost";
		$uname = "finitecolors";
		$pswd = "r@JtH3Adm!n";
		$db = "garbage";
		
		$con = new MySQLi($server, $uname, $pswd, $db); 
		
		//Exception testing.
		if ($con->connect_error)
		    die("Connection is failed: " . $con->connect_error);
?>	