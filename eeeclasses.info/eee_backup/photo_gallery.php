<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Edge Education</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<link href="css/simpleTicker.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/photo_gallery.js"></script>
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
          <p style="background:url(images/ExamResult.png) no-repeat;"><span class="welcome_text">Photo Gallery</span><br />
            <br />
            
			<ul id="photo_gallery">
				<li><a href="photos/02f.jpg" class="preview"><img src="photos/02f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/1f.jpg" class="preview"><img src="photos/1f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/2f.jpg" class="preview"><img src="photos/2f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/3f.jpg" class="preview"><img src="photos/3f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/1f.jpg" class="preview"><img src="photos/1f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/2f.jpg" class="preview"><img src="photos/2f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/3f.jpg" class="preview"><img src="photos/3f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/1f.jpg" class="preview"><img src="photos/1f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/2f.jpg" class="preview"><img src="photos/2f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/3f.jpg" class="preview"><img src="photos/3f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/1f.jpg" class="preview"><img src="photos/1f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/2f.jpg" class="preview"><img src="photos/2f.jpg" alt="gallery thumbnail" /></a></li>
				<li><a href="photos/3f.jpg" class="preview"><img src="photos/3f.jpg" alt="gallery thumbnail" /></a></li>
				
				
				
			
			</ul>
			
			
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
