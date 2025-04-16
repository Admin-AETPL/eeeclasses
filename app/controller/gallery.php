<?php
class Gallery extends Controller
{
    public function index(){
        $this->view('includes/header',$title='e-Edge Education - Gallery');
        $this->view('gallery',$title='e-Edge Education');
        $this->view('includes/footer');
    }
}