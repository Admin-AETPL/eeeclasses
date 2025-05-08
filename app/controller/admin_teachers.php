<?php
class Admin_teachers extends Controller {
    
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
    
            // Handle image upload
            if ($_FILES["studphoto"]["error"] == 0) {
                $tmpName = $_FILES["studphoto"]["tmp_name"];
                $filename = $stud_id . "_" . basename($_FILES["studphoto"]["name"]); // Safer filename
                $relativePath = "img/users/teachers/" . $filename; // Path for DB storage
    
                // Absolute path to save the image on the server
                $fullPath = "C:/xampp/htdocs/eeeclasses/eeeclasses.info/" . $relativePath;
    
                // Create the folder if it doesn't exist
                if (!file_exists(dirname($fullPath))) {
                    mkdir(dirname($fullPath), 0777, true);
                }
    
                // Move the uploaded file to the target location
                move_uploaded_file($tmpName, $fullPath);
            } else {
                // Fallback to a default image if no file is uploaded
                $relativePath = "img/users/user.png"; // Default fallback image
            }
    
            $db=$this->model("nonselect");
            $qry="insert into eee_teachers(teacher_id,teacher_name,teacher_mail,teacher_pass,teacher_phone,account_status,teacher_photo) values('".$stud_id."','".$sname."','".$smail."','".$pass."','".$phone."','active','".$relativePath."')";
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

    public function delete($id = '') {
        if (isset($id)) {
            $db = $this->model("nonselect");
            $qry = "UPDATE eee_teachers SET account_status='inactive' WHERE teacher_id='" . $id . "'";
            $res = $db->nonsel($qry);
            if ($res == 1) {
                echo "<script>alert('Deleted')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
            } else {
                echo "<script>alert('Something went wrong! Try again later')</script>";
                echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
            }
        } else {
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
        }
    }

    public function update() {
        $sid = $_POST["stud_id"];
        $sname = $_POST["studname"];
        $phone = $_POST["phone"];
        $pass = $_POST["password"];

        $db = $this->model("nonselect");
        $qry = "UPDATE eee_teachers SET teacher_name='$sname', teacher_pass='$pass', teacher_phone='$phone' WHERE teacher_id='$sid'";
        $res = $db->nonsel($qry);

        if ($res == 1) {
            echo "<script>alert('Updated')</script>";
            echo "<script>window.location.href='http://localhost/eeeclasses/eeeclasses.info/admin/teachers/'</script>";
        } else {
            echo "<script>alert('Error updating teacher')</script>";
        }
    }
}
