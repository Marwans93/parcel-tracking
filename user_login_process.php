<?php
   $email = $_POST['user_id'];
   $password = $_POST['user_psw'];
   
      include 'connection/parcel.php';
	  
      $q = "select * from customer where cust_email = '$email' and  cust_password = '$password'";
	  
	  
	  
	  
	  $r = mysql_query($q) or die (mysql_error());
	  $n = mysql_num_rows($r);


       if($n == 0)
       {
		   //echo "";
		  header('Location:main_user_login_error.php');
            
       }
	   else
	   {
		   $r = mysql_fetch_array($r);
		   $role = $r['cust_email'];
		   
		   session_start();
		   $_SESSION['name'] = $r['cust_email'];
		   $_SESSION['userSebenar'] = $r['cust_name'];
		   $_SESSION['cust_email'] = $role;
		   
		   $role == $email;
		    header('Location:user_page.php');
		  
	   }
	   
	  ?>
	    