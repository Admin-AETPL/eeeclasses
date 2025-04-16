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
body,td,div,p,a,font,span {font-family: arial,sans-serif}
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
 //  change_it();
//-->
</script></td>
</tr></table>
</td>
</tr>

<!-- date row -->
<tr>	<td bgcolor="#ffffee" align="left" valign="bottom" width="20%" >
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
	</td><td width="70%" bgcolor="#ffffff" align="center"><marquee width=90% scrollamount="5"><font size="5" font color="#4AA02C">*</font><font size="4" font color="#ff6699">Fresh Batch of class 11`th ,12`th will start from &nbsp;&nbsp;02/07/07.</font>
	<font size="5" font color="#4AA02C">*</font>		
	<font size="4" font color="#ff6699">Seperate Batches for those students who have &nbsp;&nbsp;obtained 90% marks in class 10`th Board Exams.</font>
	<font size="5" font color="#4AA02C">*</font><font size="4" font color="#ff6699">Scholarship upto 50%.</font></marquee> </td>
		<!--<td width="90" bgcolor="#ffffff" align="right"> <marquee width=90 scrollamount="3"><font style="color:red; font-family:sans-serif; font-size:11px;"> Top Ranking Student selected in Medical & Engineering Exams</font></marquee> 
	</td> -->
	</tr>
	<tr bgcolor="#000000" height="2"><td colspan="3"></td></tr>
	<tr bgcolor="#ffffff" height="2"><td colspan="3"></td></tr>
<!-- left menu + data row -->
 <tr valign="top" height="500">
<!-- left menu column C9DDEA-->
  <td valign='top' width=20% ><script type="text/javascript" language="JavaScript1.2" src="jsc/leftmenu.js"></script>
  </td>

<!-- data column  -->
  <td colspan="2">
 <!-- make the changes from here  -->
    <table border="0" cellpadding="3" cellspacing="0" width="100%" height="400" align="center" valign="top">
    <tr  align =" left" valign="top">
    <td width="60%" align="center">
	
	<table border="0" cellSpacing="1" cellPadding="0" bgcolor="#007700" width="100%">
	<tr ><td>
		<table width="100%"  border="0" align="center"  cellSpacing="0" cellPadding="0" bgcolor="#fff0EE">
		<tr valign="top" height="20" ><td width="100%"  align="center" valign="middle"  colspan="2">	
				Chemistry Class XII  paper
		</td></tr>
		<tr valign="top" height="5" bgcolor="#007700"><td width="100%" colspan="2"></td></tr>
		<tr valign="bottom" bgcolor="#ffffff">
		<td >	
		 <a class="ultext" href="download/class12/che/Chemstry_set-1.pdf"> Questions Of C.B.S.E 2007(I)</a><br>

		<a class="ultext" href="download/class12/che/Chemstry_set-2.pdf"> Questions Of C.B.S.E 2007(II)</a><br>
		<a class="ultext" href="download/class12/che/Chemstry_set-3.pdf"> Questions Of C.B.S.E 2007(III)</a><br>
		<br><br>
		</td>
		</tr>
		</table>

	</td></tr>
	</table>	
	<br>
	<table border="0" cellSpacing="1" cellPadding="0" bgcolor="#007700" width="100%">
	<tr ><td>
		<table width="100%"  border="0" align="center"  cellSpacing="0" cellPadding="0" bgcolor="#fff0EE">
		<tr valign="top" height="20" ><td width="100%"  align="center" valign="middle"  colspan="2">	
				Chemistry Class XI  paper
		</td></tr>
		<tr valign="top" height="5" bgcolor="#007700"><td width="100%" colspan="2"></td></tr>
		<tr valign="bottom" bgcolor="#ffffff">
		<td >	
		 <br><br>
		<br><br>
		</td>
		</tr>
		</table>

	</td></tr>
	</table>
      </td>
      <td width="40%" align="center">
	<table border="0" cellSpacing="1" cellPadding="0" bgcolor="#007700" width="300">
	<tr ><td>
		<table width="100%"  border="0" align="center"  cellSpacing="0" cellPadding="0" bgcolor="#cceeff">
		<tr valign="top" height="20" ><td width="100%"  align="center" valign="middle"  colspan="2">	
				eeec  Physics Course meterial
		</td></tr>
		<tr valign="top" height="5" bgcolor="#007700"><td width="100%" colspan="2"></td></tr>
		<tr valign="bottom" bgcolor="#ffffff">
		<td >	
		 <a class="ultext" href="pintro.php">Physics, the most conceptual subject</a><br>

		<a class="ultext" href="courses_phy.php">Class XII  paper</a><br>
		<a class="ultext" href="courses_phy.php">Class XI  paper </a>
		<br><br>
		</td>
		<td align="right"> 
			<img src="images/book8.jpg" width="60" height="60"/>
		</td>	
		</tr>
		</table>

	</td></tr>
	</table>	
	<br>
	<br>
	<table  border="0" cellSpacing="1" cellPadding="0" bgcolor="#007700" width="300">
	<tr ><td>
		<table width="100%"  border="0" align="center"  cellSpacing="0" cellPadding="0" bgcolor="#F0FFF0">
		<tr valign="top" height="20" ><td width="100%"  align="center" valign="middle"  colspan="2">	
				eeec Maths Course meterial
		</td></tr>
		<tr valign="top" height="5" bgcolor="#007700"><td width="100%" colspan="2"></td></tr>
		<tr valign="bottom" bgcolor="#ffffff">
		<td >	
		 <a class="ultext" href="pintro.php">Mathmetical concepts </a><br>

		<a class="ultext" href="courses_mat.php">Class XII  paper</a><br>
		<a class="ultext" href="courses_mat.php">Class XI  paper </a>
		<br><br>
		</td>
		<td align="right"> 
			<img src="images/book5.jpg" width="60" height="60"/>
		</td>	
		</tr>
		</table>

	</td></tr>
	</table>

		
</td>
</tr>
</table>
 <!--up to here make the changes -->
 </td>
 </tr>
<!-- bottom menu row -->
 <tr  class="ftr"><td width="17%" height="15" >&nbsp;</td> <td colspan=2 > 
	<script type="text/javascript" language="JavaScript1.2" src="jsc/footer.js"></script>
  </td>
 </tr>
</table>



</TD></TR></TABLE>
</body>
</html>
