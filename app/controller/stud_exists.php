<?php
class Stud_exists extends Controller
{
    public function index()
    {
        $db=new mysqli("localhost","aetpl7vo_eee","eee_classes","aetpl7vo_eeeclasses");
if(isset($_POST["stud_mail"]))
{
    $qry="select * from eee_students where stud_mail='".$_POST["stud_mail"]."'";
    $res=$db->query($qry);
    if($res->num_rows==1)
    {
        echo "Exists";
    }
    else
    {
        echo "Available";
    }
}        
    }
}
