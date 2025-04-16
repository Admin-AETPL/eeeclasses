<script language="javascript" type="text/javascript">

<!--
//To check phone no is numeric or not
function IsNumeric(sText)

{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   
 }

function frm_validation( )
{
	valid = true;
	var email = document.eeecregisteration.textfield13.value;
	var phone = document.eeecregisteration.textfield17.value;
	var pin = document.eeecregisteration.textfield16.value;
	
	if(document.eeecregisteration.textfield.value ==""){
		alert ( "First name can not be blank" );
		document.eeecregisteration.textfield.focus();
        	valid = false;
	}

	if ((email.indexOf("@")==-1 ||email.indexOf(".")==-1 || email.indexOf(" ")!=-1 || email.length<6) && valid==true)
	{
		alert("Sorry, this email address is not valid");
		document.eeecregisteration.textfield13.focus();
		valid = false;
	}	
	if ( (phone == "" ||  phone.length<10 || !IsNumeric(phone) ) && valid==true )
    	{
        	alert ( "Invalid phone no" );
        	valid = false;
    	}
	if ( (pin == "" ||  pin.length!=6 || !IsNumeric(pin) ) && valid==true )
    	{
        	alert ( "Invalid PIN no" );
		document.eeecregisteration.textfield16.focus();
        	valid = false;
    	}
	if( (parseFloat(document.eeecregisteration.textfield6.value) > 100 ||parseFloat(document.eeecregisteration.textfield7.value) > 100 ||parseFloat(document.eeecregisteration.textfield8.value) > 100 ||parseFloat(document.eeecregisteration.textfield9.value) > 100 ||parseFloat(document.eeecregisteration.textfield10.value) > 100 )&& valid==true){
		alert ( "Wrong Percentage" );
		document.eeecregisteration.textfield6.focus();
        	valid = false;
	}
	

    return valid;
}

//-->
</script>

<?php
if (isset($_POST['submit'])) {
	include ('confrm_reg.php');
}
?>


<html>
<head>
<title>e-Edge Education</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<link href="css/simpleTicker.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/scriptbreaker-multiple-accordion-1.js"></script>
<script language="JavaScript">

$(document).ready(function() {
	$(".rt_nav").accordion({
		accordion:false,
		speed: 500,
		closedSign: '[+]',
		openedSign: '[-]'
	});
});

</script>
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
	<?php $page="Fee Structure";;include("phpf/top_nav.php");?>
     
    </div>
    <br class="blank" />
  </div>

  
  <div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
		 <p style="background:url(images/ExamResult.png) 0 0 no-repeat;"><span class="welcome_text">Registration Form</span><br />
            <br />
            <table class="zebra">

 <!-- make the changes from here  -->
   
    <tr>
    <td>
		<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="eeecregisteration" onsubmit= "return frm_validation();">
    	<table border="0" cellpadding="0" cellspacing="1" width="98%" align="center" bgcolor="#336699" > 
	<tr valign="top"> 
	<td bgcolor="#ffffff">

		<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" bgcolor="#F2F2F2" >
		<tr>
			<td colspan="2" class="tdItemhead">
	   			<font color="#FF6600" size="2" ><strong><p>All fields marked with * are required.</p></strong></font>
    		</td>
		</tr>
		<tr>
		    <td colspan="2" class="tdItemhead">
				<font color="#CC0000" size="2"><strong><p>Personal Information</p></strong></font>
            </td>
		</tr>
	    <tr> 
              <td colspan="3" class="tdItemhead"><b>Candidate Name</b></td>
        </tr>
		<tr> 
              <td width="30%" valign="top" align="left" class="tdItemhead">First Name<font color="#FF0000">*</font></td>
              <td class="tdItem" class="tdItem"><input name="textfield" type="text" class="form1" size="30"></td>
	    </tr>
		<td width="30%" valign="top" align="left" class="tdItemhead">Last Name </td>
                  <td class="tdItem"  class="tdItem"><input name="textfield1" type="text" size="30"> 
                  </td>
                 </tr>
                <tr> 
                  <td colspan="3" class="tdItemhead"><b>Father's Name </b></td>
                </tr>
                <tr> 
                  <td width="30%" valign="top" align="left" class="tdItemhead">First Name<font color="#FF0000">*</font></td>
                    <td class="tdItem" class="tdItem"><input name="textfield2" type="text" class="form1" size="30"> 
                  </td>
	        </tr>
		<td width="30%" valign="top" align="left" class="tdItemhead">Last Name </td>
                    <td class="tdItem" class="tdItem"><input name="textfield3" type="text" size="30"> 
                  </td>
                 </tr>
		<tr> 
                <td class="tdItemhead"><b>Mother's Name   </b>
	        </td>
		    <td class="tdItem"  class="tdItem"><input name="textfield4" type="text" class="form1" size="30"> 
                  </td>
               </tr>
		<tr> 
                  <td class="tdItemhead"><b>DOB </b>[DD-MM-YYYY]</td>
                  <td colspan="2" class="tdItem"> 
                    <select name="select" >
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                    </select>
                    <select name="select1" class="form1">
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select> 
                    <select name="select2">
                      <option>1980</option>
                      <option>1981</option>
                      <option>1982</option>
                      <option>1983</option>
                      <option>1984</option>
                      <option>1985</option>
                      <option>1986</option>
                      <option>1987</option>
                      <option>1988</option>
                      <option>1989</option>
                      <option>1990</option>
                      <option>1991</option>
                      <option>1992</option>
                      <option>1993</option>
                      <option>1994</option>
                      <option>1995</option>
        
            </select> <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>
                </tr>
		<tr>
		<td class="tdItemhead"><b>Gender </b></td>
	 	<td colspan="2" class="tdItem">
                <select name="select3">
				
           	<option>Male</option>                      
          	 <option>Female</option>
        	 </select></td>
		</tr>
        <tr> 
             <td class="tdItemhead"><b>Class </b></td>
             <td colspan="2" class="tdItem">
			 	<select name="select4" >
					<option>8th</option>
					<option>9th</option>
		      		<option>10th</option>
                    <option>11th</option>
                    <option>12th</option>
				</select>
				<select name="select5" >
				   <option>Appearing</option>
 				   <option>Passed</option>
				</select>
	 Year       <select name="select6">
          			<option>2003</option>                      
           			<option>2004</option>
          			<option>2005</option>
           			<option>2006</option>
           			<option>2007</option>
           			<option>2008</option>
           			<option>2009</option>
         		</select>
          <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>

			<td><br>(Select Your Class & Appeared/Appearing Year)</td>

                </tr>
		 <tr> 
                  <td class="tdItemhead"><b>Email ID<font color="#FF0000">*</font></b></td>
                  <td colspan="2" class="tdItem" class="tdItem"><input name="textfield13" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial, sans-serif"></font></strong></font> 
                  </td>

                </tr>
		<tr> 
                  <td class="tdItemhead"><b>Phone/Mobile<font color="#FF0000">*</font></b></td>

                  <td colspan="2"  class="tdItem"><input name="textfield17" type="text" class="form1" size="30"><br> (e.g. Delhi: (011)22334455, Ghaziabad: (0120)2233445)
                  </td>
                </tr>
		<tr> 
                  <td class="tdItemhead"><b>Address </b></td>
                  <td colspan="2" class="tdItem" class="tdItem"><input name="textfield14" type="text" class="form1" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font> 
                  </td>
                </tr>
                  <td class="tdItemhead"><b>City </b></td>
                  <td colspan="2"  class="tdItem"><input name="textfield15" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font> 
                  </td>

                </tr>
                <tr> 
                  <td class="tdItemhead"><b>Pin</b></td>
                  <td colspan="2"  class="tdItem"><input name="textfield16" type="text" size="30"> 
                    <br><br>
                  </td>
                </tr>
		</table>
	</td>
	</tr>
	</table>
	<br>
	<table border="0" cellpadding="0" cellspacing="1" width="98%" align="center" bgcolor="#336699" > 
	<tr valign="top"> 
	<td bgcolor="#ffffff">

		<table border="0" cellpadding="0" cellspacing="0" width="100%" align="left" bgcolor="#F2F2F2" >

		<tr> 
			<td colspan="2" class="tdItemhead">
				<font color="#CC0000" size="2"><strong><p>Academic details</p></strong></font>
            </td>
        </tr>
		<tr> 
                  <td class="tdItemhead"><b>Physics % </b></td>
                  <td colspan="2" class="tdItem"  class="tdItem"><input name="textfield6" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>
                </tr>
<tr> 
                  <td class="tdItemhead"><b>Chemistry % </b></td>
                  <td colspan="2" class="tdItem"  class="tdItem"><input name="textfield7" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>
                </tr>
<tr> 
                  <td class="tdItemhead" ><b>Mathematics % </b></td>
                  <td colspan="2"  class="tdItem"><input name="textfield8" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>
		<td class="tdItem">(for Engineering Students only)</td>
                </tr>

		  <tr> 
                  <td class="tdItemhead"><b>Biology % </b></td>
                  <td colspan="2"  class="tdItem"><input name="textfield9" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>
		<td class="tdItem">(for Medical Students only)</td>
                </tr>

		 <tr> 
                  <td width="22%" class="tdItemhead"><b>% of Marks obtained </b></td>
                  <td colspan="2"  class="tdItem"><input name="textfield10" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font></td>
		<td class="tdItem">
			(if you are appear for class IX/X/XI/XII then previous class % )
		 </td>
                </tr>

		<tr> 
                  <td class="tdItemhead"><b>Name of School</b></td>
                  <td colspan="2"  class="tdItem"><input name="textfield11" type="text" size="30"> 
                    <font size="2"><strong><font color="#FF6600" size="3" face="Geneva, Arial,sans-serif"></font></strong></font>
				  </td>
		<td colspan="3" class="tdItem">
			(from where you are Passed/Appearing for class IX/X/XI/XII)
		 </td>
                </tr>
		  <tr> 
              <td class="tdItemhead"><b>Board Name </b></td>
              <td colspan="2" class="tdItem">
 		     	 <select name="select7">
		       		<option>UP</option>                      
		       		<option>CBSE/ICSE</option>
                    <option>Other</option>
                 </select>
              </td>
         </tr>
		 <tr> 
             <td class="tdItemhead"><b>Name of Program<font color="#FF0000">*</font></b></td>
             <td colspan="2" class="tdItem">  
                 <select name="select8">
		       		<option>Engineering</option>                      
		       		<option>Medical</option>
                    <option>Other</option>
                 </select><br><br>
		
		</td>
	        </tr>
		<tr><td></td>
		<td class="tdItem">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><input type="submit" value="submit" name="submit"></center><br><br>
		</td></tr>
		</table>
	</td>
	</tr>
	</table>
	</form>
    </td>
    </tr>
    </table><br><br>
 <!--up to here make the changes -->
 
 	</p>
          
        </div>
      </div>
    </div>
<!-- bottom menu row -->
  <div class="right_body_wrap">
      <?php $page="Fee Structure";include("phpf/right_nav.php");?>	  
      </div>
	</div>
    <br class="blank" />
  </div>
</div>
<div class="footer_wrap">
  <?php $page="Fee Structure";include("phpf/footer_nav.php");?>
</div>
</body>
</html>>
