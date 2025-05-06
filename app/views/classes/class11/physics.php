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
    .physics-laws img{height: 216px !important;width: auto !important;}
</style>
<div class="class78 bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 order-2 order-lg-1 order-sm-1 py-4">
                <section class="header">
                    <h3 class="h3 text-start text-dark">EEE Class 11 - Physics</h3>
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
            <div class="col-12 col-sm-12 col-lg-6 order-1 order-lg-2 order-sm-2">
                <img src="<?php echo $home ?>img/background/newtons-first-law.gif" alt="" class="img-fluid">
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
                                Unit-I - Physical World and Measurement
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-1: Units and Measurements </h5>
                                    <p class="text-dark">Need for measurement: Units of measurement; systems of units; SI units,
                                        fundamental and derived units. Length, mass and time measurements;
                                        accuracy and precision of measuring instruments; errors in measurement;
                                        significant figures.
                                        Dimensions of physical quantities, dimensional analysis and its applications</p>
                                        <?php renderChapterButtons(1, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Unit-II - Kinematics
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-2: Motion in a straight line </h5>
                                    <p class="text-dark">Frame of reference, Motion in a straight line: Position-time graph, speed and
                                        velocity.
                                        Elementary concepts of differentiation and integration for describing motion,
                                        uniform and non- uniform motion, average speed and instantaneous velocity,
                                        uniformly accelerated motion, velocity - time and position-time graphs.
                                        Relations for uniformly accelerated motion (graphical treatment).</p>
                                        <?php renderChapterButtons(2, "11", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-3: Motion in a Plane </h5>
                                    <p class="text-dark">Scalar and vector quantities; position and displacement vectors, general
                                        vectors and their notations; equality of vectors, multiplication of vectors by a
                                        real number; addition and subtraction of vectors, relative velocity, Unit vector;
                                        resolution of a vector in a plane, rectangular components, Scalar and Vector
                                        product of vectors.
                                        Motion in a plane, cases of uniform velocity and uniform accelerationprojectile motion, uniform circular motion</p>
                                        <?php renderChapterButtons(3, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Unit-III - Laws of Motion
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-4: Laws of motion </h5>
                                    <p class="text-dark">Intuitive concept of force, Inertia, Newton's first law of motion; momentum
                                        and Newton's second law of motion; impulse; Newton's third law of motion.
                                        Law of conservation of linear momentum and its applications.
                                        Equilibrium of concurrent forces, Static and kinetic friction, laws of friction,
                                        rolling friction, lubrication.
                                        Dynamics of uniform circular motion: Centripetal force, examples of circular
                                        motion (vehicle on a level circular road, vehicle on a banked road). </p>
                                        <?php renderChapterButtons(4, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                Unit-IV - Work, Energy and Power
                            </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-5: Work, Energy and Power </h5>
                                    <p class="text-dark">Work done by a constant force and a variable force; kinetic energy, workenergy theorem, power.
                                        Notion of potential energy, potential energy of a spring, conservative forces:
                                        conservation of mechanical energy (kinetic and potential energies); nonconservative forces: motion in a vertical circle; elastic and inelastic collisions
                                        in one and two dimensions.
                                    </p>
                                    <?php renderChapterButtons(5, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Unit-V - Motion of System of Particles and Rigid Body
                            </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-6: System of Particles and Rotational Motion </h5>
                                    <p class="text-dark">Centre of mass of a two-particle system, momentum conservation and Centre of mass motion.
                                            Centre of mass of a rigid body; centre of mass of a uniform rod. Moment of a force, torque,
                                            angular momentum, law of conservation of angular momentum and its applications.
                                            Equilibrium of rigid bodies, rigid body rotation and equations of rotational motion, comparison
                                            of linear and rotational motions.
                                            Moment of inertia, radius of gyration, values of moments of inertia for simple geometrical
                                            objects (no derivation).
                                    </p>
                                    <?php renderChapterButtons(6, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                                Unit-VI - Gravitation
                            </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-7: Gravitation </h5>
                                    <p class="text-dark">Kepler's laws of planetary motion, universal law of gravitation. Acceleration due to gravity and
                                        its variation with altitude and depth.
                                        Gravitational potential energy and gravitational potential, escape speed, orbital velocity of a
                                        satellite, energy of an orbiting satellite.
                                    </p>
                                    <?php renderChapterButtons(7, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                                Unit-VII - Properties of Bulk Matter
                            </button>
                        </h2>
                        <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-8: Mechanical Properties of Solids </h5>
                                    <p class="text-dark">Elasticity, Stress-strain relationship, Hooke's law, Young’s modulus, bulk modulus, shear
                                        modulus of rigidity (qualitative idea only), Poisson's ratio; elastic energy. Application of elastic
                                        behavior of materials (qualitative idea only)
                                    </p>
                                    <?php renderChapterButtons(8, "11", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-9: Mechanical Properties of Fluids </h5>
                                    <p class="text-dark">Pressure due to a fluid column; Pascal's law and its applications (hydraulic lift
                                        and hydraulic brakes), effect of gravity on fluid pressure.
                                        Viscosity, Stokes' law, terminal velocity, streamline and turbulent flow, critical
                                        velocity, Bernoulli's theorem and its applications.
                                        Surface energy and surface tension, angle of contact, excess of pressure
                                        across a curved surface, application of surface tension ideas to drops, bubbles
                                        and capillary rise.
                                    </p>
                                    <?php renderChapterButtons(9, "11", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-10: Thermal Properties of Matter </h5>
                                    <p class="text-dark">Heat, temperature, thermal expansion; thermal expansion of solids, liquids and gases,
                                        anomalous expansion of water; specific heat capacity; Cp, Cv - calorimetry; change of state
                                        - latent heat capacity.
                                        Heat transfer-conduction, convection and radiation, thermal conductivity, qualitative ideas of
                                        Blackbody radiation, Wein's displacement Law, Stefan's law.

                                    </p>
                                    <?php renderChapterButtons(10, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                                Unit-VIII - Thermodynamics
                            </button>
                        </h2>
                        <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-11: Thermodynamics </h5>
                                    <p class="text-dark">Thermal equilibrium and definition of temperature, zeroth law of thermodynamics, heat, work
                                                and internal energy. First law of thermodynamics, Second law of thermodynamics:
                                                Thermodynamic state variable and equation of state. Change of condition of gaseous state -
                                                isothermal, adiabatic, reversible, irreversible, and cyclic processes.
                                    </p>
                                    <?php renderChapterButtons(11, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                                Unit-IX - Behaviour of Perfect Gases and Kinetic Theory of Gases
                            </button>
                        </h2>
                        <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-12: Kinetic Theory </h5>
                                    <p class="text-dark">Equation of state of a perfect gas, work done in compressing a gas.
                                        Kinetic theory of gases - assumptions, concept of pressure. Kinetic
                                        interpretation of temperature; rms speed of gas molecules; degrees of
                                        freedom, law of equi-partition of energy (statement only) and application to
                                        specific heat capacities of gases; concept of mean free path, Avogadro's
                                        number.
                                    </p>
                                    <?php renderChapterButtons(12, "11", "Physics", $home); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                                Unit-X - Oscillations and Waves
                            </button>
                        </h2>
                        <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-13: Oscillations </h5>
                                    <p class="text-dark">Periodic motion - time period, frequency, displacement as a function of time, periodic functions
                                        and their applications.
                                        Simple harmonic motion (S.H.M), uniform circular motion and its equations of motion; phase;
                                        oscillations of a loaded spring- restoring force and force constant; energy in S.H.M.
                                        Kinetic and potential energies; simple pendulum derivation of expression for its time period.


                                    </p>
                                    <?php renderChapterButtons(13, "11", "Physics", $home); ?>
                                </div>
                                <div class="text-start">
                                    <h5 class="h5 text-dark text-start fw-bold">Chapter-14: Waves </h5>
                                    <p class="text-dark">Wave motion: Transverse and longitudinal waves, speed of travelling wave,
                                        displacement relation for a progressive wave, principle of superposition of
                                        waves, reflection of waves, standing waves in strings and organ pipes,
                                        fundamental mode and harmonics, Beats.

                                    </p>
                                    <?php renderChapterButtons(14, "11", "Physics", $home); ?>
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