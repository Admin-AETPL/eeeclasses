var dd = window.location; 
dd=dd.toString(); 
var dd_array= dd.split("/");
var urlname=dd_array[dd_array.length-1];

document.write(' <table border="0" cellpadding="0" cellspacing="1" width=100% align="center"><tr> ');

if(urlname=="index.html" ){
	document.write(' <td width="7%" class="tdLeftItemSelected"> <a id="home" href="index.html"><font color= "#880000"> Home</font></a></td> ');
}else{
	document.write('   <td width="7%" class="tdLeftItemSelected"> <a id="home" href="index.html"><font color= "#0033FF"> Home</font></a></td> ');
}
if(urlname=="courses.html" ){
	document.write('   <td width="8%" class="tdLeftItemSelected"> <a id="home" href="courses.html"><font color= "#880000"> Courses</font></a></td> ');
}else{
	document.write('   <td width="8%" class="tdLeftItemSelected"> <a id="home" href="courses.html"><font color= "#0033FF"> Courses</font></a></td> ');
}
if(urlname=="admission.html" ){
	document.write('   <td width="9%" class="tdLeftItemSelected"> <a id="home" href="admission.html"><font color= "#880000"> Admission</font></a></td> ');
}else{
	document.write('   <td width="9%" class="tdLeftItemSelected"> <a id="home" href="admission.html"> <font color= "#0033FF">Admission</font></a></td> ');
}
if(urlname=="registrationform.html" ){
	document.write('   <td width="9%" class="tdLeftItemSelected"> <a id="home" href="registrationform.html"><font color= "#880000"> Registration</font></a></td> ');
}else{
	document.write('   <td width="9%" class="tdLeftItemSelected"> <a id="home" href="registrationform.html"><font color= "#0033FF"> Registration</font></a></td> ');
}
if(urlname=="faculty.html" ){
	document.write('   <td width="12%" class="tdLeftItemSelected"> <a id="home" href="faculty.html"><font color= "#880000"> About Faculty</font></a></td> ');
}else{
	document.write('   <td width="12%" class="tdLeftItemSelected"> <a id="home" href="faculty.html"><font color= "#0033FF"> About Faculty</font></a></td> ');
}
if(urlname=="download.html" ){
	document.write('   <td width="10%" class="tdLeftItemSelected"> <a id="home" href="download.html"><font color= "#880000"> Downloads</font></a></td> ');
}else{
	document.write('   <td width="10%" class="tdLeftItemSelected"> <a id="home" href="download.html"><font color= "#0033FF"> Downloads</font></a></td> ');
}
if(urlname=="dates.html" ){
	document.write('   <td width="13%" class="tdLeftItemSelected"> <a id="home" href="dates.html"><font color= "#880000"> Important Dates</font></a></td> ');
}else{
	document.write('   <td width="13%" class="tdLeftItemSelected"> <a id="home" href="dates.html"><font color= "#0033FF"> Important Dates</font></a></td> ');
}
if(urlname=="feedbackform.html" ){
	document.write('   <td width="10%" class="tdLeftItemSelected"> <a id="home" href="feedbackform.html"><font color= "#880000"> Feedback</font></a></td> ');
}else{
	document.write('   <td width="10%" class="tdLeftItemSelected"> <a id="home" href="feedbackform.html"> <font color= "#0033FF">Feedback</font></a></td> ');
}
if(urlname=="sitemap.html" ){
	document.write('   <td width="10%" class="tdLeftItemSelected"> <a id="home" href="sitemap.html"><font color= "#880000"> Site Map</font></a></td> ');
}else{
	document.write('   <td width="10%" class="tdLeftItemSelected"> <a id="home" href="sitemap.html"> <font color= "#0033FF">Site Map</font></a></td> ');
}
if(urlname=="contactus.html" ){
	document.write('   <td width="11%" class="tdLeftItemSelected"> <a id="home" href="contactus.html"><font color= "#880000"> Contact Us</font></a></td> ');
}else{
	document.write('   <td width="11%" class="tdLeftItemSelected"> <a id="home" href="contactus.html"><font color= "#0033FF"> Contact Us</font></a></td> ');
}
document.write(' </table> ');
document.write(' </td> ');
document.write(' </tr> ');
document.write(' </table> ');

