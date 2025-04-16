<style>
  #images-wrapper {
    line-height: 0;
    -webkit-column-count: 5;
    -webkit-column-gap: 0px;
    -moz-column-count: 5;
    -moz-column-gap: 0px;
    column-count: 5;
    column-gap: 0px;
  }

  #images-wrapper img {
    width: 100% !important;
    height: auto !important;
  }

  #images-wrapper {
    display: inline-block;
    margin-right: auto;
    margin-left: auto;
  }

  @media (max-width: 1000px) {
    #images-wrapper {
      -moz-column-count: 3;
      -webkit-column-count: 3;
      column-count: 3;
    }
  }

  @media (max-width: 800px) {
    #images-wrapper {
      -moz-column-count: 2;
      -webkit-column-count: 2;
      column-count: 2;
    }
  }

  @media (max-width: 400px) {
    #images-wrapper {
      -moz-column-count: 1;
      -webkit-column-count: 1;
      column-count: 1;
    }
  }
</style>
<div class="gallery py-4">
    <div class="container">
<div class="row">
    <div class="col-12 col-sm-12" id="images-wrapper">
        
        <?php
        $filepath = "img/classroom";
        $filedir = array_filter(glob($filepath . "/"."*.{jpeg,jpg,png,JPG}",GLOB_BRACE), 'is_file');
        
        foreach ($filedir as $file) {
        ?>
            <div class="photos m-1" style="border:3px solid white;cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img loading="lazy" src="<?php echo $file; ?>" alt="e-Edge Education Classes" class="img-fluid imgsrc">
            </div>
        <?php
        }
        ?>

    </div>
</div>
</div>
</div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                            <img src="" id="imgsrc" class="d-block img-fluid" alt="...">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".imgsrc").click(function(){
            var imgsrc=$(this).attr("src");
            $("img#imgsrc").attr("src",imgsrc);
        })
    })
</script>