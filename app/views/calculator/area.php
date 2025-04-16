<style>
    input,
    select {
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 m-2 m-sm-0 col-sm-4">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Basic Calculator
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $home ?>calculator/basic/addition" class="dropdown-item">Addition</a></li>
                                    <li><a href="<?php echo $home ?>calculator/basic/substraction" class="dropdown-item">Substraction</a></li>
                                    <li><a href="<?php echo $home ?>calculator/basic/multiplication" class="dropdown-item">Multiplication</a></li>
                                    <li><a href="<?php echo $home ?>calculator/basic/division" class="dropdown-item">Division</a></li>
                                    <li><a href="<?php echo $home ?>calculator/basic/square_root" class="dropdown-item">Square Root</a></li>
                                    <li><a href="<?php echo $home ?>calculator/basic/percentage" class="dropdown-item">Percentage</a></li>
                                    <li><a href="<?php echo $home ?>calculator/basic/profit_loss_calculator" class="dropdown-item">Profit/Loss</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 m-2 m-sm-0 col-sm-4">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Converter
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $home ?>calculator/converter/cm_to_m" class="dropdown-item">CM to M</a></li>
                                    <li><a href="<?php echo $home ?>calculator/converter/cm_to_km" class="dropdown-item">CM to KM</a></li>
                                    <li><a href="<?php echo $home ?>calculator/converter/ac_to_dc" class="dropdown-item">AC to DC Current</a></li>
                                    <li><a href="<?php echo $home ?>calculator/converter/inch_to_feet" class="dropdown-item">Inch to Feet</a></li>
                                    <li><a href="<?php echo $home ?>calculator/converter/m_to_km" class="dropdown-item">M to KM</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 m-2 m-sm-0 col-sm-4">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                    Area & Volume
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $home ?>calculator/area" class="dropdown-item">Area</a></li>
                                    <li><a href="<?php echo $home ?>calculator/volume" class="dropdown-item">Volume</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-3 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 mx-auto text-center">
                <span class="fs-5 fw-bold text-dark">Area of </span>
                <select id="shape">
                    <option selected disabled>Select</option>
                    <option value="square">Square</option>
                    <option value="rectangle">Rectangle</option>
                    <option value="circle">Circle</option>
                    <option value="cube">Cube</option>
                    <option value="cuboid">Cuboid</option>
                    <option value="sphere">Sphere</option>
                    <option value="cylinder">Cylinder</option>
                    <option value="cone">Cone</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="square">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/square.png" style="height: 250px;filter:drop-shadow(3px 3px 5px #000)" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 text-center py-3" style="background:#f0f8ff">
                <h4 class="h4 text-primary text-center my-2">Area of Square</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter length of side:</span> <input type="number" placeholder="Enter Length" id="sqside"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Perimeter:</span> <input type="number" readonly id="sqper"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Area:</span> <input type="number" readonly id="sqarea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="rectangle">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/rectangle.png" style="height: 300px;filter:drop-shadow(3px 3px 5px #000)" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center" style="background:#f0f8ff">
                <h4 class="h4 text-primary text-center my-2">Area of Rectangle</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter length:</span> <input type="number" placeholder="Enter Length" id="rectlen"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter breadth:</span> <input type="number" placeholder="Enter Breadth" id="rectbrd"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="rectcalc" type="button">Calculate</button>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Perimeter:</span> <input type="number" readonly id="rectper"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Area:</span> <input type="number" readonly id="rectarea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="circle">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/circle.png" style="height: 250px;filter:drop-shadow(3px 3px 5px #000)" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center" style="background:#f0f8ff">
                <h4 class="h4 text-primary text-center my-2">Area of Circle</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter radius:</span> <input type="number" placeholder="Enter Radius" id="circside"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Perimeter:</span> <input type="number" readonly id="circper"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Area:</span> <input type="number" readonly id="circarea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="cube">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/cube.jpg" style="height: 300px;" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center py-3" style="background:#f0f8ff">
                <h4 class="h4 text-primary text-center my-2">Surface Area of Cube</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter side of cube:</span> <input type="number" placeholder="Enter Side" id="cubeside"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Surface Area:</span> <input type="number" readonly id="cubearea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="cuboid">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/cuboid.jpg" style="height: 300px;" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center" style="background: #f0f8ff;">
                <h4 class="h4 text-primary text-center my-2">Surface Area of Cuboid</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter length:</span> <input type="number" placeholder="Enter Length" id="cuboidlen"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter breadth:</span> <input type="number" placeholder="Enter Breadth" id="cuboidbrd"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter height:</span> <input type="number" placeholder="Enter Height" id="cuboidhgt"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="cuboidcalc" type="button">Calculate</button>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Surface Area:</span> <input type="number" readonly id="cuboidarea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="sphere">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/sphere.jpg" style="height: 250px;" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center py-3" style="background: #f0f8ff;">
                <h4 class="h4 text-primary text-center my-2">Surface Area of Sphere</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter radius:</span> <input type="number" placeholder="Enter Radius" id="sphereside"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Surface Area:</span> <input type="number" readonly id="spherearea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="cylinder">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/cylinder.jpg" style="height: 300px;" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center" style="background: #f0f8ff;">
                <h4 class="h4 text-primary text-center my-2">Surface Area of Cylinder</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter radius of cyliner:</span> <input type="number" placeholder="Enter Radius" id="cylinderradius"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter height of cyliner:</span> <input type="number" placeholder="Enter Height" id="cylinderside"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="cylindercalc" type="button">Calculate</button>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Surface Area:</span> <input type="number" readonly id="cylinderarea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shapes" id="cone">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 text-center bg-white">
                <img src="<?php echo $home ?>img/shapes/cone.jpg" style="height: 300px;" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 mx-auto text-center" style="background: #f0f8ff;">
                <h4 class="h4 text-primary text-center my-2">Surface Area of Cone</h4>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter radius of cone:</span> <input type="number" placeholder="Enter Radius" id="coneradius"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Enter height of cone:</span> <input type="number" placeholder="Enter Height" id="coneside"> <span class="fs-5 fw-bold text-dark">unit</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" id="conecalc" type="button">Calculate</button>
                </div>
                <div class="form-group my-2">
                    <span class="text-dark fs-5 fw-bold">Surface Area:</span> <input type="number" readonly id="conearea"> <span class="fs-5 fw-bold text-dark">unit<sup>2</sup></span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#sqside").keyup(function() {
            var sqside = Number($("#sqside").val());
            var sqper = sqside * 4;
            var sqarea = sqside * sqside;
            $("#sqper").attr("value", sqper);
            $("#sqarea").attr("value", sqarea);
        });
        $("#rectcalc").click(function() {
            var rectlen = Number($("#rectlen").val());
            var rectbrd = Number($("#rectbrd").val());
            var rectper = (rectlen + rectbrd) * 2;
            var rectarea = rectlen * rectbrd;
            $("#rectper").attr("value", rectper);
            $("#rectarea").attr("value", rectarea);
        });
        $("#circside").keyup(function() {
            var circside = Number($("#circside").val());
            var circper = 2 * Math.PI * circside;
            var circarea = Math.PI * circside * circside;
            $("#circper").attr("value", circper);
            $("#circarea").attr("value", circarea);
        });
        $("#cubeside").keyup(function() {
            var cubeside = Number($("#cubeside").val());
            var cubearea = 6 * cubeside * cubeside;
            $("#cubearea").attr("value", cubearea);
        });
        $("#cuboidcalc").click(function() {
            var cuboidlen = Number($("#cuboidlen").val());
            var cuboidbrd = Number($("#cuboidbrd").val());
            var cuboidhgt = Number($("#cuboidhgt").val());
            var cuboidarea = ((cuboidlen * cuboidbrd) + (cuboidhgt * cuboidbrd) + (cuboidlen * cuboidhgt)) * 2;
            $("#cuboidarea").attr("value", cuboidarea);
        });
        $("#sphereside").keyup(function() {
            var sphereside = Number($("#sphereside").val());
            var spherearea = 4 * Math.PI * sphereside * sphereside;
            $("#spherearea").attr("value", spherearea);
        });
        $("#cylindercalc").click(function() {
            var cylinderside = Number($("#cylinderside").val());
            var cylinderradius = Number($("#cylinderradius").val());
            var cylinderarea = (2 * Math.PI * cylinderradius * cylinderside) + (2 * Math.PI * cylinderradius * cylinderradius);
            $("#cylinderarea").attr("value", cylinderarea);
        });
        $("#conecalc").click(function() {
            var coneside = Number($("#coneside").val());
            var coneradius = Number($("#coneradius").val());
            var conearea = (Math.sqrt((coneside * coneside) + (coneradius * coneradius)) + coneradius) * (Math.PI * coneradius);
            $("#conearea").attr("value", conearea);
        });
        $("#shape").change(function() {
            var shp = $("#shape").val();
            $(".shapes").css("display", "none");
            $("#" + shp).css("display", "block");
        })
    })
</script>