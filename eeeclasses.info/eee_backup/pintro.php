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
	</td><td width="70%" bgcolor="#ffffff" align="center"><marquee width=90% scrollamount="2"><font size="5" font color="#4AA02C">*</font><font size="4" font color="#000099">Fresh Batch of class 11`th ,12`th will start from &nbsp;&nbsp;02/07/07.</font>

	<font size="5" font color="#4AA02C">*</font>		

	<font size="4" font color="#aa00aa">Seperate Batches for those students who have &nbsp;&nbsp;obtained 90% marks in class 10`th Board Exams.</font>

	<font size="5" font color="#4AA02C">*</font><font size="4" font color="#006600">Scholarship upto 50%.</font></marquee> </td>
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
    <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
    <tr>
    <td>
    	<table border="0" cellpadding="0" cellspacing="1" width="98%" align="center" bgcolor="#336699" > 
	<tr  align =" left" valign="top">
	<td>
		<table border="0" cellpadding="0" cellspacing="1" width="100%" align="left" bgcolor=#F0FFF0>
		<tr valign="top">
	<td width="5%">&nbsp;</td>
	<td align="center" width="45%"><br><a class="alink" href="courses_phy.php"> Class XI  </a> </td> 
	<td align="center" width="45%"><br><a class="alink" href="courses_phy.php"> Class XII </a> </td>
	<td width="5%">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="4" align="center">&nbsp;</td>
	</tr>
	<tr>
		<td width="5%">&nbsp;</td>
		<td colspan="2"><strong>Teaching Methodology of Physics:</strong><br><br>
		<p align="justify"> PHYSICS is the most conceptual subject. We teach the concepts in PHYSICS and how to apply these concepts to various problems appearing in the examination. In E -classroom we evaluate student’s strength & weakness of the subject, rectify these weaknesses and enhance the strengths.<br>A student, who has understood the concepts in the subject will find himself miles ahead of other competitors. Besides front runners, even average students will gain immensely from our <font color="883311"> <b> e-PHYSICS CLASSES </b> </font> <br> Physics is a subject, which calls for very deep understanding. Most of the students fumble and meander around. We ensure that students gain a deep understanding of a subject. <br>Here we make PHYSICS easier by our latest teaching methodologies with six scientific steps:<br><br>
<font color="338822"> <b>1st Step-</b>&nbsp; </font> Discussion of Fundamentals and Basic concepts of each topic. <br>
<font color="338822"> <b>2nd step-</b> </font> Using animated example to visualize the concepts & Fundamentals. <br>
<font color="338822"> <b>3rd step-</b>&nbsp; </font> Applying the applications on each concept. <br>
<font color="338822"> <b>4th step-</b>&nbsp; </font> Improving the ability to write the answer in prescribed time in examination hall. <br>
<font color="338822"> <b>5th step-</b>&nbsp; </font> Identifying the area of weakness of each student by two tier examinations. <br>
<font color="338822"> <b>6th step-</b>&nbsp; </font> Discussing the misconceptions of each topic. <br> 

</p>
	<br> <br> <img src="images/steps.gif"><br><br><br><br><br><br>

	</td>

	<td width="5%">&nbsp;</td>
	</tr>
		</table>
	</td>
	</tr>
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
