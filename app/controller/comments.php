<?php
class Comments extends Controller
{
    public function index()
    {
        $db = new mysqli("localhost", "root", "", "eeeclasses");

        if (isset($_POST["page"])) {
            $page = intval($_POST["page"]);
            $limit = 3;
            $offset = $page * $limit;

            $qry = "SELECT * FROM eee_feedback WHERE status='Approved' ORDER BY feeddate DESC LIMIT $offset, $limit";
            $res = $db->query($qry);

            if ($res && $res->num_rows > 0) {
                while ($det = $res->fetch_assoc()) {
                    ?>
                    <div class="comment border border-1 rounded p-2 mt-2">
                        <p class="text-start text-dark fw-bold fs-5"><?php echo htmlspecialchars($det["feedname"]); ?></p>
                        <p class="text-start text-dark fs-6"><?php echo htmlspecialchars($det["feedback"]); ?></p>
                    </div>
                    <?php
                }
            } else {
                // This message is fine
                echo "<p class='text-muted text-center'>No more feedback available</p>";
            }
        }
    }
}

