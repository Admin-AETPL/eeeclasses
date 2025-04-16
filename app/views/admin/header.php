<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo $home; ?>css/admin-style.css">
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

<body class="h-100">
    <header class="bg-light py-2">
        <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid py-0">
            <a href="<?php echo $home; ?>" class="navbar-brand"><img src="<?php echo $home; ?>img/logo/eee-logo.png" alt="" id="header-logo" class="img-fluid"> <span class="text-dark fw-bold fs-4 d-none d-lg-inline-block">e-Edge Education Centre</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
                            <li><a href="#" class="dropdown-item dropdown-toggle" id="navbardropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Subject Specefic Classes</a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold dropdown-toggle" href="javascripit:void(0)" id="aboutdropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu" aria-labelledby="aboutdropdown">
                            <li><a href="<?php echo $home ?>about/about_us" class="dropdown-item">About Us</a></li>
                            <li><a href="<?php echo $home ?>about/team" class="dropdown-item">Our Team</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home ?>about/contact_us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="<?php echo $home ?>feedback">Feedback</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
                    
         
        </div>
    </header>