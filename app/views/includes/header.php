<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="e-Edge Education Classes(EEE Classes) is an institute for quality educations, dedication and devotion for the success in Board exams, Engineering and Medical competitive exams.">
    <meta name="keywords" content="eeeclasses, EEE Classes, e-Edge Education Centre, eEdge Education Center, Online Study, Online Coaching, Online classes in ghaziabad, Online Tuition in Ghaziabad, Online Classes in Delhi NCR">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $home; ?>icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $home; ?>icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $home; ?>icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $home; ?>icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $home; ?>icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $home; ?>icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $home; ?>icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $home; ?>icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $home; ?>icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $home; ?>icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $home; ?>icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $home; ?>icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $home; ?>icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo $home; ?>icons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $home; ?>icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo $home; ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $home; ?>js/script.js"></script>
    <!--[if lte IE 8]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->
</head>

<body>
    <header class="bg-white py-2 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6">
                    <a href="<?php echo $home; ?>"><img src="<?php echo $home; ?>img/logo/logo.png" alt="" id="header-logo" class="img-fluid"> <span class="text-dark fw-bold fs-4 d-none d-lg-inline-block">e-Edge Education Centre</span></a>
                </div>
                <div class="col-6 col-sm-6">
                    <div class="text-end my-4 dropdown">
                        <a href="javascript:void(0)" data-bs-toggle="dropdown" data-bs-target="#signin" class="dropdown-toggle btn align-middle btn-outline-primary d-none d-lg-inline-block">Users</a>
                        <ul class="dropdown-menu" id="signin" style="z-index:10000">
                            <?php
                            if (isset($_SESSION["student"])) {
                            ?>
                                <li><a href="<?php echo $home ?>student" class="dropdown-item">Student Profile</a></li>

                            <?php
                            } else {
                            ?>
                                <li><a href="<?php echo $home ?>student/login" class="dropdown-item">Student Login</a></li>
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($_SESSION["teacher"])) {
                            ?>
                                <li><a href="<?php echo $home ?>teacher" class="dropdown-item">Teacher Profile</a></li>
                            <?php
                            } else {
                            ?>
                                <li><a href="<?php echo $home ?>teacher/login" class="dropdown-item">Teacher Login</a></li>

                            <?php
                            }
                            ?>
                            <?php
                            if (isset($_SESSION["admin"])) {
                            ?>
                                <li><a href="<?php echo $home ?>admin" class="dropdown-item">Admin Profile</a></li>
                            <?php
                            } else {
                            ?>
                                <li><a href="<?php echo $home ?>admin/login" class="dropdown-item">Admin Login</a></li>

                            <?php
                            }
                            ?>
                        </ul>
                        <a href="tel:+91-7042280775" class="btn btn-outline-primary align-middle">Call Us Now: +91-7042280775</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-coral sticky-top">
        <div class="container py-0">
            <!-- <a href="<?php echo $home; ?>" class="navbar-brand d-block d-lg-none"><img src="<?php echo $home; ?>img/logo/eee-logo.png" alt="" style="filter:drop-shadow(5px 5px 3px #000)" id="header-logo" class="img-fluid"></a> -->
            <a href="<?php echo $home; ?>" class="navbar-brand d-block d-lg-none"><img src="<?php echo $home; ?>/img/logo/logo.png" alt="" style="filter:drop-shadow(5px 5px 3px #000)" id="header-logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="<?php echo $home; ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link fw-bold dropdown-toggle" href="javascript:void(0)" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                            <li><a href="<?php echo $home ?>course/competitive_classes" class="dropdown-item">Competitive Exam Courses</a></li>
                            <li><a href="<?php echo $home ?>crash_course" class="dropdown-item">Crash Course</a>
                            </li>
                            <li><a href="#" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Academic Courses</a>
                                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                    <li><a href="<?php echo $home ?>course/class12" class="dropdown-item">Class 12<sup>th</sup></a></li>
                                    <li><a href="<?php echo $home ?>course/class11" class="dropdown-item">Class 11<sup>th</sup></a></li>
                                    <li><a href="<?php echo $home ?>course/class10" class="dropdown-item">Class 10<sup>th</sup></a></li>
                                    <li><a href="<?php echo $home ?>course/class9" class="dropdown-item">Class 9<sup>th</sup></a></li>
                                    <li><a href="<?php echo $home ?>course/class7_8" class="dropdown-item">Class 7<sup>th</sup>-8<sup>th</sup></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo $home ?>course/iit_jee" class="dropdown-item">IIT-JEE Preparation</a></li>
                            <li><a href="<?php echo $home ?>course/neet" class="dropdown-item">NEET Preparation</a></li>
                            <li><a href="<?php echo $home; ?>course/ntse" class="dropdown-item">NTSE Preparation</a></li>
                            <li><a href="<?php echo $home; ?>course/kvpy" class="dropdown-item">Kishor Vaigyanik Protsahan Yojana</a></li>
                            <li><a href="#" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Subject Specific Classes</a>
                                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                    <li><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Class 12<sup>th</sup></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>course/class12/physics" class="dropdown-item">Physics</a></li>
                                            <li><a href="<?php echo $home ?>course/class12/chemistry" class="dropdown-item">Chemistry</a></li>
                                            <li><a href="" class="dropdown-item">Mathematics</a></li>
                                            <li><a href="<?php echo $home ?>course/class12/biology" class="dropdown-item">Biology</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Class 11<sup>th</sup></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>course/class11/physics" class="dropdown-item">Physics</a></li>
                                            <li><a href="<?php echo $home ?>course/class11/chemistry" class="dropdown-item">Chemistry</a></li>
                                            <li><a href="" class="dropdown-item">Mathematics</a></li>
                                            <li><a href="<?php echo $home ?>course/class11/biology" class="dropdown-item">Biology</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Class 10<sup>th</sup></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>course/class10#maths" class="dropdown-item">Mathematics</a></li>
                                            <li><a href="<?php echo $home ?>course/class10#science" class="dropdown-item">Science</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Class 9<sup>th</sup></a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>course/class9#maths" class="dropdown-item">Mathematics</a></li>
                                            <li><a href="<?php echo $home ?>course/class9#science" class="dropdown-item">Science</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Calculators</a>
                                <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                    <li><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Basic Calculator</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>calculator/basic/addition" class="dropdown-item">Addition</a></li>
                                            <li><a href="<?php echo $home ?>calculator/basic/subtraction" class="dropdown-item">Substraction</a></li>
                                            <li><a href="<?php echo $home ?>calculator/basic/multiplication" class="dropdown-item">Multiplication</a></li>
                                            <li><a href="<?php echo $home ?>calculator/basic/division" class="dropdown-item">Division</a></li>
                                            <li><a href="<?php echo $home ?>calculator/basic/square_root" class="dropdown-item">Square Root</a></li>
                                            <li><a href="<?php echo $home ?>calculator/basic/percentage" class="dropdown-item">Percentage</a></li>
                                            <li><a href="<?php echo $home ?>calculator/basic/profit_loss_calculator" class="dropdown-item">Profit/Loss Calculator</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Converter</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>calculator/converter/cm_to_m" class="dropdown-item">CM to M</a></li>
                                            <li><a href="<?php echo $home ?>calculator/converter/cm_to_km" class="dropdown-item">CM to KM</a></li>
                                            <li><a href="<?php echo $home ?>calculator/converter/ac_to_dc" class="dropdown-item">AC to DC Current</a></li>
                                            <li><a href="<?php echo $home ?>calculator/converter/inch_to_feet" class="dropdown-item">Inch to Feet</a></li>
                                            <li><a href="<?php echo $home ?>calculator/converter/m_to_km" class="dropdown-item">M to KM</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Area & Volume</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                            <li><a href="<?php echo $home ?>calculator/area" class="dropdown-item">Area</a></li>
                                            <li><a href="<?php echo $home ?>calculator/volume" class="dropdown-item">Volume</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home; ?>gallery">Gallery</a>
                    </li>
                            <li class="nav-item"><a href="<?php echo $home ?>about/about_us" class="nav-link fw-bold">About Us</a></li>
                            <li class="nav-item"><a href="<?php echo $home ?>about/team" class="nav-link fw-bold">Our Team</a></li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home ?>about/contact_us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home ?>feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home ?>notice_board">Notice Board<img src="<?php echo $home ?>img/logo/new-gif.gif" class="img-fluid" style="height:25px" alt=""></a>
                    </li>
                   <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home ?>online">Online Class<img src="<?php echo $home ?>img/logo/new-gif.gif" style="height:25px"></a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>