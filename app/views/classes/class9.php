<div class="class78 bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 order-2 order-lg-1 order-sm-1 py-4">
                <section class="header">
                    <h3 class="h3 text-start text-dark">EEE Fundamentals</h3>
                    <p class="fs-5 text-start text-secondary">Focusing Class 9<sup>th</sup></p>
                    <p class="text-muted text-start">Specialised in:<br>
                        <span class="subjects">Mathematics</span>
                        <span class="subjects">Science</span>
                        <span class="subjects">Analytical Reasoning</span>
                    </p>
                </section>
                <section class="points">
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Specially designed Up-to-Date study material for Class 9</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Unlimited DOUBT Solving Classes for FREE!</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Complete Conceptual Understanding</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Foundation Course for NTSE/KVPY/NEET/IIT</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Monthly Test Series for Practice</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Logical & Analytical Reasoning Classes for Competitive Exams</p>
                </section>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 order-1 order-lg-2 order-sm-2">
                <img src="<?php echo $home ?>img/background/class9.jpg" alt="" class="img-fluid rounded-3 shadow">
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
        <img src="<?php echo $home ?>img/background/class9maths.jpg" alt="" class="rounded-top img-fluid">
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
                        <?php echo "Unit " . $det["chapter_no"] . " - " . $det["chapter_name"]; ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- Syllabus Section -->
                        <div class="text-start mb-3">
                            <!-- <h5 class="h5 text-dark fw-bold">
                                Chapter <?php echo $det["chapter_no"]; ?>: <?php echo $det["chapter_name"]; ?>
                            </h5> -->
                            <p class="text-dark">
                                <?php echo nl2br(htmlspecialchars($det['syllabus'])); ?>
                            </p>
                        </div>
                        <div class="text-start">
                        <?php
                                // File paths
                                $notesPath = "study_material/" . $det["class_no"] . "/notes/" . $det["subject"] . "/Chapter" . $det["chapter_no"] . ".pdf";
                                $examplesPath = "study_material/" . $det["class_no"] . "/examples/" . $det["subject"] . "/Chapter" . $det["chapter_no"] . ".pdf";
                            ?>

                            <div class="text-start">
                                <!-- Study Material / Notes Button -->
                                <?php if (file_exists($notesPath)) { ?>
                                    <a target="_blank" href="<?php echo $home . $notesPath; ?>" class="btn align-middle btn-outline-primary">
                                        Study Material/Notes
                                    </a>
                                <?php } else { ?>
                                    <button type="button" class="btn align-middle btn-outline-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal1">
                                        Study Material/Notes
                                    </button>
                                <?php } ?>

                                <!-- Solved Examples Button -->
                                <?php if (file_exists($examplesPath)) { ?>
                                    <a target="_blank" href="<?php echo $home . $examplesPath; ?>" class="btn align-middle btn-outline-primary">
                                        Solved Examples
                                    </a>
                                <?php } else { ?>
                                    <button type="button" class="btn align-middle btn-outline-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal2">
                                        Solved Examples
                                    </button>
                                <?php } ?>
                            </div>

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

                                <!-- Syllabus Section -->
                                <div class="text-start mb-3">
                                    <!-- <h5 class="h5 text-dark fw-bold">
                                        Chapter <?php echo $det["chapter_no"]; ?>: <?php echo $det["chapter_name"]; ?>
                                    </h5> -->
                                    <p class="text-dark">
                                        <?php echo nl2br(htmlspecialchars($det['syllabus'])); ?>
                                    </p>
                                </div>
                                <div class="text-start">
                                <?php
                                        // File paths
                                        $notesPath = "study_material/" . $det["class_no"] . "/notes/" . $det["subject"] . "/Chapter" . $det["chapter_no"] . ".pdf";
                                        $examplesPath = "study_material/" . $det["class_no"] . "/examples/" . $det["subject"] . "/Chapter" . $det["chapter_no"] . ".pdf";
                                    ?>

                                    <div class="text-start">
                                        <!-- Study Material / Notes Button -->
                                        <?php if (file_exists($notesPath)) { ?>
                                            <a target="_blank" href="<?php echo $home . $notesPath; ?>" class="btn align-middle btn-outline-primary">
                                                Study Material/Notes
                                            </a>
                                        <?php } else { ?>
                                            <button type="button" class="btn align-middle btn-outline-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal1">
                                                Study Material/Notes
                                            </button>
                                        <?php } ?>

                                        <!-- Solved Examples Button -->
                                        <?php if (file_exists($examplesPath)) { ?>
                                            <a target="_blank" href="<?php echo $home . $examplesPath; ?>" class="btn align-middle btn-outline-primary">
                                                Solved Examples
                                            </a>
                                        <?php } else { ?>
                                            <button type="button" class="btn align-middle btn-outline-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal2">
                                                Solved Examples
                                            </button>
                                        <?php } ?>
                                    </div>

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
                        <img src="<?php echo $home ?>img/background/class9science.jpg" alt="" class="rounded-top img-fluid">
                        <h4 class="h4 text-dark text-center">Science</h4>
                    </div>
                
            </div>
        </div>
    </div>
</div>

<!-- Modal (Only once in the whole page) -->
<div class="modal fade" id="comingSoonModal1" tabindex="-1" aria-labelledby="comingSoonLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-primary shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="comingSoonLabel1"><i class="fas fa-info-circle"></i> Coming Soon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        Study Material/Notes are not yet available but going to come soon.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="comingSoonModal2" tabindex="-1" aria-labelledby="comingSoonLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-primary shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="comingSoonLabel2"><i class="fas fa-info-circle"></i> Coming Soon</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        Solved Examples are not yet available but going to come soon.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>