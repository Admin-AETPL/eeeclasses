<?php
function renderChapterButtons($chapterNo, $classNo = "11", $subject = "Physics", $home = "") {
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
                    <h3 class="h3 text-start text-dark">EEE Class 11 - Chemistry</h3>
                    <p class="fs-5 text-start text-secondary">Focusing Class 11<sup>th</sup></p>
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
                                Unit-I - Some Basic Concepts of Chemistry
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">
                                        General Introduction: Importance and scope of Chemistry.
                                        Atomic and molecular masses, mole concept and molar mass, percentage composition, empirical
                                        and molecular formula, chemical reactions, stoichiometry and calculations based on stoichiometry.
                                    </p>
                                </div>
                                <?php renderChapterButtons(1, "11", "Chemistry", $home); ?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Unit-II - Structure of Atom
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Discovery of Electron, Proton and Neutron, atomic number, isotopes and isobars.
                                        Thomson's model and its limitations. Rutherford's model and its limitations, Bohr's model
                                        and its limitations, concept of shells and subshells, dual nature of matter and light, de
                                        Broglie's relationship, Heisenberg uncertainty principle, concept of orbitals, quantum
                                        numbers, shapes of s, p and d orbitals, rules for filling electrons in orbitals - Aufbau
                                        principle, Pauli's exclusion principle and Hund's rule, electronic configuration of atoms,
                                        stability of half-filled and completely filled orbitals.
                                    </p>
                                    <?php renderChapterButtons(2, "11", "Chemistry", $home); ?>
                                </div>
                                <div class="text-start my-1">
                                    <a target="_blank" href="<?php echo $home ?>study_material/11/notes/Chemistry/Chapter2.pdf" class="btn align-middle btn-outline-primary">Sample Notes</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Unit-III - Classification of Elements and Periodicity in Properties
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Significance of classification, brief history of the development of periodic table, modern
                                        periodic law and the present form of periodic table, periodic trends in properties of
                                        elements -atomic radii, ionic radii, inert gas radii, Ionization enthalpy, electron gain
                                        enthalpy, electronegativity, valiancy, Nomenclature of elements with atomic number
                                        greater than 100.</p>
                                        <?php renderChapterButtons(3, "11", "Chemistry", $home); ?>
                                </div>
                                <div class="text-start my-1">
                                    <a target="_blank" href="<?php echo $home ?>study_material/11/notes/Chemistry/Chapter3.pdf" class="btn align-middle btn-outline-primary">Sample Notes</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Unit-IV - Chemical Bonding and Molecular Structure
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Valence electrons, ionic bond, covalent bond, bond parameters, Lewis structure, polar character of
                                        covalent bond, covalent character of ionic bond, valence bond theory, resonance, geometry of
                                        covalent molecules, VSEPR theory, concept of hybridization, involving s, p and d orbitals and shapes
                                        of some simple molecules, molecular orbital theory of homonuclear diatomic molecules(qualitative
                                        idea only), Hydrogen bond.

                                    </p>
                                    <?php renderChapterButtons(4, "11", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Unit-V - Chemical Thermodynamics
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Concepts of System and types of systems, surroundings, work, heat, energy, extensive
                                        and intensive properties, state functions.
                                        First law of thermodynamics -internal energy and enthalpy, heat capacity and specific
                                        heat, measurement of ∆U and ∆H, Hess's law of constant heat summation, enthalpy of
                                        bond dissociation, combustion, formation, atomization, sublimation, phase transition,
                                        ionization, solution and dilution. Second law of Thermodynamics (brief introduction),
                                        Introduction of entropy as a state function, Gibb's energy change for spontaneous and
                                        non- spontaneous processes, criteria for equilibrium, Third law of thermodynamics (brief
                                        introduction). 
                                    </p>
                                    <?php renderChapterButtons(5, "11", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                Unit-VI - Equilibrium
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Equilibrium in physical and chemical processes, dynamic nature of equilibrium, law of
                                        mass action, equilibrium constant, factors affecting equilibrium – Le Chatelier's principle,
                                        ionic equilibrium- ionization of acids and bases, strong and weak electrolytes, degree of
                                        ionization, ionization of poly basic acids, acid strength, concept of pH, hydrolysis of salts
                                        (elementary idea), buffer solution, Henderson Equation, solubility product, common ion
                                        effect (with illustrative examples).

                                    </p>
                                    <?php renderChapterButtons(6, "11", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                Unit-VII - Redox Reactions
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p class="text-dark">Concept of oxidation and reduction, redox reactions, oxidation number, balancing redox
                                        reactions, in terms of loss and gain of electrons and change in oxidation number,
                                        applications of redox reactions.
                                    </p>
                                    <?php renderChapterButtons(7, "11", "Chemistry", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                            Unit-VIII - Organic Chemistry - Some Basic Principles and Techniques
                        </button>
                    </h2>
                    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">General introduction, methods of purification, qualitative and quantitative analysis,
                                    classification and IUPAC nomenclature of organic compounds. Electronic displacements
                                    in a covalent bond: inductive effect, electrometric effect, resonance and hyper
                                    conjugation. Homolytic and heterolytic fission of a covalent bond: free radicals,
                                    carbocations, carbanions, electrophiles and nucleophiles, types of organic reactions.
                                </p>
                                <?php renderChapterButtons(8, "11", "Chemistry", $home); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                            Unit-IX - Hydrocarbons
                        </button>
                    </h2>
                    <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Aliphatic Hydrocarbons
                                    Alkanes - Nomenclature, isomerism, conformation (ethane only), physical properties,
                                    chemical reactions including free radical mechanism of halogenation, combustion and
                                    pyrolysis.
                                    Alkenes - Nomenclature, structure of double bond (ethene), geometrical isomerism,
                                    physical properties, methods of preparation, chemical reactions: addition of hydrogen,
                                    halogen, water, hydrogen halides (Markovnikov's addition and peroxide effect),
                                    ozonolysis, oxidation, mechanism of electrophilic addition.
                                    Alkynes - Nomenclature, structure of triple bond (ethyne), physical properties, methods
                                    of preparation, chemical reactions: acidic character of alkynes, addition reaction of -
                                    hydrogen, halogens, hydrogen halides and water.
                                    Aromatic Hydrocarbons
                                    Introduction, IUPAC nomenclature, benzene: resonance, aromaticity, chemical
                                    properties: mechanism of electrophilic substitution. Nitration, sulphonation, halogenation,
                                    Friedel Craft's alkylation and acylation, directive influence of functional group in mono
                                    substituted benzene, carcinogenicity and toxicity
                                </p>
                                <?php renderChapterButtons(9, "11", "Chemistry", $home); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                            Unit-X - Equilibrium
                        </button>
                    </h2>
                    <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Equilibrium in physical and chemical processes, dynamic nature of equilibrium, law of
                                    mass action, equilibrium constant, factors affecting equilibrium - Le Chatelier's principle, ionic
                                    equilibrium- ionization of acids and bases, strong and weak electrolytes, degree of ionization,
                                    ionization of poly basic acids, acid strength, concept of pH, buffer solution, solubility product,
                                    common ion effect (with illustrative examples).

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading11">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                            Unit-XI - s -Block Elements
                        </button>
                    </h2>
                    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">Group 1 and Group 2 Elements -General introduction, electronic configuration,
                                    occurrence, anomalous properties of the first element of each group, diagonal relationship, trends in
                                    the variation of properties (such as ionization enthalpy, atomic and ionic radii), trends in chemical
                                    reactivity with oxygen, water, hydrogen and halogens, uses.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading12">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                            Unit-XII - Some p -Block Elements
                        </button>
                    </h2>
                    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark">General Introduction to p -Block Elements<br>
                                    Group 13 Elements: General introduction, electronic configuration, occurrence, variation of
                                    properties, oxidation states, trends in chemical reactivity, anomalous properties of first element of
                                    the group, Boron - physical and chemical properties.<br>
                                    Group 14 Elements: General introduction, electronic configuration, occurrence, variation of
                                    properties, oxidation states, trends in chemical reactivity, anomalous behaviour of first elements.
                                    Carbon-catenation, allotropic forms, physical and chemical properties.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading13">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                            Unit-XIII - Hydrocarbons
                        </button>
                    </h2>
                    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="text-start">
                                <p class="text-dark"> Classification of Hydrocarbons Aliphatic Hydrocarbons:<br>
                                    Alkanes - Nomenclature, isomerism, conformation (ethane only), physical properties, chemical
                                    reactions. <br>
                                    Alkenes - Nomenclature, structure of double bond (ethene), geometrical isomerism, physical
                                    properties, methods of preparation, chemical reactions: addition of hydrogen, halogen, water,
                                    hydrogen halides (Markovnikov's addition and peroxide effect), ozonolysis, oxidation, mechanism of
                                    electrophilic addition.<br>
                                    Alkynes - Nomenclature, structure of triple bond (ethyne), physical properties, methods of
                                    preparation, chemical reactions: acidic character of alkynes, addition reaction of - hydrogen,
                                    halogens, hydrogen halides and water.<br>
                                    <strong>Aromatic Hydrocarbons</strong>: Introduction, IUPAC nomenclature, benzene: resonance, aromaticity,
                                    chemical properties: mechanism of electrophilic substitution. Nitration, sulphonation, halogenation,
                                    Friedel Craft's alkylation and acylation, directive influence of functional group in monosubstituted
                                    benzene. Carcinogenicity and toxicity.


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