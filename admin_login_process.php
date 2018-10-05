<?php
    $id = $_POST['admin_id'];
    $password = $_POST['admin_psw'];
   
      include 'connection/parcel.php';
	  
      $q = "select * from employee where emp_email = '$id' and  emp_password = '$password'";
	  
	  $r = mysql_query($q) or die (mysql_error());
	  $n = mysql_num_rows($r);


       if($n == 0)
       {
		   //echo "";
		  header('Location:main_admin_login_error.php');
            
       }
	   else
	   {
		   $r = mysql_fetch_array($r);
		   $check = $r['emp_email'];
		   
		   session_start();
		   $_SESSION['name'] = $r['emp_email'];
		   $_SESSION['nameSebenar'] = $r['emp_name'];
		   $_SESSION['emp_email'] = $check;
		   
		   $check == $id;
		    header('Location:admin_page.php');
		  
	   }
	   
	  ?>
	    