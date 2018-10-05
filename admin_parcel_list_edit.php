<?php 
session_start();
$rashid=$_SESSION['parcel_id'];
$uwais=$_GET['$a'];
include 'connection/parcel.php';

$a = "select * from parcel where parcel_id='$uwais' ";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);
	  
$compare = $c['cust_email'];
	  
$customer = "select * from customer where cust_email='$compare'";
	  
	  $w = mysql_query($customer) or die (mysql_error());
	  $v = mysql_fetch_array($w);
?>
<html>
<head>
<title>Form Validation</title>

<script type="text/JavaScript">

function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}


</script>
</head>
<center><body background="file:///G|/ /ITS332 [PROJECT]/water.png">
<h2><strong>:: PARCEL REGISTERATION FORM :: </strong></h2>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="submit.php" >
  <p><font color="red">[Tracking number is provided by the system]</font></p>
  <p>Given parcel tracking Number :
   <?php echo $c['parcel_id'] ?>
  </p>
  <blockquote>
    <p><font color="red">*</font> Receiver Name:
      <input type="text" name="receiver_name" id="receiver_name" requested value="<?php echo $c['parcel_name'] ?>" >
    <font color="red">[eg : Fulan]</font></p>
  </blockquote>
  <p><font color="red">*</font> Receiver Address: </p>
  <blockquote>
    <p> Address1 :
      <input name="receiver_add1" id="receiver_add1" type="text" value="<?php echo $c['parcel_address1'] ?>" required >
    <font color="red">[eg : PT123]</font></p>
    <p>Address2 :
      <input name="receiver_add2" type="text" id"receiver_add2" value="<?php echo $c['parcel_address2'] ?>" required>
    <font color="red">[eg : Jln Kebun]</font></p>
    <p>Poscode :
      <input type="text" name="receiver_poscode" onKeyPress="return isNumberKey(event)" id="receiver_poscode" value="<?php echo $c['parcel_address_poscode'] ?>"required>
      </textarea>
    <font color="red">[eg : 15200]</font></p>
    <p>City :
      <input type="text" name="receiver_city"  value="<?php echo $c['parcel_address_city'] ?>" id="receiver_city" required >
      </textarea>
    <font color="red">[eg : Kota Bharu]</font>    </p>
    <p>State :
      <select name="receiver_state" id="state"required value="">
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
  <p>	
    </textarea>
  <font color="red">[You can guest your parcel price at &quot;<a href="calc_price.php" target="new">CALCULATE HERE</a>&quot; before weight the real parcel weight at Pos Laju counter to make a payment.RM6.00. for the first 1kg item. RM1 for the next 250g]</font></p>
  <p><font color="red">[You can change the sender Address if needed, Please note that the parcel will be sent back to this address if we do not succesfull deliver it]</font></p>
  <p><font color="red">*</font> Receiver Phone Number:
    <input type="text" name="receiver_phone" onKeyPress="return isNumberKey(event)" id="receiver_phone" value="<?php echo $c['parcel_phone'] ?>" required >
    <font color="red">[eg : 012-3456789]</font></p>
  <p>Status :<b> </b>
    <?php echo $c['parcel_status'] ?>
    <br>
  <font color="red">[Your form will be in &quot;INVALID&quot; status. The form status will be &quot;VALID&quot; once you have pay the parcel at the National Courier counter. Please notify that your form will be automatically removed if the form status is &quot;INVALID&quot; after 1 week]</font></p>
  <p>
    <input type="text" name="email" id="email" value="<?php echo $v['cust_email'] ?>" hidden="true" required >
  </p>
  <p>    <br>
    <input type="Submit" name="register" value="Submit">
    <input type="Reset" name="hantar2" value="Reset">
  </p>
  <p>&nbsp;</p>

</form>
</body>
</html>