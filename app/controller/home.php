<?php
class Home extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        $this->view('includes/header',$title='e-Edge Education');
        $this->view('home',$title='e-Edge Education');
        $this->view('includes/footer');
    }
}