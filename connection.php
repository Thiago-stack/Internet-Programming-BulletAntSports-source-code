<?php 
function connect_db()
{
	//For local db server
	//$hn= "localhost";
	//$un= "phpUser";
	//$pwd= "jajaPHP1234";
	//$db=  "basports";
	
	//Production db server
	$hn= "localhost";
	$un= "u449686387_TClari23";
	$pwd= ";;BAS444;dbase21";
	$db=  "u449686387_BAsportsDB";

	$conn= new mysqli($hn, $un, $pwd, $db);
	if($conn->connect_error) 
		die("Fatal Error on Login");

	return $conn;
}






?>