<?php require_once('../parcel/connection/parcel.php'); ?>
<?php
$maxRows_rsSearch = 10;
$pageNum_rsSearch = 0;
if (isset($HTTP_GET_VARS['pageNum_rsSearch'])) {
$pageNum_rsSearch = $HTTP_GET_VARS['pageNum_rsSearch'];
}
$startRow_rsSearch = $pageNum_rsSearch * $maxRows_rsSearch;
$colname_rsSearch = "1";
if (isset($HTTP_POST_VARS['search'])) {
$colname_rsSearch = (get_magic_quotes_gpc()) ? $HTTP_POST_VARS['search_text'] :
addslashes($HTTP_POST_VARS['search']);
}
mysql_select_db($database_abcbookstore, $parcel_tracking);
$query_rsSearch = sprintf("SELECT * FROM parcel WHERE parcel _id LIKE '%%%s%%' ORDER BY parcel_id ASC",
$colname_rsSearch);
$query_limit_rsSearch = sprintf("%s LIMIT %d, %d", $query_rsSearch, $startRow_rsSearch,
$maxRows_rsSearch);
$rsSearch = mysql_query($query_limit_rsSearch, $parcel_tracking) or die(mysql_error());
$row_rsSearch = mysql_fetch_assoc($rsSearch);
if (isset($HTTP_GET_VARS['totalRows_rsSearch'])) {
$totalRows_rsSearch = $HTTP_GET_VARS['totalRows_rsSearch'];
} else {
$all_rsSearch = mysql_query($query_rsSearch);
$totalRows_rsSearch = mysql_num_rows($all_rsSearch);
}
$totalPages_rsSearch = ceil($totalRows_rsSearch/$maxRows_rsSearch)-1;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>