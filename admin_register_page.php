<SCRIPT type="text/javascript">
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}

</SCRIPT>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 h4 {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body background = "water.png">

  <h2 align="center">&nbsp;&nbsp;<strong>          &nbsp; ::ADMIN REGISTERATION FORM::</strong></h2>
  
 <form id="form1" name="form1" method="post" action="admin_register_process.php">
 
  <p align="center"> <font color="red">*</font>User Name:
<label for="name"></label>
  	  <input type="text" name="name" id="name" required />
  <font color="red"> [eg : Fulan]</font></p>
  	<p align="center"><font color="red">*</font>I/C number :
  	  <label for="name"></label>
  	  <input type="text" onKeyPress="return isNumberKey(event)" name="ic" id="ic" required />
    <font color="red">[eg : 931026-03-5327]</font></p>
<p align="center"><font color="red">*</font>E-mail [This will be your user ID]:
  <label for="email"></label>
  <input type="text" name="email" id="email" required/>
  <font color="red">[eg : user93@yahoo.com]</font></p>
  	<p align="center"><font color="red">*</font>Password :
  	  <label for="password"></label>
  	  <input type="password" name="password" id="password" required/>
    <font color="red">[eg : abc123]</font>  	</p>
  	<p align="center"><font color="red">*</font>Phone Number :
      <input type="text" onKeyPress="return isNumberKey(event)" name="phone" id="phone" required/>
    <font color="red">[eg :012-3456789]</font></p>
  	<p align="center"><font color="red">*</font> Admin Address: </p>
  <blockquote>
      <p align="center"> Address1 :
        <input name="add1" type="text" value="" id="add1" required>
        <font color="red">[eg : PT123]</font></p>
      <p align="center">Address2 :
        <input name="add2" type="text" value="" id="add2" required>
        <font color="red">[eg : Jln Kebun]</font></p>
      <p align="center">Poscode :
        <input type="text" name="poscode" onKeyPress="return isNumberKey(event)" id="poscode" required>
        </textarea>
        <font color="red">[eg : 15200]</font></p>
      <p align="center">City :
        <input type="text" name="city" id="city" required>
        </textarea>
        <font color="red">[eg : Kota Bharu]</font></p>
    <p align="center">State :
        <select name="state" id="state"required value="<?php echo $v['cust_address_state']  ?>">
          <option  value="KELANTAN"> KELANTAN</option>
          <option value="TERENGGANU">TERENGGANU</option>
          <option value="PAHANG">PAHANG</option>
          <option value="SELANGOR">SELANGOR</option>
          <option value="JOHOR">JOHOR</option>
          <option value="PERAK">PERAK</option>
          <option value="KEDAH">KEDAH</option>
          <option value="PERLIS">PERLIS</option>
          <option value="MELAKA">MELAKA</option>
          <option value="WILAYAH PERSEKUTUAN">WILAYAH PERSEKUTUAN</option>
          <option value="WILAYAH PERSEKUTUAN LABUAN">WILAYAH PERSEKUTUAN LABUAN</option>
          <option value="SERAWAK">SERAWAK</option>
          <option value="SABAH">SABAH</option>
          <option value="PENANG">PENANG</option>
        </select>
</textarea>
    </p>
    </blockquote>
    <p align="center"><font color="red">*</font>Gender :
  	  <input type="radio" name="gender" id="radio" value="male" required/>
  	  <label for="gender"></label>
    MALE&nbsp;&nbsp;
    <input type="radio" name="gender" id="radio2" value="female" required />
    <label for="gender"></label>
    FEMALE</p>
  	<p align="center">&nbsp;</p>
  	<p align="center">
  	  <input type="submit" name="register" id="register" value="REGISTER" />
  	  &nbsp;&nbsp;&nbsp;&nbsp;
  	  <input type="reset" name="clear" id="clear" value="CLEAR" />
</form>
</body>
</html>