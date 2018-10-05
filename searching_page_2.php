<?php //require_once('../parcel/connection/parcel.php'); ?>
<?php
//mysql_connect("localhost", "root", "") or die(mysql_error());
//mysql_select_db("parcel_tracking") or die(mysql_error());
?>
<?php
//$maxRows_rsSearch = 10;
//$pageNum_rsSearch = 0;
//if (isset($HTTP_GET_VARS['pageNum_rsSearch'])) {
//$pageNum_rsSearch = $HTTP_GET_VARS['pageNum_rsSearch'];
//}
//$startRow_rsSearch = $pageNum_rsSearch * $maxRows_rsSearch;
//$colname_rsSearch = "1";
//if (isset($HTTP_POST_VARS['search'])) {
//$colname_rsSearch = (get_magic_quotes_gpc()) ? $HTTP_POST_VARS['search_text'] :
//addslashes($HTTP_POST_VARS['search']);
//}
//mysql_select_db($parcel_tracking);
//$query_rsSearch = sprintf("SELECT * FROM parcel WHERE parcel _id LIKE '%%%s%%' ORDER BY parcel_id ASC",
//$colname_rsSearch);
//$query_limit_rsSearch = sprintf("%s LIMIT %d, %d", $query_rsSearch, $startRow_rsSearch,
//$maxRows_rsSearch);
//$rsSearch = mysql_query($query_limit_rsSearch, $parcel_tracking) or die(mysql_error());
//$row_rsSearch = mysql_fetch_assoc($rsSearch);
//if (isset($HTTP_GET_VARS['totalRows_rsSearch'])) {
//$totalRows_rsSearch = $HTTP_GET_VARS['totalRows_rsSearch'];
//} else {
//$all_rsSearch = mysql_query($query_rsSearch);
//$totalRows_rsSearch = mysql_num_rows($all_rsSearch);
//}
//$totalPages_rsSearch = ceil($totalRows_rsSearch/$maxRows_rsSearch)-1;
?>
<title>Untitled Document</title>
</head>

<body background = "water.png">
<form id="form1" name="form1" method="post" action="search_process_2.php">
TYPE KEYWORD :
        <input type="text" name="search" id="search"/>
  <label for="textfield3"></label>
  [eg: username] </h1>
  <input type="submit" name="Search" id="Search" value="Search" />
        <p >RESULT :</p>

  </table>
  <p>&nbsp; </p>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
//mysql_free_result($rsSearch);
?>