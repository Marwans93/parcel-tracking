<?php
	session_start();
 	$rasyid = $_SESSION['name'];
	$rasyidlagisekali = $_SESSION['nameSebenar'];
	
	include 'connection/parcel.php';
	
?>

<html>

<body background="water.png">
	<marquee behavior="alternate">
	<center>
	  <h1><img src = "PoslajuLogo.jpg" width="93" height="33"> <font size="9"><strong>Hi <?php echo $rasyidlagisekali; ?>!</strong></font>
	    </strong><img src = "PoslajuLogo.jpg" alt="" width="93" height="33"></h1>
</center></marquee>
</body>
</html>