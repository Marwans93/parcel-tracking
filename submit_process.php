<?php
$parcel_tracking = $_POST['tracking_id'];
$parcel_name = $_POST['receiver_name'];
$parcel_weight = $_POST['weight'];
$parcel_price = $_POST['price'];
$parcel_address1 = $_POST['receiver_add1'];
$parcel_address2 = $_POST['receiver_add2'];
$parcel_address_poscode = $_POST['receiver_poscode'];
$parcel_address_city = $_POST['receiver_city'];
$parcel_address_state = $_POST['receiver_state'];
$parcel_phone = $_POST['receiver_phone'];
$parcel_status = $_POST['status'];
$parcel_email = $_POST['email'];
$shipping_status = $_POST['status2'];

	
	include 'connection/parcel.php';
	
	$sql = "update parcel 
				set parcel_name = '$parcel_name',
					cust_email = '$parcel_email',
					parcel_weight = '$parcel_weight',
					parcel_price = '$parcel_price',
					parcel_address1 = '$parcel_address1',
					parcel_address2 = '$parcel_address2',
					parcel_address_poscode = '$parcel_address_poscode',
					parcel_address_city = '$parcel_address_city',
					parcel_address_state = '$parcel_address_state',
					parcel_phone='$parcel_phone',
					parcel_status='$parcel_status'
				where parcel_id = '$parcel_tracking'" ;
	
	mysql_query($sql) or die(mysql_error());
	
		$sql2 = "update shipping 
				set shipping_status = '$shipping_status'
				where parcel_id = '$parcel_tracking'";
	
	mysql_query($sql2) or die(mysql_error());
	
	header('Location:admin_parcel_list_updated.php');
?>