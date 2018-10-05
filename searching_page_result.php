<?php 
session_start();
$rashid=$_SESSION['parcel_id'];
include 'connection/parcel.php';

$a = "select * from parcel";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);
?>
<title>Untitled Document</title>
</head>

<body background = "water.png">
<form id="form1" name="form1" method="post" action="search_process.php">
TYPE KEYWORD :
        <input type="text" name="search" id="search"/>
  <label for="textfield3"></label>
  [eg tracking number] </h1>
  <input type="submit" name="Search" id="Search" value="Search" />
  <p >RESULT :</p>
      <a href="admin_form_edit.php?$a=<?php echo $c['parcel_id']?>"" target="_self"><font color="purple" size="4" ><?php echo $rashid; ?></font></a></p>

  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
