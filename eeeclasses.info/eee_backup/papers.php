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
.style1 {
	font-size: 16px;
	font-weight: bold;
}

-->

</style>



</head>

<body bgcolor="#669966" topmargin="0" leftmargin="0" onLoad="startDate()" >

<table border="0" cellpadding="0" cellspacing="0" width="980" align="center"  height="100%" valign="top" style="background-image: url('images/2.gif');">

<tr valign='top'><TD>

<table border="0" cellpadding="0" cellspacing="0" width="99%" align="center"  ><!-- top menu row -->

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

</tr>


</table>

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

	</td><td width="70%" bgcolor="#ffffff" align="center"><marquee width=90% scrollamount="3"><font size="5" font color="#4AA02C">*</font><font size="4" font color="#000099"><strong>Fresh Batch of class VIII, IX, X, XI &amp; XII will start soon. Separate Batches for those students who have obtained A+ grade in class 10<sup>th</sup> Exams. Scholarship upto 50%.</strong></font></marquee> </td>

	</tr>
	
	<tr bgcolor="F0FFF0">
  <td >
 	<!--<p align="left"><script type="text/javascript" language="JavaScript1.2" src="jsc/topmenu_old.js"></script></p>-->
  </td>
  <td >
 	<p align="right">
		<img src="images/phone.gif"> <strong>+91-9818949775 / 9310212333</strong>
	</p>
  </td>
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

    <table border="3" cellpadding="0" cellspacing="0" width="90%" align="center">

    <tr>

    <td>

    	<table border="0" cellpadding="0" cellspacing="1" width="100%" align="center" bgcolor="#336699" > 
	<tr valign="top"> 
	<td height="100%">
		<table border="2" cellpadding="0" cellspacing="1" width="100%" height="100%" align="left" bgcolor=#F0FFF0>
		<tr valign="middle">
		<td align="center"><img  class="loc" src="images/book8.jpg" border="0"></td> 
		<td ><span class="style1"><center>Sample Question Papers For Class XIIth</center></span>	
		<ul type=square>
			<li><a class="ultext" href="download/class12/phy/phy1.pdf">Physics - Paper-I  </a></li>
			<li><a class="ultext" href="download/class12/phy/phy2.pdf">Physics - Paper-II  </a></li>
			<li><a class="ultext" href="download/class12/phy/phy3.pdf">Physics - Paper-III </a></li>
			<li><a class="ultext" href="download/class12/che/chem-xii-1.pdf">Chemistry - Paper-I </a></li>
			<li><a class="ultext" href="download/class12/che/chem-xii-2.pdf">Chemistry - Paper-II </a></li>
			<li><a class="ultext" href="download/class12/che/chem-xii-3.pdf">Chemistry - Paper-III </a></li>
			<li><a class="ultext" href="download/class12/bio/bio1.pdf">Biology - Paper-I</a></li>
			<li><a class="ultext" href="download/class12/bio/bio2.pdf">Biology - Paper-II</a></li>
			<li><a class="ultext" href="download/class12/bio/bio3.pdf">Biology - Paper-III</a></li>
			<li><a class="ultext" href="download/class12/maths/Math1.pdf">Mathematics - Paper-I</a></li>
			<li><a class="ultext" href="download/class12/maths/Math2.pdf">Mathematics - Paper-II</a></li>
		    <li><a class="ultext" href="download/class12/maths/Math3.pdf">Mathematics - Paper-III  </a></li>
			<li><a class="ultext" href="download/class12/eng/fun-eng.pdf">Functional English</a></li>
			<li><a class="ultext" href="download/class12/eng/fun-eng-core.pdf">English Core</a></li>
			<li><a class="ultext" href="download/class12/hindi/hindi_core.pdf">Hindi Core </a></li>
			<li><a class="ultext" href="download/class12/hindi/hindi_elec.pdf">Hindi Elective </a></li>
			<li><a class="ultext" href="download/class12/bs/bs-xii-1.pdf">Business Studies - Paper-I </a></li>
			<li><a class="ultext" href="download/class12/bs/bs-xii-2.pdf">Business Studies - Paper-II</a></li>
			<li><a class="ultext" href="download/class12/eco/eco1.pdf">Economics </a></li>
			<li><a class="ultext" href="download/class12/his/history-1-xii.pdf">History -    Paper-I </a></li>
			<li><a class="ultext" href="download/class12/his/history-2-xii.pdf">History -    Paper-II</a></li>
			 <li><a class="ultext" href="download/class12/geo/CBSE-GEOGRAPHY.pdf">Geography (Theory)</a></li>
			<li><a class="ultext" href="download/class12/pol_sci/political_science.pdf">Political Science</a></li>
			<li><a class="ultext" href="download/class12/acc/accountancy.pdf">Accountancy</a></li>
			<li><a class="ultext" href="download/class12/sociology/soc.pdf">Sociology </a></li>
			<li><a class="ultext" href="download/class12/Psychology/psychology.pdf">Psychology</a></li>
		</ul><br>
		</td>
		</tr>

		</table>
	</td>

	</tr>
	</table>
    </td>

    </tr>
    </table>

 <!--up to here make the changes --> </td>

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

