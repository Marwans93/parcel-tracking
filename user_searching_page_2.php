<?php //require_once('../parcel/connection/parcel.php'); ?>


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
<form id="form1" name="form1" method="post" action="user_search_process_2.php">
  <p>  
  <strong>
  <h1>TRACK PARCEL BY USER PHONE NUMBER</h1>
  </strong>
  </p>
  <p>&nbsp;</p>
  <p></p>
  TYPE KEYWORD :
<input type="text" name="search" id="search" onKeyPress="return isNumberKey(event)" />
  <label for="textfield3"></label>
  <font color="#FF0000">[eg: 0123456789]</font> </h1>
  <input type="submit" name="Search" id="Search" value="Search" />
        <p >RESULT :</p>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
//mysql_free_result($rsSearch);
?><SCRIPT type="text/javascript">
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}

</SCRIPT>