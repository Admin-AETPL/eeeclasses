<div class="feed p-3 bg-light">
<h3 class="h3 text-coral">Question/Requests</h3>    
<div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <?php
                    if(empty($data))
                    {}
                    else
                    {
                        ?>
                    <tr>
                    <th class="text-center fw-bold">S.No.</th>
                    <th class="text-center fw-bold">Name</th>
                    <th class="text-center fw-bold">Question</th>
                    <th class="text-center fw-bold">Phone</th>
                    <th class="text-center fw-bold">Email</th>
                    <th class="text-center fw-bold">Status</th>
                    <th class="text-center fw-bold">Feedback Provided On</th>
                </tr>
                <?php
                    }
                ?>
            </thead>
            <tbody>
                <?php
                $i=1;
                if(empty($data))
                {
                    echo "<tr><td class='text-dark fw-bold fs-4 text-center'>No questions at this time</td></tr>";
                }
                else
                {
                    foreach($data as $det)
                    {
                        ?>
                        <tr>
                            <td class="fw-bold text-center"><?php echo $i; ?></td>
                            <td><?php echo $det["feedname"]; ?></td>
                            <td><?php echo $det["feedback"]; ?></td>
                            <td><?php echo $det["feedphone"]; ?></td>
                            <td><?php echo $det["feedmail"]; ?></td>
                            <td class="text-center"><a href="<?php echo $home ?>admin_users/question/<?php echo $det["qid"] ?>" class="btn btn-outline-primary align-middle">Close</a>&nbsp;&nbsp;<a href="<?php echo $home ?>admin_users/question_del/<?php echo $det["qid"] ?>" class="btn btn-outline-danger align-middle">Delete</a></td>
                            <td><?php echo $det["feeddate"]; ?></td>
                        </tr>
                        <?php
                    $i++;
                    }
                }
                    ?>
            </tbody>
        </table>
    </div>
</div>