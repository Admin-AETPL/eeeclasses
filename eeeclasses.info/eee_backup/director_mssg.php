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
          <div class="watch_main_wrap">
            <div class="watch_wrap"><img src="img/pkumar.jpg" alt="" style="width:100px;height:100px;"/></div>
            <div class="watch_wrap1">
              <p style="text-align:justify;"><span><a href="#" class="nulla">Mr. Pramod Kumar (Director)</a></span><br />
                <br />
                <span style="line-height:18px;">
				The technological revolution along with rapid growth and development around the world has opened new channels to masses for developing the knowledge based society. Every nation and society has to create the pool of intellectual wealth so as to capitalize upon the current demands and contextual requirements.<br />
Since its inception in 2008, the e-Edge Education centre has committed itself to excellence. It recognizes hidden potential and strengths of its students and enables them to learn, grow and evolve into successful Business Managers. The kind of atmosphere we are providing is conducive to overall personality and knowledge development with an alert focus on evolving effective, efficient, confident and knowledgeable business managers with global thinking and futuristic mindset along with an understanding of corporate ethics.<br />
The teaching pedagogy along with co-curricular activities and inbuilt monitoring mechanism at eee is specifically designed to articulate various dimensions of the strategic Key Result Areas , which guarantees an enviable confidence and alertness in our students.
In its march towards success map, we ensure every possible effort to take its alma mater to the happiest route of success and prosperity.
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
      <?php $page="Fee Structure";include("phpf/right_nav.php");?>	  
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
