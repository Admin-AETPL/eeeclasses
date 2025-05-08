<?php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$folder = trim(dirname($_SERVER['SCRIPT_NAME']), '/');
$home = $protocol . $host . ($folder ? "/$folder/" : "/");
$defaultImg = $home . "img/users/user.png"; // Updated default image
?>

<style>
    .imghover { cursor: pointer; }
</style>

<div class="admin-view bg-white p-3 border border-1" style="border-radius:20px">
    <div class="view_student p-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <h4 class="h4 text-secondary text-start">Teachers</h4>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item m-1"><a href="<?= $home ?>admin/add_teacher" class="btn btn-success text-white">Add</a></li>
                    <li class="nav-item m-1"><a href="<?= $home ?>admin/update_teacher" class="btn btn-primary text-white">Update</a></li>
                    <li class="nav-item m-1"><a href="<?= $home ?>admin/delete_teacher" class="btn btn-danger text-white">Delete</a></li>
                </ul>
            </div>
        </nav>

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="thead">
                    <tr>
                        <th>S.No.</th>
                        <th>Teacher Photo</th>
                        <th>Teacher ID</th>
                        <th>Name</th>
                        <th>Phone no.</th>
                        <th>Email ID</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                if (!empty($data)) {
                    foreach ($data as $det) {
                        $photo = htmlspecialchars(trim($det["teacher_photo"]));
                        $imgPath = (strpos($photo, "img/users/teachers/") === 0) ? $home . $photo : $defaultImg;
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td>
                                <img src="<?= $imgPath ?>"
                                     onerror="this.onerror=null;this.src='<?= $defaultImg ?>';"
                                     style="height:90px;width:90px;object-fit:cover;border-radius:10px;"
                                     class="imghover"
                                     alt="Teacher Photo"
                                     data-bs-toggle="modal"
                                     data-bs-target="#myModal"
                                     data-name="<?= htmlspecialchars($det["teacher_name"]) ?>"> <!-- Added data-name -->
                            </td>
                            <td><?= htmlspecialchars($det["teacher_id"]) ?></td>
                            <td><?= htmlspecialchars($det["teacher_name"]) ?></td>
                            <td><?= htmlspecialchars($det["teacher_phone"]) ?></td>
                            <td><?= htmlspecialchars($det["teacher_mail"]) ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No teacher data available.</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-coral" id="modalLabel"></h5> <!-- Empty title, set by JS -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2" style="display: flex; justify-content: center; align-items: center;">
                <img id="modalimg" src="" alt="Teacher Photo" style="max-height: 90vh; width: auto;" />
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".imghover").click(function () {
            let imgSrc = $(this).attr("src");
            let name = $(this).data("name"); // Get teacher's name
            $("#modalimg").attr("src", imgSrc);
            $("#modalLabel").text(name); // Set modal title to teacher name
        });
    });
</script>