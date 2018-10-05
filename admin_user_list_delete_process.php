<?php
$delete = $_GET['$a'];

include 'connection/parcel.php';
			
$sql = "delete from customer where cust_email = '$delete'";
	
	mysql_query($sql) or die(mysql_error());
		
		header('Location:admin_user_list_deleted.php');

?>