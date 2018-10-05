<?php
	session_start();
 	$wan = $_SESSION['name'];
	$wanlagi = $_SESSION['userSebenar'];
	
	include 'connection/parcel.php';
	
?>


<html>

<body background="water.png">
	<marquee behavior="alternate">
	<center>
	  <h1><img src = "PoslajuLogo.jpg" width="93" height="33"> <font size="9"><strong>Hi <?php echo $wanlagi;?> </strong></font>
	    </strong><img src = "PoslajuLogo.jpg" alt="" width="93" height="33"></h1>
</center></marquee>
</body>
</html>