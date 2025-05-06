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
</style>
<div class="class78 py-3" style="background: #f5f5f5;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 order-2 order-lg-1 order-sm-1 py-4">
                <section class="header">
                    <h3 class="h3 text-start text-dark">EEE Class 12 - Chemistry</h3>
                    <p class="fs-5 text-start text-secondary">Focusing Class 12<sup>th</sup></p>
                </section>
                <section class="points">
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Specially designed study material for Class 11 as per CBSE guidelines</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Unlimited DOUBT Solving Classes for FREE!</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Complete Conceptual Understanding</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Advanced study material for competitive exams(IIT-JEE/NEET)</p>
                    <p class="text-dark text-start"><i class="fas fa-arrow-circle-right"></i> Test Series for Practice</p>
                </section>
            </div>
            <div class="col-12 col-sm-12 col-lg-6 order-1 order-lg-2 order-sm-2 text-center">
                <img src="<?php echo $home ?>img/background/class-11-chemistry.jpg" alt="" class="img-fluid" style="height: 400px;">
            </div>
        </div>
    </div>
</div>
<div class="physics11 bg-light py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="text-start">
                    <h4 class="h4 text-dark text-start fw-bold">Chemistry</h4>
                    <p class="text-dark">Chemistry is the branch of science that deals with the composition, structure and properties of matter. It is a natural science that covers the elements that make up matter to the compounds composed of atoms, molecules and ions: their composition, structure, properties, behavior and the changes they undergo during a reaction with other substances.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-dark text-start fw-bold">Syllabus</h4>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Unit-I - Solutions
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">
                                    Types of solutions, expression of concentration of solutions of solids in liquids, solubility
                                    of gases in liquids, solid solutions, Raoult’s law, colligative properties - relative lowering
                                    of vapor pressure, elevation of boiling point, depression of freezing point, osmotic
                                    pressure, determination of molecular masses using colligative properties, abnormal
                                    molecular mass, Van't Hoff factor
                                    </p>
                                    <?php renderChapterButtons(1, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Unit-II - Electrochemistry
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Redox reactions, EMF of a cell, standard electrode potential, Nernst equation and its
                                    application to chemical cells, Relation between Gibbs energy change and EMF of a cell,
                                    conductance in electrolytic solutions, specific and molar conductivity, variations of
                                    conductivity with concentration, Kohlrausch's Law, electrolysis and law of electrolysis
                                    (elementary idea), dry cell-electrolytic cells and Galvanic cells, lead accumulator, fuel
                                    cells, corrosion.
                                    </p>
                                    <?php renderChapterButtons(2, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Unit-III - Chemical Kinetics
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Rate of a reaction (Average and instantaneous), factors affecting rate of reaction:
                                        concentration, temperature, catalyst; order and molecularity of a reaction, rate law and
                                        specific rate constant, integrated rate equations and half-life (only for zero and first order
                                        10
                                        reactions), concept of collision theory (elementary idea, no mathematical treatment),
                                        activation energy, Arrhenius equation.</p>
                                        <?php renderChapterButtons(3, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Unit-IV - d and f Block Elements
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">General introduction, electronic configuration, occurrence and characteristics of
                                    transition metals, general trends in properties of the first row transition metals – metallic
                                    character, ionization enthalpy, oxidation states, ionic radii, colour, catalytic property,
                                    magnetic properties, interstitial compounds, alloy formation, preparation and properties
                                    of K2Cr2O7 and KMnO4.
                                    Lanthanides - Electronic configuration, oxidation states, chemical reactivity and
                                    lanthanide contraction and its consequences.
                                    Actinides - Electronic configuration, oxidation states and comparison with lanthanides

                                    </p>
                                    <?php renderChapterButtons(4, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Unit-V - Coordination Compounds
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Coordination compounds - Introduction, ligands, coordination number, colour, magnetic
                                        properties and shapes, IUPAC nomenclature of mononuclear coordination compounds.
                                        Bonding, Werner's theory, VBT, and CFT; structure and stereoisomerism, importance
                                        of coordination compounds (in qualitative analysis, extraction of metals and biological
                                        system).

                                    </p>
                                    <?php renderChapterButtons(5, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                Unit-VI - Haloalkanes and Haloarenes
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark"> Haloalkanes: Nomenclature, nature of C–X bond, physical and chemical properties,
                                        optical rotation mechanism of substitution reactions.
                                        Haloarenes: Nature of C–X bond, substitution reactions (Directive influence of halogen
                                        in monosubstituted compounds only).
                                        Uses and environmental effects of - dichloromethane, trichloromethane,
                                        tetrachloromethane, iodoform, freons, DDT.


                                    </p>
                                    <?php renderChapterButtons(6, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                Unit-VII - Alcohols, Phenols and Ethers
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Alcohols: Nomenclature, methods of preparation, physical and chemical properties (of
                                        primary alcohols only), identification of primary, secondary and tertiary alcohols,
                                        mechanism of dehydration, uses with special reference to methanol and ethanol.
                                        Phenols: Nomenclature, methods of preparation, physical and chemical properties,
                                        acidic nature of phenol, electrophilic substitution reactions, uses of phenols.
                                        Ethers: Nomenclature, methods of preparation, physical and chemical properties, uses
                                    </p>
                                    <?php renderChapterButtons(7, "12", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            Unit-VIII - Aldehydes, Ketones and Carboxylic Acids
                        </button>
                    </h2>
                    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark"> Aldehydes and Ketones: Nomenclature, nature of carbonyl group, methods of
                                    preparation, physical and chemical properties, mechanism of nucleophilic addition,
                                    reactivity of alpha hydrogen in aldehydes, uses.
                                    11
                                    Carboxylic Acids: Nomenclature, acidic nature, methods of preparation, physical and
                                    chemical properties; uses.

                                </p>
                                <?php renderChapterButtons(8, "12", "Chemistry", $home); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            Unit-IX - Amines
                        </button>
                    </h2>
                    <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Amines: Nomenclature, classification, structure, methods of preparation, physical and
                                    chemical properties, uses, identification of primary, secondary and tertiary amines.
                                    Diazonium salts: Preparation, chemical reactions and importance in synthetic organic
                                    chemistry
                                </p>
                                <?php renderChapterButtons(9, "12", "Chemistry", $home); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                            Unit-X - Biomolecules
                        </button>
                    </h2>
                    <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Carbohydrates - Classification (aldoses and ketoses), monosaccahrides (glucose and
                                    fructose), D-L configuration oligosaccharides (sucrose, lactose, maltose),
                                    polysaccharides (starch, cellulose, glycogen); Importance of carbohydrates.
                                    Proteins -Elementary idea of - amino acids, peptide bond, polypeptides, proteins,
                                    structure of proteins - primary, secondary, tertiary structure and quaternary structures
                                    (qualitative idea only), denaturation of proteins; enzymes. Hormones - Elementary idea
                                    excluding structure.
                                    Vitamins - Classification and functions.
                                    Nucleic Acids: DNA and RNA.



                                </p>
                                <?php renderChapterButtons(10, "12", "Chemistry", $home); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading11">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                            Unit-XI - Coordination Compounds
                        </button>
                    </h2>
                    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Coordination compounds - Introduction, ligands, coordination number,
                                    colour, magnetic properties and shapes, IUPAC nomenclature of mononuclear coordination
                                    compounds. Bonding, Werner's theory, VBT, and CFT.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading12">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                            Unit-XII - Aldehydes, Ketones and Carboxylic Acids
                        </button>
                    </h2>
                    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Aldehydes and Ketones: Nomenclature, nature of
                                    carbonyl group, methods of preparation, physical and chemical properties, mechanism of
                                    nucleophilic addition, reactivity of alpha hydrogen in aldehydes, uses.<br>
                                    Carboxylic Acids: Nomenclature, acidic nature, methods of preparation, physical and chemical
                                    properties; uses.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading13">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                            Unit-XIII - Amines
                        </button>
                    </h2>
                    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark"> Amines: Nomenclature, classification, structure, methods of preparation, physical and chemical
                                    properties, uses, identification of primary, secondary and tertiary amines.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
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