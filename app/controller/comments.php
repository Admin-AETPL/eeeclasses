<?php
class Comments extends Controller
{
    public function index()
    {
     $db=new mysqli("localhost","aetpl7vo_eee","eee_classes","aetpl7vo_eeeclasses");
if(isset($_POST["rows"]))
{
    $qry="select * from eee_feedback where status='Approved' order by feeddate desc limit ".$_POST["rows"];
    $res=$db->query($qry);
    if($res->num_rows>0)
    {
        sleep(2);
        foreach ($res as $det) {
            ?>
                <div class="comment">
                    <p class="text-start text-dark fw-bold fs-4"><?php echo $det["feedname"] ?></p>
                    <p class="text-start text-dark"><?php echo $det["feedback"] ?></p>
                </div>
            <?php
            }
    }
    else
    {
        echo "Available";
    }
}   
    }
}
