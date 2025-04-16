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
      <?php $page="result"; include("phpf/top_nav.php");?>
    </div>
    <br class="blank" />
  </div>
  
</div>
<div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
          <p style="background:url(images/ExamResult.png) 0 0 no-repeat;"><span class="welcome_text">Result</span><br />
            <br />
            <span class="green_text">Result of PRE NTSE Exam 2014-2015 Conducted by e-Edge Education Centre
AT
St. Thomas School, Indirapuram (Exam. Conducted on "26.08.2014")
St. Francis School, Indirapuram (Exam. Conducted on "17.10.2014")
Sun Valley International School,Vaishali(Exam. Conducted on "2.9.2014")</span><br />
            <br />
           
            <span><a href="#" class="result_lnk">Result of St. Thomas School for Class-X</a></span><br />
			<span><a href="#" class="result_lnk">Result of St. Thomas School for Class-IX</a></span><br />
			<span><a href="#" class="result_lnk">Result of St. Francis School for Class-X</a></span><br />
			<span><a href="#" class="result_lnk">Result of St. Francis School for Class-IX</a></span><br />
			<span><a href="#" class="result_lnk">Result of Sun Valley International School for Class-X</a></span><br />
			<span><a href="#" class="result_lnk">Result of Sun Valley International School for Class-IX</a></span><br />
			</p>
          
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
