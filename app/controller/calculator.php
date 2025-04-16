<?php 
class Calculator extends Controller
{
    public function basic($oper='')
    {
         $this->view("includes/header", $title='EEE Classes - Addition Calculator');
         $this->view("calculator/basic/".$oper);
         $this->view("includes/footer");
    }
    public function converter($conv='')
    {
         $this->view("includes/header", $title='EEE Classes - Addition Calculator');
         $this->view("calculator/converter/".$conv);
         $this->view("includes/footer");
    }
    public function area()
    {
         $this->view("includes/header", $title='EEE Classes - Addition Calculator');
         $this->view("calculator/area");
         $this->view("includes/footer");
    }
    public function volume()
    {
         $this->view("includes/header", $title='EEE Classes - Addition Calculator');
         $this->view("calculator/volume");
         $this->view("includes/footer");
    }
}