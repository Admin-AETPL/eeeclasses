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
                <h4 class="h4 text-center text-center my-2">Substraction</h4>
                <div class="text-center my-2">
                    <div class="form-group"><input type="number" placeholder="Enter First Number" class="d-inline-block my-2 form-inline" id="first"> <span class="d-inline-block my-2 fw-bold fs-4">-</span> <input type="number" id="second" placeholder="Enter Second Number" class="d-inline-block my-2 form-inline"> <span class="d-inline-block my-2 fw-bold fs-4">=</span> <input type="text" readonly id="result" class="d-inline-block my-2 form-inline"></div>
                </div>
                <div class="text-center my-2">
                    <button class="btn btn-primary" id="add">Substract</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#add").click(function(){
            var num1=Number($("#first").val());
            var num2=Number($("#second").val());
            if($("#first").val().trim()=='')
            {
                alert("Enter First Number");
            }
            if($("#second").val().trim()=='')
            {
                alert("Enter Second Number");
            }
            var res=num1-num2;
            $("#result").attr("value",res);
        })
    })
</script>