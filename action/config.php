<?php
	$servername = "localhost";

	$username = "root";
	$password = "";
	$db="billing_site";
	


	/*Create connection*/
	$con = mysqli_connect($servername, $username, $password, $db);
	if(!$con){
		// error_reporting(0);
		die(mysqli_connect_error());
	}
?>