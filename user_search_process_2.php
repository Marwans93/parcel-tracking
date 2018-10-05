<?php
   $email = $_POST['search'];
   
      include 'connection/parcel.php';
	  
	  $a = "select * from customer where cust_phone = '$email'";
	  
	  

	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_num_rows($b);

	   
	   if($c == 0)
       {
		  header('Location:user_searching_page_notfound_2.php');
            
       }
	   else
	   {
		   $b = mysql_fetch_array($b);
		   $sc = $b['cust_phone'];
		   
		   session_start();
		   $_SESSION['cust_phone'] = $b['cust_phone'];
		   
		   $sc == $email;
		    header('Location:user_searching_page_result_2.php');
		  
	   }
	   
	  ?>
	    