<?php
// Function to obtain mysqli connection.
function get_mysqli_conn()
{
$dbhost = 'mansci-db.uwaterloo.ca';
$dbuser = 'r2nasim';
$dbpassword = 'msci436_G26';
$dbname = 'r2nasim';
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if ($mysqli->connect_errno) 
{
echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}
return $mysqli;
}
?>