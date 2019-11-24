<?php

session_start();
$conn=mysqli_connect("localhost","root","","hi-td");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>