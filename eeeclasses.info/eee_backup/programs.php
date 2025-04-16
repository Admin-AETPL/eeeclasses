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
       <?php $page="programs"; include("phpf/top_nav.php");?>
    </div>
    <br class="blank" />
  </div>
  
</div>
<div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
          <span class="welcome_text">Programs</span><br />            
            <span style="line-height:18px;"><span class="green_text">Ideal method of preparing:</span>In all the examinations problem solving required,
			<ul>
			<li>Understanding of common conceptions</li>
			<li>Knowing common misconceptions</li>
			<li>How to apply the concepts to a problem?</li>
			</ul>
<span class="green_text">Our Approach:</span> We believe that our approach is the correct way of preparing of examinations. Some of the strong points of Point of E-education are:<br />
			<ul>
			<li>E-education contains an ideal-way-of-learning</li>
			<li>It requires you to ideal-only the portions that you are weak in.</li>
			<li>It is prepared by people who have taught the subject.</li>
			</ul>
			</span>  
          <p class="busniess_text">Our programs<br />
            <span class="busniess_area_text">e-Edge Education offers competative and academic programme aimed at students of the classes 7th, 8th, 9th and 10th and so on. This programme focuses on strengthening the student's conceptual clarity of the fundamentals in Mathematics, Physics and Chemistry. </span></p>
          <div class="watch_main_wrap">
            <div class="watch_wrap"><img src="images/pic11.jpg" alt="" /></div>
            <div class="watch_wrap1">
              <p><span><a href="#" class="nulla">Competative Classes</a></span><br />
                <br />
                <span style="line-height:18px;">e-Edge Education offers a comprehensive training programme to help students prepare for Competative exams of engineering (IIT-JEE, AIEEE,UPTECH), medical(AIPMT, AIIMS)..... </span><br />
                <br />
                <span><a href="#" class="read_more">Read more</a></span></p>
            </div>
            <br class="blank" />
          </div>
          <div class="watch_main_wrap">
            <div class="watch_wrap"><img src="images/pic2.png" alt="" /></div>
            <div class="watch_wrap1">
              <p><span><a href="#" class="nulla">Academic Classes</a></span><br />
                <br />
                <span style="line-height:18px;">e-Edge Education offers a coaching programme to help students prepare for academic exams of VII, VIII, IX, X, XI and XII...</span><br />
                <br />
                <span><a href="#" class="read_more">Read more</a></span></p>
            </div>
            <br class="blank" />
          </div>
        </div>
      </div>
    </div>
	<div class='right_body_wrap'>
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
