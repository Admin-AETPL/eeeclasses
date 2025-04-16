<style>
    .imghover{cursor: pointer;}
</style>
<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="view_student p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-sencondary text-start">Teachers</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/add_teacher" class="btn btn-success text-white">Add</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/update_teacher" class="btn btn-primary text-white">Update</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/delete_teacher" class="btn btn-danger text-white">Delete</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Teacher Photo</th>
                        <th scope="col">Teacher ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone no.</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($data as $det) {
                    ?>
                        <tr>
                            <td><?php echo $i;  ?></td>
                            <td class="text-center"><img src="<?php echo $home.$det["teacher_photo"]; ?>" style="height:100px" alt="" class="img-fluid imghover" data-bs-toggle="modal" data-bs-target="#myModal"></td>
                            <td><?php echo $det["teacher_id"]; ?></td>
                            <td><?php echo $det["teacher_name"]; ?></td>
                            <td><?php echo $det["teacher_phone"]; ?></td>
                            <td><?php echo $det["teacher_mail"]; ?></td>
                            <td><?php echo $det["teacher_pass"]; ?></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-coral" id="staticBackdropLabel">Update Student Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="modalimg" alt="" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".imghover").click(function(){
            var src=$(this).attr("src");
            $("#modalimg").attr("src",src);
        })
    })
</script>