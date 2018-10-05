<?php
if (isset($_POST['register'])) 
{
$ic= $_POST['ic'];
$parcel_email = $_POST['email'];
$pass = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['contact'];
$gender = $_POST['gender'];
$address1 = $_POST['add1'];
$address2 = $_POST['add2'];
$address_poscode = $_POST['poscode']; 
$address_city = $_POST['city'];
$address_state = $_POST['state'];
$status = $_POST['status'];

	
include 'connection/parcel.php';
	
	$sql = "update customer
				set cust_ic = '$ic',
					cust_password = '$pass',
					cust_name = '$name',
					cust_phone = '$phone',
					cust_gender='$gender',
					cust_address1 = '$address1',
					cust_address2 = '$address2',
					cust_address_poscode = '$address_poscode',
					cust_address_city = '$address_city',
					cust_address_state = '$address_state',
					cust_status='$status'
				where cust_email = '$parcel_email'";
	
	mysql_query($sql) or die(mysql_error());	
	
	header('Location:admin_user_list.php');
}
?>