<?php

session_start();

session_start();
$conn=mysqli_connect("localhost","root","","hi-td");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    $name =$_GET['username'];
    $pass =$_GET['password'];
   
    $sql="SELECT*FROM users WHERE username ='".$name."' && `password` ='".$pass."';";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
        if($num==1)
        {
        header('location:home.php');
        }
        else
        {
        header('location:login2.php');
        }   
    ?>