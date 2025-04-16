<div class="container">
    <div class="row">
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
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"]."/notes/".$det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn align-middle btn-outline-primary">Study Material/Notes</a>
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"]."/examples/".$det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Solved Examples</a>
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"]."/assignments/".$det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Assignments</a>
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"]."/mcq/".$det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">MCQs</a>
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
</div>