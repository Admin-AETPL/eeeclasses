<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="view_student p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-sencondary text-start">Delete Student - &nbsp;</h4>
            <form action="<?php echo $home ?>admin/delete_student/" id="uniqcls" method="GET">
                <select name="cls" id="cls" class="form-select" onchange="this.form.submit()">
                    <option value="all" <?php echo ($_GET['cls'] ?? '') == 'all' ? 'selected' : ''; ?>>All</option>
                    <option value="7" <?php echo ($_GET['cls'] ?? '') == '7' ? 'selected' : ''; ?>>Class 7</option>
                    <option value="8" <?php echo ($_GET['cls'] ?? '') == '8' ? 'selected' : ''; ?>>Class 8</option>
                    <option value="9" <?php echo ($_GET['cls'] ?? '') == '9' ? 'selected' : ''; ?>>Class 9</option>
                    <option value="10" <?php echo ($_GET['cls'] ?? '') == '10' ? 'selected' : ''; ?>>Class 10</option>
                    <option value="11" <?php echo ($_GET['cls'] ?? '') == '11' ? 'selected' : ''; ?>>Class 11</option>
                    <option value="12" <?php echo ($_GET['cls'] ?? '') == '12' ? 'selected' : ''; ?>>Class 12</option>
                </select>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/students" class="btn btn-success text-white">View</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/add_student" class="btn btn-primary text-white">Add</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/update_student" class="btn btn-danger text-white">Update</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead">
                    <tr>
                        <th scope="col">S.No.</th>
                        <!-- <th scope="col">Student Photo</th> -->
                        <th scope="col">Student ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Total Fees</th>
                        <th scope="col">Paid Fees</th>
                        <th scope="col">Remaining Fees</th>
                        <th scope="col">Fees Status</th>
                        <th scope="col">Enrollment Date</th>
                        <th scope="col"></th>
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
                                    <!-- <td class="text-center"> -->
                                        <!-- <img src="<?php echo htmlspecialchars($home . $det["stud_photo"]); ?>" alt="Student Photo" class="img-fluid imghover"> -->
                                    <!-- </td> -->
                                    <td><?php echo htmlspecialchars($det["stud_id"]); ?></td>
                                    <td><?php echo htmlspecialchars($det["stud_name"]); ?></td>
                                    <td><?php echo htmlspecialchars($det["stud_class"]); ?></td>
                                    <td>&#8377; <?php echo number_format($det["total_fees"], 2); ?></td>
                                    <td>&#8377; <?php echo number_format($det["paid_fees"], 2); ?></td>
                                    <td>&#8377; <?php echo number_format($det["total_fees"] - $det["paid_fees"], 2); ?></td>
                                    <td><?php echo ucfirst(htmlspecialchars($det["fees_status"])); ?></td>
                                    <td><?php echo htmlspecialchars($det["stud_enroll"]); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo $home ?>admin_users/delete/<?php echo htmlspecialchars($det["stud_id"]); ?>" 
                                        class="btn btn-danger text-white" 
                                        onclick="return confirm('Are you sure you want to delete this student?');">
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php
                                $i++;
                            }
                        } else { // Handle case when $data is empty
                        ?>
                            <tr>
                                <td colspan="11" class="text-center">No student data available.</td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#cls").change(function() {
            $("#uniqcls").submit();
        })
    })
</script>