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
          <p><span class="welcome_text">EEE Maths X. SA-II. Concept Capsules</span><br />
            
            <br />
           <span style="width:350px;float:left">
            <span><a href="#" class="math_capsule">EEE-CONCEPT CAPSULE (QUADRATIC EQUATIONS)</a></span><br />
			<span><a href="#" class="math_capsule">EEE-CONCEPT CAPSULE(APPLICATIONS OF TRIGONOMETRY)</a></span><br />
			<span><a href="#" class="math_capsule">EEE-CONCEPT CAPSULE(AREAS RELATED TO CIRCLES)</a></span><br />
			<span><a href="#" class="math_capsule">EEE-CONCEPT CAPSULE(CIRCLES)</a></span><br />
			<span><a href="#" class="math_capsule">EEE- CONCEPT CAPSULE(CONSTRUCTIONS)</a></span><br />
			<span><a href="#" class="math_capsule">EEE-CONCEPT CAPSULE(CO-ORDINATE GEOMETRY)</a></span><br />
			<span><a href="#" class="math_capsule">EEE-CONCEPT CAPSULE( SURFACE AREAS AND VOLUMES)</a></span><br />
			</span>
			<span style="width:300px;float:right">
			 <span><a href="#" class="result_lnk">QUADRATIC EQUATIONS</a></span><br />
			<span><a href="#" class="result_lnk">APPLICATIONS OF TRIGONOMETRY</a></span><br />
			<span><a href="#" class="result_lnk">AREAS RELATED TO CIRCLES</a></span><br />
			<span><a href="#" class="result_lnk">CIRCLES</a></span><br />
			<span><a href="#" class="result_lnk">CONSTRUCTIONS</a></span><br />
			<span><a href="#" class="result_lnk">CO-ORDINATE GEOMETRY</a></span><br />
			<span><a href="#" class="result_lnk">SURFACE AREAS AND VOLUMES</a></span><br />
			</span>
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
