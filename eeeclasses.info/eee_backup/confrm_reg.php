<?php
//include ('registration.php');
$subject = "Registration";


$fnameC = $_POST["textfield"];
$lnameC = $_POST["textfield1"];
$fnameF = $_POST["textfield2"];
$lnameF = $_POST["textfield3"];
$nameM = $_POST["textfield4"];

$dd = $_POST["select"];
$mm = $_POST["select1"];
$yy = $_POST["select2"];

$gender = $_POST["select3"];
$class = $_POST["select4"];
$status = $_POST["select5"];
$year = $_POST["select6"];
$email = $_POST["textfield13"];
$phone = $_POST["textfield17"];
$add = $_POST["textfield14"];
$city = $_POST["textfield15"];
$pin = $_POST["textfield16"];
$physics = $_POST["textfield6"];
$chemistry = $_POST["textfield7"];
$maths = $_POST["textfield8"];
$bio = $_POST["textfield9"];
$total = $_POST["textfield10"];

$nameschool = $_POST["textfield11"];
$board = $_POST["select7"];
$program = $_POST["select8"];

$to = $email;

// Mail to new registered user
$userbody ='Dear'.$fname."\n\n";
$userbody .='Thanks for registring with EEEC. Your request is send to authorired person. We will soon get in touch with you. If you need the fast track you can contact us at:'."\n\n";
$userbody .="\n".'Ph +91-9818949775'."\n"."www.eeeclasses.info/contactus.php";
$userbody .="\n\n".'Do not Reply to the mail.'."\n\n";

mail($to, $subject, $userbody);

// Mail to ATI
$body = 'Request for Registration. Please check the following information:'."\n\n"; 
$body .= "CodidateNAME: ".$fnameC ." ".$lnameC ."\n GENDER: ".$gender ."\n EMAIL ID: ".$email ."\n PHONE No: ".$phone ."\n ADDRESS: ".$add ."\n CITY: ".$city."\n PIN: ".$pin."\n Class: ".$class." ".$status." ".$year."\n Physics: ".$physics."%\n Chemistry: ".$chemistry."%\n Maths: ".$maths."%\n Biology: ".$bio."%\n Total: ".$total."%\n School: ".$nameschool."\n Board: ".$board."\n Program: ".$program;

$body .= "\n\n".'To get the password login as administrator at'."\n".'http://www.aurateknology-inc.org/uplod.php'."\n\n";
$to = "pkumar@eeeclasses.info";
$cc= "pawan@aurateknology-inc.org";
if (mail($to, $subject, $body)) {
?>
<script type="text/javascript">
<!--
alert('Thanks for registration Check your mail.'+"\n"+' Your request is send to authorired person. We will contact you soon.'+"\n"+'The following message is also sent to your mail ID.')
//-->
</script>
<?php	  
	 } else {
	  echo("<p>Registration Failed...</p>");
	}
mail($cc, $subject, $body)

?>
