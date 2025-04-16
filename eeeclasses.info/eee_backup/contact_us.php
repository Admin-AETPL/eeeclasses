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
      <?php $page="contact_us"; include("phpf/top_nav.php");?>
    </div>
    <br class="blank" />
  </div>
  
</div>
<div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
          <div class="watch_main_wrap">
            <div class="watch_wrap"><img src="images/address_icon.png" alt="" style="width:100px;height:100px;"/></div>
            <div class="watch_wrap1">
              <p><span><a href="#" class="nulla">Address</a></span><br />
                <br />
                <span style="line-height:18px;">
				e-Edge Education Centre<br /> 
				4/469 GF, Sector-4, Vaishali<br /> 
				Ghaziabad , U.P. , India.<br />
				Phone No.- +91-7042280775, +91-9818949775<br />
				Email : -  eeeclasses.vaishali@gmail.com <br />
				</span><br />
                <br />
                </p>
            </div>
            <br class="blank" />
          </div>
		  
		 
          
		  		  <div class="watch_main_wrap">
            <div class="watch_wrap"><img src="images/email_us.png" alt="" style="width:100px;height:100px;"/></div>
            <div class="watch_wrap1">
              <p><span><a href="#" class="nulla">Mail Us</a></span><br />
                <br />
                <span style="line-height:18px;">
Registration registration@eeeclasses.info<br />
Courses courses@eeeclasses.info<br />
Feedback feedback@eeeclasses.info<br />
Admission admission@eeeclasses.info<br />
				</span><br />
                <br />
                </p>
            </div>
            <br class="blank" />
          </div>
          
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
  <?php $page = 'contact_us'; include("phpf/footer_nav.php"); ?>
</div>
</body>
</html>
