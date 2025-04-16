<?
// this PHP section to the top of file which needs to access after login.
session_start();// Use session variable on this page. This function must put on the top of page.
if(!session_is_registered(myusername)){// if session variable "username" does not exist.
header("location:index.php"); // Re-direct to index.php
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/edu.css">
<title>e-Edge Education Center</title>
<link rel="icon" href="images/book1.jpg">	
<script type="text/javascript" language="JavaScript1.2" src="jsc/test_scroll.js"></script>
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
	<!-----<script type="text/javascript" language="JavaScript1.2" src="jsc/topmenu.js"></script>-------------->
	</p>
  </td>
 </tr>
<tr>
<!-- top menu row finish -->
 <td colspan="3">
 <table border="0" width=100% cellpadding="0" cellspacing="0" style="background-image: url('images/2.gif');"><tr  valign="middle" > 
<td align="right" ><img src="images/33.gif"></td><td width=70% align="center" ><img src="images/eclogo.gif">
 </td>
<td width="15%" align=right>
<script type="text/javascript">
//<!--
  // change_it(); // for students picture

//-->
</script></td>
</tr></table>
</td>
</tr>
<!-- date row -->
<tr>	<td bgcolor="#ffffee" align="right" valign="bottom" width="20%" >
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
	</td><td width="70%" bgcolor="#ffffff" align="center"><marquee width=90% scrollamount="2"><font size="5" font color="#4AA02C">*</font><font size="4" font color="#000099">Fresh Batch of class VIII, IX, X, XI, XII will start soon  &nbsp;&nbsp;If you want to join call Mr. Pawan on 9313083272.</font>

	<font size="5" font color="#4AA02C">*</font>		

	<font size="4" font color="#aa00aa">Separate Batches for those students who have &nbsp;&nbsp;obtained 90% marks in class 10`th Board Exams.</font>

	<font size="5" font color="#4AA02C">*</font><font size="4" font color="#006600">Scholarship upto 50%.</font></marquee> </td>
<!--
		<td width="90" bgcolor="#ffffff" align="right"> <marquee width=90 scrollamount="5"><font style="color:red; font-family:sans-serif; font-size:11px;">Piyush Tripati Manipal PMT Rank 970 &nbsp;&nbsp;<font style="color:blue; font-family:sans-serif; font-size:11px;"> Deepshikha DEC Rank 871&nbsp;&nbsp;<font style="color:red; font-family:sans-serif; font-size:11px;">Gangeyyo DEC Rank 1215&nbsp;&nbsp;<font style="color:blue; font-family:sans-serif; font-size:11px;">Udit lekhi  AIEE IP KIIT &nbsp;&nbsp;</font></marquee> 
	</td> -->

	</tr>
	<tr bgcolor="#000000" height="2"><td colspan="3"></td></tr>
	<tr bgcolor="#ffffff" height="2"><td colspan="3"></td></tr>

<!-- left menu + data row -->

 <tr>

<!-- left menu column C9DDEA-->

<td valign='top' width=20% height="430"><!---<script type="text/javascript" language="JavaScript1.2" src="jsc/leftmenu.js"></script>---->

  <br><BR><BR><BR><BR>

<!--------------------  <table border="0" cellpadding="0" cellspacing="1" width="100%" align="center" bgcolor="#336699" >

	<tr valign="top">

		<td>

				<table border="0" cellpadding="0" cellspacing="1" width="100%" align="left" bgcolor="#008000">

					<tr valign="middle">

					<td align="left">

					<p class="heading"><font style="color:#FFFFFF; font-family:arial, sans-serif;"> 	<strong> Mission:</strong> </font></p>

					<font style="color:#FFFFFF; font-family:arial, sans-serif; font-size:12px;"> 

					<ul>

					<li>Strong base at an early stage</li>

					<li>Complete coverage of syllabus (CBSE/ICSE)</li>

					<li>Comprehensive study package </li>

					<li>All queries answered with systematic approach</li>

					<li>Convenient class timing</li>

					</ul></font>

					</td>

					</tr>

					</table>

				</td>

			</tr>

	</table>------------>

  </td>



<!-- data column  -->

  <td colspan="2" valign="top">

 <!-- make the changes from here  -->

    <table border="0" cellpadding="4" cellspacing="0" width="100%" align="center" valign="top">

     <tr valign="top">

   	<td>

    <table border="0" cellpadding="0" cellspacing="0" width="98%" align="center" valign="top">

     <tr>

   	<td colspan="2">

	<table border="0" cellpadding="0" cellspacing="1" align="center" bgcolor="#336699" > 

	<tr valign="top"> 

	<td>

	<table border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#556688">

	<tr valign="top">

<!--	<td align="center" bgcolor="#556688">

	<CENTER>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id=ads1 width=150 height=120 codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0">

 <param name="movie" value="ads1.swf" />

 <param name="quality" value="high" />

 <param name="play" value="true" />

 <param name="loop" value="true" />

 <param name="bgcolor" value="#ffffff" />

 <embed src="images/ads1.swf" width=150 height=120 bgcolor="#ffffff" quality="high" loop="true"

  type="application/x-shockwave-flash" pluginspace="http://www.macromedia.com/go/getflashplayer" />

</object>

</CENTER>


	

	</td> -->



	<td>

		<script type="text/javascript">

		/*<!--

		change_test();  // frame for content windows

		-->*/

		</script>

	</td>

		</tr>

		</table>

		</td>

	</tr></table>

</td>

</tr>

<tr>

		

	<td colspan="2" >
	<p class="cont"><font style="color:#990000;" size="6"><h4>Welcome</h4> <h2><? echo $_SESSION['myusername']; ?></h2></font></p>
<!---<p class="cont"><font style="color:#990000;" size="6"><h3>"Wrong Username or Password"</h3><br>
<br>Hi,<br>
<br>The UserID entered by you doesnot exist in our database. Please verify your UserID. <br>

<br>Your UserID is same as your eeeclasses.info and Regist. No. that is provided by EEEclasses.<br> 

<br>Do not put spaces in between your UserID."</font></p>
	<p class="cont"> The <font style="color:#990000;">e-</font><font style="color:#00aa00;">Edge </font><font style="color:#0000aa;"> Education</font><font style="color:#ff8844;"> Classes</font> (<font style="color:#990000;font-size:10pt">e</font><font style="color:#00aa00;font-size:10pt">e</font><font style="color:#0000aa;font-size:10pt">e</font><font style="color:#ff8844;font-size:10pt">c</font>) is an institute for quality educations, dedication and devotion for the success in Board exams, Engineering and Medical competitive exams.  The primary focus of the <font style="color:#990000;">e-</font><font style="color:#00aa00;">Edge </font><font style="color:#0000aa;"> Education</font><font style="color:#ff8844;"> Classes</font> is to enable each student to achieve success in IIT / AIEEE / DCE / UPSEAT & AIIMS / AIPMT / DPMT etc entrance examinations and other reputed colleges for Engineering and Medical. </p>

	<p class="cont">Writing the answer is a skill which makes the differences in the different answers of one question, and there wheree is the difference.The core of e-edge education classes is to trained the students for the skills and self-deriven by helping them in reducing his/her weaknesses and to make them capable of using his/her full strength.This institute coveres CBSE syllabus along with IIT / JEE / Medical entrance results into improved performance of student in their school/board examination as well competitive examinations. <br><Br>This institute believes in developing the fundamental concept in each subject. As fundamental concepts automatically increase the confidence level of student. These combinations makes student successful in the examination. Today it is difficult to find an institute which can provide a well structured study environment like faculty, study material, and reliability etc.</p>--------->
		</td>
		<td align='left'><a href="index.php">Logout</a></td>
</tr>
</table>

</td>
<!----<td valign="top" align="center" width="28%">---->
<!-- <img src="images/new0.gif" border="0">   <a class="ultext" href="feeStructure.php">Fee Structure</a><img src="images/new0.gif" border="0"> -->
<!----<br>
<hr color="red">

<img  src="photos/kumar_new.jpg" border="0" width="65%" >

<br>..................................<br><font color="blue">
<center> Mentor Pramod Kumar <br>  16 Years teaching experience<br> Former: Sr. Faculty of physics, Modern Academy</center></font>
<hr width="90%" align="center">

<p class="cont"><font style="color:#007000; font-family:sans-serif;"> Teaching is an art, in this process it covers <font style="color:#880000; font-family:sans-serif;"> learning, <font style="color:#888800; font-family:sans-serif;">applying, <font style="color:#990099; font-family:sans-serif;">understanding,<font style="color:#000099; font-family:sans-serif;"> experiencing, <font style="color:#cc7722; font-family:sans-serif;">sharing of knowledge.</font><font style="color:#007000; font-family:sans-serif;"> Students are learners, have <font style="color:#880000; font-family:sans-serif;">many strengths and <font style="color:#990099; font-family:sans-serif;">few weaknesses. <font style="color:#000099; font-family:sans-serif;">These weaknessses are always not related with the <font style="color:#990099; font-family:sans-serif;">intelligence of the student,<font style="color:#007000; font-family:sans-serif;">  but the technique of learning,<font style="color:#cc7722; font-family:sans-serif;"> method of understanding and <font style="color:#880000; font-family:sans-serif;">memorising.</font></p>

..................................<br>





</td>----->





</tr>

</table>

<br><br><br>

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
<?php
	// Cleanup
	session_start();
	session_unset();
	session_destroy();
?>
</body>
</html>
