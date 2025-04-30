<style>
    .imganim {
        animation: topbottom 3s linear infinite;
        transition: animation 0.3s linear;
    }

    @keyframes topbottom {
        0% {
            transform: translateY(0);
        }

        25% {
            transform: translateY(5px);
        }

        50% {
            transform: translateY(10px);
        }

        75% {
            transform: translateY(5px);
        }

        100% {
            transform: translateY(0);
        }
    }
    .imganim2 {
        animation: topbottom2 3s linear infinite;
        transition: animation 0.3s linear;
    }

    @keyframes topbottom2 {
        0% {
            transform: translateY(10px);
        }

        25% {
            transform: translateY(5px);
        }

        50% {
            transform: translateY(0);
        }

        75% {
            transform: translateY(5px);
        }

        100% {
            transform: translateY(10px);
        }
    }
</style>
<div class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h3 class="h3 text-coral text-center">NEET</h3>
            </div>
            
            <div class="col-3 col-sm-3 imganim2">
                <div style="border-radius: 50% 50% 79% 40%/34% 24% 75% 74%;padding:10px;border:solid 5px #f88379;background:#f88379;color:#fff">
                    <img src="<?php echo $home ?>img/background/stethoscope.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-3 col-sm-3 imganim2">
                <div style="border-radius: 54% 59% 72% 45%/44% 46% 74% 72%;border:solid 5px #c5e5ff;background:#c5e5ff;color:#fff">
                    <img src="<?php echo $home ?>img/background/medical-report.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-3 col-sm-3 imganim">
                <div style="border-radius:50% 50% 83% 51%/51% 64% 54% 77%;padding:10px;border:solid 5px #f88379;background:#f88379;color:#fff">
                    <img src="<?php echo $home ?>img/background/syringe.png" alt="" class="img-fluid">
                </div>
            </div>
            
            <div class="col-3 col-sm-3 imganim">
            <div style="border-radius: 54% 59% 72% 45%/44% 46% 74% 72%;border:solid 5px #c5e5ff;background:#c5e5ff;color:#fff">
                    <img src="<?php echo $home ?>img/background/medical.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feat py-2 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 my-2">
                <h3 class="h3 text-dark text-center">Course Inclusions:</h3>
            </div>
            <div class="col-12 col-sm-6">
                <div class="text-start text-primary">
                    <p class="text-start text-primary"><i class="fas fa-arrow-circle-right"></i> Highly analysed study material</p>
                    <p class="text-start text-primary"><i class="fas fa-arrow-circle-right"></i> Topic-specific notes/assignments</p>
                    <p class="text-start text-primary"><i class="fas fa-arrow-circle-right"></i> Videos Lectures for clarification of concepts</p>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="text-start text-primary">
                    <p class="text-start text-primary"><i class="fas fa-arrow-circle-right"></i> Doubt Solving Classes both online and offline</p>
                    <p class="text-start text-primary"><i class="fas fa-arrow-circle-right"></i> Test Series every fortnight</p>
                    <p class="text-start text-primary"><i class="fas fa-arrow-circle-right"></i> Performance Analysis of every individual</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pcmb bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <h3 class="h3 text-dark text-center">Main Focus</h3>
            </div>
            <div class="col-6 col-sm-4 my-1">
                
                    <div class="text-center bg-white pb-2 rounded subj" onclick="alert('Please contact admin for further details')">
                        <img src="<?php echo $home ?>img/background/iit-phy.jpg" alt="" class="rounded-top img-fluid">
                        <h4 class="h4 text-dark text-center">Physics</h4>
                        <button type="button" class="btn btn-primary">View</button>
                    </div>
                
            </div>
            <div class="col-6 col-sm-4 my-1">
                
                    <div class="text-center bg-white pb-2 subj rounded" onclick="alert('Please contact admin for further details')">
                        <img src="<?php echo $home ?>img/background/iit-chem.jpg" alt="" class="rounded-top img-fluid">
                        <h4 class="h4 text-dark text-center">Chemistry</h4>
                        <button type="button" class="btn btn-primary">View</button>
                    </div>
                
            </div>
            <div class="col-6 col-sm-4 my-1">
                
                    <div class="text-center bg-white pb-2 subj rounded" onclick="alert('Please contact admin for further details')">
                        <img src="<?php echo $home ?>img/background/iit-biology.jpg" alt="" class="rounded-top img-fluid">
                        <h4 class="h4 text-dark text-center">Biology</h4>
                        <button type="button" class="btn btn-primary">View</button>
                    </div>
                
            </div>
        </div>
    </div>
</div>