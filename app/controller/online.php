
<?php
class Online extends Controller
{
    public function index(){
        // $this->view('includes/header',$title='e-Edge Education - Online');
        $this->view('Online',$title='e-Edge Education');
        $this->view('includes/footer');
    }
}?>
