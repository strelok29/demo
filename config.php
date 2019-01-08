<?php
$host = "localhost";
$userName = "rifqi";
$password = "P@ssw0rd01!";
$dbName = "demo";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>