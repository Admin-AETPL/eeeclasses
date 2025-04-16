var dd = window.location; 
dd=dd.toString(); 
var dd_array= dd.split("/");
var urlname=dd_array[dd_array.length-1];

document.write(' <table border="0" cellpadding="0" cellspacing="0"  bgcolor="#ffffff"> ');

document.write(' <tr valign="top">  <td align="left"> ');
document.write(' <table border="0" cellpadding="0" cellspacing="1" > <tr>');

if(urlname=="index.php" ){
	document.write(' <td  class="tdtopItemSelected" align=center><a id="topmnu" href="index.php"> <font color= "#880000"> Home</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="index.php"> Home</a></td> ');
}
/*if(urlname=="courses.php" ){
	document.write('   <td class="tdtopItemSelected" align=center> <a id="topmnu" href="courses.php"><font color= "#880000"> Courses</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="courses.php"> Courses</a></td> ');
}*/

if(urlname=="registration.php" ){
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="registration.php"><font color= "#880000"> Registration</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="registration.php"> Registration</a></td> ');
}
if(urlname=="feedback.php" ){
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="feedback.php"><font color= "#880000"> Feedback</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center><a id="topmnu" href="feedback.php"> Feedback</a></td> ');
}
if(urlname=="sitemap.php" ){
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="sitemap.php"><font color= "#880000"> Site Map</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="sitemap.php"> Site Map</a></td> ');
}

/*if(urlname=="class.php" ){
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="class.php"><font color= "#880000"> Class</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="class.php"> Class</a></td> ');
}*/
////
if(urlname=="contactus.php" ){
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="contactus.php"><font color= "#880000"> Contact Us</font></a></td> ');
}else{
	document.write('   <td  class="tdtopItemSelected" align=center> <a id="topmnu" href="contactus.php"> Contact Us</a></td> ');
}
document.write('</tr> </table> ');
document.write(' </td> ');
document.write(' </tr> ');
document.write(' </table> ');

