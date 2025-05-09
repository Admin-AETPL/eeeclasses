<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 my-2">
            <div class="admin-view bg-white p-3 border border-1 text-center" style="border-radius: 20px;">
                <h5 class="h5 text-coral text-start">Total Students</h5>
                <p class="display-2 text-primary fw-bold text-center">
                    <?php
                    foreach($data as $det)
                       echo $det["total_students"];
                    ?>
                </p>
                <a href="<?php echo $home ?>admin/students" class="btn bg-coral text-white">View</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 my-2">
            <div class="admin-view bg-white p-3 border border-1 text-center" style="border-radius: 20px;">
                <h5 class="h5 text-coral text-start">Total Teachers</h5>
                <p class="display-2 text-primary fw-bold text-center">
                <?php
                    foreach($title as $det1)
                       echo $det1["total_teachers"];
                    ?>
                </p>
                <a href="<?php echo $home ?>admin/teachers" class="btn bg-coral text-white">View</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 my-2">
            <div class="admin-view bg-white p-3 border border-1 text-center" style="border-radius: 20px;">
                <h5 class="h5 text-coral text-start">Total Questions</h5>
                <p class="display-2 text-primary fw-bold text-center">
                <?php
                if(empty($extra))
                { echo "0"; }
                else
                {
                    foreach($extra as $det1)
                       echo $det1["total_quest"];
                }
                ?>
                </p>
                <a href="<?php echo $home ?>admin/question" class="btn bg-coral text-white">View</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 my-2">
            <div class="admin-view bg-white p-3 border border-1 text-center" style="border-radius: 20px;">
                <h5 class="h5 text-coral text-start">Total Feeback</h5>
                <p class="display-2 text-primary fw-bold text-center">
                <?php
                    foreach($more as $det1)
                       echo $det1["total_rev"];
                    ?>
                </p>
                <a href="<?php echo $home ?>admin/feedback" class="btn bg-coral text-white">View</a>
            </div>
        </div>
    </div>
</div>