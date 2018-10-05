<?php 
session_start();
$rashid=$_SESSION['name'];
$checkemail = $_GET['$a'];

include 'connection/parcel.php';

$a = "select * from customer where cust_email='$checkemail'";
	  
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
<form id="form2" name="form2" method="post" action="user_profile_edit_process.php">
  <h2 align="center">&nbsp;&nbsp;<strong>          &nbsp; ::EDIT PROFILE::</strong>  </h2>
  <p align="center"><font color="red">[You can change anything in your profile, please make sure click UPDATE PROFILE to update the changes before leaving this page!] </font></p>
  <p align="center">User Name:
    <label for="name"></label>
    <input type="text" name="name" id="name" value="<?php echo $c['cust_name'] ?> " />
  <font color="red"> [eg : Fulan]</font></p>
  <p align="center">I/C number :
    <label for="name"></label>
    <input type="text" name="ic" id="ic" value="<?php echo $c['cust_ic'] ?> "/>
    <font color="red">[eg : 931026-03-5327]</font>  </p>
  <p align="center">Password :
    <label for="password"></label>
    <input type="text" name="password" id="password" value="<?php echo $c['cust_password'] ?> " />
  <font color="red">[eg : abc123]</font>  </p>
  <p align="center">Phone Number :
    <input type="text" name="contact" id="contact" value="<?php echo $c['cust_phone'] ?> "/>
    <font color="red">[eg :012-3456789]</font></p>
  <p align="center"> Sender Address: </p>
  <blockquote>
    <p align="center"> Address1 :
      <input name="add1"  id="add1" type="text" value="<?php echo $c['cust_address1'] ?>">
      <font color="red">[eg : PT123]</font></p>
    <p align="center">Address2 :
      <input name="add2" id="add2" type="text" value="<?php echo $c['cust_address2'] ?>">
      <font color="red">[eg : Jln Kebun]</font></p>
    <p align="center">Poscode :
      <input type="text" name="poscode"id="poscode" value="<?php echo $c['cust_address_poscode'] ?>">
      </textarea>
      <font color="red">[eg : 15200]</font></p>
    <p align="center">City :
      <input type="text" name="city" id="city" value="<?php echo $c['cust_address_city'] ?>">
      </textarea>
      <font color="red">[eg : Kota Bharu]</font></p>
    <p align="center">State :
      <select name="state" id="state" value="<?php echo $c['cust_address_state'] ?>">
        <option  value="KELANTAN"> KELANTAN</option>
        <option value="TERENGGANU">TERENGGANU</option>
        <option value="PAHANG">PAHANG</option>
        <option value="SELANGOR">SELANGOR</option>
        <option value="JOHOR">JOHOR</option>
        <option value="PERAK">PERAK</option>
        <option value="KEDAH">KEDAH</option>
        <option value="PERLIS">PERLIS</option>
        <option value="MELAKA">MELAKA</option>
        <option value="WILAYAH PERSEKUTUAN">WILAYAH PERSEKUTUAN</option>
        <option value="WILAYAH PERSEKUTUAN LABUAN">WILAYAH PERSEKUTUAN LABUAN</option>
        <option value="SERAWAK">SERAWAK</option>
        <option value="SABAH">SABAH</option>
        <option value="PENANG">PENANG</option>
      </select>
</textarea>
    </p>
  </blockquote>
  <p align="center">Gender :
    <input type="radio" name="gender" id="radio" value="male" required />
    <label for="gender"></label>
    MALE&nbsp;&nbsp;
  <input type="radio" name="gender" id="radio2" value="female" />
  <label for="gender"></label>
    FEMALE</p>
  <p align="center">
    <input type="text" name="email" id="email" value="<?php echo $c['cust_email'] ?>" hidden="true" required >
  </p>
  <p align="center">
    <input type="submit" name="register" id="register" value="UPDATE PROFILE" />
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="user_profile.php" target="_self">
  <input type="button" name="hantar2" value="Cancel">
  </a>
  </p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
  \
</form>
</body>
</html>