<?php

$dbhost = "";
$dbuser = "";
$dbpassword = "";
$dbname = "";
$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if ($conn->connect_errno) 
{
echo 'Failed to connect to MySQL: (' . $conn->connect_errno . ') ' . $conn->connect_error;
}
