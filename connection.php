<?php

$user="root";
$pass="";
$server="localhost";
$db="user1";
$conn=mysqli_connect($server,$user,$pass);
mysqli_select_db($conn,"user1");
?>