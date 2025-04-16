<?php
class Course extends Controller
{
    public function class7_8()
    {
        $this->view('includes/header',$title='EEE Classes - Class 7-8');
        $this->view('classes/class7_8');
        $this->view('includes/footer');
    }
    public function class9()
    {
        $db=$this->model("select");
        $qry="select * from eee_subjects where subject='science' and class_no='9'";
        $res=$db->sel($qry);
        $qry1="select * from eee_subjects where subject='mathematics' and class_no='9'";
        $res1=$db->sel($qry1);
        $this->view('includes/header',$title='EEE Classes - Class 9');
        $this->view('classes/class9',$res,$res1);
        $this->view('includes/footer');
    }
    public function class10()
    {
        $db=$this->model("select");
        $qry="select * from eee_subjects where subject='science' and class_no='10'";
        $res=$db->sel($qry);
        $qry1="select * from eee_subjects where subject='mathematics' and class_no='10'";
        $res1=$db->sel($qry1);
        $this->view('includes/header',$title='EEE Classes - Class 10');
        $this->view('classes/class10',$res,$res1);
        $this->view('includes/footer');
    }
    public function class11($subj='')
    {
        if(empty($subj))
        {
            $this->view('includes/header',$title='EEE Classes - Class 11');
            $this->view('classes/class11');
            $this->view('includes/footer');
        }
        else
        {
            $this->view('includes/header',$title='EEE Classes - Class 11 '.strtoupper($subj));
            $this->view('classes/class11/'.$subj);
            $this->view('includes/footer');
        }
    }
    public function class12($subj='')
    {
        if(empty($subj))
        {
            $this->view('includes/header',$title='EEE Classes - Class 12');
            $this->view('classes/class12');
            $this->view('includes/footer');
        }
        else
        {
            $this->view('includes/header',$title='EEE Classes - Class 12 '.strtoupper($subj));
            $this->view('classes/class12/'.$subj);
            $this->view('includes/footer');
        }
    }
    public function iit_jee($subj='')
    {
        if(empty($subj))
        {
            $this->view('includes/header',$title='EEE Classes - Class 11');
            $this->view('classes/iit_jee');
            $this->view('includes/footer');
        }
        else if($subj=='physics')
        {
            $this->view('includes/header',$title='EEE Classes - IIT-JEE');
            $this->view('classes/iit_jee');
            $this->view('includes/footer');
        }
    }
    public function neet($subj='')
    {
        if(empty($subj))
        {
            $this->view('includes/header',$title='EEE Classes - NEET Classes');
            $this->view('classes/neet');
            $this->view('includes/footer');
        }
        else if($subj=='physics')
        {
            $this->view('includes/header',$title='EEE Classes - IIT-JEE');
            $this->view('classes/iit_jee');
            $this->view('includes/footer');
        }
    }
    public function kvpy()
    {
        $this->view('courses/kvpy');
        $this->view('includes/footer');
    }
    public function ntse()
    {
        $this->view('courses/ntse');
        $this->view('includes/footer');
    }
    public function competitive_classes()
    {
        $this->view("includes/header", $title='EEE Classes - Competitive Courses');
        $this->view("courses/competitive_courses");
        $this->view("includes/footer");
    }
    public function academic_classes()
    {
        $this->view("includes/header", $title='EEE Classes - Competitive Courses');
        $this->view("courses/academic_courses");
        $this->view("includes/footer");
    }
}
