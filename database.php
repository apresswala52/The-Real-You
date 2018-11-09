<?php

/**
 * @file
 * Connect to mysql
 */

//Create connection credentials
$db_host = 'localhost:3306';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = '';

//Create mysqli object
$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error handler
if($conn->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
