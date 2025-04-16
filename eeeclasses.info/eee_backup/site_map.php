<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Edge Education</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<link href="css/simpleTicker.css" rel="stylesheet" type="text/css" />
<link href="css/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/sitemapstyler.js"></script>
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
          <p style="text-align:justify"><span class="welcome_text">Contact Us</span><br />
            <br />
            <span style="line-height:18px;">	
			<ul id="sitemap">			
			<li><a href="index.html" >Home</a></li>
			  <li><a href="about_us.html">About Us</a></li>
			  <li><a href="programs.html" >Programs</a>
		  		<ul>
				<li><a href="#">Competative Classes</a>
					<ul>
						 <li><a href="#">Engineering</a>
							<ul>
								<li><a href="#">IIT-JEE</a>
									<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									</ul>					
								</li>
								
								<li><a href="#">AIEEE</a>
									<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									</ul>					
								</li>
								<li><a href="#">UPTECH</a>
									<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									</ul>					
								</li>
							</ul>
						</li>
						
						
						<li><a href="#">Medical</a>
							<ul>
								<li><a href="#">AIPMT</a>
									<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									</ul>					
								</li>
								
								<li><a href="#">AIIMS</a>
									<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									</ul>					
								</li>					
							</ul>
						</li>			 
					</ul>
				</li>
				
				<li><a href="#">Academic Classes</a>
					<ul>
						 <li><a href="#">VII</a>
							<ul>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Science</a></li>
									<li><a href="#">Analytical Reasoning</a></li>
							</ul>
						</li>
						<li><a href="#">VIII</a>
							<ul>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Science</a></li>
									<li><a href="#">Analytical Reasoning</a></li>
							</ul>
						</li>
						<li><a href="#">IX</a>
							<ul>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Science</a></li>						
									<li><a href="#">Analytical Reasoning</a></li>
							</ul>
						</li>
						<li><a href="#">X</a>
							<ul>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Science</a></li>
									<li><a href="#">Analytical Reasoning</a></li>
							</ul>
						</li>
						<li><a href="#">IX</a>
							<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Biology</a></li>
							</ul>
						</li>
						<li><a href="#">XII</a>
							<ul>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Chemistry</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Biology</a></li>
							</ul>
						</li>		 
					</ul>
				</li>
				</ul>
		  	</li>
			  <li><a href="test.html" >Test</a></li>
			  <li><a href="result.html" >Result</a></li>
			  <li><a href="contact_us.html" >Contact Us</a></li>
			  <li><a href="advertisement.html" >Adverisement</a></li>
			  <li><a href="ntse_classes.html">NTSE Details</a></li>
			<li><a href="registration.html">Registration</a></li>
			<li><a href="fee_structure.html">Fees Structure</a></li>
			<li><a href="faculty.html">Faculty</a></li>
			<li><a href="online_test.html">Online Test</a></li>
			<li><a href="question_papers.html">Question Papers</a></li>
			<li><a href="photo_gallery.html">Photo Gallery</a></li>
			<li><a href="feedback.html">Feedback</a></li>
			</ul>
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
  <?php $page = 'site_map'; include("phpf/footer_nav.php"); ?>
</div>
</body>
</html>