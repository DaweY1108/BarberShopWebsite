<?php
?>

<!DOCTYPE html>
<body>

<div>
    <div class="container text-dark text-center my-5">
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h1> Galéria </h1>
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h4 class="pt-5">Itt megtalálod az összes felhasználó által feltöltött képet, illetve a véleményeket!</h4>
    </div>
</div>

<?= $fullDivider ?>

<div class="container">
    <div class="row card-bg py-3 border my-3">
        <div class="col-md-4 py-2 bg-light shadow mx-2">
            <div class="d-flex flex-column justify-content-md-start justify-content-center align-items-center">
                <img src="https://cc-prod.scene7.com/is/image/CCProdAuthor/adobe-firefly-marquee-text-to-image-0-mobile-600x600?$pjpeg$&jpegSize=100&wid=600" alt="" class="img-fluid border border-dark my-2 shadow"/>
                <h6 class="card-title text-center py-3">Varga Dávid Zsolt Kecske</h6>
            </div>
        </div>
        <div class="col-md-7 mx-4">
            <div class="media-body">
                <h5 class="card-text text-justify px-2 py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
            </div>
        </div>
    </div>
    <div class="row card-bg py-3 border my-3">
        <div class="col-md-4 py-2 bg-light shadow mx-2">
            <div class="d-flex flex-column justify-content-md-start justify-content-center align-items-center">
                <img src="https://cc-prod.scene7.com/is/image/CCProdAuthor/adobe-firefly-marquee-text-to-image-0-mobile-600x600?$pjpeg$&jpegSize=100&wid=600" alt="" class="img-fluid border border-dark my-2 shadow"/>
                <h6 class="card-title text-center py-3">Varga Dávid Zsolt Kecske</h6>
            </div>
        </div>
        <div class="col-md-7 mx-4">
            <div class="media-body">
                <h5 class="card-text text-justify px-2 py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
            </div>
        </div>
    </div>
</div>

<?= $fullDivider ?>

<div class="container text-center" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="card card-bg">
        <div class="card-body">
            <h2 class="card-title">Írd meg a véleményed</h2>
            <?php
                if(isset($_SESSION['user'])) {
                    echo "
                        <form action='gallery.php' method='post' enctype='multipart/form-data'>
                            <div class='d-flex justify-content-center'>
                                <div class='form-group w-100 text-left'>
                                    <label for='opinion'>Vélemény:</label>
                                    <textarea class='form-control' id='opinion' name='opinion' rows='3'required></textarea>
                                </div>
                            </div>
                            <div class='d-flex justify-content-center'>
                                <div class='input-group custom-file-button w-100'>
                                    <label class='input-group-text card-bg' for='inputGroupFile'>Kép választása</label>
                                    <input type='file' class='form-control' id='inputGroupFile' name='image'>
                                </div>
                            </div>
                            <div class='form-check py-3'>
                                <input type='checkbox' class='form-check-input' id='checkbox'>
                                <label class='form-check-label' for='checkbox'>Elfogadom a szabályzatot</label>
                            </div>
                            <button type='submit' class='btn btn-primary w-50'>Beküldés</button>
                        </form>
                    ";
                } else {
                    echo "Csak bejelentkezett felhasználó írhat véleményt!";
                }
            ?>
        </div>
    </div>
</div>
</body>