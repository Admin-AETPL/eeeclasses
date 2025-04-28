<!-- <style>
    .notice img{box-shadow:0.3rem 0.3rem 0.5rem rgba(0,0,0,0.5);}
</style>
<div class="notice_board bg-white">
    <div class="container">
        <div class="row">
            <?php
            for($i=7; $i>=1; $i--)
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
</div> -->

<style>
    .notice img { box-shadow: 0.3rem 0.3rem 0.5rem rgba(0,0,0,0.5); }
</style>

<div class="notice_board bg-white">
    <div class="container">
        <div class="row">
            <?php
            $folder = "img/notice_board/";
            // Pick all images (jpeg, jpg, png, webp, etc.)
            $allowedExtensions = ['jpeg', 'jpg', 'png', 'webp'];
            $files = [];

            // Scan folder
            foreach (glob($folder . "*") as $file) {
                // Check if file is an image
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowedExtensions)) {
                    $files[] = $file;
                }
            }
      
            // Sort files by last modified date (newest first)
            usort($files, function($a, $b) {
                return filemtime($b) - filemtime($a);
            });

            // Now display all files
            foreach($files as $file) {
                $fileUrl = $home . $file;
                ?>
                <div class="col-12 col-sm-3 my-3 notice">
                    <a href="<?php echo $fileUrl ?>" target="_blank">
                        <img src="<?php echo $fileUrl ?>" class="img-fluid">
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

