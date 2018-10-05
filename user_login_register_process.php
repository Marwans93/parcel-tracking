<?php
//to insert data into database whenever user clicks add button
if (isset($_POST['register'])) {
$cust_name = addslashes($_POST['name']);
$cust_ic = addslashes($_POST['ic']);
$cust_email = addslashes($_POST['email']);
$cust_password = addslashes($_POST['password']);
$cust_phone = addslashes($_POST['phone']);
$cust_address1 = addslashes($_POST['add1']);
$cust_address2 = addslashes($_POST['add2']);
$cust_address_poscode = addslashes($_POST['poscode']);
$cust_address_city = addslashes($_POST['city']);
$cust_address_state = addslashes($_POST['state']);
$cust_gender = addslashes($_POST['gender']);
$cust_status = addslashes($_POST['status']);
include 'parcel_connect.php';
$query = "INSERT INTO customer ( cust_ic,cust_email,cust_password ,cust_name,cust_phone, cust_gender,cust_address1,cust_address2,cust_address_poscode,cust_address_city, cust_address_state ,cust_status ) VALUES
('$cust_ic' , '$cust_email' , '$cust_password' , '$cust_name' , '$cust_phone' , '$cust_gender', '$cust_address1' , '$cust_address2','$cust_address_poscode' , '$cust_address_city', '$cust_address_state','$cust_status')";
$result = mysql_query($query);
if ($result)
	//echo 'Add success';
  header('Location:main_user_login_register.php');
else
echo 'Add failed';
}
?>
	   
	  
	    