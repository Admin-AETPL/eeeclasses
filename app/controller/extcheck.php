<?php
class Extcheck extends Controller
{
    public function index()
    {
        if(isset($_POST["fname"]))
{
    $extc=strrev($_POST["fname"]);
    $extc=substr($extc, 0, 3);
    $extc=strrev($extc);
//    $extc=explode(".",$_POST["fname"]);
    if($extc=="pdf")
    {
        echo "okay";
    }
    else
    {
        echo "not pdf";
    }
}
else
{
    echo "Data not found";
}        
    }
}
