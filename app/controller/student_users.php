<?php
class student_users extends Controller{
    public function login()
    {
        $uid=$_POST["uid"];
        $pass=$_POST["pass"];
        $db=$this->model("select");
        $qry="select * from eee_students where stud_id='".$uid."' and stud_pass='".$pass."' and account_status='active'";
        $res=$db->sel($qry);
        if(empty($res))
        {
            echo "<script>alert('Incorrect Username or Password! Please contact Admin')</script>";
            echo "<script>window.location.href='https://eeeclasses.info/student/login'</script>";
        }
        else
        {
            $_SESSION["student"]=$uid;
            echo "<script>window.location.href='https://eeeclasses.info/student/'</script>";
        }
    }
    public function logout()
    {
        if(isset($_SESSION["student"]))
        {
            unset($_SESSION["student"]);
            echo "<script>window.location.href='https://eeeclasses.info/student/login'</script>";
        }
        else
        {
            echo "<script>window.location.href='https://eeeclasses.info/student/'</script>";
        }
    }
}