<style>
    #subj {
        display: none
    }

    #inputsubj {
        display: none
    }
    #subject-options {
        min-height: 100px; /* Just to give the section a consistent height */
    }
</style>
<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="addstudent p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-sencondary text-start">Add Student</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/students" class="btn btn-success text-white">View</a>
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
        <br>
        <form method="POST" action="<?php echo $home ?>admin_users/add" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="staticname" class="col-sm-2 col-form-label">Name<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticname" name="studname" required placeholder="e.g. Peter Parker">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputclass" class="col-sm-2 col-form-label">Class<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputclass" min="7" max="12" name="studclass" required placeholder="e.g. 10">
                </div>
            </div>
            <div class="mb-3 row" id="subject-section">
                <label class="col-sm-2 col-form-label">Subjects<sup class="text-danger">*</sup></label>
                <div class="col-sm-10" id="subject-options">
                    <!-- Placeholder or empty block initially -->
                    <div class="form-control text-muted" style="border: 1px solid #ced4da;">
                        Please select a class to view subjects
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputphone" class="col-sm-2 col-form-label">Phone<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputphone" minlength="10" maxlength="10" name="phone" aria-describedby="phoneHelp" required placeholder="e.g. 9876543210">
                    <div id="phoneHelp" class="form-text">Please do not add 0 or +91 before number unless its a landline with citycode</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputmail" class="col-sm-2 col-form-label">E-mail<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputmail" name="studmail" required placeholder="e.g. test@mail.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputpass" class="col-sm-2 col-form-label">Create Password<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputpass" name="password" minlength="8" maxlength="15" required aria-describedby="passhelp">
                    <div id="passHelp" class="form-text">Min length should be 8 characters and max length should be 15 characters</div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputpasscon" class="col-sm-2 col-form-label">Confirm Password<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputpasscon" name="passwordcon" required minlength="8" maxlength="15">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputfees" class="col-sm-2 col-form-label">Total Fees<sup class="text-danger">*</sup> (in &#8377;)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputfees" name="studfees" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputpaid" class="col-sm-2 col-form-label">Paid Fees<sup class="text-danger">*</sup> (in &#8377;)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputpaid" name="studpaid" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputfile" class="col-sm-2 col-form-label">Student Photo<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                <input type="file" name="studphoto" id="studphoto" accept=".jpg, .jpeg, .png" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputdate" class="col-sm-2 col-form-label">Enrollment Date<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputdate" name="enroll_date" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2 mx-auto">
                    <button type="submit" id="sbm" class="btn bg-coral text-white form-inline">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        function showError(input, message, errorId) {
            $("#" + errorId).remove();
            input.css("border-color", "red");
            input.after(`<div id="${errorId}" class="text-danger mt-1">${message}</div>`);
        }

        function clearError(input, errorId) {
            $("#" + errorId).remove();
            input.css("border-color", "#ced4da");
        }

        $("#staticname").on("input", function () {
            const input = $(this);
            const name = input.val().trim();
            if (!name) {
                showError(input, "Name cannot be empty.", "name-error");
            } else {
                clearError(input, "name-error");
            }
        });

        $("#inputclass").on("change input", function () {
            const cls = parseInt($(this).val().trim());
            const subjectOptions = $("#subject-options");
            subjectOptions.empty(); // Clear previous options

            if (isNaN(cls) || cls < 7 || cls > 12) {
                subjectOptions.append(`
                    <div class="form-control" style="border: 1px solid #ced4da;">
                        Please select a class between 7 and 12 to view subjects.
                    </div>
                `);
                return;
            }

            let subjects = [];
            if (cls <= 10) {
                subjects = ["Mathematics", "Science"];
            } else {
                subjects = ["Physics", "Chemistry", "Mathematics", "Biology"];
            }

            subjects.forEach(function (subj) {
                subjectOptions.append(`
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="subj[]" value="${subj}" id="subj_${subj}">
                        <label class="form-check-label" for="subj_${subj}">
                            ${subj}
                        </label>
                    </div>
                `);
            });
        });


        $("#inputphone").on("input", function () {
            const input = $(this);
            const phone = input.val().trim();
            if (!/^\d{10}$/.test(phone)) {
                showError(input, "Phone number must be 10 digits.", "phone-error");
            } else {
                clearError(input, "phone-error");
            }
        });

        $("#inputmail").on("input", function () {
            const input = $(this);
            const email = input.val().trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                showError(input, "Please enter a valid email address.", "email-error");
                return;
            }

            clearError(input, "email-error");

            $.ajax({
                url: "http://localhost/eeeclasses/eeeclasses.info/stud_exists/index",
                method: "post",
                data: { stud_mail: email },
                success: function (result) {
                    if (result === 'Exists') {
                        showError(input, "Email already exists.", "email-exists");
                    } else {
                        clearError(input, "email-exists");
                    }
                }
            });
        });

        $("#inputpass").on("input", function () {
            const input = $(this);
            const pass = input.val();
            if (pass.length < 8 || pass.length > 15) {
                showError(input, "Password must be between 8 and 15 characters.", "pass-error");
            } else {
                clearError(input, "pass-error");
            }
        });

        $("#inputpasscon").on("input", function () {
            const input = $(this);
            const confirmPass = input.val();
            const pass = $("#inputpass").val();

            if (!confirmPass) {
                showError(input, "Confirm Password cannot be empty.", "confpass-error");
            } else if (confirmPass !== pass) {
                showError(input, "Passwords do not match.", "confpass-error");
            } else {
                clearError(input, "confpass-error");
            }
        });

        $("#inputfees").on("input", function () {
            const input = $(this);
            const fees = Number(input.val());
            if (!fees || fees < 0) {
                showError(input, "Total Fees must be a positive number.", "fees-error");
            } else {
                clearError(input, "fees-error");
            }
        });

        $("#inputpaid").on("input", function () {
            const paidInput = $(this);
            const paid = Number(paidInput.val());
            const fees = Number($("#inputfees").val());

            if (!paid || paid < 0) {
                showError(paidInput, "Paid Fees must be a positive number.", "paid-error");
            } else if (paid > fees) {
                showError(paidInput, "Paid Fees cannot exceed Total Fees.", "paid-error");
            } else {
                clearError(paidInput, "paid-error");
            }
        });

        $("#inputdate").on("input", function () {
            const input = $(this);
            if (!input.val()) {
                showError(input, "Date must be selected.", "date-error");
            } else {
                clearError(input, "date-error");
            }
        });

        $("#sbm").click(function (e) {
            e.preventDefault(); // Prevent form submission
            $("#staticname").trigger("input");
            $("#inputclass").trigger("input");
            $("#inputphone").trigger("input");
            $("#inputmail").trigger("input");
            $("#inputpass").trigger("input");
            $("#inputpasscon").trigger("input");
            $("#inputfees").trigger("input");
            $("#inputpaid").trigger("input");
            $("#inputdate").trigger("input");

            // Check if there are any errors
            if ($(".text-danger").length === 0) {
                // Do final email check before submit
                const email = $("#inputmail").val();
                $.ajax({
                    url: "http://localhost/eeeclasses/eeeclasses.info/stud_exists/index",
                    method: "post",
                    data: { stud_mail: email },
                    success: function (result) {
                        if (result === 'Exists') {
                            showError($("#inputmail"), "Email already exists.", "email-exists");
                        } else {
                            clearError($("#inputmail"), "email-exists");
                            $("form").submit();
                        }
                    },
                    error: function (xhr) {
                        alert(xhr.status + " " + xhr.statusText);
                    }
                });
            } else {
                alert("Please correct the highlighted errors before submitting.");
            }
        });
        $("#studphoto").change(function () {
            const file = this.files[0];
            if (!file) return;

            const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
            const fileName = file.name;

            if (!allowedExtensions.exec(fileName)) {
                alert("Only JPG, JPEG, and PNG files are allowed.");
                $(this).val(""); // Clear the input
                $(this).css("border-color", "red");
            } else {
                $(this).css("border-color", "#ced4da");
            }
        });
    });
</script>
