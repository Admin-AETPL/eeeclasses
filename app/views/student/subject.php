<div class="container">
    <div class="row">
        <div class="accordion" id="accordionExample">
            <?php
            $i = 1;
            foreach ($data as $det) {
            ?>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                            <?php echo "Chapter " . $det["chapter_no"] . " - " . $det["chapter_name"]; ?>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text-start text-dark">
                                <?php echo $det["chapter_syllabus"]; ?>
                            </p>
                            <div class="text-start">
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/notes/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn align-middle btn-outline-primary">Theory/Notes</a>
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/examples/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Solved Examples</a>
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/assignments/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Assignments</a>
                                <a target="_blank" href="<?php echo $home ?>study_material/<?php echo $det["class_no"] . "/answersheet/" . $det["subject"]; ?>/Chapter<?php echo $det["chapter_no"]; ?>.pdf" class="btn btn-outline-primary align-middle">Answer Sheet</a>
                                <button type="button" class="btn btn-outline-primary align-middle" data-bs-target="#exampleModal" data-bs-toggle="modal">Recent Notes</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $i++;
            }
            ?>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-coral" id="exampleModalLabel">Recent Notes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th scope="col">S. No.</th>
                                            <th scope="col">Recent Notes</th>
                                            <th scope="col">Uploaded On</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $j=1;
                                        foreach($title as $rec)
                                        {
                                            ?>
                                            <tr>
                                                <td scope="row" class="fw-bold text-center"><?php echo $j; ?></td>
                                                <td><?php echo $rec["notes"] ?></td>
                                                <td><?php echo $rec["uploaded_on"] ?></td>
                                                <td><a href="<?php echo $home.$rec["notes_path"] ?>">View/Download</a></td>
                                            </tr>
                                            <?php
                                            $j++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>