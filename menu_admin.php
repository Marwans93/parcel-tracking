<?php
	session_start();
 	$rasyid = $_SESSION['name'];
	
	include 'connection/parcel.php';
	
?>
<html>
<head>

<body background="water.png">
<center>
  <h6><br>
    <font color="purple" size="6" face="Forte">::MENU LIST::</font>
  </h6>
  <h3><br>
  <a href="admin_profile.php" target="content"><font color="purple" size="6" face="Forte">Admin Profile</font></a></h3>
  <h3><a href="admin_parcel_list.php" target="content"><font color="purple" size="6" face="Forte">Parcel List</font></a>
    <br><br>
    <a href="admin_user_list.php" target="content"><font color="purple" size="6" face="Forte">User List</font></a>
    <br><br>
    <a href="admin_search_main.php" target="content"><font color="purple" size="6" face="Forte">Search</font></a></h3>
  <h3><a href="admin_register_page.php" target="content"><font color="purple" size="6" face="Forte">Add New Admin</font></a>
    <br><br><br><br>
    <a href="main.php" target="_top" session_start();
	session_destroy();><font color="purple" size="6" face="Forte">Sign Out</font></a></h3>
</center>
</body>
</html>
