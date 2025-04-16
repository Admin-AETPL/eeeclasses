<?php
class Feedback extends Controller
{
    public function index()
    {
        $db=$this->model("select");
        $qry="select * from eee_feedback where status='Approved' order by feeddate desc limit 4";
        $data=$db->sel($qry);
        $this->view("includes/header", $title="EEE Classes - Provide your feedback");
        $this->view("feedback",$title='',$data);
        $this->view("includes/footer");
    }
    public function submit()
    {
        date_default_timezone_set("Asia/Kolkata");
        if(isset($_POST["feedname"]) && isset($_POST["feedmail"]) && isset($_POST["feedback"]))
        {
            $feedname=$_POST["feedname"];
            $feedmail=$_POST["feedmail"];
            $feedback=$_POST["feedback"];
            $fid=rand(100000,999999);
            $db=$this->model("nonselect");
            $qry="insert into eee_feedback(fid,feedname,feedmail,feedback,status,feeddate) values(".$fid.",'".$feedname."','".$feedmail."','".$feedback."','under review','".date("Y-m-d")."')";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Thank you for your valuable feedback 😊')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/'</script>";
            }
            else
            {
                
                echo "<script>alert('Something Went Wrong! Try Again')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/feedback'</script>";
            }
        }
    }
    public function question()
    {
        date_default_timezone_set("Asia/Kolkata");
        if(isset($_POST["feedname"]) && isset($_POST["feedmail"]) && isset($_POST["feedback"]) && isset($_POST["feedphone"]))
        {
            $feedname=$_POST["feedname"];
            $feedmail=$_POST["feedmail"];
            $feedback=$_POST["feedback"];
            $feedphone=$_POST["feedphone"];
            $qid=rand(100000,999999);
            $db=$this->model("nonselect");
            $qry="insert into eee_question(qid,feedname,feedphone,feedmail,feedback,status,feeddate) values(".$qid.",'".$feedname."',".$feedphone.",'".$feedmail."','".$feedback."','unanswered','".date("Y-m-d")."')";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Thanks! We will get back to you soon either via phone or email')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/'</script>";
            }
            else
            {
                
                echo "<script>alert('Something Went Wrong! Try Again')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/feedback'</script>";
            }
        }
    } 
}