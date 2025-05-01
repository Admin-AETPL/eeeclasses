<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" itemprop="url">
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<div class="cont-addr d-lg-block d-none bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 position-relative">
                <div class="concept-text position-absolute top-50 start-50 translate-middle w-100" style="font-family: arial;">
                    <p class="text-start text-dark fw-bold fs-2">Address:</p>
                    <p class="text-start text-dark fs-5">e-Edge Education Centre</p>
                    <p class="text-start text-dark fs-5">4/469 GF, Sector-4, Vaishali</p>
                    <p class="text-start text-dark fs-5">Ghaziabad , U.P. , India</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 my-2 py-2">
                <div id="map" class="shadow" style="height: 300px;"></div>
            </div>
            <div class="col-12 col-sm-6 text-center my-2">
                <img src="<?php echo $home ?>img/background/Contact-info-1.png" style="height:340px;filter:drop-shadow(5px 5px 5px #000)" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-6 position-relative">
                <div class="concept-text position-absolute top-50 start-50 translate-middle w-100">
                    <p class="text-start text-dark fw-bold fs-2">Contact:</p>
                    <p class="text-start text-dark fs-5">Phone us at: <a href="tel:01204568775">0120-4568775</a>, <a href="tel:+917042280775">+917042280775</a>, <a href="tel:+919818949775">+919818949775</a></p>
                    <p class="text-start text-dark fw-bold fs-2">Queries:</p>
                    <p class="text-start text-dark fs-5">Course related: <a href="https://mail.google.com/mail/?view=cm&fs=1&to=course.eeeclasses@gmail.com" target="_blank">course.eeeclasses@gmail.com</a></p>
                    <p class="text-start text-dark fs-5">Admission:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=admission.eeeclasses@gmail.com" target="_blank">admission.eeeclasses@gmail.com</a></p>
                    <p class="text-start text-dark fs-5">Feedback:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=feedback.eeeclasses@gmail.com" target="_blank">feedback.eeeclasses@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cont-addr d-block d-lg-none bg-light py-3">
    <div class="container">
        <div class="row">
        <div class="col-12 col-sm-6">
                <div id="mapid" class="shadow" style="height: 300px;"></div>
            </div>
            <div class="col-12 col-sm-6 my-2 py-2">
                <div class="concept-text text-center">
                    <p class="text-start text-dark fw-bold fs-2">Address:</p>
                    <p class="text-start text-dark fs-5">e-Edge Education Centre</p>
                    <p class="text-start text-dark fs-5">4/469 GF, Sector-4, Vaishali</p>
                    <p class="text-start text-dark fs-5">Ghaziabad , U.P. , India</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 text-center my-2">
                <img src="<?php echo $home ?>img/background/Contact-info-1.png" style="height:340px;filter:drop-shadow(5px 5px 5px #000)" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-sm-6">
                <div class="concept-text">
                    <p class="text-start text-dark fw-bold fs-2">Contact:</p>
                    <p class="text-start text-dark fs-5">Phone us at: <a href="tel:01204568775">0120-4568775</a>, <a href="tel:+917042280775">+917042280775</a>, <a href="tel:+919818949775">+919818949775</a></p>
                    <p class="text-start text-dark fw-bold fs-2">Queries:</p>
                    <p class="text-start text-dark fs-5">Course related: <a href="mailto:courses@eeeclasses.info">courses<i class="fas fa-at"></i>eeelclasses.info</a></p>
                    <p class="text-start text-dark fs-5">Admission: <a href="mailto:admission@eeeclasses.info">admission<i class="fas fa-at"></i>eeelclasses.info</a></p>
                    <p class="text-start text-dark fs-5">Feedback: <a href="mailto:feedback@eeeclasses.info">feedback<i class="fas fa-at"></i>eeelclasses.info</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var mymap = L.map('map').setView([28.64710, 77.34005], 17);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWthc2gta3VzaHdhaGEiLCJhIjoiY2ttYTl6aW1zMWRtbDJvbXp6YzlwdmliaCJ9.qpmIbAfYARNDvUF69r-3JQ', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 16,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYWthc2gta3VzaHdhaGEiLCJhIjoiY2ttYTl6aW1zMWRtbDJvbXp6YzlwdmliaCJ9.qpmIbAfYARNDvUF69r-3JQ'
    }).addTo(mymap);
    L.marker([28.64710, 77.34005]).addTo(mymap)
        .bindPopup("<div style='text-align:center'>e-Edge Education Classes</div>").openPopup();
    var popup = L.popup();
</script>
<script>
    var mymap = L.map('mapid').setView([28.64710, 77.34005], 17);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYWthc2gta3VzaHdhaGEiLCJhIjoiY2ttYTl6aW1zMWRtbDJvbXp6YzlwdmliaCJ9.qpmIbAfYARNDvUF69r-3JQ', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 16,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiYWthc2gta3VzaHdhaGEiLCJhIjoiY2ttYTl6aW1zMWRtbDJvbXp6YzlwdmliaCJ9.qpmIbAfYARNDvUF69r-3JQ'
    }).addTo(mymap);
    L.marker([28.64710, 77.34005]).addTo(mymap)
        .bindPopup("<div style='text-align:center'>e-Edge Education Classes</div>").openPopup();
    var popup = L.popup();
</script>