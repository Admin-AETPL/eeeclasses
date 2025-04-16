<?php
class Chapter extends Controller
{
    public function index()
    {
        $db=new mysqli("localhost","aetpl7vo_eee","eee_classes","aetpl7vo_eeeclasses");
        if(isset($_POST["chap"]) && isset($_POST["cls"]))
{
  
  echo "<option selected disabled>Select</option>";
    $qry="select * from eee_subjects where class_no='".$_POST["cls"]."' and subject='".$_POST["chap"]."'";
    $exec=$db->query($qry);
    if($exec->num_rows>0)
    {
        while($row=$exec->fetch_assoc())
        {
            echo "<option value='".$row["chapter_no"]."'>Chapter ".$row["chapter_no"]." - ".$row["chapter_name"]."</option>";
        }
    }
    else
    {
        echo "Not";
    }
}
else
{
    echo "Data not found";
}
        
    }
}

