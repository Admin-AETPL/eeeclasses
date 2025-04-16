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
	
	//Set default open/close settings
$('.acc_container').hide(); //Hide/close all containers
$('.acc_trigger:first').addClass('active').next().show(); //Add "active" class to first trigger, then show/open the immediate next container

//On Click
$('.acc_trigger').click(function(){
	if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
		$('.acc_trigger').removeClass('active').next().slideUp(); //Remove all .acc_trigger classes and slide up the immediate next container
		$(this).toggleClass('active').next().slideDown(); //Add .acc_trigger class to clicked trigger and slide down the immediate next container
	}
	return false; //Prevent the browser jump to the link anchor
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
          <p style="background:url(images/ExamResult.png) 0 0 no-repeat;"><span class="welcome_text">Test</span><br />
            <br />
            
			<div class="container">

	<h2 class="acc_trigger"><a href="#">Test Schedule</a></h2>
	<div class="acc_container">
		<div class="block">
			<table class="bordered">
              <tr>
                <th colspan="10">Test Schedule</th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Class</th>
                <th>Subject</th>
                <th>Topic</th>
                <th>Type of Questions</th>
                <th>Duration</th>            
              </tr>
              <tr>
                <td>-- </td>
                <td>--</td>
                <td>IX,X</td>
                <td>Science(PCB)</td>
                <td>All topic covered in EEE</td>
                <td>CBSE + MCQ Pattern</td>
                <td>3 Hours</td>
              </tr>
              <tr>
                <td>-- </td>
                <td>--</td>
                <td>XI &amp; XII</td>
                <td>Phy</td>
                <td>All topic covered in EEE</td>
                <td>CBSE + MCQ Pattern</td>
                <td>3 Hours</td>
               
              </tr>
              <tr>
                <td>-- </td>
                <td>--</td>
                <td>XII</td>
                <td>Maths &amp; Phy</td>
                <td>All topic covered in EEE</td>
                <td>CBSE + MCQ Pattern</td>
                <td>1.30+1.30 Hours</td>

              </tr>
              <tr>
                <td>-- </td>
                <td>--</td>
                <td>VII, VIII,IX &amp; X</td>
                <td>Randon Test<br />
                  Any Topic &amp; Any Sub</td>
                <td>All topic covered in EEE</td>
                <td>CBSE + MCQ Pattern</td>
                <td>1 Hours</td>
    
              </tr>
              <tr>
                <td colspan="10">Students are requested to collect    related Question paper from EEE Centre for the latest school exam &amp;    summit answer sheet to EEE for correction and take remedial class.</td>
              </tr>
            </table>
		</div>
	</div>
	
	<h2 class="acc_trigger"><a href="#">Test Paper and Result</a></h2>
	<div class="acc_container">
		<div class="block">
			<table class="bordered">
              <tr>
                <th colspan="6">Test Papers &amp;    Results of 15-07-2012</th>
              </tr>
              <tr>
                <th>Class</th>
                <th>Subject</th>
                <th>Topic</th>
                <th>Level</th>
                <th>Test Paper</th>
                <th>Result</th>
              </tr>
              <tr>
                <td>XII A &amp; M </td>
                <td>Physics</td>
                <td>Wave Optics,Ray Optics-optical    instruments only and Dual nature,Atom and Nucleus</td>
                <td>CBSE</td>
                <td><a href="http://eeeclasses.info/Test_papers/22-11-2009/XII%20A%20&amp;M%20Physics.pdf" target="_blank">Available</a></td>
                <td>Awaited</td>
              </tr>
              <tr>
                <td>XII B </td>
                <td>Physics</td>
                <td>Ray Optics, Wave Optics</td>
                <td>CBSE</td>
                <td><a href="http://eeeclasses.info/Test_papers/08-11-2009/XII-%20B%20Phy.pdf" target="_blank">Available</a></td>
                <td>Awaited</td>
              </tr>
              <tr>
                <td>XI </td>
                <td>Maths</td>
                <td>Chapter 1 to 11</td>
                <td>AIEEE</td>
                <td><a href="http://eeeclasses.info/Test_papers/22-11-2009/XI%20Maths.pdf" target="_blank">Available</a></td>
                <td>Awaited</td>
              </tr>
              <tr>
                <td>IX </td>
                <td>Maths</td>
                <td>Whole syllabus</td>
                <td>CBSE</td>
                <td><a href="http://eeeclasses.info/Test_papers/22-11-2009/IX%20Maths%20.pdf" target="_blank">Available</a></td>
                <td>Awaited</td>
              </tr>
              <tr>
                <td>X </td>
                <td>Maths</td>
                <td>Whole syllabus</td>
                <td>CBSE</td>
                <td><a href="http://eeeclasses.info/Test_papers/22-11-2009/X%20Maths.pdf" target="_blank">Available</a></td>
                <td>Awaited</td>
              </tr>
            </table>
		</div>
	</div>
	
	
	<h2 class="acc_trigger"><a href="#">Test Paper and Result ( Older )</a></h2>
	<div class="acc_container">
		<div class="block">
			
			<table class="bordered">
                    <tr>
                      <th colspan="6">Test Papers &amp; Results of 01-11-2009</th>
                    </tr>
                    <tr>
                      <th>Class</th>
                      <th>Subject</th>
                      <th>Topic</th>
                      <th>Level</th>
                      <th>Test Paper</th>
                      <th>Result</th>
                    </tr>
                    <tr>
                      <td>XII</td>
                      <td>Chemistry</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/chemistry_xii_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                    <tr>
                      <td>XI A</td>
                      <td>Maths</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Math_xi_a_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td><a href="http://eeeclasses.info/results/01-11-2009/XI_MATHS_MCQ.xls">Available</a></td>
                    </tr>
                    <tr>
                      <td>XI B</td>
                      <td>Maths</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Math_xi_b_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                    <tr>
                      <td>X</td>
                      <td>Maths</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Math_x_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td><a href="http://eeeclasses.info/results/01-11-2009/X_Maths.xls">Available</a></td>
                    </tr>
                    <tr>
                      <td>XII A</td>
                      <td>Physics</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Physics_xii_a_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                    <tr>
                      <td>XII B</td>
                      <td>physics</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Physics_xii_b_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                    <tr>
                      <td>XI</td>
                      <td>physics</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Physics_xi_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                    <tr>
                      <td>X</td>
                      <td>Science</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Science_x_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                    <tr>
                      <td>IX</td>
                      <td>Science</td>
                      <td></td>
                      <td></td>
                      <td><a href="http://eeeclasses.info/Test_papers/1-11-2009/Science_ix_1-11-2009.pdf" target="_blank">Available</a></td>
                      <td>Awaited</td>
                    </tr>
                </table>
		</div>
	</div>
</div>
			
			
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
