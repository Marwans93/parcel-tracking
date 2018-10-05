<?php
$delete = $_GET['$a'];

include 'connection/parcel.php';
			
$sql = "delete from parcel where parcel_id = '$delete'";
	
	mysql_query($sql) or die(mysql_error());
		
		header('Location:admin_parcel_list_deleted.php');
		
$sql2 = "delete from shipping where parcel_id = '$delete'";
	
	mysql_query($sql2) or die(mysql_error());
		
		header('Location:admin_parcel_list_deleted.php');

?>