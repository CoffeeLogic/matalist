<?php
ob_start();
session_start();
$servername = "matalistdb.cbhzd1fnevha.us-east-2.rds.amazonaws.com";
$username = "matalist";
$password = "csunmatalist";
$dbname = "matalistdb";

$conn = new mysqli ( $servername,  $username, $password, $dbname);

  // Check connection
 # if ($conn->connect_error) {
  #    die("Connection failed: " . $conn->connect_error);
 # } 
#  echo "Connected successfully"; 
#mysql_select_db("$dbname");

