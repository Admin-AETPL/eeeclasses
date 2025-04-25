<div class="bg-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 text-center my-2">
                <div id="comment">
                    <!-- Feedback will be loaded here via AJAX -->
                </div>
                <button class="btn btn-primary mx-auto my-2" id="loadmore">Load More</button>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-12">
                <h3 class="h3 text-secondary text-center">Please provide your valuable feedback</h3>
            </div>
            <div class="col-sm-6 col-12">
                <div class="p-2">
                    <form action="<?php echo $home ?>feedback/submit" method="POST">
                        <div class="form-group">
                            <label for="feedname">Enter Your Name<sup class="text-danger fw-bold">*</sup> </label>
                            <input type="text" class="form-control" placeholder="e.g. Peter" id="feedname" name="feedname" required>
                        </div>
                        <div class="form-group">
                            <label for="feedmail">Enter Your Email<sup class="text-danger fw-bold">*</sup> </label>
                            <input type="email" class="form-control" id="feedmail" placeholder="e.g. test@mail.com" name="feedmail" required>
                        </div>
                        <div class="form-group">
                            <label for="feedback">Enter Your Feedback<sup class="text-danger fw-bold">*</sup> </label>
                            <textarea type="text" style="height: 250px;resize:none" class="form-control" id="feedback" name="feedback" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-6 d-none d-sm-block">
                <img src="<?php echo $home ?>img/background/your-feedback.png" style="filter:drop-shadow(5px 5px 5px #000)" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script>
let page = 0;
$(document).ready(function () {
    loadFeedback(); // Load the first batch

    $("#loadmore").click(function () {
        loadFeedback();
    });

    function loadFeedback() {
        $.ajax({
            url: "comments/index",
            method: "POST",
            data: { page: page },
            success: function (result) {
                if (result.trim() === "" || result.includes("No more feedback")) {
                    $("#loadmore").hide();
                    if (!$("#comment").html().includes("No more feedback")) {
                        $("#comment").append("<p class='text-muted text-center'>No more feedback available</p>");
                    }
                } else {
                    $("#comment").append(result);
                    page++;
                }
            },
            error: function (xhr) {
                alert(xhr.status + " " + xhr.statusText);
            }
        });
    }
});
</script>
