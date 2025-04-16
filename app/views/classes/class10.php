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
<div class="class78 bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 order-2 order-lg-1 order-sm-1">
                <section class="header">
                    <h3 class="h3 text-start text-dark">EEE Foundation</h3>
                    <p class="fs-5 text-start text-secondary">Focusing Class 10<sup>th</sup></p>
                    <p class="text-muted text-start">Specialised in:<br>
                        <span class="subjects">Mathematics</span>
                        <span class="subjects">Science</span>
                        <span class="subjects">Analytical Reasoning</span>
                    </p>
                </section>
                <section class="points">
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Specially designed study material as per latest CBSE norms</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Unlimited DOUBT Solving Classes for FREE!</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Complete Conceptual Understanding</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Foundation Course for Competitive Exams (IIT-JEE/NEET/KVPY)</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Comprehensive Study Material for Competitive Exams</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Special Preparation for Board Exams</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Test Series for Practice on every 15 days</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Logical & Analytical Reasoning Classes for Competitive Exams</p>
                </section>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 order-1 order-lg-2 order-sm-2 py-4">
                <img src="<?php echo $home ?>img/background/class10-trigonometry.jpg" alt="" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</div>
<div class="class78specs bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h3 class="h3 text-dark text-center">Course Features</h3>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 my-1">
                <div class="specs bg-dark py-2 px-3 border border-secondary rounded border-1">
                    <h4 class="h4 text-center text-coral border-bottom border-1 py-1"><i class="fas fa-book"></i> Study Material</h4>
                    <section>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> EEE provides you Theory, Concept Videos, and Solved examples for complete understanding</p>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> All topics covered as per CBSE’s Latest pattern</p>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> All types of questions covered to tackle in exams</p>
                    </section>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 my-1">
                <div class="specs bg-dark py-2 px-3 border border-secondary rounded border-1" style="min-height: 100%;">
                    <h4 class="h4 text-center text-coral border-bottom border-1 py-1"><i class="fas fa-check-double"></i> Doubt Clearing Classes</h4>
                    <section>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> Revision Classes before Exams</p>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> Limitless Doubt Clearing Facility</p>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> Clear your doubts at your home with digital facility</p>
                    </section>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 my-1">
                <div class="specs bg-dark py-2 px-3 border border-secondary rounded border-1" style="min-height: 100%;">
                    <h4 class="h4 text-center text-coral border-bottom border-1 py-1"><i class="far fa-file-alt"></i> Test Series</h4>
                    <section>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> Monthly Test Series for Exam Practice</p>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> Test pattern as per CBSE's latest Exam Patter</p>
                        <p class="text-dark text-white"><i class="fas fa-hand-point-right"></i> Topic-wise and Chapter-wise Tests</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pcmb bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h3 class="h3 text-dark text-center">Subjects</h3>
            </div>
            <div class="col-12 col-sm-4 my-1 order-1 order-sm-1" id="maths">

                <div class="text-center bg-white pb-2 rounded subj">
                    <img src="<?php echo $home ?>img/background/class10maths.jpg" alt="" class="rounded-top img-fluid">
                    <h4 class="h4 text-dark text-center">Mathematics</h4>
                </div>

            </div>
            <div class="col-12 col-sm-8 my-1 order-2 order-sm-2">
                <div class="accordion" id="accordionExample">
                    <?php
                    $i = 1;
                    foreach ($data as $det) {
                    ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                    <?php echo "Chapter " . $det["chapter_no"] . " - " . $det["chapter_name"]; ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="text-start">
                                        <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/notes/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn align-middle btn-outline-primary">Study Material/Notes</a>
                                        <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/examples/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Solved Examples</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-8 my-2 order-sm-3 order-4">
                <div class="accordion" id="accordionExample1">
                    <?php
                    $i = 1;
                    foreach ($title as $det) {
                    ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsc<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesc<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                    <?php echo "Chapter " . $det["chapter_no"] . " - " . $det["chapter_name"]; ?>
                                </button>
                            </h2>
                            <div id="collapsesc<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="headingsc<?php echo $i; ?>" data-bs-parent="#accordionExample1">
                                <div class="accordion-body">
                                    <div class="text-start">
                                        <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/notes/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn align-middle btn-outline-primary">Study Material/Notes</a>
                                        <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/examples/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Solved Examples</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 col-sm-4 my-2 order-3 order-sm-4" id="science">

                <div class="text-center bg-white pb-2 rounded subj">
                    <img src="<?php echo $home ?>img/background/class10science.jpg" alt="" class="rounded-top img-fluid">
                    <h4 class="h4 text-dark text-center">Science</h4>
                </div>

            </div>
        </div>
    </div>
</div>
