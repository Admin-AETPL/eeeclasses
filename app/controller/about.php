<?php
class About extends Controller
{
    public function index(){
        $this->view('includes/header',$title='e-Edge Education - About Us');
        $this->view('aboutus',$title='e-Edge Education');
        $this->view('includes/footer');
    }
    public function about_us(){
        $this->view('includes/header',$title='e-Edge Education - About Us');
        $this->view('aboutus',$title='e-Edge Education');
        $this->view('includes/footer');
    }
    public function contact_us(){
        $this->view('includes/header',$title='e-Edge Education - Contact Us');
        $this->view('contactus',$title='e-Edge Education');
        $this->view('includes/footer');
    }
    public function team(){
        $this->view('includes/header',$title='e-Edge Education - Our Team');
        $this->view('team',$title='e-Edge Education');
        $this->view('includes/footer');
    }
   

}