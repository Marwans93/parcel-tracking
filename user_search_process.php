<?php
   $email = $_POST['search'];
   
      include 'connection/parcel.php';
	  
	  $a = "select * from parcel where parcel_id = '$email'";
	  


	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_num_rows($b);

	   
	   if($c == 0)
       {
		   //echo "";
		  header('Location:user_searching_page_notfound.php');
            
       }
	   else
	   {
		   $b = mysql_fetch_array($b);
		   $sc = $b['parcel_id'];
		   
		   session_start();
		   $_SESSION['parcel_id'] = $b['parcel_id'];
		   
		   $sc == $email;
		    header('Location:user_searching_page_result.php');
		  
	   }
	   
	  ?>
	    