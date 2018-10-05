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
$cust_poscode = $_POST['poscode'];
$cust_state = $_POST['state'];
$cust_city = $_POST['city'];
$cust_gender = $_POST['gender'];

include 'connection/parcel.php';

$sql = "update customer
				set cust_ic = '$cust_ic',
					cust_password = '$cust_password',
					cust_name = '$cust_name',
					cust_phone = '$cust_contact',
					cust_gender = '$cust_gender',
					cust_address1 = '$cust_add1',
					cust_address2 = '$cust_add2',
					cust_address_city = '$cust_city',
					cust_address_poscode = '$cust_poscode',
					cust_address_state = '$cust_state'												
					where cust_name = '$cust_name'";
	
	mysql_query($sql) or die(mysql_error());
	
	header('Location:user_profile.php');
}
?>
	   
	  
	    