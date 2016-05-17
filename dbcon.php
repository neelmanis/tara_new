<?php
$dbname="tara_db";
$dbhost="localhost";
$dbuser="root";
$dbpass="";

@$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die("Connection failed");
$db=mysql_select_db($dbname, $conn) or die("Database not connected");
?>