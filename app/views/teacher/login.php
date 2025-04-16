<style>
    body {
        background: #2a3162;
    }

    input.form-control {
        background: none;
        border: none;
        border-radius: 0;
        transition: border-bottom 0.3s linear;
        color: white;
    }

    input.form-control:focus {
        background: none;
        border: none;
        outline: none;
        box-shadow: none;
    }

    .passbox {
        display: none;
    }
</style>
<div class="login h-100" style="background: #2a3162;overflow-x:hidden">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 p-5 d-none d-sm-block" style="position:relative">
                <div class="login-form p-5" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:75%">
                    <h3 class="h3 text-white text-center">Teacher Login</h3>
                    <form action="<?php echo $home ?>teacher_users/login" class="" method="POST">
                        <div class="form-group my-2">
                            <input type="text" class="form-control uid" id="uid" name="uid" placeholder="Enter Teacher ID" required>
                        </div>
                        <div class="form-group my-2">
                            <input type="password" class="form-control pass" id="pass" name="pass" placeholder="Enter Password" required>
                        </div>
                        <div class="form-check passbox">
                            <input class="form-check-input showpass" type="checkbox" value="" id="showpass">
                            <label class="form-check-label text-white" for="showpass">
                                Show Password
                            </label>
                        </div>
                        <div class="form-group my-3">
                            <input type="submit" value="Login" id="login" class="form-inline login btn btn-light">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-6 py-3 d-none d-sm-block">
                <img src="<?php echo $home ?>img/background/login-bg.gif" alt="" class="img-fluid w-100">
            </div>
            <div class="col-12 col-sm-6 p-5 d-block d-sm-none">
                <div class="login-form p-5 bg-light" style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:75%">
                    <h3 class="h3 text-center" style="color:#2a3162">Teacher Login</h3>
                    <br>
                    <form action="<?php echo $home ?>teacher_users/login" class="" method="POST">
                        <div class="form-group my-2">
                            <input type="text" class="form-control uid border-bottom border-dark border-1 text-dark" id="uid1" name="uid" placeholder="Enter Teacher ID" required>
                        </div>
                        <div class="form-group my-2">
                            <input type="password" class="form-control pass border-bottom border-dark border-1 text-dark" id="pass1" name="pass" placeholder="Enter Password" required>
                        </div>
                        <div class="form-check passbox">
                            <input class="form-check-input showpass" type="checkbox" value="" id="showpass1">
                            <label class="form-check-label text-white" for="showpass1">
                                Show Password
                            </label>
                        </div>
                        <div class="form-group my-3">
                            <input type="submit" value="Login" id="login1" class="form-inline btn text-white login" style="background: #2a3162;">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-sm-6 py-3 d-none d-sm-none">
                <img src="<?php echo $home ?>img/background/login-bg.gif" alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("input").focus(function() {
            $(this).css({
                "border-bottom": "solid 2px white",
                "color": "white"
            });
        });
        $(".pass").keyup(function() {
            var p = $(this).val();
            if (p.trim().length > 0) {
                $(".passbox").css("display", "block");
            } else {
                $(".passbox").css("display", "none");
            }
        });
        $(".showpass").click(function(){
            if($(this).is(":checked"))
            {
                $(".pass").attr("type","text");
            }
            else
            {
                $(".pass").attr("type","password");
            }
        })

    })
</script>