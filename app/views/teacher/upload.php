<style>
    #subj, #inputsubj, #chapt, #inputchapt, #inputsubj1, #subj1 {
        display: none
    }
</style>
<div class="upload bg-light rounded-3 p-3">
    <h4 class="h4 text-coral text-start">Upload Study Material</h4>
    <form method="POST" action="<?php echo $home ?>teacher_users/upload" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="cat" class="col-sm-2 col-form-label">Category<sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <select name="cat" id="cat" class="form-select" required>
                    <option selected disabled>Select</option>
                    <option value="notes">Theory/Notes</option>
                    <option value="examples">Solved Examples</option>
                    <option value="assignments">Assignment</option>
                    <option value="answersheet">Answer Sheet</option>
                    <option value="recent">Recent Notes</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputclass" class="col-sm-2 col-form-label">Class<sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <select name="classsel" id="inputclass" class="form-select" required>
                    <option selected disabled>Select</option>
                    <option value="9">Class 9</option>
                    <option value="10">Class 10</option>
                    <option value="11">Class 11</option>
                    <option value="12">Class 12</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputsubj" id="subj" class="col-sm-2 col-form-label">Subject<sup class="text-danger">*</sup></label>
            <label for="inputsubj1" id="subj1" class="col-sm-2 col-form-label">Subject<sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <select name="subj" id="inputsubj" class="form-select" required>
                    <option selected disabled>Select</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Biology">Biology</option>
                </select>
                <select name="subj" id="inputsubj1" class="form-select" required>
                    <option selected disabled>Select</option>
                    <option value="Science">Science</option>
                    <option value="Mathematics">Mathematics</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputchapt" id="chapt" class="col-sm-2 col-form-label">Chapter<sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <select name="chapt" id="inputchapt" class="form-select" required>
                    <option selected disabled>Select</option>

                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputfile" class="col-sm-2 col-form-label">Upload File<sup class="text-danger">*</sup></label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputfile" name="pdffile" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2 mx-auto">
                <button type="submit" id="sbm" class="btn bg-coral text-white form-inline">Upload</button>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $("#sbm").click(function(){
            var fname=$("#inputfile").val();
        });
        $("#inputfile").change(function() {
    var fname = $(this).val();
    var ext = fname.split('.').pop().toLowerCase();
    if (ext !== 'pdf') {
        alert("File should be in pdf format only");
        $(this).val(''); // optional: clear input field
    }
});

        $("#inputclass").change(function() {
            var cls = $("#inputclass").val();
            if (cls < 11) {
                $("#subj").css("display", "none");
                $("#subj1").css("display", "block");
                $("#inputsubj").css("display", "none");
                $("#inputsubj").attr("value", "");
                $("#inputsubj1").css("display", "block");
                $("#chapt").css("display", "none");
                $("#inputchapt").css("display", "none");
            } else {
                $("#subj").css("display", "block");
                $("#inputsubj").css("display", "block");
                $("#subj1").css("display", "none");
                $("#inputsubj1").css("display", "none");
                $("#inputsub").css("display", "");
                $("#chapt").css("display", "none");
                $("#inputchapt").css("display", "none");
            }
        });
        $("#inputsubj").change(function() {
    var cls = $("#inputsubj").val();
    $("#chapt").css("display", "block");
    $("#inputchapt").css("display", "block");

    // Populate chapters 1 to 20
    var options = '<option selected disabled>Select</option>';
    for (var i = 1; i <= 20; i++) {
        options += '<option value="Chapter ' + i + '">Chapter ' + i + '</option>';
    }
    $("#inputchapt").html(options);
});

$("#inputsubj1").change(function() {
    var cls = $("#inputsubj1").val();
    $("#chapt").css("display", "block");
    $("#inputchapt").css("display", "block");

    // Populate chapters 1 to 20
    var options = '<option selected disabled>Select</option>';
    for (var i = 1; i <= 20; i++) {
        options += '<option value="Chapter ' + i + '">Chapter ' + i + '</option>';
    }
    $("#inputchapt").html(options);
});

        // $("#inputsubj").change(function() {
        //     var chap=$(this).val();
        //     var cls=$("#inputclass").val();
        //     $.ajax({
        //         url: "<?php echo $home.'chapter/index/' ?>",
        //         method: "post",
        //         data:"cls="+cls+"&chap="+chap,
        //         success:function(result)
        //         {
        //             $("#inputchapt").html(result);
        //         },
        //         error:function(xhr)
        //         {
        //             alert(xhr.status+" "+xhr.statusText);
        //         }
        //     });
        // })
        // $("#inputsubj1").change(function() {
        //     var chap=$(this).val();
        //     var cls=$("#inputclass").val();
        //     $.ajax({
        //         url: "<?php echo $home.'chapter/index/' ?>",
        //         method: "post",
        //         data:"cls="+cls+"&chap="+chap,
        //         success:function(result)
        //         {
        //             $("#inputchapt").html(result);
        //         },
        //         error:function(xhr)
        //         {
        //             alert(xhr.status+" "+xhr.statusText);
        //         }
        //     });
        // })
    })
</script>