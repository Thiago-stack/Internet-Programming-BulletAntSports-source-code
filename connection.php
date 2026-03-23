<?php 
function connect_db()
{
	//For local db server
	//$hn= "localhost";
	//$un= "USER";
	//$pwd= "PASS";
	//$db=  "basports";
	
	//Production db server
	$hn= "localhost";
	$un= "YOUR_USERNAME";
	$pwd= "YOUR_PASSWORD";
	$db=  "*******_BAsportsDB";

	$conn= new mysqli($hn, $un, $pwd, $db);
	if($conn->connect_error) 
		die("Fatal Error on Login");

	return $conn;
}






?>
