<?php 
session_start();
$rashid=$_SESSION['parcel_id'];
include 'connection/parcel.php';
?>
<title>Untitled Document</title>
</head>

<body background = "water.png">
<form id="form1" name="form1" method="post" action="search_process.php" >
	<font color="red">
      Result: <?php echo $rashid; ?></font>
      <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
