<?php
?>

<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <video autoplay loop muted class="video-bg">
          <source src="assets/videos/video.mp4" type="video/mp4">
    </video>
    <div class="container text-light p-3 text-center my-5 border-2">  
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <img src="assets/images/logo-dark.svg" alt="logo" class="img-fluid" style="">
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h4 class="pt-5" style="color: black">Hajvágásra van szükséged? Akár egy szakáll igazítás? Nálunk ezt mind megtalálod!</h4>
    </div>
    <?= $fullDivider; ?>
    <div class="container my-5" style="position: relative; z-index">
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