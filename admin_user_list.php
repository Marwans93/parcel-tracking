<?php
	session_start();
	$rasyid = $_SESSION['name'];
	
	include 'connection/parcel.php';
	
?>

	<script type="text/javascript" src="file:///G|/ /gpe/scripts/swfobject/swfobject.js"></script>
        
    <script type="text/javascript">
      var flashvars = {};
      flashvars.cssSource = "css/piecemaker.css";
      flashvars.xmlSource = "piecemaker.xml";
		
      var params = {};
      params.play = "true";
      params.menu = "false";
      params.scale = "showall";
      params.wmode = "transparent";
      params.allowfullscreen = "true";
      params.allowscriptaccess = "always";
      params.allownetworking = "all";
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '960', '500', '10', null, flashvars,    
      params, null);
    
    </script>

<link rel="stylesheet" type="text/css" href="file:///G|/ /gpe/css/ddsmoothmenu.css" />

<script type="text/javascript" src="file:///G|/ /gpe/scripts/jquery.min.js"></script>
<script type="text/javascript" src="file:///G|/ /gpe/scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="file:///G|/ /gpe/adminPanel/style.css" /> 
<script type="text/javascript" src="file:///G|/ /gpe/adminPanel/jquery.min.js"></script>
<script type="text/javascript" src="file:///G|/ /gpe/adminPanel/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="file:///G|/ /gpe/adminPanel/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="file:///G|/ /gpe/adminPanel/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="file:///G|/ /gpe/adminPanel/niceforms-default.css" />


</head>
<body>
<p>
<h1>USER LIST</h1>
<table summary="2007 Major IT Companies' Profit" bordercolor="#000000" border="4" >
    <thead>
    	<tr bordercolor="#000000">
        	<th width="10" scope="col"></th>
            <th width="84" scope="col" >&nbsp;&nbsp;&nbsp;<h2>User Name</h2>&nbsp;&nbsp;&nbsp;</th>

            <th width="287" class="rounded" scope="col">&nbsp;&nbsp;&nbsp;<h2> Status</h2>&nbsp;&nbsp;&nbsp;</th>
            <th width="97" class="rounded" scope="col">&nbsp;&nbsp;&nbsp;<h2>Edit</h2>&nbsp;&nbsp;&nbsp;</th>
          <th width="95" class="rounded-q4" scope="col">&nbsp;&nbsp;&nbsp;<h2>Delete</h2>&nbsp;&nbsp;&nbsp;</th>
        </tr>
    </thead>
    
<?php
   
			$s = "select * from customer";
			$q = mysql_query($s) or die(mysql_error());
			
			
			$count = 0;
			
			while($r = mysql_fetch_array($q))
			{
				$count++;
			
    ?>                 
                    
    <tbody>
    
    	<tr>
        	<td></td>
            <td align="center"><?php echo $r['cust_name']; ?></td>
			<td align="center"><?php echo $r['cust_status']; ?> </td>
            <td align="center"><a href="admin_user_edit.php?$a=<?php echo $r['cust_email']?>">Edit
            <img src="images/user_edit.png" alt="" width="40" height="39" title="" border="0" />           &nbsp;&nbsp;&nbsp;</a></td>
            <td><a href="admin_user_list_delete_process.php?$a=<?php echo $r['cust_email']?>" >Delete&nbsp;&nbsp;&nbsp;<img src="images/trash.png" alt="" width="35" height="38" title="" border="0" /></a></td>
        </tr>
        <?php 
			}
		?>       
    </tbody>
</table>

     </dd>
                    </dl>
                  
     
     </div><!-- end of right content-->                   
  </div>   <!--end of center content -->               
                    

</div>
       

    
    <br />
    <br /><br /><div class="cleaner"></div>

  
</body>
</html>