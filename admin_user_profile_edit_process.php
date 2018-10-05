<?php
//to insert data into database whenever user clicks add button
if (isset($_POST['register'])) 
{
$cust_email = $_POST['email'];
$cust_name = $_POST['name'];
$cust_ic = $_POST['ic'];
$cust_password = $_POST['password'];
$cust_contact = $_POST['contact'];
$cust_add1 = $_POST['add1'];
$cust_add2 = $_POST['add2'];
$cust_address_poscode = $_POST['poscode'];
$cust_address_state = $_POST['state'];
$cust_address_city = $_POST['city'];
$cust_gender = $_POST['gender'];
$cust_status = $_POST['status2'];

include 'connection/parcel.php';

$sql = "update customer
				set cust_address1 = '$cust_add1',
					cust_address2 = '$cust_add2',
					cust_address_city = '$cust_address_city',
					cust_address_poscode = '$emp_address_poscode',
					cust_address_state = '$emp_address_state',
					cust_ic = 'cust_ic',
					cust_phone = '$cust_contact',
					cust_password = '$cust_password',
					cust_status = '$cust_status'
					where cust_email = '$cust_email'";
	
	mysql_query($sql) or die(mysql_error());
	
	header('Location:admin_user_list_updated.php');
}
?>