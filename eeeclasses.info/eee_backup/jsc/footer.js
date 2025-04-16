var dd = window.location; 
dd=dd.toString(); 
var dd_array= dd.split("/");
var urlname=dd_array[dd_array.length-1];

document.write(' <table border="0" cellpadding="0" cellspacing="1" align="right"><tr bgcolor="#a080aa"> ');
document.write(' <td align="center"> <a id="lnkftr" href="index.php"> Home&nbsp;||&nbsp;</a></td> ');
/*document.write(' <td align="center"> <a id="lnkftr" href="undercons.php"> Courses&nbsp;||&nbsp;</a></td> ');
document.write(' <td align="center"> <a id="lnkftr" href="undercons.php"> Admission&nbsp;||&nbsp;</a></td> ');
document.write(' <td align="center"> <a id="lnkftr" href="registration.php"> Registration&nbsp;||&nbsp;</a></td> ');
document.write(' <td align="center"> <a id="lnkftr" href="teachers.php"> About Faculty&nbsp;||&nbsp;</a></td> ');
document.write(' <td align="center"> <a id="lnkftr" href="album.php"> Photo Gallery&nbsp;||&nbsp;</a></td> ');*/
document.write(' <td align="center"> <a id="lnkftr" href="feedback.php"> Feedback&nbsp;||&nbsp;</a></td> ');
document.write(' <td align="center"> <a id="lnkftr" href="sitemap.php"> Site Map &nbsp;||&nbsp;</a></td> ');
document.write(' <td align="center"> <a id="lnkftr" href="contactus.php"> Contact Us </a></td> ');
document.write('<td align="right"><p  style="font-size:8pt; color: #000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Developed & Supported by: <a href="http://www.aurateknology-inc.org/">AURA Teknology Inc </a></p></td>');
document.write('</tr> </table> ');


