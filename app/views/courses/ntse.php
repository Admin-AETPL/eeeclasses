<!DOCTYPE html>
<html lang="en">

<head>
    <title>EEE Classes - Kishor Vaigyanik Protsahan Yojana</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
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
<style>
    .nav-link {
        background: #1d4077;
        color: white;
    }
    .obj {
        transition: box-shadow 0.2s linear;
    }

    .obj:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        outline: 1px solid lightgray
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand fw-bold" style="color:#1d4077" href="<?php echo $home ?>"><img src="<?php echo $home ?>img/logo/eee-logo.png" style="height: 100px;" alt="" class="img-fluid"> <span class="d-none d-sm-none d-md-inline-block">e-Edge Education Centre</span></a> -->
        <a class="navbar-brand fw-bold" style="color:#1d4077" href="<?php echo $home ?>"><img src="<?php echo $home ?>/img/logo/logo.png" style="height: 100px;" alt="" class="img-fluid"> <span class="d-none d-sm-none d-md-inline-block">e-Edge Education Centre</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $home ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#objective">Objective</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#scholarship">Financial Aid</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#exam-pattern">Exam Pattern</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#eligibility-criteria">Eligibility</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="ncert bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 text-center">
                <img src="<?php echo $home ?>img/logo/ncert-dark-blue-logo.png" style="height:200px" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="bg-img bg-light">
    <div class="container-fluid p-0">
        <img src="<?php echo $home ?>img/background/graduation.png" alt="" class="img-fluid w-100">
    </div>
</div>
<div class="bg-white py-3" id="objective">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 my-2">
                <div class="bg-light p-3 obj">
                    <h4 class="h4 text-secondary">National Talent Search Exam</h4>
                    <p class="text-dark">NTSE exam is the National level scholarship program by Govt. of India and most venerated exam of India. It is not only about scholarship but a matter of great pride and honour for every student to be recognised as the nation’s talent.</p>
                    <p class="text-dark">The NTSE (National Talent Search Examination) examination is conducted every year at two levels – Stage I (State level) and Stage II (National Level).</p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-center table-dark">Stage I</td>
                                    <td class="text-center bg-white">State Level</td>
                                </tr>
                                <tr>
                                    <td class="text-center table-dark">Stage II</td>
                                    <td class="text-center bg-white">National Level</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 my-2">
                <div class="bg-light p-3 h-100 obj">
                    <h4 class="h4 text-secondary">Objective</h4>
                    <p class="text-dark">The National Council of Educational Research and Training (NCERT) was established
                        by the Government of India in the year 1961 with a view to bringing about qualitative
                        improvement in school education in the country.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light py-3" id="scholarship">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-secondary" id="objective">Scholarship</h4>
                <p class="text-dark">NTSE scholars are provided with the scholarship of Rs 1250 per month for Class XI and XII and Rs 2000 per month for graduation and higher studies by Indian government. Apart from this, being an NTSE scholar provides following benefits:</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-start">
                                    <p class="text-dark">
                                        • NDA National Defence Academy Exam organized by UPSC gives preference to NTSE scholars.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start">
                                    <p class="text-dark">• Renowned Engineering College for Information Technology such as IIIT-Hyderabad offers 15 seats to NTSE scholars. This institute is considered equivalent to IIT-Bombay.</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start">
                                    <p class="text-dark">• NTSE scholars will have upper edge in Foreign University admissions.</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start">
                                    <p class="text-dark">• Preference in various Public and Private sector Jobs.</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start">
                                    <p class="text-dark">• IIIT-Delhi, an Engineering College under Government of Delhi, gives ‘bonus marks’ to NTSE scholars.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-secondary text-start">Exam Syllabus</h4>
                <p class="text-dark">Syllabus of NTSE is based on 9th & 10th class level. For Stage 1, NTSE preparation should be state wise & for Stage 2, the preparation should be national level wise. Students are advised to go through each and every topic. NTSE consists of multiple choice questions which are asked from the subjects like Mathematics, Science, Social Science, English, General Knowledge and Mental Ability syllabus.</p>
            </div>
            <div class="col-sm-6 col-12 my-2 text-center">
            <h4 class="h4 text-secondary text-center my-2">SAT</h4>
            <p class="text-dark text-start">SAT is designed to test the student’s grasp and hold over the academic subjects. SAT has 100 questions, from the subject, Social studies, Maths, and Science of class 9th and 10th. It’s always suggested to work more on theory rather than doubling down on the numerical.</p>
                <img src="<?php echo $home ?>img/logo/sat-syl.png" alt="" style="filter:drop-shadow(5px 5px 5px #000 );height:400px" class="d-none d-sm-block mx-auto img-fluid">
                <img src="<?php echo $home ?>img/logo/sat-syl.png" alt="" style="filter:drop-shadow(5px 5px 5px #000 );" class="d-block mx-auto d-sm-none img-fluid">
            </div>
            <div class="col-sm-6 col-12 my-2 text-center">
            <h4 class="h4 text-secondary text-center my-2">MAT</h4>
            <p class="text-dark text-start">MAT is designed to test, Student’s IQ. MAT has the number of categories, like non-verbal series, Coding-decoding etc. Obviously, MAT requires more practice than anything else. It can be a game changer in the NTSE Test.</p>
                <div class="table-responsive">
                    <table class="table table-bordered" style="filter:drop-shadow(5px 5px 5px #000 );">
                        <tbody>
                            <tr>
                                <td style="background-color: #1d4077;color:#f8f9fa">Verbal and Non-Verbal Analogy</td>
                                <td class="bg-light" style="color:#1d4077">Verbal and Non-Verbal Series</td>
                            </tr>
                            <tr>
                                <td class="bg-light" style="color:#1d4077">Classification</td>
                                <td style="background-color: #1d4077;color:#f8f9fa">Coding-Decoding</td>
                            </tr>
                            <tr>
                            <td style="background-color: #1d4077;color:#f8f9fa">Distance and Direction</td>
                                <td class="bg-light" style="color:#1d4077">Blood-Relations</td>
                            </tr>
                            <tr>
                            <td class="bg-light" style="color:#1d4077">Alphabet and Nubmer Test</td>
                                <td style="background-color: #1d4077;color:#f8f9fa">Ranking and Arrangements</td>
                            </tr>
                            <tr>
                            <td style="background-color: #1d4077;color:#f8f9fa">Venn Diagrams</td>
                                <td class="bg-light" style="color:#1d4077">Mathematical Operations</td>
                            </tr>
                            <tr>
                            <td class="bg-light" style="color:#1d4077">Calendar, Time and Clock</td>
                                <td style="background-color: #1d4077;color:#f8f9fa">Missing-Characters</td>
                            </tr>
                            <tr>
                            <td style="background-color: #1d4077;color:#f8f9fa">Embedded Figures</td>
                                <td class="bg-light" style="color:#1d4077">Paper Cutting and Folding</td>
                            </tr>
                            <tr>
                            <td class="bg-light" style="color:#1d4077">Cube and Dice</td>
                                <td style="background-color: #1d4077;color:#f8f9fa">Word Problems</td>
                            </tr>
                            <tr>
                            <td style="background-color: #1d4077;color:#f8f9fa">Water and Mirror Images</td>
                                <td class="bg-light" style="color:#1d4077"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light py-3" id="exam-pattern">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 my-2">
                <h4 class="h4 text-secondary">Exam Pattern</h4>
                
                <p class="text-dark">The NTSE is conducted in two stages i.e. Stage I and Stage II. The NTSE paper is available in both the Hindi and English medium. The students have to select any one language from both the languages. The paper is divided into two sections i.e. Mental Ability Test (MAT), and Scholastic Ability Test (SAT).</p>

            </div>
            <div class="col-12 col-sm-12 my-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-start fw-bold">MAT (Mental Ability Tests)</td>
                                <td class="text-center bg-light">100 Questions</td>
                                <td class="text-center bg-light">120 Minutes</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">SAT (Scholastic Ability Tests)</td>
                                <td class="text-center bg-light">100 Questions</td>
                                <td class="text-center bg-light">120 Minutes</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-12 col-sm-12 my-2">
                <div class="bg-light p-3 h-100 obj">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="text-start">
                                        <p class="text-dark">
                                            • The paper is comprised of Objective type multiple choice questions.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        <p class="text-dark">• The examination is conducted through the offline mode only.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        <p class="text-dark">• For every correct answer, 1 mark will be given and there is no negative marking at stage 1 and stage 2.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        <p class="text-dark">• Reserved category candidates have to secure 32% marks to qualify the test, whereas general category candidates have to secure 40% marks to qualify the test.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-3" id="eligibility-criteria">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-secondary" id="objective">Eligibility Criteria</h4>
                <p class="text-dark">According to the criteria laid out by CBSE, NTSE is open for the students of Indian nationality irrespective of whether they study in India or abroad at class X level.</p>
                <p class="text-dark">-Candidates studying in India will be selected on the basis of their screening examination will be eligible for NTSE.</p>
                <p class="text-dark">-Candidates studying Abroad having Indian Nationality are eligible. They are exempted from the first level and are permitted to appear directly at the second level examination. Click here for more details about NTSE eligibility criteria.</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-start fw-bold">NTSE Eligibility Criteria (Stage 1)</td>
                                <td class="text-start">
                                    <p class="text-dark">
                                        • Candidate must have scored a minimum of 60% marks in Class IX. The candidate must be of recognized school in the respective State or Union Territory.
                                    </p>
                                    <p class="text-dark">
                                        • The Open Distance Learning (ODL) program students will also be considered eligible if they are below 18 years of age as on July 1, YYYY(the same year in which candidate giving the exam) and are not employed when they appear for Class X examination.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">NTSE Eligibility Criteria (Stage 2)</td>
                                <td class="text-start">
                                    <p class="text-dark">• Only students who manage to clear NTSE Stage I will be eligible for NTSE Stage II examination.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-secondary my-2">NTSE Highlights</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-start fw-bold">Conducting Body</td>
                                <td class="text-start">NCERT (National Council of Education Research and Training)</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">Mode</td>
                                <td class="text-start">Offline</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">Medium</td>
                                <td class="text-start">Hindi and English</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">Duration</td>
                                <td class="text-start">120 Minutes ( For each part)</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">Type & Number of Questions</td>
                                <td class="text-start">Objective Type Questions (Stage 1: 200 Questions), (Stage 2: 200 Questions)</td>
                            </tr>
                            <tr>
                                <td class="text-start fw-bold">Sections</td>
                                <td class="text-start">2 (Mental Ability Test and Scholastic Ability Test)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>