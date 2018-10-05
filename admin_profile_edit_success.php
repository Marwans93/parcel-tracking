<?php 
session_start();
$rashid=$_SESSION['name'];

include 'connection/parcel.php';

$a = "select * from employee where emp_email='$rashid' ";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);	  
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 h4 {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body background = "water.png">
<form id="form1" name="form1" method="post" action="admin_edit_profile.php">
  <h2 align="center">&nbsp;&nbsp;<strong>          &nbsp; ::YOUR PROFILE::</strong></h2>
  <p align="center"><font color="#FF0000">your profile upadated</font></p>
  <p align="center">Your Position : ADMIN 
    <label for="name2"></label>
    
  </p>
  <p align="center">User Name:
    <label for="name"></label>
   <?php echo $c['emp_name'] ?>
  </p>
  	<p align="center">I/C number :
  	  <label for="name"></label>
  	  <?php echo $c['emp_ic'] ?>
  	</p>
  	<p align="center">Phone Number :
      <?php echo $c['emp_phone'] ?>
  	</p>
  	<p align="center">&nbsp;</p>
  	<p align="center">Admin Address: </p>
  <blockquote>
      <p align="center"> Address1 :
        <?php echo $c['emp_address1'] ?>
      </p>
      <p align="center">Address2 :
        <?php echo $c['emp_address2'] ?>
      </p>
      <p align="center">Poscode :
        <?php echo $c['emp_address_poscode'] ?>
      </p>
      <p align="center">City :
        <?php echo $c['emp_address_city'] ?>
      </p>
    <p align="center">State :
        <?php echo $c['emp_address_state'] ?>
    </p>
    <p align="center">&nbsp;</p>
  </blockquote>
    <p align="center">Gender :    
      <?php echo $c['emp_gender'] ?>
    </p>
  	<p align="center"><font color="red">[You can change anything in your profile by clicking UPDATE PROFILE to update any changes ] </font></p>
  	<p align="center"></a>
     <a href="admin_edit_profile.php?$a=<?php echo $c['emp_email']?>">UPDATE</a></p>
  &nbsp;&nbsp;&nbsp;&nbsp;</p>
  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
  \
</form>
</body>
</html>