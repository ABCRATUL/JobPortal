<?php
$server = "localhost";
  $username = "root";
  $password = "";

  $connection = mysqli_connect($server, $username, $password) or die ("Error in connecting to the server!");

  $db_name = "user1";
  $create_db = "CREATE DATABASE IF NOT EXISTS $db_name";

  // Execute database creation query.
  mysqli_query($connection, $create_db);

  // Connecting to the database By creating it.
  // if (mysqli_query($connection, $create_db)) {
  //   echo "Database created successfully!";
  // } else {
  //   echo mysqli_error($connection);
  // }

  // Connecting with the database to create a table.
  mysqli_select_db($connection, $db_name);
$table="CREATE TABLE js(
  id int(100) NOT NULL,
  fname varchar(100) NOT NULL,
  lname varchar(100) NOT NULL,
  pass varchar(100) NOT NULL,
  type varchar(10) NOT NULL,
  email varchar(100) NOT NULL,
  count int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($connection, $table);
$table2="CREATE TABLE jobcount (
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($connection, $table2);
$table3="CREATE TABLE empdetail (
  `address` varchar(1000) NOT NULL,
  `company` varchar(100) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `id` int(255) NOT NULL,
  `comp_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($connection, $table3);
$table4="CREATE TABLE `jobs` (
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `id` int(255) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `emp_id` int(255) NOT NULL,
  `salary` int(20) NOT NULL,
  `position` varchar(1000) NOT NULL,
  `expire` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($connection, $table4);
$table5="CREATE TABLE `jsdetail` (
  `skills` varchar(500) NOT NULL,
  `id` int(100) NOT NULL,
  `college` varchar(1000) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `interest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($connection, $table5);
$table6="CREATE TABLE `apply` (
  `job_id` int(255) NOT NULL,
  `js_id` int(255) NOT NULL,
  `reason` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
mysqli_query($connection, $table6);

$table7="";
mysqli_query($connection, $table7);
?>
