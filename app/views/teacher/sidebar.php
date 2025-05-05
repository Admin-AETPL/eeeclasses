<?php 
$det = $data[0]; // Assuming single teacher
?>

<div class="container-fluid py-3">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2">
            <div class="bg-white p-3 rounded shadow-sm">

                <!-- Teacher Info -->
                <!-- <div class="mb-4 text-center">
                    <div class="fw-bold text-uppercase text-primary mb-2"><?php echo $_SESSION["teacher"]; ?></div>
                </div> -->

                <!-- Navigation -->
                 <!-- Teacher Info -->
                <div class="mb-4 text-center">
                    <a href="<?php echo $home ?>teacher/" class="fw-bold text-uppercase text-primary mb-2 text-decoration-none d-block">
                        <?php echo $_SESSION["teacher"]; ?><!--redirection back to home by clicking on the -->
                    </a>
                </div>
                <div class="mb-4">
                    <h6 class="text-secondary mb-2">Menu</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-1">
                            <a href="<?php echo $home ?>teacher/upload/" 
                               class="nav-link px-3 py-2 rounded text-dark bg-light small fw-semibold">
                                Upload Notes
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Logout -->
                <div class="text-center">
                    <a href="<?php echo $home ?>teacher_users/logout" 
                       class="btn btn-outline-danger w-100">
                        Logout
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10">
            <!-- Place your main content here -->
