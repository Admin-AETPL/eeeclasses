<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Edge Education</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<link href="css/simpleTicker.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/photo_gallery.js"></script>
<script type="text/javascript" src="js/scriptbreaker-multiple-accordion-1.js"></script>
<script language="JavaScript">

$(document).ready(function() {
	$(".rt_nav").accordion({
		accordion:false,
		speed: 500,
		closedSign: '[+]',
		openedSign: '[-]'
	});
	
	//Set default open/close settings
$('.acc_container').hide(); //Hide/close all containers
$('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click
$('.acc_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
	}
	return false; //Prevent the browser jump to the link anchor
});

});

</script>
</head>

<body>
<div class="header_area">
  <div class="main_area">
    <p class="collus_text">Call us now: 0120-6549775</p>
  </div>
  <div class="main_area">
    <div class="logo_wrap">
      <p class="logo_pad"><a href="#"><img src="images/eee-logo.png" alt="" border="0" /></a></p>
	  <p class="inst_name">e-Edge Education Centre</p>
    </div>
    <div class="navarea_wrap">
      <?php $page="test";include("phpf/top_nav.php");?>
    </div>
    <br class="blank" />
  </div>
  
</div>
<div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
          <p style="background:url(images/ExamResult.png) 0 0 no-repeat;"><span class="welcome_text">Test</span><br />
            <br />
            
			<div class="container">

	<h2 class="acc_trigger"><a href="#">Test Schedule</a></h2>
	<div class="acc_container">
		<div class="block">
			<table class="bordered">


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
    	<table border="0" cellpadding="0" cellspacing="1" width="100%" align="center" bgcolor="#336699" > 
	<tr valign="top"> 
	<td height="325">
	  <table border="3" cellpadding="0" cellspacing="0" width="90%" align="center">
   <tr>
   	<td align="right" bgcolor="#FFFF66"><div align="center" class="style8"><img src=./images/New1.gif> PRE NTSE Result for Class X Conducted on 26/8/2013<img src="images/New1.gif" border="0"></a><br>At St. Thomas School, Indirapuram</td>
	<td align="right" bgcolor="#FFFF66"><div align="center" class="style8"></td>
   </tr>
   <tr>
   <td bgcolor=white><div align="center" class="style1"><a href="ntse-scholarship.php">Scholarship for Class 10<sup>th</sup> Student on the basis of EEE NTSE Screening Test</a></div></td>
   </tr>
  </table><br>
		<table border="2" cellpadding="0" cellspacing="1" width="100%" height="100%" align="left" bgcolor=#F0FFF0>
		<tr>
		  <td height="31" colspan="6" bgcolor="#FFFF66"><div align="center" class="style8">CLASS-X</div></td>
		  </tr>
		<tr><td width="3%" height="31" bgcolor="#75872C"><div align="center" class="style1">S.No.</div></td>
		    <td width="10%" bgcolor="#75872C"><div align="center" class="style1">Student's Name</div></td>
			 <td width="6%" bgcolor="#75872C"><div align="center" class="style1">Section</div></td>
			  <td width="6%" bgcolor="#75872C"><div align="center" class="style1">Roll-No</div></td>
		    <td width="6%" bgcolor="#75872C"><div align="center" class="style1">Marks</div></td>
		</tr>
				
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>1.</strong></td>
			<td bgcolor="#C0C0C0" align="center">AAROHI PRASAD</td>
			<td bgcolor="#C0C0C0" align="center">D</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">17</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>2.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ISHAN MATHUR</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">19</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>3.</strong></td>
			<td bgcolor="#C0C0C0" align="center">VAIBHAV KAUSHIK</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">19</td>
			<td bgcolor="#C0C0C0" align="center">16</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>4.</strong></td>
			<td bgcolor="#C0C0C0" align="center">MAYANK GUPTA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">21</td>
		  	<td bgcolor="#C0C0C0" align="center">15</td>
	    </tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>5.</strong></td>
			<td bgcolor="#C0C0C0" align="center">JAYANT MALHOTRA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">17</td>
		 	<td bgcolor="#C0C0C0" align="center">15</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>6.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ANKIT KUMAR</td>
			<td bgcolor="#C0C0C0" align="center">D</td>
			<td bgcolor="#C0C0C0" align="center">07</td>
			<td bgcolor="#C0C0C0" align="center">15</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>7.</strong></td>
			<td bgcolor="#C0C0C0" align="center">SHRYASHEE THKRAL</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center"></td>
		  	<td bgcolor="#C0C0C0" align="center">15</td>
	    </tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>8.</strong></td>
			<td bgcolor="#C0C0C0" align="center">SHUBHAM BAJORIA</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center">30</td>
		 	<td bgcolor="#C0C0C0" align="center">15</td>
		</tr>
			<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>9.</strong></td>
			<td bgcolor="#C0C0C0" align="center">SHIKHAR ZUTSHI</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">22</td>
		 	<td bgcolor="#C0C0C0" align="center">15</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>10.</strong></td>
			<td bgcolor="#C0C0C0" align="center">KARTIK SINGH</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center">19</td>
			<td bgcolor="#C0C0C0" align="center">15</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>11.</strong></td>
			<td bgcolor="#C0C0C0" align="center">KUSHAGRA CHTURVEDI</td>
			<td bgcolor="#C0C0C0" align="center">D</td>
			<td bgcolor="#C0C0C0" align="center"></td>
		  	<td bgcolor="#C0C0C0" align="center">14</td>
	    </tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>12.</strong></td>
			<td bgcolor="#C0C0C0" align="center">PARTH GILRA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">26</td>
		 	<td bgcolor="#C0C0C0" align="center">14</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>13.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ADITI B. PRASAD</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">04</td>
		 	<td bgcolor="#C0C0C0" align="center">14</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>14.</strong></td>
			<td bgcolor="#C0C0C0" align="center">DHRUV GUPTA</td>
			<td bgcolor="#C0C0C0" align="center">A</td>
			<td bgcolor="#C0C0C0" align="center">10</td>
			<td bgcolor="#C0C0C0" align="center">14</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>15.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ANANYA PRAKASH</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">06</td>
			<td bgcolor="#C0C0C0" align="center">14</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>16.</strong></td>
			<td bgcolor="#C0C0C0" align="center">RAGHAV GILRA</td>
			<td bgcolor="#C0C0C0" align="center">E</td>
			<td bgcolor="#C0C0C0" align="center">29</td>
			<td bgcolor="#C0C0C0" align="center">13</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>17.</strong></td>
			<td bgcolor="#C0C0C0" align="center">SUKANYA SINGH</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center">31</td>
		  	<td bgcolor="#C0C0C0" align="center">13</td>
	    </tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>18.</strong></td>
			<td bgcolor="#C0C0C0" align="center">AYUSH PANDEY</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">11</td>
		 	<td bgcolor="#C0C0C0" align="center">13</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>19.</strong></td>
			<td bgcolor="#C0C0C0" align="center">AKSHAY RAJ</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">13</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>20.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ARYAN JANMEJAY</td>
			<td bgcolor="#C0C0C0" align="center">E</td>
			<td bgcolor="#C0C0C0" align="center">10</td>
		  	<td bgcolor="#C0C0C0" align="center">13</td>
	    </tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>21.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ABHINAV VERMA</td>
			<td bgcolor="#C0C0C0" align="center">A</td>
			<td bgcolor="#C0C0C0" align="center">02</td>
		 	<td bgcolor="#C0C0C0" align="center">13</td>
		</tr>
			<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>22.</strong></td>
			<td bgcolor="#C0C0C0" align="center">SHIKHAR SHARMA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">28</td>
		 	<td bgcolor="#C0C0C0" align="center">12</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>23.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ANINDYA SINHA</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center">05</td>
			<td bgcolor="#C0C0C0" align="center">12</td>
		</tr>
		
			<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>24.</strong></td>
			<td bgcolor="#C0C0C0" align="center">DRISHTI SRIVASTAVA</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">12</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>25.</strong></td>
			<td bgcolor="#C0C0C0" align="center">SHIVAM TIWARI</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center">26</td>
		  	<td bgcolor="#C0C0C0" align="center">11</td>
	    </tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>26.</strong></td>
			<td bgcolor="#C0C0C0" align="center">RUDRAKSHI SRIVASTAVA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">27</td>
		 	<td bgcolor="#C0C0C0" align="center">11</td>
		</tr>
			<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>27.</strong></td>
			<td bgcolor="#C0C0C0" align="center">KARTIKAYE MALIK</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center"></td>
		 	<td bgcolor="#C0C0C0" align="center">10</td>
		</tr>
		
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>28.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ADITYA ACHARYA</td>
			<td bgcolor="#C0C0C0" align="center">E</td>
			<td bgcolor="#C0C0C0" align="center">04</td>
			<td bgcolor="#C0C0C0" align="center">10</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>29.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ISHAN DEOPA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center"></td>
		 	<td bgcolor="#C0C0C0" align="center">10</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>30.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ANAMIKA BHAUMIK</td>
			<td bgcolor="#C0C0C0" align="center">E</td>
			<td bgcolor="#C0C0C0" align="center">05</td>
		 	<td bgcolor="#C0C0C0" align="center">10</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>31.</strong></td>
			<td bgcolor="#C0C0C0" align="center">VIKRAM ADITYA SUKHIJA</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center">19</td>
		 	<td bgcolor="#C0C0C0" align="center">10</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>32.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ABHISHEK KUMAR</td>
			<td bgcolor="#C0C0C0" align="center">E</td>
			<td bgcolor="#C0C0C0" align="center">01</td>
		 	<td bgcolor="#C0C0C0" align="center">10</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>33.</strong></td>
			<td bgcolor="#C0C0C0" align="center">AADWAY SINHA</td>
			<td bgcolor="#C0C0C0" align="center">D</td>
			<td bgcolor="#C0C0C0" align="center">01</td>
		 	<td bgcolor="#C0C0C0" align="center">09</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>34.</strong></td>
			<td bgcolor="#C0C0C0" align="center">ANIKET TEOTIA</td>
			<td bgcolor="#C0C0C0" align="center">B</td>
			<td bgcolor="#C0C0C0" align="center">04</td>
		 	<td bgcolor="#C0C0C0" align="center">09</td>
		</tr>
		<tr><td height="31" bgcolor="#C0C0C0" align="center"><strong>35.</strong></td
			><td bgcolor="#C0C0C0" align="center">HARSHIT RAJWAR</td>
			<td bgcolor="#C0C0C0" align="center"></td>
			<td bgcolor="#C0C0C0" align="center"></td>
		 	<td bgcolor="#C0C0C0" align="center"></td>
		</tr>		
		
		</table>
	</td>

	</tr>
	</table>
    </td>

    </tr>
    </table>
   <!--end of 23-11-2009 -->
   
   <br><br>

   <br>
   <br>
    <table border="3" cellpadding="0" cellspacing="0" width="90%" align="center">
   <tr>
   	<td align="right" bgcolor="#FFFF66"><div align="right" class="style8"><a href="resultntse1.php"></a></td>
   </tr>
  </table><br>

 <!--1-11-2009 -->
    <!--<table border="3" cellpadding="0" cellspacing="0" width="90%" align="center">
NEXT -->>
    <tr>

    <td>

    	<table border="0" cellpadding="0" cellspacing="1" width="100%" align="center" bgcolor="#336699" > 
	<tr valign="top"> 
	<td height="325">
		<table border="2" cellpadding="0" cellspacing="1" width="100%" height="100%" align="left" bgcolor=#F0FFF0>
		<tr>
		  <td height="31" colspan="6" bgcolor="#FFFF66"><div align="center" class="style8">Test Papers &amp; Results of 01-11-2009 </div></td>
		  </tr>
		<tr><td width="13%" height="31" bgcolor="#75872C"><div align="center" class="style1">Class</div></td>
		  <td width="13%" bgcolor="#75872C"><div align="center" class="style1">Subject</div></td>
		  <td width="13%" bgcolor="#75872C"><div align="center" class="style1">Topic</div></td>
		  <td width="13%" bgcolor="#75872C"><div align="center" class="style1">Level</div></td>
		  <td width="13%" bgcolor="#75872C"><div align="center" class="style1">Test Paper </div></td>
		  <td width="10%" bgcolor="#75872C"><div align="center" class="style1">Result</div></td>
		</tr>
		<tr valign="middle" bgcolor="#00FFFF">
		<td height="31" bgcolor="#A6A6FF"><div align="center" class="style9">XII</div></td>
		<td bgcolor="#A6A6FF"><div align="center" class="style9">Chemistry</div></td>
		<td bgcolor="#A6A6FF"><div align="center" class="style4"><span class="style10"></span></div></td>
		<td bgcolor="#A6A6FF"><div align="center" class="style4"><span class="style10"></span></div></td>
		<td bgcolor="#A6A6FF"><div align="center" class="style9"><a href="Test_papers/1-11-2009/chemistry_xii_1-11-2009.pdf" target="_blank">Available</a></div></td>
		<td bgcolor="#A6A6FF"><div align="center" class="style9">Awaited</div></td>
		</tr>
		<tr><td height="31" bgcolor="#9B4E00"><div align="center" class="style9">XI A </div></td>
		<td bgcolor="#9B4E00" class="style4"><div align="center" class="style9">Maths</div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Math_xi_a_1-11-2009.pdf" target="_blank">Available</a></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10"><a href="results/01-11-2009/XI_MATHS_MCQ.xls">Available</a></div></td>
		</tr>
		<tr><td height="31" bgcolor="#9B4E00"><div align="center" class="style9">XI B </div></td>
		<td bgcolor="#9B4E00"><div align="center" class="style9">Maths</div></td>
		<td bgcolor="#9B4E00"><div align="center" class="style7"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00"><div align="center" class="style7"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00"><div align="center" class="style9"><a href="Test_papers/1-11-2009/Math_xi_b_1-11-2009.pdf" target="_blank">Available</a></div></td>
		<td bgcolor="#9B4E00"><div align="center" class="style9">Awaited</div></td>
		</tr>
		<tr valign="middle" bgcolor="#00FFFF">
		<td height="31" bgcolor="#9B4E00" class="style7"><div align="center" class="style10">X</div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10">Maths</div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Math_x_1-11-2009.pdf" target="_blank">Available</a></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10"><a href="results/01-11-2009/X_Maths.xls">Available</a></div></td>
		</tr>
		<tr>
		  <td height="31" bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">XII A </div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">Physics</div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center"><span class="style10"></span></div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center"><span class="style10"></span></div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Physics_xii_a_1-11-2009.pdf" target="_blank">Available</a></div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">Awaited</div></td>
		  </tr>
		<tr>
		  <td height="31" bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">XII B </div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">physics</div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center"><span class="style10"></span></div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center"><span class="style10"></span></div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Physics_xii_b_1-11-2009.pdf" target="_blank">Available</a></div></td>
		  <td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">Awaited</div></td>
		  </tr>
		<tr><td height="31" bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">XI</div></td>
		<td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">physics</div></td>
		<td bgcolor="#A6A6FF" class="style4"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#A6A6FF" class="style4"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Physics_xi_1-11-2009.pdf" target="_blank">Available</a></div></td>
		<td bgcolor="#A6A6FF" class="style4"><div align="center" class="style10">Awaited</div></td>
		</tr>
		<tr>
		  <td height="31" bgcolor="#9B4E00" class="style7"><div align="center" class="style10">X</div></td>
		  <td bgcolor="#9B4E00" class="style7"><div align="center" class="style10">Science</div></td>
		  <td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		  <td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		  <td bgcolor="#9B4E00" class="style7"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Science_x_1-11-2009.pdf" target="_blank">Available</a></div></td>
		  <td bgcolor="#9B4E00" class="style7"><div align="center" class="style10">Awaited</div></td>
		  </tr>
		<tr><td height="31" bgcolor="#9B4E00" class="style7"><div align="center" class="style10">IX</div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10">Science</div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center"><span class="style10"></span></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10"><a href="Test_papers/1-11-2009/Science_ix_1-11-2009.pdf" target="_blank">Available</a></div></td>
		<td bgcolor="#9B4E00" class="style7"><div align="center" class="style10">Awaited</div></td>
		</tr>
		</table>
	</td>

	</tr>
	</table>
    </td>

    </tr>
    </table> -->
 <!--end of 1-11-2009 -->	

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
       </div>
      </div>
    </div>
    <div class="right_body_wrap">
      <?php include("phpf/right_nav.php");?>	  
      </div>
	</div>
    <br class="blank" />
  </div>
</div>
<div class="footer_wrap">
  <?php include("phpf/footer_nav.php");?>
</div>
</body>
</html>
