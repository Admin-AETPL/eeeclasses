<?php
foreach ($data as $det) {
    $detail[] = $det;
}
?>
<div class="sidebar py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <a class="h5 text-coral bg-white border border-1 py-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>teacher"><?php echo $_SESSION["teacher"] ?></a>
                <nav class="navbar bg-white d-inline-block p-3 w-100 border border-1 navbar-light" style="border-radius: 20px;">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="<?php echo $home ?>teacher/upload/" class="nav-link">Upload Notes</a>
                        </li>

                    </ul>
                </nav>
                <a class="h5 text-coral bg-white border border-1 py-2 my-2 px-3 d-block" style="border-radius: 20px;" href="<?php echo $home ?>teacher_users/logout">Logout</a>
            </div>
            <div class="col-md-10">