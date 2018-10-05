<SCRIPT type="text/javascript">
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}

</SCRIPT>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="metrobiz/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="metrobiz/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
		  <h1><a href="#">National Courier <br> Parcel Tracking System</a></h1>
			<span>www.poslaju.com/trackingsystem</span></div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="main.php" target="_self" accesskey="1">Homepage</a></li>
				<li><a href="main_admin_login.php" target="_self" accesskey="2">Admin Site</a></li>
				<li><a href="main_user_login.php" target="_self" accesskey="3" title="">User Site</a></li>
				<li><a href="main_register_page.php" target="_self" accesskey="4">Registration</a></li>
				<li><a href="main_contact_us.php" target="_self" accesskey="5">Contact Us</a></li>
                <li><a href="main_about_us.php" target="_self" accesskey="5">About Us</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="wrapper2">
	<div id="welcome" class="container">
		<div class="title">
			<ul>
			  <li>
			    <h2><font color="purple" size="16" face="Forte"><img src="register_online1.jpg" width="444" height="182" alt="" /></font></h2>
			    <h2><font color="purple" size="16" face="Forte">::Registration:: </font></h2>
		      </li>
		  </ul>
		</div>
		
	</div>
</div>
<div id="wrapper3">
  <form id="form1" name="form1" method="post" action="user_login_register_process.php" >
  <p>&nbsp;</p>
  <h2 align="center"><strong>::REGISTERATION FORM::</strong></h2>
  <p align="center"> <font color="red">*</font>User Name:
    <label for="name"></label>
    <input type="text" name="name" id="name" required />
    <font color="red"> [eg : Fulan]</font></p>
  <p align="center"><font color="red">*</font>I/C number :
    <label for="name"></label>
    <input type="text" name="ic" onKeyPress="return isNumberKey(event)" id="ic" required />
    <font color="red">[eg : 931026035327]</font></p>
<p align="center"><font color="red">*</font>E-mail [This will be your user ID]:
    <label for="email"></label>
    <input type="text" name="email" id="email" required/>
    <font color="red">[eg : user93@yahoo.com]</font></p>
  <p align="center"><font color="red">*</font>Password :
    <label for="password"></label>
    <input type="password" name="password" id="password" required/>
    <font color="red">[eg : abc123]</font>  </p>
  <p align="center"><font color="red">*</font>Phone Number :
    <input type="text" name="phone" onKeyPress="return isNumberKey(event)" id="phone" required/>
<font color="red">[eg :0123456789]</font></p>
  <p align="center"><font color="red">*</font> Address: </p>
  <blockquote>
    <p align="center"> Address1 :
      <input name="add1" type="text" id="add1" value="" required>
      <font color="red">[eg : PT123]</font></p>
    <p align="center">Address2 :
      <input name="add2" type="text" id="add2" value="" required>
      <font color="red">[eg : Jln Kebun]</font></p>
    <p align="center">Poscode :
      <input type="text" name="poscode" onKeyPress="return isNumberKey(event)" id="poscode"  required>
      </textarea>
      <font color="red">[eg : 15200]</font></p>
    <p align="center">City :
      <input type="text" name="city" id="city"required>
      </textarea>
      <font color="red">[eg : Kota Bharu]</font></p>
    <p align="center">State :
      <select name="state" size="1" id="state" value="">
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
    
    <label for="gender"></label>MALE&nbsp;&nbsp;
    <input type="radio" name="gender" id="radio" value="male" required/>
    <label for="gender"></label>FEMALE
    <input type="radio" name="gender" id="radio2" value="female" />
  </p>
  <p align="center">
    <input type="text" name="status" id="status" value="ACTIVE" hidden="true" required >
  </p>
  <p align="center">
    <input type="submit" name="register" id="register" value="REGISTER" />
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" name="clear" id="clear" value="CLEAR" />
  </p>
  <p>&nbsp;</p>
  </form>
</div>
<div id="wrapper4">
	<div id="footer" class="container">
		<div>
			<header class="title">
				<h2>Get in touch</h2>
				<span class="byline">Always connect with us</span> </header>
			<ul class="contact">
				<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
				<li><a href="#" class="icon icon-facebook"><span></span></a></li>
				<li><a href="#" class="icon icon-dribbble"><span>Pinterest</span></a></li>
				<li><a href="#" class="icon icon-tumblr"><span>Google+</span></a></li>
				<li><a href="#" class="icon icon-rss"><span>Pinterest</span></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="copyright" class="container">
	<p>Copyright (c) 2014 by national courier.com | All rights reserved.</p>
</div>
</body>
</html>
