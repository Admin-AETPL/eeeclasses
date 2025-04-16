<div class="container">
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="admin bg-light p-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-12">
                            <?php
                            foreach($data as $det)
                            {
                            ?>
                            <img src="<?php echo $home.$det["stud_photo"] ?>" alt="" class="img-fluid rounded">
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-4 col-10">
                            <?php
                            foreach($data as $det)
                            {
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-end fw-bold">Name:</td>
                                            <td class="text-start"><?php echo $det["stud_name"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Student ID:</td>
                                            <td class="text-start"><?php echo $det["stud_id"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Class:</td>
                                            <td class="text-start"><?php echo $det["stud_class"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Subjects:</td>
                                            <td class="text-start"><?php echo $det["subjects"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Phone:</td>
                                            <td class="text-start"><?php echo $det["stud_phone"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Email:</td>
                                            <td class="text-start"><?php echo $det["stud_mail"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Total Fees:</td>
                                            <td class="text-start"><?php echo $det["total_fees"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Paid Fees:</td>
                                            <td class="text-start"><?php echo $det["paid_fees"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Fees Status:</td>
                                            <td class="text-start"><?php echo $det["fees_status"] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="text-end fw-bold">Enrollment Date:</td>
                                            <td class="text-start"><?php echo $det["stud_enroll"] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>