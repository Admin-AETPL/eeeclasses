<?php
class teacher extends Controller
{
    public function index($class_no='',$subject='')
    {
        if (isset($_SESSION["teacher"])) {
            $db = $this->model("select");
            $qry = "select * from eee_teachers where teacher_id='".$_SESSION["teacher"]."'";
            $data = $db->sel($qry);
            $this->view('teacher/header', $title = 'EEE Classes - teaacher');
            $this->view('teacher/sidebar', $title='', $data);
            $this->view('teacher/index', $title='', $data);
            $this->view('teacher/footer');
        } else {
            $this->view("teacher/header", $title = "EEE Class - Teacher Portal");
            $this->view("teacher/login");
            $this->view("teacher/footer");
        }
    }
   
    public function login()
    {
        if (isset($_SESSION["teacher"])) {
            echo "<script>window.location.href='https://eeeclasses.info/teacher/'</script>";
        } else {
            $this->view("teacher/header", $title = "EEE Class - teacher Portal");
            $this->view("teacher/login");
            $this->view("teacher/footer");
        }
    }
    public function upload()
    {
        if(isset($_SESSION["teacher"]))
        {
            $db = $this->model("select");
            $qry = "select * from eee_teachers where teacher_id='".$_SESSION["teacher"]."'";
            $data = $db->sel($qry);
            $this->view("teacher/header", $title="EEE Classes - Upload Notes");
            $this->view("teacher/sidebar",$title='',$data);
            $this->view("teacher/upload");
            $this->view("teacher/footer");
        }
        else
        {
            $this->view("teacher/header", $title = "EEE Class - teacher Portal");
            $this->view("teacher/login");
            $this->view("teacher/footer");
        }
        
    }
}
