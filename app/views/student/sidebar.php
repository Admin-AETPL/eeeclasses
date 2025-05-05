<?php 
$det = $data[0]; // Assuming only one student
$subjects = explode(",", $det["subjects"]);
?>

<div class="container-fluid py-3">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2">
            <div class="bg-white p-3 rounded shadow-sm">

                <!-- Student Info -->
                <div class="mb-4 text-center">
                    <div class="fw-bold text-uppercase text-primary mb-2"><?php echo $_SESSION["student"]; ?></div>
                    <div class="text-muted">Class <?php echo $det["stud_class"]; ?></div>
                </div>

                <!-- Subject Navigation -->
                <div class="mb-4">
                    <h6 class="text-secondary mb-2">Subjects</h6>
                    <ul class="nav flex-column">
                        <?php foreach ($subjects as $subject): ?>
                            <li class="nav-item mb-1">
                                <a href="<?php echo $home ?>student/subject/<?php echo trim($det["stud_class"]); ?>/<?php echo trim($subject); ?>" 
                                   class="nav-link px-3 py-2 rounded text-dark bg-light small fw-semibold">
                                    <?php echo trim($subject); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Logout -->
                <div class="text-center">
                    <a href="<?php echo $home ?>student_users/logout" 
                       class="btn btn-outline-danger w-100">
                        Logout
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10">
            <!-- Place your main content here -->