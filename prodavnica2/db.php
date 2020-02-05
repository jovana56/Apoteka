<?php 

$serverusername="localhost";
$username="root";
$password="";
$db="apoteka1";

// Create connection
$con=mysqli_connect($serverusername,$username,$password,$db);

// Check connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

?>