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

    .class78 img.img-fluid {
        height: 350px
    }
</style>
<div class="class78 bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 order-2 order-lg-1 order-sm-1 py-4">
                <section class="header">
                    <h3 class="h3 text-start text-dark">EEE Class 12 - Physics</h3>
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
                <img src="<?php echo $home ?>img/background/magnetic-field.gif" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="physics11 bg-light py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="text-start">
                    <h4 class="h4 text-dark text-start fw-bold">Physics</h4>
                    <p class="text-dark">Physics is a study of basic laws of nature and their manifestation in different natural phenomena. Physics is the study of physical world and matter and its motion through space and time, along with related concepts such as energy and force.
                        Physics is one of the most fundamental scientific disciplines, and its main goal is to understand how the universe behaves.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-dark text-start fw-bold">Syllabus</h4>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Unit-I - Electrostatics
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-1: Electric Charges and Fields </h5>
                                    <p class="text-dark">Electric Charges; Conservation of charge, Coulomb's law-force between two
                                        point charges, forces between multiple charges; superposition principle and
                                        continuous charge distribution.
                                        Electric field, electric field due to a point charge, electric field lines, electric
                                        dipole, electric field due to a dipole, torque on a dipole in uniform electric fleld.
                                        Electric flux, statement of Gauss's theorem and its applications to find field
                                        due to infinitely long straight wire, uniformly charged infinite plane sheet and
                                        uniformly charged thin spherical shell (field inside and outside). </p>
                                        <?php renderChapterButtons(1, "12", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-2: Electrostatic Potential and Capacitance </h5>
                                    <p class="text-dark">Electric potential, potential difference, electric potential due to a point charge,
                                        a dipole and system of charges; equipotential surfaces, electrical potential
                                        energy of a system of two point charges and of electric dipole in an
                                        electrostatic field.
                                        Conductors and insulators, free charges and bound charges inside a
                                        conductor. Dielectrics and electric polarisation, capacitors and capacitance,
                                        combination of capacitors in series and in parallel, capacitance of a parallel
                                        plate capacitor with and without dielectric medium between the plates, energy
                                        stored in a capacitor(no derivation, formulae only). </p>
                                        <?php renderChapterButtons(2, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Unit-II - Current Electricity
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-3: Current Electricity </h5>
                                    <p class="text-dark">Electric current, flow of electric charges in a metallic conductor, drift velocity, mobility and
                                        their relation with electric current; Ohm's law, V-I characteristics (linear and non-linear),
                                        electrical energy and power, electrical resistivity and conductivity, temperature dependence
                                        of resistance, Internal resistance of a cell, potential difference and emf of a cell, combination
                                        of cells in series and in parallel, Kirchhoff's rules, Wheatstone bridge.
                                    </p>
                                    <?php renderChapterButtons(3, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Unit-III - Magnetic Effects of Current and Magnetism
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-4: Moving Charges and Magnetism </h5>
                                    <p class="text-dark">Concept of magnetic field, Oersted's experiment.
                                        Biot - Savart law and its application to current carrying circular loop.
                                        Ampere's law and its applications to infinitely long straight wire. Straight and
                                        toroidal solenoids (only qualitative treatment), force on a moving charge in
                                        uniform magnetic and electric fields, Cyclotron.
                                        Force on a current-carrying conductor in a uniform magnetic field, force
                                        between two parallel current-carrying conductors-definition of ampere, torque
                                        experienced by a current loop in uniform magnetic field; moving coil
                                        galvanometer-its current sensitivity and conversion to ammeter and voltmeter.</p>
                                        <?php renderChapterButtons(4, "12", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-5: Magnetism and Matter </h5>
                                    <p class="text-dark">Bar magnet, bar magnet as an equivalent solenoid (qualitative treatment only), magnetic field
                                        intensity due to a magnetic dipole (bar magnet) along its axis and perpendicular to its axis
                                        (qualitative treatment only), torque on a magnetic dipole (bar magnet) in a uniform magnetic
                                        field (qualitative treatment only), magnetic field lines.
                                        Magnetic properties of materials- Para-, dia- and ferro – magnetic substances with examples,
                                        Magnetization of materials, effect of temperature on magnetic properties.</p>
                                        <?php renderChapterButtons(5, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Unit-IV - Electromagnetic Induction and Alternating Currents
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-6: Electromagnetic Induction </h5>
                                    <p class="text-dark">Electromagnetic induction; Faraday's laws, induced EMF and current; Lenz's
                                        Law, Eddy currents. Self and mutual induction.

                                    </p>
                                    <?php renderChapterButtons(6, "12", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-7: Alternating Current </h5>
                                    <p class="text-dark">Alternating currents, peak and RMS value of alternating current/voltage;
                                        reactance and impedance; LC oscillations (qualitative treatment only), LCR
                                        series circuit, resonance; power in AC circuits, power factor, wattless current.
                                        AC generator and transformer.
                                    </p>
                                    <?php renderChapterButtons(7, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Unit-V - Electromagnetic Waves
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-8: Electromagnetic Waves </h5>
                                    <p class="text-dark">Basic idea of displacement current, Electromagnetic waves, their
                                        characteristics, their Transverse nature (qualitative ideas only).
                                        Electromagnetic spectrum (radio waves, microwaves, infrared, visible,
                                        ultraviolet, X-rays, gamma rays) including elementary facts about their uses.

                                    </p>
                                    <?php renderChapterButtons(8, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                Unit-VI - Optics
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-9: Ray Optics and Optical Instruments </h5>
                                    <p class="text-dark">Reflection of light, spherical mirrors, mirror formula, refraction of
                                        light, total internal reflection and its applications, optical fibres, refraction at
                                        spherical surfaces, lenses, thin lens formula, lensmaker's formula,
                                        magnification, power of a lens, combination of thin lenses in contact,
                                        refraction of light through a prism.
                                        Scattering of light - blue colour of sky and reddish apprearance of the sun at
                                        sunrise and sunset.
                                        Optical instruments: Microscopes and astronomical telescopes (reflecting and
                                        refracting) and their magnifying powers.
                                    </p>
                                    <?php renderChapterButtons(9, "12", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-10: Wave Optics </h5>
                                    <p class="text-dark">Wave optics: Wave front and Huygen’s principle, reflection and refraction of plane wave at
                                    a plane surface using wave fronts. Proof of laws of reflection and refraction using Huygen’s
                                    principle. Interference, Young's double slit experiment and expression for fringe width (No
                                    derivation final expression only), coherent sources and sustained interference of light,
                                    diffraction due to a single slit, width of central maxima (qualitative treatment only).
                                    </p>
                                    <?php renderChapterButtons(10, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                Unit-VII - Dual Nature of Radiation and Matter
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-11: Dual Nature of Radiation and
                                        Matter </h5>
                                    <p class="text-dark">Dual nature of radiation, Photoelectric effect, Hertz and Lenard's observations; Einstein's
                                        photoelectric equation-particle nature of light.
                                        Experimental study of photoelectric effect
                                        Matter waves-wave nature of particles, de-Broglie relation

                                    </p>
                                    <?php renderChapterButtons(11, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                Unit-VIII - Atoms and Nuclei
                            </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-12: Atoms </h5>
                                    <p class="text-dark">Alpha-particle scattering experiment; Rutherford's model of atom; Bohr model of hydrogen
                                        atom, Expression for radius of nth possible orbit, velocity and energy of electron in nth orbit,
                                        hydrogen line spectra (qualitative treatment only).
                                    </p>
                                    <?php renderChapterButtons(12, "12", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-13: Nuclei </h5>
                                    <p class="text-dark">Composition and size of nucleus, Radioactivity, alpha, beta and gamma
                                        particles/rays and their properties; radioactive decay law, half life and mean
                                        life. Mass-energy relation, mass defect; binding energy per nucleon and its
                                        variation with mass number; nuclear fission, nuclear fusion.
                                    </p>
                                    <?php renderChapterButtons(13, "12", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                Unit-IX - Electronic Devices
                            </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-14: Semiconductor Electronics:
                                        Materials, Devices and Simple Circuits </h5>
                                    <p class="text-dark">Energy bands in conductors, semiconductors and insulators (qualitative ideas only) Intrinsic
                                        and extrinsic semiconductors- p and n type, p-n junction
                                        Semiconductor diode - I-V characteristics in forward and reverse bias, application of junction
                                        diode -diode as a rectifier.

                                    </p>
                                    <?php renderChapterButtons(14, "12", "Physics", $home); ?>
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