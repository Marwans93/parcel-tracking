<?php 
session_start();
$rashid=$_SESSION['name'];

include 'connection/parcel.php';

$a = "select * from customer where cust_email='$rashid'";
	  
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
<form method="post" id="form1" name="form1" action='user_edit_profile.php'>
  <h2 align="center">&nbsp;&nbsp;<strong>          &nbsp; ::YOUR PROFILE::</strong></h2>
  <p align="center">Your Account Status : 
    <label for="name2"></label>
  <?php echo $c['cust_status'] ?>  </p>
  <p align="center"><font color="red">[Please notify your current account status to make sure your account is still valid. Your current account status will be &quot;INACTIVE&quot; if you do not logged  for 8 Month. Your account will be deleted automatically after 2 month in &quot;INACTIVE&quot; status. Make sure log-in before the given period to make sure your account still valid] </font></p>
  <p align="center">User Name:
    <label for="name"></label>
  <?php echo $c['cust_name'] ?>  </p>
  	<p align="center">I/C number :
  	  <label for="name"></label>
    <?php echo $c['cust_ic'] ?>  	</p>
  	<p align="center">Phone Number :<?php echo $c['cust_phone'] ?></p>
  	<p align="center"><font color="red">[Sander Address is the address that system will auto-fill when user create new online form]</font></p>
  	<p align="center">Sender Address: </p>
  <blockquote>
      <p align="center"> Address1 :<?php echo $c['cust_address1'] ?></p>
      <p align="center">Address2 :<?php echo $c['cust_address2'] ?></p>
      <p align="center">Poscode :
        <?php echo $c['cust_address_poscode'] ?>
</textarea>
      </p>
      <p align="center">City :
        <?php echo $c['cust_address_city'] ?>
</textarea>
      </p>
    <p align="center">State :
        <?php echo $c['cust_address_state'] ?>
</textarea>
    </p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    </blockquote>
    <p align="center">Gender :<?php echo $c['cust_gender'] ?></p>
  	<p align="center"><font color="red">[You can change anything in your profile by clicking UPDATE PROFILE to update any changes ] </font></p>
  	<p align="center"><a href="user_edit_profile.php?$a=<?php echo $c['cust_email']?>">UPDATE</a></a></p>
  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
  \
</form>
</body>
</html>