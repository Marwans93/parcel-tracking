<?php
   $email = $_POST['search'];
   
      include 'connection/parcel.php';
	  
	  $a = "select * from customer where cust_name = '$email'";
	  
	  

	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_num_rows($b);

	   
	   if($c == 0)
       {
		  header('Location:searching_page_notfound_2.php');
            
       }
	   else
	   {
		   $b = mysql_fetch_array($b);
		   $sc = $b['cust_name'];
		   
		   session_start();
		   $_SESSION['cust_name'] = $b['cust_name'];
		   
		   $sc == $email;
		    header('Location:searching_page_result_2.php');
		  
	   }
	   
	  ?>
	    