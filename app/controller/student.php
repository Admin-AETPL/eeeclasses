<?php
class Student extends Controller
{
    public function index($class_no='',$subject='')
    {
        if (isset($_SESSION["student"])) {
            $db = $this->model("select");
            $qry = "select * from eee_students where stud_id='".$_SESSION["student"]."'";
            $data = $db->sel($qry);
            $this->view('student/header', $title = 'EEE Classes - student');
            $this->view('student/sidebar', $title='', $data);
            $this->view('student/index', $title='', $data);
            $this->view('student/footer');
        } else {
            $this->view("student/header", $title = "EEE Class - student Portal");
            $this->view("student/login");
            $this->view("student/footer");
        }
    }
    public function subject($class_no='',$subject='')
    {
        if (isset($_SESSION["student"])) {
            $db = $this->model("select");
            $qry = "select * from eee_students where stud_id='".$_SESSION["student"]."'";
            $qry2 = "SELECT eee_notes.sno, eee_notes.class_no, eee_notes.subject, eee_notes.chapter_no, eee_notes.notes, eee_notes.category, eee_notes.uploaded_on,eee_notes.notes_path FROM `eee_notes` inner join eee_students on eee_notes.class_no=eee_students.stud_class where eee_students.stud_id='".$_SESSION["student"]."' and eee_notes.category='recent' order by eee_notes.uploaded_on desc";
            $data = $db->sel($qry);
            $res2=$db->sel($qry2);
            if($subj='')
            {
                $qry1="select * from eee_subjects where class_no='".$class_no."' and subject='".$subject."'";
            }
            else
            {
                $qry1="select * from eee_subjects where class_no='".$class_no."' and subject='".$subject."'";
            }
            $res1=$db->sel($qry1);
            $this->view('student/header', $title = 'EEE Classes - student');
            $this->view('student/sidebar', $title='', $data);
            $this->view('student/subject', $res2, $res1);
            $this->view('student/footer');
        } else {
            $this->view("student/header", $title = "EEE Class - student Portal");
            $this->view("student/login");
            $this->view("student/footer");
        }
    }
    public function login()
    {
        if (isset($_SESSION["student"])) {
            echo "<script>window.location.href='https://eeeclasses.info/student/'</script>";
        } else {
            $this->view("student/header", $title = "EEE Class - student Portal");
            $this->view("student/login");
            $this->view("student/footer");
        }
    }
    
}
