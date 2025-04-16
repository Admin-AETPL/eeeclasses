<style>
    input {
        border: 2px solid #0d6efd;
        padding: 5px;
        border-radius: 5px;
    }

    .profit,
    .loss {
        display: none
    }
</style>
<div class="bg-light py-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-primary text-center my-2">Calculators</h4>
            </div>
            <div class="col-12 col-sm-12 text-center">
                <?php require_once "calculators.php" ?>
            </div>
        </div>
    </div>
</div>
<div class="py-3" style="background:url('<?php echo $home ?>img/background/alice-blue-bg-invert.jpg') bottom no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-center text-center my-2">Profit/Loss Calculator</h4>
                <div class="text-center my-2">
                    <div class="form-group"><span class="d-inline-block my-2 fw-bold fs-4">Cost Price (C.P.)</span> <input type="number" placeholder="Enter Cost Price" class="d-inline-block my-2 form-inline" id="first">
                    </div>
                </div>
                <div class="text-center my-2">
                    <div class="form-group"><span class="d-inline-block my-2 fw-bold fs-4">Selling Price (C.P.)</span> <input type="number" placeholder="Enter Selling Price" class="d-inline-block my-2 form-inline" id="second">
                    </div>
                </div>
                <div class="text-center my-2">
                    <button class="btn btn-primary" id="add">Calculate</button>
                </div>
                <div class="profit">
                    <div class="text-center my-2">
                        <div class="form-group"><span class="d-inline-block my-2 fw-bold fs-4">Profit</span> <input type="number" readonly class="d-inline-block my-2 form-inline" id="profit">
                        </div>
                    </div>
                    <div class="text-center my-2">
                        <div class="form-group"><span class="d-inline-block my-2 fw-bold fs-4">Profit %</span> <input type="number" readonly class="d-inline-block my-2 form-inline" id="profitpercent">
                        </div>
                    </div>
                </div>
                <div class="loss">
                    <div class="text-center my-2">
                        <div class="form-group"><span class="d-inline-block my-2 fw-bold fs-4">Loss</span> <input type="number" readonly class="d-inline-block my-2 form-inline" id="loss">
                        </div>
                    </div>
                    <div class="text-center my-2">
                        <div class="form-group"><span class="d-inline-block my-2 fw-bold fs-4">Loss %</span> <input type="number" readonly class="d-inline-block my-2 form-inline" id="losspercent">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#add").click(function() {
            var num1 = Number($("#first").val());
            var num2 = Number($("#second").val());
            if ($("#first").val().trim() == '') {
                alert("Enter First Number");
                return false;
            }
            if ($("#second").val().trim() == '') {
                alert("Enter Second Number");
                return false;
            }
            if ((num1 <= num2)) {
                var profit = num2 - num1;
                var profitpercent = (profit / num1) * 100;
                $(".profit").css("display", "block");
                $(".loss").css("display", "none");
                $("#profit").attr("value", profit);
                $("#profitpercent").attr("value", profitpercent);
            } else {
                var loss = num1 - num2;
                var losspercent = (loss / num1) * 100;
                $(".loss").css("display", "block");
                $(".profit").css("display", "none");
                $("#loss").attr("value", loss);
                $("#losspercent").attr("value", losspercent);
            }
        })
    })
</script>