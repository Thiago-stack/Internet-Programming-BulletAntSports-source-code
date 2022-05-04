<?php
//Here we destroy the cookies and session to log people out. If someone isn't logged in and trys to access this page, nothing happens. 
session_start();
if(isset($_SESSION['name']))
{
	$_SESSION=array();
	setcookie(session_name(), "", time()-2592000, "/");
	session_destroy();
	header('Location: ./index.php');
}
?>
