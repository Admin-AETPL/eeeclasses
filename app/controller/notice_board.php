<?php
class Notice_board extends Controller
{
    public function index()
    {
        $this->view('includes/header',$title='EEE Classes - Notice Board');
        $this->view('notice_board',$title='EEE Classes');
        $this->view('includes/footer');
    }
}
?>