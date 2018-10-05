<?php 
session_start();
$rashid=$_SESSION['cust_phone'];

include 'connection/parcel.php';

$a = "select * from customer where cust_phone='$rashid'";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);
	  
$compare = $c['cust_email'];	  	  
	  	  

	  
$customer = "select * from parcel where cust_email='$compare' ";
	  
	  $w = mysql_query($customer) or die (mysql_error());
	  $v = mysql_fetch_array($w);
	  
$compare2 = $v['parcel_id'];
	  
$shipping = "select * from shipping where parcel_id='$compare2'";
	  
	  $g = mysql_query($shipping) or die (mysql_error());
	  $y = mysql_fetch_array($g);
?>
<SCRIPT type="text/javascript">
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}

</SCRIPT>
<title>Untitled Document</title>
</head>

<body background = "water.png">
<p>
<strong>
<h1>TRACK PARCEL BY USER PHONE NUMBER</h1>
</strong>
</p>
<p>&nbsp;</p>
<p></p>
<form id="form1" name="form1" method="post" action="user_search_process_2.php">
TYPE KEYWORD :
        <input type="text" name="search" onKeyPress="return isNumberKey(event)" id="search" />
  <label for="textfield3"></label>
  <font color="#FF0000">[eg: 0123456789]</font>
  </h1>
  <input type="submit" name="Search" id="Search" value="Search" />
  <p >RESULT :</p>
  <p >Parcel ID is : <?php echo $v['parcel_id']?>
  <p >Form status is : <?php echo $v['parcel_status']?> <font color="#FF0000">[if form is invalid, please pay at National Courier counter]</font>
  <p >Shipping status is : <?php echo $y['shipping_status']?> </p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
