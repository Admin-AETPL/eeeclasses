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
                        <a href="<?php echo $home ?>admin/teachers" class="btn btn-success text-white">View</a>
                    </li>
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/add_teacher" class="btn btn-primary text-white">Add</a>
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
                        <!-- <th scope="col">Teacher Photo</th> -->
                        <th scope="col">Teacher ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone no.</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Password</th>
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
                                    <!-- <td class="text-center">
                                        <img src="<?php echo htmlspecialchars($home . $det["teacher_photo"]); ?>" style="height:125px" alt="Teacher Photo" class="img-fluid imghover">
                                    </td> -->
                                    <td class="sid"><?php echo htmlspecialchars($det["teacher_id"]); ?></td>
                                    <td class="sname"><?php echo htmlspecialchars($det["teacher_name"]); ?></td>
                                    <td class="phone"><?php echo htmlspecialchars($det["teacher_phone"]); ?></td>
                                    <td class="smail"><?php echo htmlspecialchars($det["teacher_mail"]); ?></td>
                                    <td class="spass"><?php echo htmlspecialchars($det["teacher_pass"]); ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-primary text-white upd" data-bs-toggle="modal" data-bs-target="#staticBackdrop" aria-label="Update teacher details">Update</button>
                                    </td>
                                </tr>
                        <?php
                                $i++;
                            }
                        } else { // Handle case when $data is empty
                        ?>
                            <tr>
                                <td colspan="8" class="text-center">No teacher data available.</td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-coral" id="staticBackdropLabel">Update Student Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?php echo $home ?>admin_teachers/update">
                                <div class="mb-3 row">
                                    <label for="staticname" class="col-sm-2 col-form-label">Name<sup class="text-danger">*</sup></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="staticname" name="studname" required placeholder="e.g. Peter Parker">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputphone" class="col-sm-2 col-form-label">Phone<sup class="text-danger">*</sup></label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" id="inputphone" minlength="10" maxlength="10" name="phone" aria-describedby="phoneHelp" required placeholder="e.g. 9876543210">
                                        <div id="phoneHelp" class="form-text">Please do not add 0 or +91 before number unless its a landline with citycode</div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputpass" class="col-sm-2 col-form-label">Password<sup class="text-danger">*</sup></label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputpass" name="password" minlength="8" maxlength="15" required aria-describedby="passhelp">
                                        <div id="passHelp" class="form-text">Min length should be 8 characters and max length should be 15 characters</div>
                                    </div>
                                </div>
                                <input type="hidden" name="stud_id" id="inputid">
                                <div class="mb-3 row">
                                    <div class="col-sm-2 mx-auto">
                                        <button type="submit" id="sbm" class="btn btn-primary form-inline">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Submit form when class is changed
        $("#cls").change(function () {
            $("#uniqcls").submit();
        });

        // Populate modal fields when "Update" button is clicked
        $(".upd").click(function () {
            var row = $(this).closest("tr"); // Cache the row for better performance
            var sid = row.find("td.sid").text();
            var sname = row.find("td.sname").text();
            var sphone = row.find("td.phone").text();
            var smail = row.find("td.smail").text();
            var spass = row.find("td.spass").text();

            // Populate modal fields
            $("#inputid").val(sid);
            $("#staticname").val(sname);
            $("#inputphone").val(sphone);
            $("#inputmail").val(smail);
            $("#inputpass").val(spass);
        });

        // Handle class input changes
        $("#inputclass").change(function () {
            var cls = Number($(this).val());
            if (cls <= 10) {
                $("#subj").hide();
                $("#inputsubj").hide().val("all");
            } else {
                $("#subj").show();
                $("#inputsubj").show().val("");
            }
        });

        // Validate paid fees
        $("#inputpaid").focusout(function () {
            var sfees = Number($("#inputfees").val());
            var spaid = Number($(this).val());
            if (!sfees || !spaid) {
                alert("Please enter valid fees amounts.");
                $(this).css("border-color", "red");
                return;
            }
            if (spaid > sfees) {
                alert("Paid Fees cannot be greater than Total Fees");
                $(this).css("border-color", "red");
            } else {
                $(this).css("border-color", "#ced4da");
            }
        });

        // Validate form before submission
        $("#sbm").click(function (e) {
            var sname = $("#staticname").val().trim();
            var sphone = $("#inputphone").val().trim();
            var smail = $("#inputmail").val().trim();
            var spass = $("#inputpass").val().trim();

            if (!sname || !sphone || !smail || !spass) {
                alert("Field(s) cannot be empty");
                e.preventDefault();
                return false;
            }

            // Validate phone number
            if (!/^\d{10}$/.test(sphone)) {
                alert("Please enter a valid 10-digit phone number.");
                $("#inputphone").css("border-color", "red");
                e.preventDefault();
                return false;
            } else {
                $("#inputphone").css("border-color", "#ced4da");
            }

            // Validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(smail)) {
                alert("Please enter a valid email address.");
                $("#inputmail").css("border-color", "red");
                e.preventDefault();
                return false;
            } else {
                $("#inputmail").css("border-color", "#ced4da");
            }

            // Validate password length
            if (spass.length < 8 || spass.length > 15) {
                alert("Password must be between 8 and 15 characters.");
                $("#inputpass").css("border-color", "red");
                e.preventDefault();
                return false;
            } else {
                $("#inputpass").css("border-color", "#ced4da");
            }
        });
    });
</script>