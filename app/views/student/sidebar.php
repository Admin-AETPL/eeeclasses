<?php 
foreach($data as $det)
{
    $detail[]=$det;
}
?>
<div class="sidebar py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a class="h5 text-coral bg-white border border-1 py-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>student"><?php echo $_SESSION["student"] ?></a>
                    <h5 class="h5 text-coral">
                    <?php
                    foreach($data as $det)
                    {
                        echo "Class ".$det["stud_class"];
                    }
                    ?>
                    </h5>
                    <nav class="navbar bg-white d-inline-block p-3 w-100 border border-1 navbar-light" style="border-radius: 20px;">
                        <ul class="navbar-nav">
                            <?php
                                foreach($data as $det)
                                {
                                    $subj=explode(",", $det["subjects"]);
                                    foreach($subj as $s)
                                    {
                                        ?>
                                        <li class="nav-item">
                                <a href="<?php echo $home ?>student/subject/<?php echo trim($det["stud_class"]); ?>/<?php echo trim($s); ?>" class="nav-link"><?php echo $s; ?></a>
                            </li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>
                    </nav>
                    <a class="h5 text-coral bg-white border border-1 py-2 my-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>student_users/logout">Logout</a>
                </div>
                <div class="col-md-10">