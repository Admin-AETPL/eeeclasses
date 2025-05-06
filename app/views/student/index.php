<style>
    /* Reduce padding inside table cells */
    .p-05 {
        padding: 0.25rem !important;
    }

    /* Button styling */
    .custom-btn {
        background-color: #007bff; /* Bootstrap primary blue */
        color: #fff;
        border: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #0056b3; /* Darker blue for contrast */
        color: #fff;
        text-decoration: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="admin bg-light p-3 text-start">
                <div class="container">
                    <div class="row">
                        <?php foreach ($data as $det): ?>
                            <div class="col-sm-2 col-12 mb-2">
                                <img src="<?php echo $home . $det['stud_photo']; ?>" alt="Student Photo" class="img-fluid rounded">
                            </div>
                            <div class="col-sm-10 col-12 d-flex flex-column justify-content-between">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm mb-2 text-start">
                                        <tbody>
                                            <tr><td class="fw-bold p-05">Name:</td><td class="p-05"><?php echo $det['stud_name']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Student ID:</td><td class="p-05"><?php echo $det['stud_id']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Class:</td><td class="p-05"><?php echo $det['stud_class']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Subjects:</td><td class="p-05"><?php echo $det['subjects']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Phone:</td><td class="p-05"><?php echo $det['stud_phone']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Email:</td><td class="p-05"><?php echo $det['stud_mail']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Total Fees:</td><td class="p-05"><?php echo $det['total_fees']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Paid Fees:</td><td class="p-05"><?php echo $det['paid_fees']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Fees Status:</td><td class="p-05"><?php echo $det['fees_status']; ?></td></tr>
                                            <tr><td class="fw-bold p-05">Enrollment Date:</td><td class="p-05"><?php echo $det['stud_enroll']; ?></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end gap-2 mt-auto">
                                    <a href="subject_test.php?student_id=<?php echo $det['stud_id']; ?>" class="btn custom-btn">Subject-wise Test</a>
                                    <a href="full_test.php?student_id=<?php echo $det['stud_id']; ?>" class="btn custom-btn">Full Subject Test</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>