<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="view_student p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-sencondary text-start">Delete Teacher</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/teachers" class="btn btn-success text-white">View</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/add_teacher" class="btn btn-primary text-white">Add</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/update_teacher" class="btn btn-danger text-white">Update</a>
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
                                    <td class="text-center">
                                        <img src="<?php echo htmlspecialchars($home . $det["teacher_photo"]); ?>" style="height:100px" alt="Teacher Photo" class="img-fluid imghover">
                                    </td>
                                    <td><?php echo htmlspecialchars($det["teacher_id"]); ?></td>
                                    <td><?php echo htmlspecialchars($det["teacher_name"]); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo $home ?>admin_teachers/delete/<?php echo htmlspecialchars($det["teacher_id"]); ?>" 
                                        class="btn btn-danger text-white delete-btn" 
                                        onclick="return confirm('Are you sure you want to delete this teacher?');">
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
                                <td colspan="5" class="text-center">No teacher data available.</td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>