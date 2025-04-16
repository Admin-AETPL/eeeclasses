<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/edu.css">
<title>e-Edge Education Center</title>
<link rel="icon" href="images/book1.jpg">

<script type="text/javascript" language="JavaScript1.2" src="jsc/scrolimage.js"></script>

<script language="JavaScript">
var repeat=1 //enter 0 to not repeat scrolling after 1 run, othersise, enter 1
var title_1=document.title
var leng=title_1.length
var start=1
function titlemove() {
  titl=title_1.substring(start, leng) + title_1.substring(0, start)
  document.title=titl
  start++
  if (start==leng+1) {
    start=0
    if (repeat==0)
    return
  }
  setTimeout("titlemove()",140)
}
if (document.title)
titlemove()
</script>

<style type="text/css">
<!--
BODY {scrollbar-face-color: #FF99CC}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

</head>
<body bgcolor="FFFFCC" topmargin="0" leftmargin="0" onload="startDate()" >
<TABLE border="0" cellpadding="0" cellspacing="0" width="100%" align="center"  height="100%" valign="top">
<TR valign='top'><TD>

<table border="0" cellpadding="0" cellspacing="0" width="99%" align="center"  ><!-- top menu row -->
 <tr bgcolor="F0FFF0"> <td colspan="3" >	<p align="right">
	<script type="text/javascript" language="JavaScript1.2" src="jsc/topmenu.js"></script>
	</p>
  </td>
 </tr>
<tr>
<!-- top menu row finish -->
 <td colspan="3">
 <table border="0" width=100% cellpadding="0" cellspacing="0" style="background-image: url('images/2.gif');">

	<tr  valign="middle" > 
<td align="right" ><img src="images/33.gif"></td><td width=70% align="center" ><img src="images/eclogo.gif">
 </td>

<td width="15%" align=right><script type="text/javascript">
<!--
 // change_it();
//-->
</script></td>
</tr></table>
</td>
</tr>
<!-- top menu row -->
 <tr> <td colspan=3> 
	<script type="text/javascript" language="JavaScript1.2" src="jsc/topmenu.js"></script>
  </td>
 </tr>
<!-- date row -->
<tr>	<td bgcolor="#ffffee" align="left" valign="bottom" width="17%">
				<?php include 'date.php'; ?>
				<script type="text/javascript">
				var d= "<?= $phpVard ?>" ;
				var mm= "<?= $phpVarmm ?>";
				var j= "<?= $phpVarj ?>";
				var y= "<?= $phpVary ?>";
				function startDate(){
					document.getElementById('date').innerHTML=d+" "+mm+" "+j+" "+y
				}
				</script>
	<font color="#444444" size="2"><center><b><div id="date"></div></b></center></font>  
	</td>
	<td bgcolor="#fff0EE" align="left" valign="bottom" width="83%">
	  <marquee scrollamount=2><font style="color:#007000; font-family:sans-serif;"> Teaching is an art, in this process it covers <font style="color:#880000; font-family:sans-serif;"> learning, <font style="color:#888800; font-family:sans-serif;">applying, <font style="color:#990099; font-family:sans-serif;">understanding,<font style="color:#000099; font-family:sans-serif;"> experiencing, <font style="color:#cc7722; font-family:sans-serif;">sharing of knowledge.</marquee></font>
	 </td>
	</tr>

	
<!-- left menu + data row -->
 <tr>
<!-- left menu column-->
  <td valign='top' width=17% bgcolor="#C9DDEA"  height="430"><script type="text/javascript" language="JavaScript1.2" src="jsc/leftmenu.js"></script>
  </td>

<!-- data column  -->
  <td valign="top"><br><br>
 <!-- make the changes from here  -->
    <table border="0" cellpadding="0" background="images/physics.jpg" cellspacing="0" width="70%" height="100%"  bgcolor="#FFC77F" >
     <tr>
	 <td valign="top" align="left"  ><font size="5">Class Xll`th</font></a><br><br></td>
	 </tr>
	 <tr><td valign="top" height="100%">
		<a href="download/GUESS.doc"><font color="#FF6699"font size="4">Download Guess Questions Of C.B.S.E 2007</font></a><br><br>
		<a href="download/board.doc"><font color="#FF6699" font size="4">Download  C.B.S.E Board Questions Of 2003 To 2006</font></a><br><br>
		<a href="download/electrostatics.doc"><font color="#FF6699" font size="4">Download  Eloctrostatics Important Questions </font></a><br><br>
		<a href="download/CURRENTELECTRICITY.doc"><font color="#FF6699" font size="4">Current Electricity Important Questions </font></a>
	 </td></tr>
	 </td>
 	</table>
<br><br><br>
 <!--up to here make the changes -->
 </td>
 </tr>
<!-- bottom menu row -->
 <tr  class="ftr"><td width="17%" height="15" > &nbsp;</td> <td colspan=2 > 
	<script type="text/javascript" language="JavaScript1.2" src="jsc/footer.js"></script>
  </td>
 </tr>
</table>



</TD></TR></TABLE>
</body>
</html>