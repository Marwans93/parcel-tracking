<?php 
//session_start();
//$rashid=$_SESSION['parcel_id'];
//include 'connection/parcel.php';
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
  <font color="#FF0000">[eg: tracking number]</font>
  </h1>
  <input type="submit" name="Search" id="Search" value="Search" />
  <p >RESULT :</p>
  <p > <font color="red" >Not found</font>.</p>
      

  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
