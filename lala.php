	<html>
	<head>
	<script type="text/javascript">
	function varifyInput()
	{
        var bb = document.getElementById('aa').value;
	        var i = 0;
	        var html = ''; 
	 
	        for (i=1;i<=bb;i++) {
	        document.getElementById('aaa').innerHTML += "Name : <input type='text' value='' /><br />";
}}
</script>
 
</head>
<body>
<form id="form1" name="form1" method="post" action="">
<label>
Number 
<input type="text" onLoad="varifyInput()" name="aa" id="aa" />
</label>
<input type="submit" name="submit" id="submit"  value="Submit"     />
<div id="aaa">
 
</div>
</form>
</body>
</html>
