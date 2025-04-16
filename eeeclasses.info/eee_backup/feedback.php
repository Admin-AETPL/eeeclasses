<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
     <?php $page="Fee Structure";include("phpf/top_nav.php");?>
    </div>
    <br class="blank" />
  </div>
  
</div>

<div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
          <p style="background:url(images/ExamResult.png) no-repeat;"><span class="welcome_text">Feedback</span><br />
            <br />
 
		<form  method="POST" action="sendfeedback2.php"  name="feedbackfrm" onSubmit="return validate_frm();">
		<table border="0" cellpadding="0" cellspacing="1" width="100%" align="left" bgcolor="#F2F2F2">
	<tr>
	
	 <td colspan="2" class="tdItemhead">
	   <font color="#FF6600" size="2" ><strong><p>All fields marked with * are required.</p></strong></font>
     </td>
	</tr>
			<tr>
              <td width="30%" valign="top" align="left" class="tdItemhead"><b>Name<font color="#FF0000">*</font></b></td>
              <td width="70%" valign="top" align="left" class="tdItem"><input type="text" name="name" size="30" value=""></td>
            </tr>
			
			<tr>
              <td width="30%" valign="top" align="left" class="tdItemhead" ><b>Address<font color="#FF0000">*</font>

			</b></td>
              <td width="70%" valign="top" align="left" class="tdItem"><textarea  rows="6" name="feedback" cols="40"></textarea></td>
           </tr>
	      <tr>
              <td width="30%" valign="top" align="left" class="tdItemhead"><b>City<font color="#FF0000">*</font></b></td>
              <td width="70%" valign="top" align="left" class="tdItem"><input type="text"  name="city" size="30"></td>
            </tr>
			
		  <tr>
              <td width="30%" valign="top" align="left" class="tdItemhead"><b>E-mail<font color="#FF0000">*</font></b></td>
              <td width="70%" valign="top" align="left" class="tdItem"><input type="text" name="email" size="30" value=""></td>
            </tr>
          <tr>
              <td width="30%" valign="top" align="left" class="tdItemhead"><b>Phone<font color="#FF0000">*</font></b></td>
              <td width="70%" valign="top" align="left" class="tdItem"><input type="text"  name="ph" size="30"></td>
          </tr>
            
          <tr>
              <td width="30%" valign="top" align="left" class="tdItemhead"><b>Feedback About<font color="#FF0000">*</font></b></td>
              <td width="70%" valign="top" align="left" class="tdItem">
              <select name="feedbackabout" size="1">
                <option value="Other" SELECTED>Select Type</option>
 		    	<option value="Courses">Courses</option>
		    	<option value="Faculty">Faculty</option>
                <option value="Fee">Fee Structure</option>
		    	<option value="other">Other</option>
              </select></td>
          </tr>
	     <tr>
              <td width="30%" valign="top" align="left" class="tdItemhead" ><b>Message /  Query<font color="#FF0000">*</font></b></td>
              <td width="70%" valign="top" align="left" class="tdItem"><textarea  rows="6" name="feedback" cols="40"></textarea></td>
         </tr>
	     <tr >
		 <td></td><td class="tdItem" ><br><INPUT type="submit" value="Submit" name=submit height="10"><br><br></td>
        </tr>
		</table>
</form>
	        
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
