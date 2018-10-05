<?php
//this code is to open connection with parcel tracking database

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Cannot connect to parcel_tracking database');
$dbname='parcel_tracking';
mysql_select_db($dbname);  
?>