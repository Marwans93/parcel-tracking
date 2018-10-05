<?php
//to insert data into database whenever user clicks add button
if (isset($_POST['register'])) 
{
$emp_email = $_POST['email'];
$emp_name = $_POST['name'];
$emp_ic = $_POST['ic'];
$emp_password = $_POST['password'];
$emp_contact = $_POST['contact'];
$emp_add1 = $_POST['add1'];
$emp_add2 = $_POST['add2'];
$emp_poscode = $_POST['poscode'];
$emp_state = $_POST['state'];
$emp_city = $_POST['city'];
$emp_gender = $_POST['gender'];

include 'connection/parcel.php';

$sql = "update employee
				set emp_address1 = '$emp_add1',
					emp_address2 = '$emp_add2',
					emp_address_city = '$emp_city',
					emp_address_poscode = '$emp_poscode',
					emp_address_state = '$emp_state',
					emp_ic = '$emp_ic',
					emp_phone = '$emp_contact',
					emp_password = '$emp_password'
					where emp_name = '$emp_name'";
	
	mysql_query($sql) or die(mysql_error());
	
	header('Location:admin_profile.php');
}
?>
	   
	  
	    