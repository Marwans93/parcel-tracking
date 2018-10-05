<html>
 <body>
  
  <script language="JavaScript">
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
   
  </script>
     <a href target="_parent">CLOSE THIS PAGE</a>
 </body>
</html>