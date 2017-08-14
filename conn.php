<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="test"; 
//$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

$mysqli = new mysqli($host,$username,$password,$db_name);
if ($mysqli->connect_errno) echo "Error - Failed to connect to MySQL: " . $mysqli->connect_error;
?>