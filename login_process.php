<?php
   $username = $_POST['username'];
   $password = $_POST['password'];
   
      include 'dbbooking.php';
	  
      $q = "select * from user where user_name = '$username' and  	        user_password = '$password'";
	  
	   $a = "select * from customer where cus_name = '$username' 	        and cus_password = '$password'";
	  
	  $r = mysql_query($q) or die (mysql_error());
	  $n = mysql_num_rows($r);
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_num_rows($b);

        if($n == 0)
       {
           echo "Invalid user"."<br>"."<a href = 'login_page.php'>           Click here to go back</a>"; 
       }
	   else
	   {
		   $r = mysql_fetch_array($r);
		   $role = $r['user_role'];
		   
		   session_start();
		   $_SESSION['name'] = $r['user_name'];
		   $_SESSION['user_role'] = $role;
		   
		   $role == 'admin';
		   		header('Location:admin_page.php');
		  
	   }
	   
	   if($c == 0)
       {
           echo "Invalid user"."<br>"."<a href = 'login_page.php'>           Click here to go back</a>"; 
       }
	   else
	   {
		   $b = mysql_fetch_array($b);
		   $role = $b['cus_name'];
		   
		   session_start();
		   $_SESSION['name'] = $b['cus_name'];
		   $_SESSION['cus_name'] = $role;
		   
		   
		   $role == 'cus_name';
		   		header('Location:customer_page.php');
		  
	   }
?>