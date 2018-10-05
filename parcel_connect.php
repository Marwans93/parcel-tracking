<?php
//this code is to open connection with parcel database

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Cannot connect to parcel database');
$dbname='parcel_tracking';
mysql_select_db($dbname);  
?>