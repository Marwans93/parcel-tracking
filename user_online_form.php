<?php 
session_start();
$rasyid = $_SESSION['name'];

include 'connection/parcel.php';

$a = "select * from customer where cust_email='$rasyid'";
	  
	  $b = mysql_query($a) or die (mysql_error());
	  $c = mysql_fetch_array($b);	  
?>
<html>
<head>
<title>Form Validation</title>

<script type="text/JavaScript">

function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;

    return true;
	
}

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

<script language="JavaScript">
   function calc()
{ 
   var price=0;
   var newWeight=0;
   var weight = prompt("ENTER YOUR PARCEL WEIGHT (KG):","0.0");  
   if(weight<1)
   		price=6;
	else
		{	
			newWeight=(weight-1)/0.25;
			price=6+newWeight;
		}
   alert("YOUR PRICE IS : RM" + price);
}
  </script>
</head>
<center><body background="file:///G|/ /ITS332 [PROJECT]/water.png">
<h2><strong>:: PARCEL REGISTERATION FORM :: </strong></h2>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="user_online_form_process.php" >
  <p><font color="red">*</font>Given parcel tracking Number :
    <input name="tracking_number" id="tracking_number"type="text" required >
  </p>
  <blockquote>
    <p><font color="red">*</font> Receiver Name:
      <input type="text" name="receiver_name" id="receiver_name" requested required >
    <font color="red">[eg : Fulan]</font></p>
  </blockquote>
  <p><font color="red">*</font> Receiver Address: </p>
  <blockquote>
    <p> Address1 :
      <input name="receiver_add1" id="receiver_add1" type="text" value="" required >
    <font color="red">[eg : PT123]</font></p>
    <p>Address2 :
      <input name="receiver_add2" type="text" id"receiver_add2" value="" required>
    <font color="red">[eg : Jln Kebun]</font></p>
    <p>Poscode :
      <input type="text" name="receiver_poscode" onKeyPress="return isNumberKey(event)" id="receiver_poscode" required>
      </textarea>
    <font color="red">[eg : 15200]</font></p>
    <p>City :
      <input type="text" name="receiver_city"  id="receiver_city" required >
      </textarea>
    <font color="red">[eg : Kota Bharu]</font>    </p>
    <p>State :
      <select name="state" id="state"required value="">
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
  <p>	
    </textarea>
  <font color="red">[You can guest your parcel price at &quot;<a href=""  onClick="calc()">CALCULATE HERE</a>&quot; before weight the real parcel weight at Pos Laju counter to make a payment.RM6.00. for the first 1kg item. RM1 for the next 250g]</font></p>
  <p><font color="red">[You can change the sender Address if needed, Please note that the parcel will be sent back to this address if we do not succesfull deliver it]</font></p>
  <p><font color="red">*</font> Receiver Phone Number:
    <input type="text" name="receiver_phone" onKeyPress="return isNumberKey(event)" id="receiver_phone" required >
    <font color="red">[eg : 012-3456789]</font></p>
  <p>Status :<b> </b>
    <input name="status" type="text" disabled="disabled" required id="status" value="INVALID" readonly >
    <br>
  <font color="red">[Your form will be in &quot;INVALID&quot; status. The form status will be &quot;VALID&quot; once you have pay the parcel at the National Courier counter. Please notify that your form will be automatically removed if the form status is &quot;INVALID&quot; after 1 week]</font></p>
  <p>
    <input type="text" name="email" id="email" value="<?php echo $c['cust_email'] ?>" hidden="true" required >
  </p>
  <p><br>
    <input type="Submit" name="register" value="Submit">
    <input type="Reset" name="hantar2" value="Reset">
  </p>
  <p>&nbsp;</p>

</form>
</body>
</html>