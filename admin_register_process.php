<?php
//to insert data into database whenever user clicks add button
if (isset($_POST['register'])) {
$emp_email = addslashes($_POST['email']);
$emp_password = addslashes($_POST['password']);
$emp_name = addslashes($_POST['name']);
$emp_ic = addslashes($_POST['ic']);
$emp_gender = addslashes($_POST['gender']);
$emp_phone = addslashes($_POST['phone']);
$emp_address1 = addslashes($_POST['add1']);
$emp_address2 = addslashes($_POST['add2']);
$emp_address_poscode = addslashes($_POST['poscode']);
$emp_address_city = addslashes($_POST['city']);
$emp_address_state = addslashes($_POST['state']);
include 'parcel_connect.php';
$query = "INSERT INTO employee 
(emp_email,emp_password ,emp_name,emp_ic, emp_gender,emp_phone, emp_address1, emp_address2, emp_address_poscode, emp_address_city, emp_address_state ) VALUES
('$emp_email','$emp_password','$emp_name','$emp_ic',  '$emp_gender','$emp_phone' , '$emp_address1' , '$emp_address2','$emp_address_poscode' , '$emp_address_city', '$emp_address_state')";
$result = mysql_query($query);
if ($result)
// echo 'Add success';
  header('Location:admin_register_page_success.php');
else
 echo 'Add failed';
}
?>
	   
	  
	    