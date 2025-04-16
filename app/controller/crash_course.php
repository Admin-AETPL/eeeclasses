<?php
class Crash_course extends Controller
{
    public function index()
    {
        $this->view("includes/header", $title="EEE Classes - Crash Course");
        $this->view("courses/crash_course",);
        $this->view("includes/footer");
    }
}