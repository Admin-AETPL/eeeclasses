<style>
    #subj {
        display: none
    }

    #inputsubj {
        display: none
    }
</style>
<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="addstudent p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-sencondary text-start">Add Teacher</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1">
                        <a href="<?php echo $home ?>admin/teachers" class="btn btn-success text-white">View</a>
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
        <br>
        <form method="POST" action="<?php echo $home ?>admin_teachers/add" enctype="multipart/form-data">
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
                <label for="inputfile" class="col-sm-2 col-form-label">Teacher's Photo<sup class="text-danger">*</sup></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputfile" name="studphoto" required>
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
        $(document).ready(function() {
            $("#inputpasscon").focusout(function() {
                var spass = $("#inputpass").val();
                var spasscon = $("#inputpasscon").val();
                if (spass.trim() != spasscon.trim()) {
                    alert("Passwords do not match");
                    $("#inputpasscon").css("border-color", "red");
                } else {
                    $("#inputpasscon").css("border-color", "#ced4da");
                }
            });
            $("#sbm").click(function() {
                var sname = $("#staticname").val();
                var sphone = $("#inputphone").val();
                var smail = $("#inputmail").val();
                var spass = $("#inputpass").val();
                var spasscon = $("#inputpasscon").val();
                if (sname.trim() == '' || sphone.trim() == '' || smail.trim() == '' || spass.trim() == '' || spasscon.trim() == '') {
                    alert("Field(s) cannot be empty");
                    return false;
                }
                if (spass.trim() != spasscon.trim()) {
                    alert("Passwords do not match");
                    return false;
                }
                
                $.ajax({
                    url: "https://eeeclasses.info/teacher_exists/index",
                    method: "post",
                    data: "stud_mail=" + smail,
                    success: function(result) {
                        if (result == 'Exists') {
                            return false;
                        } else {
                            return true;
                        }
                    },
                    error: function(xhr) {
                        alert(xhr.status + " " + xhr.statusText)
                    }
                })
            });
            $("#inputmail").focusout(function() {
                var smail = $("#inputmail").val();
                $.ajax({
                    url: "https://eeeclasses.info/teacher_exists/index",
                    method: "post",
                    data: "stud_mail=" + smail,
                    success: function(result) {
                        if (result == 'exists') {
                            $("#inputmail").css("border-color", "red");
                        } else {
                            $("#inputmail").css("border-color", "#ced4da");
                        }
                    },
                    error: function(xhr) {
                        alert(xhr.status + " " + xhr.statusText)
                    }
                })
            })
        })
    </script>