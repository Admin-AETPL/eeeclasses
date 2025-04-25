<?php
session_start();
class Controller
{
    protected $homeurl = "https://eeeclasses.info/";
    protected function model($model)
    {
        require_once("../app/model/".$model.".php");
        return new $model;
    }
    protected function view($view, $title=[], $data=[], $extra=[], $more=[], $home="http://localhost/eeeclasses/eeeclasses.info/")
    {
        require_once("../app/views/" . $view . ".php");
    }
    protected function mailer($subj='',$recipient='',$msgbody='')
    {
        date_default_timezone_set('asia/calcutta');

               require_once 'class.phpmailer.php';
               $mail             = new PHPMailer();

               $body             = $msgbody;

               $mail->IsSMTP(); // telling the class to use SMTP

                $mail->SMTPAuth   = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
                $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
                $mail->Username   = "helpdesk4u123@gmail.com";  // email from google
                $mail->Password   = "akash8750256406";   // password of gmail

                $mail->SetFrom("helpdesk4u123@gmail.com", "Support Team");

                $mail->Subject    = $subj;

                $mail->MsgHTML($body);

                $address = $recipient;
                $mail->AddAddress($address);

                if(!$mail->Send())
                {
                    echo "<p>Mailer Error: " . $mail->ErrorInfo."</p>";
                }
                else
                {
                    return 1;
                }
    }   
}