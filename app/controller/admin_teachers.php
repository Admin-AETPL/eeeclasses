<?php
class Admin_teachers extends Controller{
    
    public function add()
    {
        if(isset($_POST["studname"]) && isset($_POST["phone"]) && isset($_POST["studmail"]) && isset($_POST["password"]))
        {
            date_default_timezone_set('Asia/Kolkata');
            $sname=isset($_POST["studname"])?($_POST["studname"]):'';
            $phone=isset($_POST["phone"])?($_POST["phone"]):'';
            $smail=isset($_POST["studmail"])?($_POST["studmail"]):'';
            $pass=isset($_POST["password"])?($_POST["password"]):'';
            $passcon=isset($_POST["passwordcon"])?($_POST["passwordcon"]):'';
            $stud_id=substr($sname,0,4).rand(10000,99999)."eee";
            if ($_FILES["studphoto"]["error"] == 0) {
                $o=$_FILES["studphoto"]["tmp_name"];
                $newname="img/users/teachers/".$stud_id . $_FILES["studphoto"]["name"];
                $n = $_SERVER["DOCUMENT_ROOT"] . "http://localhost/eeeclasses/eeeclasses.info/".$newname;
                move_uploaded_file($o, $n);
            } else {
                $n = "img/users/user.png";
            }
            $db=$this->model("nonselect");
            $qry="insert into eee_teachers(teacher_id,teacher_name,teacher_mail,teacher_pass,teacher_phone,account_status,teacher_photo) values('".$stud_id."','".$sname."','".$smail."','".$pass."','".$phone."','active','".$newname."')";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Added')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
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
            $qry="update eee_teachers set account_status='inactive' where teacher_id='".$id."'";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Deleted')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
            }
            else
            {
                echo "<script>alert('Something went wrong! Try again later')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
            }
        }
        else
        {
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
        }
    }
    public function update()
    {
            $sid=$_POST["stud_id"];
            $sname=isset($_POST["studname"])?($_POST["studname"]):'';
            $phone=isset($_POST["phone"])?($_POST["phone"]):'';
            $pass=isset($_POST["password"])?($_POST["password"]):'';
            $db=$this->model("nonselect");
            $qry="update eee_teachers set teacher_name='".$sname."', teacher_pass='".$pass."', teacher_phone='".$phone."' where teacher_id='".$sid."'";
            $res=$db->nonsel($qry);
            if($res==1)
            {
                echo "<script>alert('Updated')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
            }
            else
            {
                echo "Error";
            }
        
    }
}