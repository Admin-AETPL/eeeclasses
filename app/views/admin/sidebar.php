<div class="sidebar py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <!-- Dashboard link -->
                <div class="text-center mb-2">
                    <a style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379; transition: all 0.3s;" 
                    href="<?php echo $home ?>admin" 
                    class="btn w-100"
                    onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" 
                    onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                    DASHBOARD
                    </a>
                </div>
                <!-- <a class="h5 text-coral bg-white border border-1 py-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>admin">Dashboard</a> -->

                <!-- Teacher Info with Redirection -->
                <div class="mb-4 text-center">
                <div class="mb-4 text-center">
                    <?php if (isset($_SESSION["teacher"])): ?>
                        <a href="<?php echo $home ?>teacher/" class="fw-bold text-uppercase text-primary mb-2 text-decoration-none d-block">
                            <?php echo $_SESSION["teacher"]; ?>
                        </a>
                    <?php else: ?>
                        <p class="text-danger"></p>
                    <?php endif; ?>
                </div>
                </div>

                <!-- Students Section -->
                <h5 class="h5 text-coral">Students</h5>
                <nav class="navbar bg-white d-inline-block p-3 w-100 border border-1 navbar-light" style="border-radius: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/students" class="nav-link">View Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/add_student" class="nav-link">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/update_student" class="nav-link">Update Student Details</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/delete_student" class="nav-link">Delete Student</a>
                        </li>
                    </ul>
                </nav>

                <!-- Teachers Section -->
                <h5 class="h5 text-coral">Teachers</h5>
                <nav class="navbar bg-white d-inline-block p-3 w-100 border border-1 navbar-light" style="border-radius: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/teachers" class="nav-link">View Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/add_teacher" class="nav-link">Add Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/update_teacher" class="nav-link">Update Teacher's Detail</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo $home ?>admin/delete_teacher" class="nav-link">Delete Teacher</a>
                        </li>
                    </ul>
                </nav>

                <!-- Additional Links -->
                <div class="text-center mt-3 mb-2">
                    <a style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379; transition: all 0.3s;" 
                    href="<?php echo $home ?>admin/feedback" 
                    class="btn w-100"
                    onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" 
                    onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                    User's Feedback
                    </a>
                </div>
                <div class="text-center mb-2">
                    <a style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379; transition: all 0.3s;" 
                    href="<?php echo $home ?>admin/question" 
                    class="btn w-100"
                    onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" 
                    onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                    Questions
                    </a>
                </div>


                <!-- <a class="h5 text-coral bg-white border border-1 py-2 my-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>admin/feedback">User's Feedback</a> -->
                <!-- <a class="h5 text-coral bg-white border border-1 py-2 my-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>admin/question">Questions</a> -->
                
                <!-- Logout -->
                <div class="text-center">
                    <a style="border-radius: 20px; background-color: white; border-color: #F88379; color: #F88379; transition: all 0.3s;" 
                    href="<?php echo $home ?>admin_users/logout" 
                    class="btn w-100"
                    onmouseover="this.style.backgroundColor='#F88379'; this.style.color='white';" 
                    onmouseout="this.style.backgroundColor='white'; this.style.color='#F88379';">
                    Logout
                    </a>
                </div>
            </div>


            <div class="col-md-10">
                <!-- Main content goes here -->
