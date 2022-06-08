<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mem";
// Create connection
$con = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if (!$con) {
	die("Database connection failed: " . mysqli_error());
}


// echo "Connected successfully";
?>
