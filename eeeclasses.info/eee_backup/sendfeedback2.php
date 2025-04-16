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
<?php 

require '/PHPMailerAutoload.php';

$fname = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["ph"];
$city = $_POST["city"];
$feedbak = $_POST["feedback"];


//$to = $email;
$mail = new PHPMailer;
$mail->isSMTP();   


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;  
$mail->SMTport = 587;                               // Enable SMTP authentication
$mail->Username = 'sk23dec@gmail.com';                 // SMTP username
$mail->Password = 'lifeditchedme';                           // SMTP password
$mail->SMTPSecure = 'tls'; 


$to = "auratekverma@gmail.com";
$pagebody='<strong>Dear '.$fname.'</strong>, <br>  <p><font size="2"> Check your mail. Your feedback is send to authorired person. For your suggetion  we will soon get in touch with you.</p><br><br><p>If you want a direct contect We are </p> <br>Mr. Nitin Kumar  <br> +91-9818949775, +91-9868519631,<br>feedback@eeeclasses.info</font>';
echo($pagebody);
//ini_set("SMTP","smtp.gmail.com");
// ini_set("smtp_port","587");
// ini_set("sendmail_from","sk23dec@gmail.com");
// ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
//Mail to new registered user
$userbody ='Dear '.$fname."\n\n";
$userbody .='Thakns for your feedback. We will consider your suggesion and contact you if needed:'."\n\n";
$userbody .='e-Edge Education Classes'."\n".'Ph +91-9818949775'."\n"."www.eeeclasses.info/contactus.php";
$userbody .="\n\n".'Do not Reply to the mail.'."\n\n";
$subject = 'Birthday Reminders for August';


if (mail($to, $subject, $userbody)) {
	echo('<br><font size=2">The following message is also sent to your mail ID!</font><br><br>');
} else {
  	echo("<p>Message delivery at your email is failed. Please give your valid mail ID. You can get the password through your mail.</p>");
}

// Mail to ATI<!
$body = 'FEEDBACK. Please check the following information:'."\n\n"."Subject ".$_POST["feedbackabout"]."\n\n"; 
$body .= " NAME: ".$fname ."\n EMAIL ID: ".$email ."\n PHONE No: ".$phone ."\n CITY: ".$city."\n Message: ".$feedbak."\n\n"; ;


if (mail($to, $subject, $body)) {
  echo('<p><font size="1">your Request for password forworded to ATI</font></p>');
 } else {
  echo("<p>Message delivery for password request is failed...</p>");
 } 
 
 
 ?>


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
