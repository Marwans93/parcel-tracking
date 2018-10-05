<?php
   $email = $_POST['search'];
   
      include 'connection/parcel.php';
	  
      //$q = "select * from customer where cust_email = '$email'";
	  $a = "select * from parcel where parcel_id = '$email'";
	  
	  
	  
	  
	  //$r = mysql_query($q) or die (mysql_error());
	  //$n = mysql_num_rows($r);

	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_num_rows($b);

      // if($n == 0)
      // {
		   //echo "";
		 // header('Location:searching_page_notfound.php');
            
      // }
	  // else
	  // {
		   //$r = mysql_fetch_array($r);
		  // $role = $r['cust_email'];
		   
		 //  session_start();
		 //  $_SESSION['name_user'] = $r['cust_email'];
		 //  $_SESSION['userSebenar'] = $r['cust_name'];
		 //  $_SESSION['cust_email'] = $role;
		   
		 ///  $role == $email;
		  //  header('Location:user_page.php');
		  
	  // }
	   
	   if($c == 0)
       {
		   //echo "";
		  header('Location:searching_page_notfound.php');
            
       }
	   else
	   {
		   $b = mysql_fetch_array($b);
		   $sc = $b['parcel_id'];
		   
		   session_start();
		   $_SESSION['parcel_id'] = $b['parcel_id'];
		   
		   $sc == $email;
		    header('Location:searching_page_result.php');
		  
	   }
	   
	  ?>
	    