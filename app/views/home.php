<div class="slider py-3">
    <div class="container p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active bg-dark">
                    <div class="d-none d-sm-block">
                        <img src="<?php echo $home ?>img/background/eee-lg-slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="d-block d-sm-none">
                        <img src="<?php echo $home ?>img/background/eee-slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-item bg-white">
                    <img src="<?php echo $home ?>img/background/eee-lg-slide2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item bg-dark">
                    <img src="<?php echo $home ?>img/background/eee-lg-slide3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item bg-dark">
                    <img src="<?php echo $home ?>img/background/eee-lg-slide4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>-->
        </div>
    </div>
</div>
<div class="welcome-to-eee py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 p-4">
                <div class="border border-1 p-4 bg-small-screen-white shadow">
                    <h2 class="h2 text-coral text-uppercase">Welcome to e-Edge Education Centre</h2>
                    <h6 class="h6 text-danger text-uppercase">A PREMIER INTITUTE FOR ENGINEERING AND MEDICAL ENTRANCE</h6>
                    <p class="text-start text-secondary">e-Edge Education Classes (eee c) is an institute for quality educations, dedication and devotion for the success in Board exams, Engineering and Medical competitive exams. The primary focus of the e-Edge Education Classes is to enable each student to achieve success in IIT / UPSEAT & NEET etc. entrance examinations and other reputed colleges for Engineering and Medical.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-none d-lg-block"></div>
        </div>
    </div>
</div>
<div class="programs bg-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="program-header">
                    <h3 class="h3 text-center text-coral">Our Programs</h3>
                    <p class="text-dark">e-Edge Education offers competative and academic programme aimed at students of the classes 7th, 8th, 9th and 10th and so on. This programme focuses on strengthening the student's conceptual clarity of the fundamentals in Mathematics, Physics and Chemistry.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 mx-auto">
                <a href="<?php echo $home ?>course/competitive_classes">
                    <div class="program p-4 text-center shadow my-1">
                        <h3 class="h3 text-center">Competitive Classes</h3>
                        <p class="text-start">
                            e-Edge Education offers a comprehensive training programme to help students prepare for Competative exams of engineering (IIT-JEE, AIEEE, UPTECH), medical(NEET).....
                        </p>
                        <a href="<?php echo $home ?>course/competitive_classes" class="btn bg-coral text-white">Know More</a>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 mx-auto">
                <a href="<?php echo $home ?>course/academic_classes">
                    <div class="program p-4 text-center shadow my-1">
                        <h3 class="h3 text-center">Academic Classes</h3>
                        <p class="text-start">
                            e-Edge Education offers a coaching programme to help students prepare for academic exams of VII, VIII, IX, & XI and special programme for board preparation of X & XII...
                        </p>
                        <a href="<?php echo $home ?>course/academic_classes" class="btn bg-coral text-white">Know More</a>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="online-class py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 py-4 text-center">
                <img src="<?php echo $home ?>img/background/online-class.png" class="img-fluid" alt="e-Edge Education Classes" loading="lazy" >
            </div>
            <div class="col-12 col-sm-6 py-4 d-none d-sm-block" style="position: relative;">
                <div class="text-center w-100" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                    <h2 class="h2 text-coral fw-bold">e-Edge Education Online</h2>
                    <p class="text-dark text-start">Corona Fever? We got you covered!</p>
                    <p class="text-dark text-start">Don't let this pandemic affect your career. With our interactive classes and online lectures, continue your studies with comfort at home.</p>
                    <button class="btn bg-coral text-white fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Watch a Demo!</button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-coral" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/V6KjDB8djYI" width="100%" height="315px" type="text/html" frameborder="0"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-coral text-white" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 py-4 d-block d-sm-none">
                <div class="text-center w-100">
                    <h2 class="h2 text-coral fw-bold">e-Edge Education Online</h2>
                    <p class="text-dark text-start">Corona Fever? We got you covered!</p>
                    <p class="text-dark text-start">Don't let this pandemic affect your career. With our interactive classes and online lectures, continue your studies with comfort at home.</p>
                    <button class="btn bg-coral text-white fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Watch a Demo!</button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-coral" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/V6KjDB8djYI" width="100%" height="315px" type="text/html" frameborder="0"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-coral text-white" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white classes py-4">
    <div class="container">
        <div class="row bg-light rounded-3">
            <div class="col-12 col-sm-12">
                <p class="text-center"><span class="text-white bg-coral fs-3 px-3 rounded-bottom">Classes</span></p>
            </div>
            <div class="col-6 col-sm-4 col-md-2 py-4">
                <div class="classno text-center">
                    <h1 class="display-1 text-center text-primary">7<sup>th</sup></h1>
                    <a href="<?php echo $home ?>course/class7_8" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 py-4">
                <div class="classno text-center">
                    <h1 class="display-1 text-center text-primary">8<sup>th</sup></h1>
                    <a href="<?php echo $home ?>course/class7_8" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 py-4">
                <div class="classno text-center">
                    <h1 class="display-1 text-center text-primary">9<sup>th</sup></h1>
                    <a href="<?php echo $home ?>course/class9" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 py-4">
                <div class="classno text-center">
                    <h1 class="display-1 text-center text-primary">10<sup>th</sup></h1>
                    <a href="<?php echo $home ?>course/class10" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 py-4">
                <div class="classno text-center">
                    <h1 class="display-1 text-center text-primary">11<sup>th</sup></h1>
                    <a href="<?php echo $home ?>course/class11" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-2 py-4">
                <div class="text-center">
                    <h1 class="display-1 text-center text-primary">12<sup>th</sup></h1>
                    <a href="<?php echo $home ?>course/class12" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white classes py-4">
    <div class="container">
        <div class="row bg-light rounded-3">
            <div class="col-12 col-sm-12">
                <p class="text-center"><span class="text-white bg-coral fs-3 px-3 rounded-bottom">IIT-JEE/NEET Preparation</span></p>
            </div>
            <div class="col-6 col-sm-6 py-4">
                <div class="classno text-center">
                    <img src="<?php echo $home ?>img/background/engineering.png" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid w-50">
                    <h1 class="h1 text-center text-primary">IIT-JEE</h1>
                    <a href="<?php echo $home ?>course/iit_jee" class="btn btn-primary">View</a>
                </div>
            </div>
            <div class="col-6 col-sm-6 py-4">
                <div class="text-center">
                    <img src="<?php echo $home ?>img/background/medical.png" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid w-50">
                    <h1 class="h1 text-center text-primary">NEET</h1>
                    <a href="<?php echo $home ?>course/neet" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white classes py-4">
    <div class="container">
        <div class="row bg-light rounded-3">
            <div class="col-12 col-sm-12">
                <a href="<?php echo $home ?>course/ntse"><p class="text-center"><span class="text-white bg-coral fs-3 px-3 rounded-bottom">NTSE Preparation</span></p></a>
            </div>
            <div class="col-md-1 d-none d-sm-none d-md-block"></div>
            <div class="col-12 col-sm-12 col-md-5 py-4 order-2 order-sm-2 order-md-1">
                <div class="text-center my-4">
                    <h1 class="h1 text-start text-primary">NTSE Preparation</h1>
                    <p class="text-start text-dark">NTSE exam is the National level scholarship program by Govt. of India and most venerated exam of India. It is not only about scholarship but a matter of great pride and honour for every student to be recognised as the nation’s talent. The NTSE (National Talent Search Examination) examination is conducted every year at two levels – Stage I (State level) and Stage II (National Level). NTSE Stage I is conducted by States and NTSE Stage II is conducted by NCERT...</p>
                    <a href="<?php echo $home ?>course/ntse" class="btn btn-primary">Know More</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 py-4 order-1 order-sm-1 order-md-2">
                <div class="text-center">
                <a href="<?php echo $home ?>course/ntse"><img src="<?php echo $home ?>img/logo/ncert-logo.png" alt="e-Edge Education Classes" loading="lazy"  style="height:350px" class="img-fluid"></a>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="bg-white classes py-4">
    <div class="container">
        <div class="row bg-dark">
            <div class="col-12 col-lg-6 p-0">
                <img src="<?php echo $home ?>img/background/ews.jpg" alt="e-Edge Education Classes" loading="lazy"  class="h-100 img-fluid">
            </div>
            <div class="col-12 col-lg-6 py-2">
                <div class="ews-text">
                    <h3 class="h3 text-coral text-center">Free Coaching to EWS Students</h3>
                    <p class="text-white text-start fs-6">EEE Classes provides free coaching to economically weaker & specially abled students
                        under 'Central Sector Scheme of Free Coaching for SC and OBC Students'.</p>
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12 col-sm-6 my-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 col-sm-4 p-0">
                                            <img src="<?php echo $home ?>img/background/mentoring.png" style="height: 75px;" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid">
                                        </div>
                                        <div class="col-8 col-sm-8" style="position: relative;">
                                            <p class="text-white fs-4 fw-bold" style="position: absolute;top:50%;left:0;transform:translate(0, -50%)">Mentoring</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 my-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 col-sm-4 p-0">
                                            <img src="<?php echo $home ?>img/background/career.png" style="height: 75px;" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid">
                                        </div>
                                        <div class="col-8 col-sm-8" style="position: relative;">
                                            <p class="text-white fs-4 fw-bold" style="position: absolute;top:50%;left:0;transform:translate(0, -50%)">Career Guidance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 my-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 col-sm-4 p-0">
                                            <img src="<?php echo $home ?>img/background/pdp.png" style="height:75px" style="" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid">
                                        </div>
                                        <div class="col-8 col-sm-8" style="position: relative;">
                                            <p class="text-white fs-4 fw-bold" style="position: absolute;top:50%;left:0;transform:translate(0, -50%)">Personality Development</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white classes py-4">
    <div class="container">
        <div class="row rounded-3" style="background: url('<?php echo $home ?>img/background/science.jpg') center no-repeat;background-size:cover">
            <div class="col-12 col-sm-12 pt-4 pb-2 text-center">
                <a href="<?php echo $home ?>course/kvpy"><img src="<?php echo $home ?>img/background/kvpy-logo.png" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid"></a>
            </div>
            <div class="col-12 col-sm-12">
                <div class="classno text-center my-2 py-4">
                    <a href="<?php echo $home ?>course/kvpy" class="btn btn-primary">Know More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-3" style="background-color: #97dcdf;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 h-100">
                <img src="<?php echo $home ?>img/background/ask.gif" alt="e-Edge Education Classes" loading="lazy"  class="img-fluid">
            </div>
            <div class="col-sm-6 col-12">
                <h4 class="h4 text-white text-center">Got a question? Ask here!</h4>
                <div class="p-2">
                    <form action="<?php echo $home ?>feedback/question" method="POST">
                        <div class="form-group">
                            <label for="feedname">Enter Your Name<sup class="text-danger fw-bold">*</sup> </label>
                            <input type="text" class="form-control" placeholder="e.g. Peter" id="feedname" name="feedname" required>
                        </div>
                        <div class="form-group">
                            <label for="feedphone">Enter Your Whatsapp Number<sup class="text-danger fw-bold">*</sup> </label>
                            <input type="tel" class="form-control" id="feedphone" minlength="10" maxlength="10" placeholder="Please don't add 0 or +91 before number" name="feedphone" required>
                        </div>
                        <div class="form-group">
                            <label for="feedmail">Enter Your Email<sup class="text-danger fw-bold">*</sup> </label>
                            <input type="email" class="form-control" id="feedmail" placeholder="e.g. test@mail.com" name="feedmail" required>
                        </div>
                        <div class="form-group">
                            <label for="feedback">Enter Your Question<sup class="text-danger fw-bold">*</sup> </label>
                            <textarea type="text" style="height: 250px;resize:none" class="form-control" id="feedback" name="feedback" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .topper {
        margin: 0 5px;
    }

    .card {
        width: 17rem;
        border: 0;
        background: transparent
    }

    .card-body {
        padding: 0;
        text-align: center;
        margin: 5px 0;
    }

    .card-img-top {
        border-radius: 50%;
        height: 200px;
        width: 200px;
        margin: 0 auto;
    }
</style>
<div class="review10 bg-light pt-1 pb-4 d-none d-sm-none d-md-block">
    <div class="container">
        <div class="row">
            <h4 class="h4 text-coral text-center my-2">Our Shining Stars</h4>
            <div class="col-12 col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div id="carouselExampleIndicators2" class="carousel carousel-dark slide" data-bs-interval="4000" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/vyakhya10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Vyakhya Agrawal</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-100, Science-100</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/sankalp10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Sankalp</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths - 99, Science- 95</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/aviral10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Aviral</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-99, Science-90</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card border-0">
                                                        <img src="<?php echo $home; ?>img/toppers/sannidhi10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Sannidhi Agarwal</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-97</p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/saumil10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Saumil</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-96, Science-91</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/aakash10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Aakash Chaudhary</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-95,Science-95</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/ananya10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Ananya Verma</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-95, Science-95</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card border-0">
                                                        <img src="<?php echo $home; ?>img/toppers/kritak10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Kritak Patel</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-95</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/sakshi10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Sakshi Verma</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-95</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/shubhreeka10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Shubhreeka Saxena</h5>
                                                            <p class="card-subtitle mb-2 text-muted">Maths-94, Science-90</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-3">
                                                    <div class="card">
                                                        <img src="<?php echo $home; ?>img/toppers/nishita10.jpg" alt="e-Edge Education Classes" loading="lazy"  class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-dark">Nishita Chandra</h5>
                                                            <p class="card-subtitle mb-2 text-muted">English-98, IT-91</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" style="left:-120px !important;" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" style="right:-120px !important;" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>