<style>
    input {
        border: 2px solid #0d6efd;
        padding: 5px;
        border-radius: 5px;
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
<div class="py-3" style="height:350px;background:url('<?php echo $home ?>img/background/alice-blue-bg-invert.jpg') bottom no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h4 class="h4 text-center text-center my-2">M to KM</h4>
                <div class="text-center my-2">
                    <div class="form-group"><input type="number" placeholder="Enter M" class="d-inline-block my-2 form-inline" id="first"> <span class="d-inline-block my-2 fw-bold fs-4">M</span> <span class="d-inline-block my-2 fw-bold fs-4">=</span> <input type="text" readonly id="result" class="d-inline-block my-2 form-inline"> <span class="d-inline-block my-2 fw-bold fs-4">KM</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#first").keyup(function(){
            var num1=Number($("#first").val());
            if($("#first").val().trim()=='')
            {
                return false;
            }
            var res=num1/1000;
            $("#result").attr("value",res);
        })
    })
</script>