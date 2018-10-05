<?php
//to insert data into database whenever user clicks add button
if (isset($_POST['register'])) {
$parcel_id = addslashes($_POST['tracking_number']);
$email = addslashes($_POST['email']);
$parcel_name = addslashes($_POST['receiver_name']);
$parcel_address1 = addslashes($_POST['receiver_add1']);
$parcel_address2 = addslashes($_POST['receiver_add2']);
$parcel_address_poscode = addslashes($_POST['receiver_poscode']);
$parcel_address_city = addslashes($_POST['receiver_city']);
$parcel_address_state = addslashes($_POST['state']);
$parcel_phone = addslashes($_POST['receiver_phone']);
$parcel_status = addslashes($_POST['status']);


include 'parcel_connect.php';

$query = "INSERT INTO parcel 
(parcel_id,cust_email,parcel_name,parcel_status ,parcel_address1, parcel_address2, parcel_address_poscode, parcel_address_city, parcel_address_state,parcel_phone) VALUES
('$parcel_id','$email','$parcel_name','$parcel_status','$parcel_address1', '$parcel_address2', '$parcel_address_poscode', '$parcel_address_city','$parcel_address_state','$parcel_phone')";
 
$query2 = "INSERT INTO shipping 
(parcel_id) VALUES
('$parcel_id')";

$result = mysql_query($query);
$result2 = mysql_query($query2);
if ($result)
 //echo 'Add receiver success';
 	if ($result2)
  		header('Location:online_form_success.php');
	else
		echo 'Add receiver failed';	
else
 echo 'Add receiver failed';

}
?>
	   
	  
	    