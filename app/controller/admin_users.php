<?php
class Admin_users extends Controller{
    public function login()
    {
        $uid=$_POST["uid"];
        $pass=$_POST["pass"];
        $db=$this->model("select");
        $qry="select * from eee_adm where adm_id='".$uid."' and adm_password='".$pass."'";
        $res=$db->sel($qry);
        if(empty($res))
        {
            echo "<script>alert('Incorrect Username or Password! Please contact department')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/login'</script>";
        }
        else
        {
            $_SESSION["admin"]=$uid;  
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/'</script>";
        }
    }
    public function logout()
    {
        if(isset($_SESSION["admin"]))
        {
            unset($_SESSION["admin"]);
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/login'</script>";
        }
        else
        {
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/'</script>";
        }
    }
    public function add()
    {
        if(isset($_POST["studname"]) && isset($_POST["studclass"]) && isset($_POST["phone"]) && isset($_POST["studmail"]) && isset($_POST["password"]) && isset($_POST["passwordcon"]) && isset($_POST["studfees"]) && isset($_POST["studpaid"]))
        {
            date_default_timezone_set('Asia/Kolkata');
            $sname=isset($_POST["studname"])?($_POST["studname"]):'';
            $sclass=isset($_POST["studclass"])?($_POST["studclass"]):'';
            $phone=isset($_POST["phone"])?($_POST["phone"]):'';
            if(isset($_POST["subj"]))
            {
                $subj=$_POST["subj"];
            }
            else
            {
                $subj='';
            }
            $smail=isset($_POST["studmail"])?($_POST["studmail"]):'';
            $pass=isset($_POST["password"])?($_POST["password"]):'';
            $passcon=isset($_POST["passwordcon"])?($_POST["passwordcon"]):'';
            $sfees=isset($_POST["studfees"])?($_POST["studfees"]):'';
            $spaid=isset($_POST["studpaid"])?($_POST["studpaid"]):'';
            $frem=$sfees-$spaid;
            $fstat=$frem!=0?"partial":"fully paid";
            $stud_enroll=isset($_POST["enroll_date"])?$_POST["enroll_date"]:'';
            $stud_id=substr($sname,0,4).rand(10000,99999)."eee";
            if ($_FILES["studphoto"]["error"] == 0) {
                $o=$_FILES["studphoto"]["tmp_name"];
                $newname="img/users/students/".$stud_id . $_FILES["studphoto"]["name"];
                $n = $_SERVER["DOCUMENT_ROOT"] . "http://localhost/eeeclasses/eeeclasses.info/".$newname;
                move_uploaded_file($o, $n);
            } else {
                $n = "img/users/user.png";
            }
            $db=$this->model("nonselect");
            $qry="insert into eee_students(stud_id,stud_name,stud_class,subjects,stud_mail,stud_pass,total_fees,paid_fees,fees_status,stud_enroll,stud_phone,account_status,stud_photo) values('".$stud_id."','".$sname."','".$sclass."','".$subj."','".$smail."','".$pass."','".$sfees."','".$spaid."','".$fstat."','".$stud_enroll."','".$phone."','active','".$newname."')";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Added')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/students/'</script>";
            }
            else
            {
                echo "Error";
            }
        }
    }
    public function delete($id='')
    {
        if(isset($id))
        {
            $db=$this->model("nonselect");
            $qry="update eee_students set account_status='inactive' where stud_id='".$id."'";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Deleted')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/students/'</script>";
            }
            else
            {
                echo "<script>alert('Something went wrong! Try again later')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/students/'</script>";
            }
        }
        else
        {
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/students/'</script>";
        }
    }
    public function update()
    {
            $sid=$_POST["stud_id"];
            $sname=isset($_POST["studname"])?($_POST["studname"]):'';
            $sclass=isset($_POST["studclass"])?($_POST["studclass"]):'';
            $phone=isset($_POST["phone"])?($_POST["phone"]):'';
            if(isset($_POST["subj"]))
            {
                $subj=$_POST["subj"];
            }
            else
            {
                $subj='';
            }
            $pass=isset($_POST["password"])?($_POST["password"]):'';
            $sfees=isset($_POST["studfees"])?($_POST["studfees"]):'';
            $spaid=isset($_POST["studpaid"])?($_POST["studpaid"]):'';
            $frem=$sfees-$spaid;
            $fstat=$frem!=0?"partial":"fully paid";
            $db=$this->model("nonselect");
            $qry="update eee_students set stud_name='".$sname."', stud_class='".$sclass."', subjects='".$subj."', stud_pass='".$pass."', total_fees='".$sfees."', paid_fees='".$spaid."', fees_status='".$fstat."', stud_phone='".$phone."' where stud_id='".$sid."'";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Updated')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/students/'</script>";
            }
            else
            {
                echo "Error";
            }
        
    }
    public function feedback($fid='')
    {
        $db=$this->model("nonselect");
        $qry="update eee_feedback set status='Approved' where fid='".$fid."'";
        $feed=$db->nonsel($qry);
        if($feed==1)
        {
            echo "<script>alert('Approved')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/feedback'</script>";
        }
        else
        {
            echo "<script>alert('Something Went Wrong!')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/feedback'</script>";
        }
    }
    public function question($qid='')
    {
        $db=$this->model("nonselect");
        $qry="update eee_question set status='Replied' where qid='".$qid."'";
        $feed=$db->nonsel($qry);
        if($feed==1)
        {
            echo "<script>alert('Yay! Replied')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/question'</script>";
        }
        else
        {
            echo "<script>alert('Something Went Wrong!')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/question'</script>";
        }
    }
    public function question_del($qid='')
    {
        $db=$this->model("nonselect");
        $qry="delete from eee_question where qid='".$qid."'";
        $feed=$db->nonsel($qry);
        if($feed==1)
        {
            echo "<script>alert('Deleted')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/question'</script>";
        }
        else
        {
            echo "<script>alert('Something Went Wrong!')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/question'</script>";
        }
    }
    public function feedback_del($fid='')
    {
        $db=$this->model("nonselect");
        $qry="delete from eee_feedback where fid='".$fid."'";
        $feed=$db->nonsel($qry);
        if($feed==1)
        {
            echo "<script>alert('Deleted')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/feedback'</script>";
        }
        else
        {
            echo "<script>alert('Something Went Wrong!')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/feedback'</script>";
        }
    }
}