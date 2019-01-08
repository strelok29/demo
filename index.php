<?php
$servername = "demowebcybermax.database.windows.net";
$username = "rifqi";
$password = "P@ssw0rd01!";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
die("connection failed : " . $conn->connect_error);

}

echo "connection success";
?>
