<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "company";
	$connection = new mysqli($dbhost, $dbuser, $dbpass,$db);

	if(!$connection) {
		echo 'ERROR ON CONNECTING WITH DATABASE'; 
	}
?>

