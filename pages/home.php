<?php
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <div class="container text-light p-3 text-center my-5 border-2" data-aos="zoom-in">  
      <hr style="border-width: 1px; border-color: black" class="w-50 shadow">
      <img src="assets/images/logo-dark.svg" alt="logo" class="img-fluid shadow" style="">
      <hr style="border-width: 1px; border-color: black" class="w-50 shadow">
      <h4 class="pt-5" style="color: black">Hajvágásra van szükséged? Akár egy szakáll igazítás? Nálunk ezt mind megtalálod!</h4>
    </div>
    <?= $fullDivider; ?>
    <div class="container my-5" data-aos="zoom-in">
      <div class="row">
        <div class="col">
          <h3 class="text-center">Videók</h3>
          <hr style="border-width: 1px; border-color: black" class="w-50">
          <div class="row">
            <div class="col-md-6">
              <div class="card my-2 border-0 text-center card-bg">
                <div class="card-body">
                  <video controls width="100%">
                    <source src="assets/videos/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                  <hr style="border-width: 1px; border-color: black" class="w-50">
                  <h5 class="py-4 text-justify">
                  Fedezze fel velünk a hagyomány és a modern stílus találkozását. Élvezze a vibráló zene és a profi szakemberek által nyújtott egyedi élményt. A RazorRoom nem csak egy barbershop, hanem egy közösség, ahol az emberek találkoznak, beszélgetnek és megosztják a stílusukat. Tapasztalja meg velünk, hogyan változik meg a hajvágás egy életre szóló kalanddá!
                  </h5>
                  <hr style="border-width: 1px; border-color: black" class="w-50">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card my-2 border-0 text-center card-bg">
                <div class="card-body">
                <iframe width="100%" height="280" src="https://www.youtube.com/embed/cloqJ2HbvCs"></iframe>
                  <hr style="border-width: 1px; border-color: black" class="w-50">
                  <h5 class="py-4 text-justify">
                  Fedezze fel a RazorRoom mesterségbeli műhelyét, ahol a hajvágás művészetté válik. Lépjen be a szakemberek által irányított világba, akik szenvedélyesen formálják meg a hajat. Ez a videó bemutatja, hogyan keveredik össze a hagyomány és az innováció egy kifinomult művészeti folyamatban. Tapasztalja meg velünk a hajvágás valódi művészetét a RazorRoom-ban!
                  </h5>
                  <hr style="border-width: 1px; border-color: black" class="w-50">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?= $fullDivider; ?>
    <div class="container my-5" data-aos="zoom-in">
      <div class="row">
          <div class="col">
              <h3 class="text-center">Itt találsz meg minket</h3>
              <hr style="border-width: 1px; border-color: black" class="w-50">
              <div class="card my-2 border-0 text-center card-bg">
                  <div class="card-body">
                    <iframe 
                      style="width:100%;border:0;" 
                      height="450"
                      frameborder="0" 
                      src="https://www.google.com/maps/embed/v1/place?q=Kecskemét,+Neumann+János+Egyetem+GAMF+Műszaki+és+Informatikai+Kar,+Izsáki+út,+Magyarország&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                    </iframe>
                  </div>
              </div>
          </div>
      </div>
    </div>

  </body>
</html>