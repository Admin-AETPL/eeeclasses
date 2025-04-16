var dd = window.location; 

dd=dd.toString(); 

var dd_array= dd.split("/");

var urlname=dd_array[dd_array.length-1];

/*-------------------JAVA SCRIPT CODE START----------------*/

function expand(s)
{
  var td = s;
  var d = td.getElementsByTagName("div").item(0);
  td.className = "menuHover";
  d.className = "menuHover";
}

function collapse(s)
{
  var td = s;
  var d = td.getElementsByTagName("div").item(0);
  td.className = "menuNormal";
  d.className = "menuNormal";
}

/*---------------------JAVA SCRIPT CODE END--------------------*/

/*-------------------Login Script Code Start-------------------*/

function ChkLogin()
{
   	var message;
	var myusername = document.form.myusername.value;
    var mypassword = document.form.mypassword.value;
    var myregistration = document.form.myregistration.value;

if (myusername=="" || mypassword=="" || myregistration=="")

	{
		if (myusername=="" && mypassword=="" && myregistration=="") 

			{
				message = "Please input your username,password and registration no.";
			} 

		else if (myusername=="") 

			{
				message = "Please input your username.";
			} 

		else if (mypassword =="") 

			{    
				message = "Please input your password.";
			}

		else if(myregistration =="")

			{    
				message = "Please input your Registration no";
			}

		alert(message);

		return false;
    }

	else 

	{
		makeExternalPopup();
		return true;
	}

}

/*---------------------------Login Script Code End-----------------*/

document.write('<table border="0" cellpadding="0" cellspacing="0" width="150">');

document.write('<tr valign="top"> ');

document.write('<td>');

document.write('<table border="0" cellpadding="0" cellspacing="0" width="200" align="left">');

/*-------------UPDATE MENU CODE START-----------------*/

document.write('<table class="menuNormal" width="180">');

document.write('<tr>');

if(urlname=="index.php" ){

document.write('<tr> <td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"><img src=./images/arr2.jpg><a id="leftmnu" href="index.php">Home</a></td></tr>');

}else{

document.write('<tr> <td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"><img src=./images/arr2.jpg><a id="leftmnu" href="index.php">Home</a></td></tr>');

}

document.write('</tr>');

document.write('<tr>');

if(urlname=="about.php" ){

document.write('<tr> <td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"><img src=./images/arr2.jpg><a id="leftmnu" href="about.php">About Us</a></td></tr>');

}else{

document.write('<tr> <td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"><img src=./images/arr2.jpg><a id="leftmnu" href="about.php">About Us</a></td></tr>');

}

document.write('</tr>');


document.write('<tr>');

/*------ CHANGE IN URL NAME---------------*/ 
if(urlname=="#" ){

document.write('<td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);">  <img src=./images/arr2.jpg>&nbsp;Competitive Classes');
}else{
document.write('<td width="154"  class="menuNormal"  onmouseover="expand(this);" onmouseout="collapse(this);">  <img src=./images/arr2.jpg>Competitive Classes');
	
/*----------------------COMPETATIVE CLASSES START------------*/

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="170">');

}

/*------------------Engineering sub menu  start----------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">Engineering');

document.write('<div class="menuNormal" width="150" align="center">');

document.write('<table class="menu" width="170">');

document.write('<tr><td class="menuNormal"  width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">IIT-JEE');

/*------------------iit jee sub menu Start----------------*/

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="130">');

document.write('<tr><td class="menuNormal" align="center"onmouseover="expand(this);" onmouseout="collapse(this);" ><a id="leftmnu" href="courses.php">Physics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Chemistry</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center"onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Mathematics<a/></td></tr>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*------------------iit jee sub menu end----------------*/

document.write('<tr><td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">AIEEE');

/*------------------AIEEE sub menu Start----------------*/

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="130">');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);" ><a id="leftmnu" href="courses.php">Physics</a></td></tr>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Chemistry</a></tr></td>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Mathematics</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*------------------AIEEE sub menu end----------------*/


document.write('<tr><td class="menuNormal width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">UPTECH');

/*------------------UPTECH sub menu start----------------*/

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="130">');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Physics</a></td></tr>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Chemistry</a></tr></td>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="courses.php">Mathematics</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*------------------UPTECH sub menu end----------------*/

document.write('</table>');

document.write('</div>');

document.write('</td>');

document.write('</tr>');

/*------------------Medical sub menu start-------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">Medical'); 

document.write('<div class="menuNormal" width="150" align="center">');

document.write('<table class="menu" width="180">');

document.write('<tr><td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">AIPMT');

/*---------------------AIPMT sub menu start-------------*/

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="130">');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Physics</a></td></tr>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Chemistry</a></td></tr>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Biology</a></td></tr>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*---------------------AIPMT sub menu end-------------*/

document.write('<tr><td class="menuNormal" width="154" align="center" onmouseover="expand(this);"  onmouseout="collapse(this);">AIIMS');

/*----------------- --AIIMS sub menu start----------------*/ 

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="130">');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);" ><a id="leftmnu" href="undercons.php">Physics </a></td></tr>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Chemistry</a></td></tr>');

document.write('<tr><td class="menuNormal"  align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Biology</a></td></tr>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*-------------AIIMS sub menu end--------------------*/

document.write('</table>');

document.write('</div>');

document.write('</td>');

document.write('</tr>');

/*---------------------Medical sub menu End-------------*/

document.write('</table>');

document.write('</div>');

document.write('</td>');

document.write('</td>');

/*----------------------COMPETATIVE CLASSES END------------*/

document.write('</tr>');


/*----------------------CLASSES MENU START------------*/

document.write('<tr>');

if(urlname=="#" ){

	document.write('<td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg>Academic Classes');

}else{

	document.write('<td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg>Academic Classes');

}

document.write(' <div class="menuNormal" width="150">');

document.write(' <table class="menu" width="170">');

/*----------------------CLASSES VII START ------------*/

document.write('<tr>');

document.write('<td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">VII');

document.write('<div class="menuNormal" align="center" width="150">');

document.write('<table class="menu" width="180">');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Mathematics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Science</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Analytical Reasoning</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*----------------------CLASSES VII END ------------*/

/*---------------------CLASSES VIII START ------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">VIII');

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="185">');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);" ><a id="leftmnu" href="undercons.php">Mathematics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Science</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Analytical Reasoning</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*----------------------CLASSES VIII END ------------*/

/*----------------------CLASSES IX START ------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">IX');

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="185">');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Mathematics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Science	</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Analytical Reasoning</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*----------------------CLASSES IX END ------------*/

/*----------------------CLASSES X START ------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">X');

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="185">');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="download/class_10_math_eee.pdf">Mathematics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="download/class_10_Science_eee.pdf">Science</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Analytical Reasoning</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*----------------------CLASSES X END -------------*/

/*--------------------CLASSES XI START ------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">XI');

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="185">');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Physics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Chemistry</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Mathematics</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Biology</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*----------------------CLASSES XI END ------------*/

/*----------------------CLASSES XII START ------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);">XII');

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="185">');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Physics</a></td></tr>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Chemistry</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Mathematics</a></tr></td>');

document.write('<tr><td class="menuNormal" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="undercons.php">Biology</a></tr></td>');

document.write('</table>');

document.write('</div>');

document.write('</td></tr>');

/*----------------------CLASSES XII END ------------*/

document.write('</table>');

document.write('</div>');

document.write('</td>');

document.write('</td>');

document.write('</tr>');

/*----------------------CLASSES MENU END------------*/

//document.write('<tr>');
if(urlname=="registration.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="ntsefile.php"> NTSE Details</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg><a id="leftmnu" href="ntsefile.php"> NTSE Details</a></td></tr> ');

}


if(urlname=="registration.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="registration.php"> Registration</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg><a id="leftmnu" href="registration.php"> Registration</a></td></tr> ');

}

if(urlname=="feeStructure.php" ){

	document.write('  <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="feeStructure.php">Fee Structure</a></td></tr> ');

}else{

	document.write('  <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="feeStructure.php">Fee Structure</a></td></tr> ');

}
if(urlname=="faculty.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="faculty.php">Faculty</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href=faculty.php>Faculty</font></a></td></tr> ');

}
if(urlname=="onlinetest.php" ){

	document.write('  <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="http://www.e-edgeeducationclasses.vriti.com/user/login.htm">Online Test (Official)</a></td></tr> ');

}else{

	document.write('  <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="http://www.e-edgeeducationclasses.vriti.com/user/login.htm">Online Test  (Official)</a></td></tr> ');

}
if(urlname=="cbse-question.php" ){

	document.write('<tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg><a id="leftmnu" href="cbse-question.php">Question Papers</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="cbse-question.php">Question Papers</a></td></tr> ');

}
/*


if(urlname=="onlinetest.php" ){

	document.write(' <tr><td width="154"  onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg><a id="leftmnu" href="http://www.e-edgeeducationclasses.vriti.com/user/login.htm">Online Test</a></td></tr> ');

}else{

	document.write(' <tr><td width="154"  onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="http://www.e-edgeeducationclasses.vriti.com/user/login.htm">Online Test</a></td></tr> ');

}

if(urlname=="#" ){

	document.write(' <tr bgcolor="40e73c"><td width="154"  onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg><a id="leftmnu" href="http://abhyas.eeeclasses.info/claroline1105/index.php"><font style="text-decoration:blink;">Internal Online Test </font></a></td></tr> ');

}else{

	document.write(' <tr bgcolor="40e73c"><td width="154"  onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="http://abhyas.eeeclasses.info/claroline1105/index.php"><font style="text-decoration:blink;">Internal Online Test</font></font></a></td></tr> ');

}
*/


document.write('<tr>');

/*------ CHANGE IN URL NAME---------------*/ 
if(urlname=="#" ){

document.write('<td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"><img src=./images/arr2.jpg>&nbsp;Tests');
}
else
{
document.write('<td width="154"  class="menuNormal"  onmouseover="expand(this);" onmouseout="collapse(this);"><img src=./images/arr2.jpg>Tests');
	
/*----------------------COMPETATIVE CLASSES START------------*/

document.write('<div class="menuNormal" width="150">');

document.write('<table class="menu" width="170">');

}

/*------------------Engineering sub menu  start----------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="test-schedule.php">Test Schedule</a>');

document.write('<div class="menuNormal" width="150" align="center">');

document.write('</div>');

document.write('</td>');

document.write('</tr>');

/*------------------Medical sub menu start-------------*/

document.write('<tr>');

document.write('<td class="menuNormal" width="154" align="center" onmouseover="expand(this);" onmouseout="collapse(this);"><a id="leftmnu" href="testpaper.php">Test Paper &amp; Result</a>'); 

document.write('</td>');

document.write('</tr>');

/*---------------------Medical sub menu End-------------*/

document.write('</table>');

document.write('</div>');

document.write('</td>');

document.write('</td>');

/*----------------------COMPETATIVE CLASSES END------------*/

document.write('</tr>');



/*
if(urlname=="x.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="x.php">Test Schedule</a><img src=./images/New.gif></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href=x.php>Test Schedule</font></a><img src=./images/New.gif></td></tr> ');

}
if(urlname=="test-paper&results.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="test-paper&results.php">Papers &amp; Results</a><img src=./images/New.gif></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href=test-paper&results.php>Papers &amp; Results</font></a><img src=./images/New.gif></td></tr> ');

}*/

if(urlname=="album.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg><a id="leftmnu" href="album.php">Photo Gallery</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="album.php"> Photo Gallery</a></td></tr> ');

}

if(urlname=="feedback.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="feedback.php">Feedback</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="feedback.php"> Feedback</a></td></tr> ');

}

if(urlname=="Advertise.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="Advertise.php">Advertisement</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href=Advertise.php> Advertisement</font></a></td></tr> ');

}

if(urlname=="contactus.php" ){

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="contactus.php">Contact Us</a></td></tr> ');

}else{

	document.write(' <tr><td width="154" class="menuNormal" onmouseover="expand(this);" onmouseout="collapse(this);"> <img src=./images/arr2.jpg> <a id="leftmnu" href="contactus.php"> Contact Us</font></a></td></tr> ');

}

document.write(' </table>');

document.write(' </td> ');

document.write(' </tr> ');

document.write(' </table> ');

/*------------------------------------------------------LEFTMENU CODE END--------------------------------------------*/

/*document.write(' <br> ');

document.write('<form name="form" method="post" action="onlinetest.php" >');

document.write('<input type="submit" name="submit" value="Online Test" bgcolor="#F2E0BB">');

document.write(' <br> ');*/

/*------------------------------------------------------Login Code Start---------------------------------------------*/

/*document.write(' <br> ');

document.write('<form name="form" method="post" action="checklogin.php"onsubmit="return ChkLogin(this);">');

document.write('<table width="160" border="0"  cnellpadding="0" cellspacing="1" bgcolor="#223344">');

document.write('<tr>');

document.write('<td>');

document.write('<table width="160" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFB062">');

document.write('<tr>');

document.write('<td colspan="3" align="center"><strong>Member Login </strong></td>');

document.write('</tr>');

document.write('<td>&nbsp;</td>');

document.write('<tr>');

document.write('<td>User_name</td>');

document.write('<td>:</td>')

document.write('<td><input STYLE="background-color: #FFFFD9" name="myusername" type="text" id="myusername"></td>');

document.write('</tr>');

document.write('<tr>');

document.write('<td>Password</td>');

document.write('<td>:</td>');

document.write('<td><input STYLE="background-color: #FFFFD9" name="mypassword" type="password" id="mypassword"></td>');

document.write('</tr>');

document.write('<tr>');

document.write('<td>Regist. no</td>');

document.write('<td>:</td>');

document.write('<td><input STYLE="background-color: #FFFFD9" name="myregistration" type="password" id="myregistration"></td>');

document.write('</tr>');

document.write('<td>&nbsp;</td>');

document.write('<tr>');

document.write('<td></td>');

document.write('<td></td>');

document.write('<td><input  STYLE="background-color: #D3D3D3;" type="reset" name="Reset" value="Reset">&nbsp;&nbsp;&nbsp;&nbsp;<input  STYLE="background-color: #D3D3D3;" type="submit" name="Submit" value="Login"></td>');

document.write('<td>&nbsp;</td>');

document.write('<td>&nbsp;</td>');*/

/*document.write('<td><input  STYLE="background-color: #D3D3D3;" type="submit" name="Submit" value="Login"></td>');*/

//document.write('</tr>');

/*document.write('<td>&nbsp;</td>');

document.write('<td>&nbsp;</td>');*/



/*document.write('</table>')

document.write('</td>');

document.write('</tr>');

document.write('</table>');

document.write('</form>');

*/


/*----------------------------------------------Login Code End----------------------------------------------------*/

/*document.write('<br><table border="0" cellpadding="0" cellspacing="0" width=100% align="center" bgcolor="#336699">');

	document.write('<tr bgcolor="#F2FFEE"> <td width="79%">');

	document.write('<marquee height=70 DIRECTION=up LOOP=0 scrollamount=1 ><center><font style="color:#007000; font-family:sans-serif; font-size:11px;"> Teaching An Art !!<br> in this process it covers <font style="font-size:11px; color:#880000; font-family:sans-serif;"><br> learning, <font style="color:#888800; font-family:sans-serif;">applying, <font style="font-size:11px; color:#990099; font-family:sans-serif;">understanding,<br><font style="font-size:11px; color:#000099; font-family:sans-serif;"> experiencing, <font style="font-size:11px; color:#cc7722; font-family:sans-serif;">sharing of<br> knowledge.</center></marquee></font>');

document.write(' </td></tr></table> ');*/



