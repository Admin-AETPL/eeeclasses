<?php 

$subject = "FEEDBACK INFORMATION ! ".$_POST["feedbackabout"];

$fname = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["ph"];
$city = $_POST["city"];
$feedbak = $_POST["feedback"];


$to = $email;
$pagebody='<strong>Dear '.$fname.'</strong>, <br>  <p><font size="2"> Check your mail. Your feedback is send to authorired person. For your suggetion  we will soon get in touch with you.</p><br><br><p>If you want a direct contect We are </p> <br>Mr. Nitin Kumar  <br> +91-9818949775, +91-9868519631,<br>feedback@eeeclasses.info</font>';
echo($pagebody);

?>

