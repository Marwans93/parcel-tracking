<html>
<head>
<title>Form Validation</title>

<script type="text/JavaScript">

function validate_form()
{


var valid = true;

if(document.formReg.txtName.value=="")
{

alert("Form must be fill!");
document.formReg.txtName.value.focus();
valid = False;
}

else
{
var val=formReg.txtName.value;

if(!(val.match(/[a-zA-Z]+$/)))
{
alert("Alphabets only!");
document.formReg.txtName.value.focus();
valid=false;
}

}
if(document.formReg.txt2Name.value=="")
{
alert("Please fill this form first!");
document.formReg.txt2Name.value.focus();
valid=False;
}
else
{
var emailFilter=/^.+@.+\..{2,3}$/;
var strng=formReg.txt2Name.value;

if(!(emailFilter.test(strng)))
{
alert("Sorry ! this e-mail address not valid!");
document.formReg.txt2Name.focus();
valid=false;
}
}


return valid;
}

</script>
</head>
<center><body background="water.png">
<h2><strong>EDIT PARCEL DETAIL </strong><br>
</h2>
<p>&nbsp;</p>
<form name="formReg" method="post" onSubmit="return validate_form();">
  <p>Tracking Number :
    <input type="text" name="txtName">
  </p>
  <p>    Sender Name:
    <input type="text" name="txt2Name">
  </p>
  <p>Weight(kg):
    <input type="text" name="txt2Name2">
  </p>
  <p>Receiver Address:  
    <input type="text" name="txt2Name3">
  </p>
  <p>Phone Number:
    <input type="text" name="txt2Name4">
</p>
  <p>Status:
    <input type="text" name="txt2Name5">
</p>
  <p><br>
    <input type="Submit" name="hantar" value="Submit">
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br>
    <center>
      <font color="blue">Find us on &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="icon_facebook.jpg"><a href="http://www.facebook.com/">Facebook</a>
      &nbsp;&nbsp; <img src="icon_twitter.gif"><a href="http://www.twitter.com/">Twitter</a>
      &nbsp;&nbsp; <img src="icon_youtube.jpg"><a href="http://www.youtube.com/">Youtube</a>
      &nbsp;&nbsp; <br>
      Copyright by National Courier (2014). All Right Reserved.
        
    </font></center>
  </p>

</form>
</body>
</html>