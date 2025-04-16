var dd = window.location; 
dd=dd.toString(); 
var dd_array= dd.split("/");
var urlname=dd_array[dd_array.length-1];

document.write(' <table border="0" cellpadding="0" cellspacing="0" width=100% align="center"> ');

document.write(' <tr valign="top"> ');
document.write(' <td> ');
document.write(' <table border="0" cellpadding="0" cellspacing="1" width=100% align="center"> ');

if(urlname=="index.php" ){
	document.write(' <td width="7%" class="tdLeftItemSelected" align=center> <a id="home" href="index.php"><font color= "#880000"> Home</font></a></td> ');
}else{
	document.write('   <td width="7%" class="tdLeftItemSelected" align=center> <a id="home" href="index.php"><font color= "#000000"> Home</font></a></td> ');
}
if(urlname=="courses.html" ){
	document.write('   <td width="8%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#880000"> Courses</font></a></td> ');
}else{
	document.write('   <td width="8%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#0033FF"> Courses</font></a></td> ');
}
if(urlname=="admission.html" ){
	document.write('   <td width="9%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#880000"> Admission</font></a></td> ');
}else{
	document.write('   <td width="9%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"> <font color= "#0033FF">Admission</font></a></td> ');
}
if(urlname=="registrationform.html" ){
	document.write('   <td width="9%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#880000"> Registration</font></a></td> ');
}else{
	document.write('   <td width="9%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#0033FF"> Registration</font></a></td> ');
}
if(urlname=="faculty.html" ){
	document.write('   <td width="12%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#880000"> About Faculty</font></a></td> ');
}else{
	document.write('   <td width="12%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#0033FF"> About Faculty</font></a></td> ');
}
if(urlname=="download.html" ){
	document.write('   <td width="10%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#880000"> Downloads</font></a></td> ');
}else{
	document.write('   <td width="10%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#0033FF"> Downloads</font></a></td> ');
}

if(urlname=="feedbackform.html" ){
	document.write('   <td width="10%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"><font color= "#880000"> Feedback</font></a></td> ');
}else{
	document.write('   <td width="10%" class="tdLeftItemSelected" align=center> <a id="home" href="undercons.php"> <font color= "#0033FF">Feedback</font></a></td> ');
}
if(urlname=="sitemap.php" ){
	document.write('   <td width="10%" class="tdLeftItemSelected" align=center> <a id="home" href="sitemap.php"><font color= "#880000"> Site Map</font></a></td> ');
}else{
	document.write('   <td width="10%" class="tdLeftItemSelected" align=center> <a id="home" href="sitemap.php"> <font color= "#0033FF">Site Map</font></a></td> ');
}
if(urlname=="contactus.php" ){
	document.write('   <td width="11%" class="tdLeftItemSelected" align=center> <a id="home" href="contactus.php"><font color= "#880000"> Contact Us</font></a></td> ');
}else{
	document.write('   <td width="11%" class="tdLeftItemSelected" align=center> <a id="home" href="contactus.php"><font color= "#0033FF"> Contact Us</font></a></td> ');
}
document.write(' </table> ');
document.write(' </td> ');
document.write(' </tr> ');
document.write(' </table> ');

