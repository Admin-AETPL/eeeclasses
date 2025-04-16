<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" type="text/css" media="screen" href="css/edu.css">

<title>e-Edge Education Center Test Schedule</title>

<link rel="icon" href="images/book1.jpg">



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
.style1 {
	font-size: 16px;
	font-weight: bold;
	color: #FFFFFF;
}
.style4 {color: #FF33FF; font-weight: bold; }
.style7 {color: #9999FF; font-weight: bold; }
.style8 {
	font-size: 16px;
	font-weight: bold;
	color: #006600;
}
.style9 {color: #FFFFFF; font-weight: bold; }
.style10 {color: #FFFFFF}

-->

</style>



</head>

<body bgcolor="669966" topmargin="0" leftmargin="0" onLoad="startDate()" >

<TABLE border="0" cellpadding="0" cellspacing="0" width="980" align="center"  height="100%" valign="top" style="background-image: url('images/2.gif');">

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

 <table border="0" width=100% cellpadding="0" cellspacing="0" style="background-image: url('images/22.jpg');">
 <tr  valign="middle" > 
	<td align="right" ><img src="images/33.gif"></td>
	<td width=70% align="center" ><img src="images/eclogo.gif"></td>
	<td width="15%" align=right>
		<script type="text/javascript">
<!--
  // change_it(); // for students picture
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

	</td><td width="70%" bgcolor="#ffffff" align="right"> </td>

			</tr>
	<tr bgcolor="#00CC66" height="2"><td colspan="3"></td></tr>
	<tr bgcolor="#ffffff" height="2"><td colspan="3"></td></tr>

<!-- left menu + data row -->

 <tr>

<!-- left menu column C9DDEA-->

  <td valign='top' width=20% height="430"><script type="text/javascript" language="JavaScript1.2" src="jsc/leftmenu.js"></script>

  </td>



<!-- data column  -->

  <td colspan="2"><br>
  
  <!-- make the changes from here  -->
  <!--23-11-2009 -->
  <table border="3" cellpadding="0" cellspacing="0" width="90%" align="center">
    <tr>
    <td>
    	<table border="0" cellpadding="0" cellspacing="1" width="100%" align="center" bgcolor="#75872C" > 
	<tr valign="top"> 
	<td height="325">
	  <table border="3" cellpadding="0" cellspacing="0" width="90%" align="center">
    <tr>
   	<td align="right" bgcolor="#FFFF66"><div align="center" class="style8">Result of PRE NTSE Exam 2014-2015 Conducted by e-Edge Education Centre</br>
At</br>
St. Thomas School, Indirapuram(Exam. Conducted on"26.08.2014 ")</br>Sun Valley International School,Vaishali(Exam. Conducted on"2.09.2014")
</br>
St. Francis School, Indirapuram (Exam. Conducted on"17.10.2014")
</div>
<!--<div align="right" class="style8"><marquee direction="left">Valid Upto 5<sup>th</sup> September, 201_.</marquee></div>--></td>
	
   </tr>
  </table><br>
		<table border="2" cellpadding="0" cellspacing="1" width="100%" align="left" bgcolor=#F0FFF0>
			<tr>
<!--			<div align="center" class="style1"><U>For Class X</U><sup>th</sup></div>-->
			<div align="center" class="style1">	
			<ul>
			<li>50% Scholarship of tuition fee in e-Edge Education Centre for those students who have secured 1st , 2nd and 3rd  position  in their respective class and School.</li></br>
			<li>20% Scholarship of tuition fee in e-Edge Education Centre for those students, who have secured more than 60% marks in their respective Pre NTSE Exam-2014.</li>
			</ul></div>
			<!--<div align="center" class="style1"><U>For Class IX<sup>th</sup></U></div>	-->
			<div align="center" class="style1">	
			<ul>
			<li>10% Scholarship of tuition fee in e-Edge Education Centre Centre for those students who have secured  the marks between 50%-60% marks in their respective Pre NTSE Exam-2014</li>
			</ul></div>
		</tr>
		</table>
	</td>
	</tr>
	</table>
    </td>

    </tr>
    </table>
   <!--end of 23-11-2009 -->
 <!-- make the changes from here -->
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

