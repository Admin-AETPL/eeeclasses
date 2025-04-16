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
                        <th scope="col">Teacher Photo</th>
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
                    foreach ($data as $det) {
                    ?>
                        <tr>
                            <td><?php echo $i;  ?></td>
                            <td class="text-center"><img src="<?php echo $home.$det["teacher_photo"]; ?>" style="height:125px" alt="" class="img-fluid imghover"></td>                        
                            <td class="sid"><?php echo $det["teacher_id"]; ?></td>
                            <td class="sname"><?php echo $det["teacher_name"]; ?></td>
                            <td class="phone"><?php echo $det["teacher_phone"]; ?></td>
                            <td class="smail"><?php echo $det["teacher_mail"]; ?></td>
                            <td class="spass"><?php echo $det["teacher_pass"]; ?></td>
                            <td class="text-center"><button class="btn btn-primary text-white upd" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update</button></td>
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
    $(document).ready(function() {
        $("#cls").change(function() {
            $("#uniqcls").submit();
        });
        $(".upd").click(function() {
            var sid = $(this).parent().parent("tr").children("td.sid").text();
            var sname = $(this).parent().parent("tr").children("td.sname").text();
            var sclass = $(this).parent().parent("tr").children("td.sclass").text();
            var sphone = $(this).parent().parent("tr").children("td.phone").text();
            var smail = $(this).parent().parent("tr").children("td.smail").text();
            var spass = $(this).parent().parent("tr").children("td.spass").text();
            var subj = $(this).parent().parent("tr").children("td.subj").text();
            var sfees = $(this).parent().parent("tr").children("td.sfees").text();
            var spaid = $(this).parent().parent("tr").children("td.spaid").text();
            $("#inputid").attr("value", sid);
            $("#staticname").attr("value", sname);
            $("#inputclass").attr("value", sclass);
            $("#inputphone").attr("value", sphone);
            $("#inputpass").attr("value", spass);
            $("#inputsubj").attr("value", subj);
            $("#inputfees").attr("value", sfees);
            $("#inputpaid").attr("value", spaid);
        })
        $("#inputclass").keyup(function() {
            var cls = $("#inputclass").val();
            if (cls <= 10) {
                $("#subj").css("display", "none");
                $("#inputsubj").css("display", "none");
                $("#inputsubj").attr("value", "all");
            } else {
                $("#subj").css("display", "block");
                $("#inputsubj").css("display", "block");
                $("#inputsubj").attr("value", "");
            }
        });
        $("#inputpaid").focusout(function() {
            var sfees = $("#inputfees").val();
            var spaid = $("#inputpaid").val();
            if (Number(spaid.trim()) > Number(sfees.trim())) {
                alert("Paid Fees cannot be greater than total fees");
                $("#inputpaid").css("border-color", "red");
            } else {
                $("#inputpaid").css("border-color", "#ced4da");
            }
        });
        $("#sbm").click(function() {
            var sname = $("#staticname").val();
            var sclass = $("#inputclass").val();
            var sphone = $("#inputphone").val();
            var smail = $("#inputmail").val();
            var spass = $("#inputpass").val();
            var spasscon = $("#inputpasscon").val();
            var sfees = $("#inputfees").val();
            var spaid = $("#inputpaid").val();
            var sdate = $("#inputdate").val();
            if (sname.trim() == '' || sclass.trim() == '' || sphone.trim() == '' || smail.trim() == '' || spass.trim() == '' || spasscon.trim() == '' || sfees.trim() == '' || spaid.trim() == '') {
                alert("Field(s) cannot be empty");
                return false;
            }
            if (Number(spaid.trim()) > Number(sfees.trim())) {
                alert("Paid Fees cannot be greater than Total Fees");
                return false;
            }
        });
    })
</script>