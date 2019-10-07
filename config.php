<?php
global $conn;

$host = "localhost";
$user = "root";
$pass = "";
$database = "dbku";

$conn = mysqli_connect($host,$user,$pass,$database);

if(!$conn){
	die("Database tidak ada".mysqli_connect_error());
}
?>