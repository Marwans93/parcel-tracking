<html>
<head>
<title>Form Validation</title>

</head>
<center><body background="file:///G|/ /ITS332 [PROJECT]/water.png">
<h2><strong>::ONLINE FORM :: </strong></h2>
<p>&nbsp;</p>
<form name="formReg" method="post" onSubmit="return validate_form();">
  <p><font color="red">[Tracking number is provided by the system]</font></p>
  <p>Given parcel tracking Number :
    <input name="txtName" type="text" readonly="readonly">
  </p>
  <p>&nbsp;</p>
  <p><font color="red">[You can change the sender name if needed, eg : Fulan]</font></p>
  <p>Sender Name :
    <input type="text" name="txt2Name">
  </p>
  <p>&nbsp;</p>
  <p><font color="red">[You can guest your parcel price before weight the real parcel weight at Pos Laju counter to make a payment]</font></p>
  <p>weight(KG):
    <input type="text" name="txt2Name2">
  <font color="red">[eg : 1.5]</font></p>
  <p>
    <input type="Submit" name="hantar4" value="Calculate">
  </p>
  <p>Price(RM):
    <input type="text" name="txt2Name6">
  </p>
  <p>
    <input type="Reset" name="hantar5" value="Reset Calculation">
  </p>
  <p>&nbsp;</p>
  <p><font color="red">[You can change the sender Address if needed, Please note that the parcel will be sent back to this address if we do not succesfull deliver it]</font></p>
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
  <p>Status :<b> </b>
    <input name="txt2Name12" type="text" readonly="readonly" requested >
    <br>
  <font color="red">[Your form will be in &quot;INVALID&quot; status. The form status will be &quot;VALID&quot; once you have pay the parcel at the National Courier counter. Please notify that your form will be automatically removed if the form status is &quot;INVALID&quot; after 1 week]</font></p>
  <p><br>
    <input type="Submit" name="hantar" value="Submit">
    <input type="Reset" name="hantar2" value="Reset">
  </p>
  <p>&nbsp;</p>

</form>
</body>
</html>