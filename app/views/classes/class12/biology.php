<?php
function renderChapterButtons($chapterNo, $classNo = "12", $subject = "Physics", $home = "") {
    $notesPath = "study_material/$classNo/notes/$subject/Chapter$chapterNo.pdf";
    $examplesPath = "study_material/$classNo/examples/$subject/Chapter$chapterNo.pdf";

    echo '<div class="text-start mb-3">';

    if (file_exists($notesPath)) {
        echo '<a target="_blank" href="' . $home . $notesPath . '" class="btn align-middle btn-outline-primary">Study Material/Notes</a>';
    } else {
        echo '<button type="button" class="btn align-middle btn-outline-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal1">Study Material/Notes</button>';
    }

    if (file_exists($examplesPath)) {
        echo '<a target="_blank" href="' . $home . $examplesPath . '" class="btn align-middle btn-outline-primary">Solved Examples</a>';
    } else {
        echo '<button type="button" class="btn align-middle btn-outline-primary" data-bs-toggle="modal" data-bs-target="#comingSoonModal2">Solved Examples</button>';
    }

    echo '</div>';
}
?>
<style>
    .physics-laws img {
        height: 216px !important;
        width: auto !important;
    }

    .imganim {
        animation: topbottom 5s linear infinite;
        transition: animation 0.3s linear;
    }

    @keyframes topbottom {
        0% {
            transform: translateY(-50px);
        }

        25% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(50px);
        }

        75% {
            transform: translateY(0px);
        }

        100% {
            transform: translateY(-50px);
        }
    }
</style>
<div class="class78 py-3" style="background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 order-2 order-lg-1 order-sm-1 py-4">
                <section class="header">
                    <h3 class="h3 text-start text-dark">EEE Class 12 - Biology</h3>
                    <p class="fs-5 text-start text-secondary">Focusing Class 12<sup>th</sup></p>
                </section>
                <section class="points">
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Specially designed study material for Class 12 as per CBSE guidelines</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Unlimited DOUBT Solving Classes for FREE!</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Complete Conceptual Understanding</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Advanced study material for competitive exams(IIT-JEE/NEET)</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Test Series for Practice</p>
                </section>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 order-1 order-lg-2 order-sm-2 text-center">
                <img src="<?php echo $home ?>img/background/class-11-biology.png" alt="" class="img-fluid imganim">
            </div>
        </div>
    </div>
</div>
<div class="physics11 bg-light py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="text-start">
                    <h4 class="h4 text-dark text-start fw-bold">Biology</h4>
                    <p class="text-dark">Biology is the study of all the concepts of natural science
                        of life and living organisms. It comprises of living organisms' physical structure,
                        important molecular interactions, chemical processes, physiological mechanisms,
                        development and evolution. Biology also tells us how cells and organisms work.
                        Biology is the scientific study of life. It is a natural science
                        with a broad scope but has several unifying themes that tie it together
                        as a single, coherent field. For instance, all organisms are made up of
                        cells that process hereditary information encoded in genes, which can be
                        transmitted to future generations.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-dark text-start fw-bold">Syllabus</h4>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Unit-VI - Reproduction
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-1: Sexual Reproduction in Flowering Plants </h5>
                                    <p class="text-dark">Flower structure; development of male and female gametophytes; pollination - types, agencies
                                        and examples; outbreeding devices; pollen-pistil interaction; double fertilization; post
                                        fertilization events - development of endosperm and embryo, development of seed and formation
                                        of fruit; special modes- apomixis, parthenocarpy, polyembryony; Significance of seed dispersal
                                        and fruit formation.
                                    </p>
                                    <?php renderChapterButtons(1, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-2: Human Reproduction</h5>
                                    <p class="text-dark">Male and female reproductive systems; microscopic anatomy of testis and ovary; gametogenesis
                                        - spermatogenesis and oogenesis; menstrual cycle; fertilisation, embryo development upto
                                        blastocyst formation, implantation; pregnancy and placenta formation (elementary idea);
                                        parturition (elementary idea); lactation (elementary idea).
                                    </p>
                                    <?php renderChapterButtons(2, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-3: Reproductive Health</h5>
                                    <p class="text-dark">Need for reproductive health and prevention of Sexually Transmitted Diseases (STDs); birth
                                        control - need and methods, contraception and medical termination of pregnancy (MTP);
                                        amniocentesis; infertility and assisted reproductive technologies - IVF, ZIFT, GIFT (elementary
                                        idea for general awareness)
                                    </p>
                                    <?php renderChapterButtons(3, "12", "Biology", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Unit-VII - Genetics and Evolution
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-4: Principles of Inheritance and Variation </h5>
                                    <p class="text-dark"><strong>Heredity and variation:</strong> Mendelian inheritance; deviations from Mendelism – incomplete
                                        dominance, co-dominance, multiple alleles and inheritance of blood groups, pleiotropy;
                                        elementary idea of polygenic inheritance; chromosome theory of inheritance; chromosomes and
                                        genes; Sex determination - in human being, birds and honey bee; linkage and crossing over; sex
                                        linked inheritance - haemophilia, colour blindness; Mendelian disorders in humans -thalassemia;
                                        chromosomal disorders in humans; Down's syndrome, Turner's and Klinefelter's syndromes.

                                    </p>
                                    <?php renderChapterButtons(4, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-5: Molecular Basis of Inheritance</h5>
                                    <p class="text-dark">Search for genetic material and DNA as genetic material; Structure of DNA and RNA; DNA
                                        packaging; DNA replication; Central Dogma; transcription, genetic code, translation; gene
                                        expression and regulation - lac operon; Genome, Human and rice genome projects; DNA
                                        fingerprinting.

                                    </p>
                                    <?php renderChapterButtons(5, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-6: Evolution</h5>
                                    <p class="text-dark">Origin of life; biological evolution and evidences for biological evolution (paleontology,
                                        comparative anatomy, embryology and molecular evidences); Darwin's contribution, modern
                                        synthetic theory of evolution; mechanism of evolution - variation (mutation and recombination)
                                        and natural selection with examples, types of natural selection; Gene flow and genetic drift;
                                        Hardy- Weinberg's principle; adaptive radiation; human evolution.

                                    </p>
                                    <?php renderChapterButtons(6, "12", "Biology", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Unit-VIII - Biology and Human Welfare
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-7: Human Health and Diseases </h5>
                                    <p class="text-dark">Pathogens; parasites causing human diseases (malaria, dengue, chikungunya, filariasis,
                                        ascariasis, typhoid, pneumonia, common cold, amoebiasis, ring worm) and their control; Basic
                                        concepts of immunology - vaccines; cancer, HIV and AIDS; Adolescence - drug and alcohol
                                        abuse.</p>
                                        <?php renderChapterButtons(7, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-8: Microbes in Human Welfare </h5>
                                    <p class="text-dark">Microbes in food processing, industrial production, sewage treatment, energy generation and
                                        microbes as bio-control agents and bio-fertilizers. Antibiotics; production and judicious use.</p>
                                        <?php renderChapterButtons(8, "12", "Biology", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Unit-IX - Biotechnology and its Applications
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-9: Biotechnology - Principles and Processes</h5>
                                    <p class="text-dark">Genetic Engineering (Recombinant DNA Technology)

                                    </p>
                                    <?php renderChapterButtons(9, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-10: Biotechnology and its Application </h5>
                                    <p class="text-dark">Application of biotechnology in health and agriculture: Human insulin and vaccine production,
                                        stem cell technology, gene therapy; genetically modified organisms - Bt crops; transgenic
                                        animals; biosafety issues, biopiracy and patents.
                                    </p>
                                    <?php renderChapterButtons(10, "12", "Biology", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Unit-X - Ecology and Environment
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-11: Organisms and Populations </h5>
                                    <p class="text-dark">Population interactions - mutualism, competition, predation, parasitism; population attributes
                                    - growth, birth rate and death rate, age distribution. 

                                    </p>
                                    <?php renderChapterButtons(11, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-12: Ecosystem </h5>
                                    <p class="text-dark">Ecosystems: Patterns, components; productivity and decomposition; energy flow; pyramids
                                        of number, biomass, energy.
 

                                    </p>
                                    <?php renderChapterButtons(12, "12", "Biology", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-13: Biodiversity and its Conservation </h5>
                                    <p class="text-dark">Biodiversity - Concept, patterns, importance; loss of biodiversity; biodiversity conservation;
                                        hotspots, endangered organisms, extinction, Red Data Book, Sacred Groves, biosphere reserves,
                                        national parks, wildlife, sanctuaries and Ramsar sites.

                                    </p>
                                    <?php renderChapterButtons(13, "12", "Biology", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
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