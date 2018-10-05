<?php 
session_start();
$rashid=$_SESSION['parcel_id'];
include 'connection/parcel.php';

$a = "select * from parcel where parcel_id='$rashid'";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);
	  
$compare = $c['parcel_id'];
	  
$customer = "select * from shipping where parcel_id='$compare'";
	  
	  $w = mysql_query($customer) or die (mysql_error());
	  $v = mysql_fetch_array($w);	  
?>

<title>Untitled Document</title>
</head>

<body background = "water.png">
<form id="form1" name="form1" method="post" action="user_search_process.php">
  <p>  
  <strong>
  <h1>TRACK PARCEL BY TRACKING NUMBER</h1>
  </strong>
  </p>
  <p>&nbsp;</p>
  <p></p>
TYPE KEYWORD :
        <input type="text" name="search"  id="search"/>
  <label for="textfield3"></label>
  <label for="textfield4"></label>
  <font color="#FF0000">[eg: tracking number]</font>
  </h1>
  <input type="submit" name="Search" id="Search" value="Search" />
  <p >RESULT :</p>
  <p >Parcel ID is : 
    <?php echo $c['parcel_id']?>
  <p >Form status is : <?php echo $c['parcel_status']?>
    <font color="#FF0000">[if form is invalid, please pay at National Courier counter]</font>
  <p >Shipping status is : <?php echo $v['shipping_status']?>
  </p>

  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
