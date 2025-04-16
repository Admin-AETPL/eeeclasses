<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/edu.css">
<title>e-Edge Education Center</title>
<link rel="icon" href="images/book1.jpg">

<script language="JavaScript">
var repeat=1 //enter 0 to not repeat scrolling after 1 run, otherwise, enter 1
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
	color: #FFFFFF;
}

<style type="text/css">

body,td,div,p,a,font,span {font-family: arial,sans-serif}
BODY {scrollbar-face-color: #FF99CC}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
.style3 {color: #333333}
.style5 {color: #006600}
.style6 {color: #0080ff}
.style17 {color: #0033FF; }
-->
</style>
</head>

<body bgcolor="#669966" topmargin="0" leftmargin="0" onLoad="startDate()" >

<table border="0" cellpadding="0" cellspacing="0" width="980" align="center"  height="100%" valign="top" style="background-image: url('images/2.gif');">
<tr valign='top'><td>
<table border="0" cellpadding="0" cellspacing="0" width="99%" align="center"  ><!-- top menu row -->
 <tr bgcolor="F0FFF0"> <td colspan="3" >
 	<p align="right">
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

</tr></table></td></tr>

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
 <br>
 <table width="98%" align="center" bgcolor="#FFFFFF" border="1" bordercolor="#336699" cellpadding="0" cellspacing="1"> 
	<tbody><tr valign="top" align=" left">
		<td><p align="center"> <br><font style="font-size: 15px;" color="#009000"> <strong>Class XII Toppers<br> </strong> </font></p>

	<table style="border: 1px dotted rgb(0, 0, 0);" width="90%" align="center" border="1" cellpadding="0" cellspacing="0">
		<tbody>
<!--<tr valign="middle" bgcolor="#ffffaa"><td colspan="3"><hr></td></tr>
--> <!-- first row -->
	 <tr valign="middle" bgcolor="#fffff0">
		<td align="center">
			<img src="images/akansha.jpg">
		</td>
		<td align="center">
			<img src="images/shrey.jpg">
    	</td>
		<td align="center">
			<img src="images/mounika.jpg">
		</td>
	</tr>
	<tr>
		<td align="center"><strong><font style="font-size: 15px;" color="#009000">Akansha Sinha(Topper)</font></strong></td>
		<td align="center"><strong><font style="font-size: 15px;" color="#009000">Shreyashi Tiwari</font></strong></td>
		<td align="center"><strong><font style="font-size: 15px;" color="#009000">Mounika</font></span></td>
	 </tr>
	 <tr>
		<td align="center"><strong>(Roll No.: 9109317, 96.25%)</strong></td>
		<td align="center"><strong>(Roll No.: 5653548, 95.6%)</strong></td>
		<td align="center"><strong>(Roll No.: 9110279, 95%)</strong></td>
	 </tr>
	 <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	 </tr>
	 <tr>
		<td><strong>Maths : 100</strong></td>
		<td><strong>Maths : 97</strong></td>
		<td><strong>Maths : 99</strong></td>
	 </tr>
	 <tr>
		<td><strong>Physics : 95</strong></td>
		<td><strong>Physics : 95</strong></td>
		<td><strong>Physics : 91</strong></td>
	 </tr>
	 <tr>
		<td><strong>Chemistry : 95</strong></td>
		<td><strong>Chemistry : 95</strong></td>
		<td><strong>Chemistry : 95</strong></td>
	 </tr>
	 <tr>
		<td><strong>Biology : 95</strong></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	 </tr>
	 <tr>
		<td align="center"><strong>Aditya Mega City<br> Vaibhav Khand, Indirapuram</strong></td>
		<td align="center"><strong>Sec-3, Vaishali</strong></td>
		<td align="center"><strong>Patrakar Vihar<br>Nyay Khand, Indirapuram</strong></td>
	 </tr>
	  
	 <!-- <tr valign="middle" bgcolor="#fffff0">
		<td colspan="3"><hr></td>
	  </tr>-->
	  
	   <tr valign="middle" bgcolor="#fffff0">
		<td align="center">
			<img src="images/monica.jpg">
		</td>
		<td align="center">
			<img src="images/hrishi.jpg">
    	</td>
		<td align="center">
			<img src="images/prashant.jpg">
		</td>
	</tr>
	<tr>
		<td align="center"><strong><font style="font-size: 15px;" color="#009000">Monica Shrivastav</font></strong></td>
		<td align="center"><strong><font style="font-size: 15px;" color="#009000">Hrishikesh Deshpande</font></strong></td>
		<td align="center"><strong><font style="font-size: 15px;" color="#009000">Prashant Pandey</font></span></td>
	 </tr>
	 <tr>
		<td align="center"><strong>(Roll No.: 5639661, 94%)</strong></td>
		<td align="center"><strong>(Roll No.: 9118832, 92%)</strong></td>
		<td align="center"><strong>(Roll No.: 5653536, 90%)</strong></td>
	 </tr>
	 <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	 </tr>
	 <tr>
		<td><strong>Maths : 94</strong></td>
		<td><strong>Maths : 95</strong></td>
		<td><strong>Maths : 94</strong></td>
	 </tr>
	 <tr>
		<td><strong>Physics : 95</strong></td>
		<td><strong>Physics : 85</strong></td>
		<td><strong>Physics : 84</strong></td>
	 </tr>
	 <tr>
		<td><strong>Chemistry : 95</strong></td>
		<td><strong>Chemistry : 95</strong></td>
		<td><strong>Chemistry : 91</strong></td>
	 </tr>
	 <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	 </tr>
	 <tr>
		<td align="center"><strong></strong></td>
		<td align="center"><strong>Ramprastha Green, Vaishali</strong></td>
		<td align="center"><strong></strong></td>
	 </tr>
	  
				 <!-- second row -->
				 <!--<tr valign="middle" bgcolor="#fff0ff">
					<td>
					  <p><div  align="center"><span  class="style1">Akansha Sinha</span></div><br>
					  <span class="style3">(Maths, Science, English, Mental Ability)</span><br>
					
					<br> 
					<font color="#0080ff"><strong>Maths</strong><br>
					 <strong>Physics</strong><br> 
					 <strong>Chemistry</strong><br>
					 <strong>Biology</strong><br>  
</font></td>
					<td><p><div  align="center"><span  class="style1">Shreyashi Tiwari</span></div><br>
					      <br>
					  Fees at a time of admission Rs.10,500/-<br>	  
					  First Installment
					  Rs. 5,000/-<br>
					  Second Installment Rs. 5,000/-
					  <hr>
					 </td>
					<td>
						<p><div  align="center"><span  class="style1">Monica Shirivastav</span></div><br>
					</td>
				 </tr>
				 <tr valign="middle" bgcolor="#fff0ff"><td colspan="3"><hr></td></tr>-->

				 <!-- third row -->

				<!-- <tr valign="middle" bgcolor="#f0f0f0">
					<td align="center">
					  <span class="style2">Class-IX</span><br>
					  <span class="style1">Only 18 students in each batch</span><br> 
					<span class="style3">(Maths, Science, English, Olympiad) </span><br><br>
					
					<font color="#0080ff"><span class="style6"><strong>Basic Concept</strong> of  Engineering, Medical 
Entrance Examination and Other Competitive Exams.</font></td>
					<td><p><strong><span  class="style17">Total Fees Rs. 24,000/- </span></strong><br>
					      <br>
					  Fees at a time of admission Rs. 12,000/-<br>	  
					  First Installment
					  Rs. 6,000/-<br>
					  Second Installment Rs. 6,000/-
					  <hr>
					  <font color="#0080ff">Total Fee in one installment
Rs. 23,000/-</font></p></td>
					<td align="center"><font color="#f21200">					</font>
					  <div 
class="style5" align="center">Sincerity Award
					  </div></td>
				 </tr>
				 <tr valign="middle" bgcolor="#f0f0f0"><td colspan="3"><hr></td></tr>
-->
				 <!-- fourth row -->

				<!-- <tr valign="middle" bgcolor="#f0f0ff">
					<td align="center">
					  <span class="style2">Class-X</span><br>
					  <span class="style1">Only 18 students in each batch</span><br>
					<span class="style3">(Maths, Science, English, SAT, Olympiad) </span><br><br>
					
					<font color="#0080ff"><span class="style6"><strong>Basic Concept</strong></span> of  Engineering, Medical 
Entrance Examination and Other Competitive Exams like NDA, 
Banking with carrier counselling. </font></td>
					<td><p><strong><span  class="style17">Total Fees Rs. 28,000/- </span></strong><br>
					      <br>
					  Fees at a time of admission Rs. 15,000/-<br>	  
					  First Installment
					  Rs. 7,000/-<br>
					  Second Installment Rs. 6,000/-
					  <hr>
					  <font color="#0080ff">Total Fee in one installment
Rs. 27,000/-</font></p></td>
					<td align="center"><div 
class="style5" align="center">Sincerity Award<br>
					</div></td>
				 </tr>
				 <tr valign="middle" bgcolor="#f0f0ff"><td colspan="3"><hr></td></tr>-->

				<!-- fifth row -->

				<!-- <tr valign="middle" bgcolor="#fff0f0">
					<td align="center">
					  <span class="style2">Class-XI</span><br>
					  <span class="style1">Only 18 students in each batch</span><br> 
					<span class="style3">(Physics, Chem., Maths, Bio)</span><br><br>
					<span class="style6"><strong>Strong	Foundation</strong>	for IIT, AIEEE, PMT like AIIMS and Other Competitive Exam.</span></td>
					<td><p><strong><span  class="style17">Total Fees Rs. 55,000/- </span></strong><br>
					     (PCM or PCB)  <br>
					  Fees at a time of admission Rs. 30,000/-<br>	  
					  First Installment
					  Rs. 13,000/-<br>
					  Second Installment Rs. 12,000/-
					  <hr>
					  <font color="#0080ff">Total Fee in one installment
Rs. 54,000/-</font></p></td>
					<td align="center"><div 
class="style5" align="center">Sincerity Award<br>
					</div></td>
				 </tr>
				  <tr valign="middle" bgcolor="#f0f0ff"><td colspan="3"><hr></td></tr>
				  <tr valign="middle" bgcolor="#fff0f0">
					<td align="center">
					  <span class="style2">Class-XII</span><br>
					<span class="style1"> Only 18 students in each batch </span><br>
					<span class="style3">(Physics, Chem., Maths, Bio)</span><br><br>
					<span class="style6"><strong>Final step</strong> towards 
IIT, AIEEE, PMT, AIIMS and Other Competitive Exam.</span></td>
					<td><p><strong><span  class="style17">Total Fees Rs. 57,000/- </span></strong><br>
					      (PCM or PCB)<br>
					  Fees at a time of admission Rs. 30,000/-<br>	  
					  First Installment
					  Rs.15,000/-<br>
					  Second Installment Rs.12,000/-
					  <hr>
					  <font color="#0080ff">Total Fee in one installment
Rs. 55,000/-</font></p></td>
					<td align="center"><div 
class="style5" align="center">Sincerity Award<br>
					</div></td>
				 </tr>-->
				<!-- <tr><td colspan="3">                                               
                            
</td></tr>
				 <tr valign="middle" bgcolor="#fff0f0"><td colspan="3"><hr></td></tr>

				 <tr valign="middle" bgcolor="#ffffaa"><td colspan="3"><hr></td></tr>-->
				</tbody>
				
				</table>
				</td>
			</tr>
		</tbody></table>
 <br>
 <!--up to here make the changes -->
  </td>
 </tr>

<!-- bottom menu row -->

 <tr  class="ftr"><td width="17%" height="15" >&nbsp;</td> <td colspan=2 > 

	<script type="text/javascript" language="JavaScript1.2" src="jsc/footer.js"></script>

  </td></tr>
</table>
</TD></TR></TABLE>

</body>
</html>

