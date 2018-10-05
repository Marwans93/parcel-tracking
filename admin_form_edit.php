<?php 
session_start();
$rashid=$_SESSION['name'];
$uwais=$_GET['$a'];
include 'connection/parcel.php';

$a = "select * from parcel where parcel_id='$uwais' ";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);
	  
	  $compare = $c['cust_email'];
	  $compare2 = $c['parcel_id'];
	  
$customer = "select * from customer where cust_email='$compare'";
	  
	  $w = mysql_query($customer) or die (mysql_error());
	  $v = mysql_fetch_array($w);
	  
$shipping = "select * from shipping where parcel_id='$compare2'";
	  
	  $t = mysql_query($shipping) or die (mysql_error());
	  $y = mysql_fetch_array($t);
?>

<script language="JavaScript">
   function calc()
{ 
   var price=0;
   var newWeight=0;
   var weight = prompt("ENTER YOUR PARCEL WEIGHT (KG):","0.0");
   document.formReg.weight.value=weight;   
   if(weight<1)
   		price=6;
	else
		{	
			newWeight=(weight-1)/0.25;
			price=6+newWeight;
		}
   alert("YOUR PRICE IS : RM" + price);
   document.formReg.price.value=price;
}
  </script>
  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jsDatePick Javascript example</title>

<link rel="stylesheet" type="text/css" media="all" href="jsdatepick-calendar/jsDatePick_ltr.min.css" />

<script type="text/javascript" src="jsdatepick-calendar/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
		});
		
		new JsDatePick({
			useMode:2,
			target:"inputField2",
			dateFormat:"%d-%M-%Y"
		});
	};
	
	
	function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}
	
</script>

<title>Form Validation</title>

</head>
<center><body background="file:///G|/ /ITS332 [PROJECT]/water.png">
<h2><strong>::PARCEL DETAIL :: </strong></h2>
<p><font color="red">[You can change anything in user parcel detail, please make sure click Submit to update the changes before leaving this page!] </font></p>
<form name="formReg" method="post"  action="submit_process.php" >
  <p>Tracking Number :
    <input name="tracking_id" id="tracking_id" type="text"  value="<?php echo $c['parcel_id'] ?>">
  </p>
  <p>Sender Name :
    <input type="text" name="name" id="name" value="<?php echo $v['cust_name'] ?>">
  </p>
  <p><font color="red">*</font>weight(KG):
    <input type="text" name="weight" id="weight"  value="<?php echo $c['parcel_weight'] ?>"required onClick="calc()">
  <font color="red">[1.5] </font></p>
  <p><font color="red">*</font>Price(RM):
    <input type="text" name="price" id="price"  value="<?php echo $c['parcel_price'] ?>" required>
  <font color="red">[10.5]</font></p>
  <p>Sender Address: </p>
  <blockquote>
    <p> Address1 :
      <input name="add1" id="add1" type="text" value="<?php echo $v['cust_address1'] ?>">
    </p>
    <p>Address2 :
      <input name="add2" id="add2"type="text" value="<?php echo $v['cust_address2'] ?>">
    </p>
    <p>Poscode :
      <input type="text" name="poscode" id="poscode" value="<?php echo $v['cust_address_poscode'] ?>">
      </textarea>
    </p>
    <p>City :
      <input type="text" name="city" id="city"value="<?php echo $v['cust_address_city']  ?>" >
      </textarea>
    </p>
    <p>State :
      <select name="state" id="state"required value="<?php echo $v['cust_address_state']  ?>">
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
    <p>&nbsp;</p>
    <p> Receiver Name:
      <input type="text" name="receiver_name" id="receiver_name" requested value="<?php echo $c['parcel_name'] ?>">
    </p>
    <p>&nbsp;</p>
  </blockquote>
  <p>Receiver Address: </p>
  <blockquote>
    <p> Address1 :
      <input name="receiver_add1" type="text"  id="receiver_add1" requested value="<?php echo $c['parcel_address1'] ?>" >
    </p>
    <p>Address2 :
      <input name="receiver_add2"  id="receiver_add2" type="text" value="<?php echo $c['parcel_address2'] ?>" requested>
    </p>
    <p>Poscode :
      <input type="text" name="receiver_poscode"  id="receiver_poscode" onKeyPress="return isNumberKey(event)" requested value="<?php echo $c['parcel_address_poscode'] ?>">
      </textarea>
    </p>
    <p>City :
      <input type="text" name="receiver_city"  id="receiver_city" value="<?php echo $c['parcel_address_city'] ?>" requested>
      </textarea>
    </p>
    <p>State :
      <select name="receiver_state" id="receiver_state"required value="<?php echo $v['cust_address_state']  ?>">
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
  </p>
  <p>Receiver Phone Number:
    <input type="text" name="receiver_phone"  id="receiver_phone" onKeyPress="return isNumberKey(event)" requested value="<?php echo $c['parcel_phone'] ?>" >
  </p>
  <p>&nbsp;</p>
  <p><font color="red">[Change status to VALID after user paid the cost]</font></p>
  <p>Status Form : <?php echo $c['parcel_status'] ?> Change to :<b> </b>
    <select name="status" id="status" value="INVALID">
     <option  value="INVALID"> INVALID</option>
     <option value="VALID">VALID</option>
   </select>
  </p>
  <p><font color="red">[Form will automatically deleted 1 week after VALID date]</font></p>
  <p>Status Form VALID date : <input type="text" size="12" id="inputField" /></p>
  <p><font color="red">[Change status according status parcel]</font></p>
  <p>Status Shipping : 
    <?php echo $y['shipping_status'] ?> Change to :<b> </b>
    <select name="status2">
      <option selected="selected" value="PROCESSING...">PROCESSING...</option>
      <option value="COURIER IS TEMPTING TO DELIVERY...">COURIER IS TEMPTING TO DELIVERY...</option>
      <option value="DELIVERED.">DELIVERED.</option>
    </select>
  </p>
  <p><font color="red">[Set the date once parcel is delivered]</font></p>
  <p>Date Parcel Delivered :  
    <input type="text" size="12" id="inputField2" />
  </p>
  <p><font color="red">[This form will automatically deleted  3 days after Date Parcel Delivered]</font>
  <input type="text" name="email" id="email" value="<?php echo $v['cust_email'] ?>" hidden="true"></p>
  <p>
    <input type="Submit" name="hantar" value="Submit">
    <a href="admin_parcel_list.php" target="_self">
    <input type="button" name="hantar2" value="Cancel">
  </a></p>
  <p>&nbsp;</p>

</form>

</body>
</html>