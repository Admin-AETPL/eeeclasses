<style>
    .notice img{box-shadow:0.3rem 0.3rem 0.5rem rgba(0,0,0,0.5);}
</style>
<div class="notice_board bg-white">
    <div class="container">
        <div class="row">
            <?php
            for($i=1;$i<6;$i++)
            {
            ?>
            <div class="col-12 col-sm-3 my-3 notice">
                <a href="<?php echo $home ?>img/notice_board/notice<?php echo $i ?>.jpeg" target="_blank"><img src="<?php echo $home ?>img/notice_board/notice<?php echo $i ?>.jpeg" class="img-fluid"></a>
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
</div>