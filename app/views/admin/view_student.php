<style>
    .imghover{cursor: pointer;}
</style>
<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="view_student p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-sencondary text-start">Students - &nbsp;</h4>
            <form action="<?php echo $home ?>admin/student/" id="uniqcls" method="POST">
                <select name="cls" id="cls" class="form-select">
                    <option value="all" selected>All</option>
                    <option value="7">Class 7</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                    <option value="11">Class 11</option>
                    <option value="12">Class 12</option>
                </select>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/add_student" class="btn btn-success text-white">Add</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/update_student" class="btn btn-primary text-white">Update</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/delete_student" class="btn btn-danger text-white">Delete</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Student Photo</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Phone no.</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Password</th>
                        <th scope="col">Total Fees</th>
                        <th scope="col">Paid Fees</th>
                        <th scope="col">Remaining Fees</th>
                        <th scope="col">Fees Status</th>
                        <th scope="col">Enrollment Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    if (!empty($data)) { // Check if $data is not empty
                        foreach ($data as $det) {
                    ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td class="text-center">
                                    <img src="<?php echo $home . $det["stud_photo"]; ?>" alt="Student Photo" class="img-fluid imghover" data-bs-toggle="modal" data-bs-target="#myModal">
                                </td>
                                <td><?php echo htmlspecialchars($det["stud_id"]); ?></td>
                                <td><?php echo htmlspecialchars($det["stud_name"]); ?></td>
                                <td><?php echo htmlspecialchars($det["stud_class"]); ?></td>
                                <td><?php echo htmlspecialchars($det["subjects"]); ?></td>
                                <td><?php echo htmlspecialchars($det["stud_phone"]); ?></td>
                                <td><?php echo htmlspecialchars($det["stud_mail"]); ?></td>
                                <td><?php echo htmlspecialchars($det["stud_pass"]); ?></td>
                                <td>&#8377; <?php echo number_format($det["total_fees"], 2); ?></td>
                                <td>&#8377; <?php echo number_format($det["paid_fees"], 2); ?></td>
                                <td>&#8377; <?php echo number_format($det["total_fees"] - $det["paid_fees"], 2); ?></td>
                                <td><?php echo ucfirst(htmlspecialchars($det["fees_status"])); ?></td>
                                <td><?php echo htmlspecialchars($det["stud_enroll"]); ?></td>
                            </tr>
                    <?php
                            $i++;
                        }
                    } else { // Handle case when $data is empty
                    ?>
                        <tr>
                            <td colspan="14" class="text-center">No student data available.</td>
                        </tr>
                    <?php
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
            <div class="modal-body">
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