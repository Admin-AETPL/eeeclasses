<?php
class Teacher_users extends Controller
{
    public function login()
    {
        $uid = $_POST["uid"];
        $pass = $_POST["pass"];
        $db = $this->model("select");
        $qry = "select * from eee_teachers where teacher_id='" . $uid . "' and teacher_pass='" . $pass . "' and account_status='active'";
        $res = $db->sel($qry);
        if (empty($res)) {
            echo "<script>alert('Incorrect Username or Password! Please contact Admin')</script>";
            echo "<script>window.location.href='https://eeeclasses.info/teacher/login'</script>";
        } else {
            $_SESSION["teacher"] = $uid;
            echo "<script>window.location.href='https://eeeclasses.info/teacher/'</script>";
        }
    }
    public function logout()
    {
        if (isset($_SESSION["teacher"])) {
            unset($_SESSION["teacher"]);
            echo "<script>window.location.href='https://eeeclasses.info/teacher/login'</script>";
        } else {
            echo "<script>window.location.href='https://eeeclasses.info/teacher/'</script>";
        }
    }
    public function upload()
    {
        if (isset($_SESSION["teacher"])) {
            date_default_timezone_set("Asia/Kolkata");
            if (isset($_POST["cat"])) {
                $cat = $_POST["cat"];
            } else {
                $cat = '';
            }
            if (isset($_POST["classsel"])) {
                $classsel = $_POST["classsel"];
            } else {
                $classsel = '';
            }
            if (isset($_POST["subj"])) {
                $subj = $_POST["subj"];
            } else {
                $subj = '';
            }
            if (isset($_POST["chapt"])) {
                $chapt = $_POST["chapt"];
            } else {
                $chapt = '';
            }
            if ($_FILES["pdffile"]["error"] == 0) {
                $o = $_FILES["pdffile"]["tmp_name"];
                $newname = "study_material/" . $classsel . "/" . $cat . "/" . $subj;
                if (is_dir($newname)) {
                    $newfile = "Chapter" . $chapt . ".pdf";
                    $n = $_SERVER["DOCUMENT_ROOT"] . "https://eeeclasses.info/" . $newname ."/". $newfile;
                    move_uploaded_file($o, $n);
                } else {
                    $newfile = "/Chapter" . $chapt . ".pdf";
                    $n = $_SERVER["DOCUMENT_ROOT"] . "https://eeeclasses.info/" . $newname ."/". $newfile;
                    mkdir($newname, 0777, true);
                    move_uploaded_file($o, $n);
                }
            } else {
                echo "<script>alert('Something Went Wrong! Try again')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/teacher/upload/'</script>";
            }
            $db = $this->model("nonselect");
            $qry = "insert into eee_notes(class_no,subject,chapter_no,notes,category,uploaded_on,notes_path) values('" . $classsel . "','" . $subj . "','" . $chapt . "','" . $newfile . "','" . $cat . "','".date("Y-m-d")."','".$newname."/".$newfile."')";
            $result = $db->nonsel($qry);
            if ($result == 1) {
                echo "<script>alert('Uploaded! Upload Another')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/teacher/upload/'</script>";
            } else {
                echo "<script>alert('Something Went Wrong! Try again')</script>";
                echo "<script>window.location.href='https://eeeclasses.info/teacher/upload/'</script>";
            }
        } else {
            echo "<script>window.location.href='https://eeeclasses.info/teacher/'</script>";
        }
    }
}
