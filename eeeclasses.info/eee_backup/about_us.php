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
      <?php $page="about_us";include("phpf/top_nav.php");?>
    </div>
    <br class="blank" />
  </div>
  
</div>
<div class="main_area">

  <div class="body_wrap">
    <div class="left_body_wrap">
      <div class="left_body_main">
        <div class="main_wrap">
          <p style="text-align:justify"><span class="welcome_text">About Us</span><br />
            <br />
            <span style="line-height:18px;">
The e-Edge Education Classes (eee c) has been providing quality education, dedication and devotion for the success in Board exams, Engineering and Medical competitive exams. The primary focus of the e-Edge Education Classes is to enable each student to achieve success in IIT / AIEEE / DCE / UPSEAT & AIIMS / AIPMT / DPMT etc. entrance examinations and other reputed colleges for Engineering and Medical. We are providing an academic environment and a unique learning experience, that sets the difference for the students.
Writing the answer is a skill which makes the differences in the different answers of one question.The core of e-edge education classes is to trained the students for the skills and self-deriven by helping them in reducing his/her weaknesses and to make them capable of using his/her full strength. This institute covers CBSE syllabus along with Engineering / Medical entrance results into improved performance of student in their school / board examination as well as competitive examinations.

This institute believes in developing the fundamental concept in each subject. As fundamental concepts automatically increases the confidence level of student. These combinations makes student successful in the examination. Today it is difficult to find an institute which can provide a well structured study environment like faculty, study material, and reliability etc.

			</span>          
          <p class="busniess_text">Vision:<br />
            <br />
            <span class="busniess_area_text">
An acknowledged temple of learning, which generates, creates and supports positive, innovative and competitive learning experience to facilitate outstanding managerial performance.

<span class="green_right">To prepare business leaders and entrepreneurs to stand up to global competition.</span>

<span class="green_right">To foster academic-industry/professional synergies and to forge strategic alliances for greater upward mobility</span>

<span class="green_right">To import need based education and create an ethos for research of relevance</span>

<span class="green_right">To contribute to social and industrial development of the region</span>
			</span></p>
          <p class="busniess_text">Mision:<br />
            <br />
            <span class="busniess_area_text">
 
To Serve the Society and enhance the quality of through excellence and leadership in professionally relevant Education as an academic community which is out word looking and committed to innovation and life long learning.

To develop human potential to its fullest extent so that intellectually capable and imaginatively gifted leaders can emerge in a range of professions.

			</span></p>
          
          
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
  <?php $page = 'about_us'; include("phpf/footer_nav.php"); ?>
</div>
</body>
</html>
