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
<center><body background="file:///G|/ /ITS332 [PROJECT]/water.png">
<h2><strong>::EDIT ONLINE FORM :: </strong></h2>
<p>&nbsp;</p>
<form name="formReg" method="post" onSubmit="return validate_form();">
  <p>Tracking Number :
    <input name="txtName" type="text" readonly="readonly">
  <font color="red">[eg : MY12345E]]</font></p>
  <p>Sender Name :
    <input type="text" name="txt2Name">
  <font color="red">[eg : Fulan]</font>  </p>
  <p>Sender Address: </p>
  <blockquote>
    <p> Address1 :
      <input name="txt2Name11" type="text" value="">
    <font color="red">[eg : PT123]</font></p>
    <p>Address2 :
      <input name="txt2Name11" type="text" value="">
    <font color="red">[eg : Jln Kebun]</font></p>
    <p>Poscode :
      <input type="text" name="txt2Name11">
      </textarea>
    <font color="red">[eg : 15200]</font></p>
    <p>City :
      <input type="text" name="txt2Name11">
      </textarea>
    <font color="red">[eg : Kota Bharu]</font></p>
    <p>State :
      <input type="text" name="txt2Name11">
      </textarea>
    <font color="red">[eg : Kelantan]</font></p>
    <p>&nbsp;</p>
    <p><font color="red">*</font> Receiver Name:
      <input type="text" name="txt2Name3" requested >
    <font color="red">[eg : Fulan]</font> </p>
    <p>&nbsp;</p>
  </blockquote>
  <p><font color="red">*</font> Receiver Address: </p>
  <blockquote>
    <p> Address1 :
      <input name="txt2Name5" type="text" value="" requested >
    <font color="red">[eg : PT123]</font></p>
    <p>Address2 :
      <input name="txt2Name10" type="text" value="" requested>
    <font color="red">[eg : Jln Kebun]</font></p>
    <p>Poscode :
      <input type="text" name="txt2Name8" requested>
      </textarea>
    <font color="red">[eg : 15200]</font></p>
    <p>City :
      <input type="text" name="txt2Name7">
      </textarea>
    <font color="red">[eg : Kota Bharu]</font>    </p>
    <p>State :
      <input type="text" name="txt2Name9" requested >
      </textarea>
    <font color="red">[eg : Kelantan]</font>  </p>
  </blockquote>
  <p>	
    </textarea>
  </p>
  <p><font color="red">*</font> Receiver Phone Number:
    <input type="text" name="txt2Name4" requested >
    <font color="red">[eg : 012-3456789]</font></p>
  <p>&nbsp;</p>
  <p>Status :<b> </b><select name="rating">
     <option selected="selected"> Invalid</option>
     <option>Valid</option>
   </select>
  <br>
  </p>
  <p><br>
    <input type="Submit" name="hantar" value="Submit">
    <input type="Reset" name="hantar2" value="Reset">
    <input type="Submit" name="hantar3" value="Cancel">
  </p>
  <p>&nbsp;</p>

</form>
</body>
</html>