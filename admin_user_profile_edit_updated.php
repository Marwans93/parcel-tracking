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
  <h2 align="center">&nbsp;&nbsp;<strong>          &nbsp; ::PROFILE UPDATED::</strong>  </h2>
  <p align="center">&nbsp;</p>
  <p align="center">User Name:
    <label for="name"></label>
  <?php echo $c['cust_name'] ?>  </p>
  	<p align="center">I/C number :
  	  <label for="name"></label>
    <?php echo $c['cust_ic'] ?>  	</p>
<p align="center">Phone Number :<?php echo $c['cust_phone'] ?></p>
  	<p align="center">Account status : <?php echo $c['cust_status'] ?></p>
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
  	<p align="center">&nbsp;</p>
  	<p align="center">&nbsp;</p>
  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
  

</body>
</html>