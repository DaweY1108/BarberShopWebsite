<!DOCTYPE html>
<body>

<div data-aos="zoom-in">
    <div class="container text-dark text-center my-5">
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h1> Galéria </h1>
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h4 class="pt-5">Mivel fotózással is foglalkozom, így itt megtalálód a referencia képeim!</h4>
    </div>
</div>


<div id='gallery' class="container"></div>

<?= $fullDivider ?>

<div class="container text-center" style="padding-top: 50px; padding-bottom: 50px;" data-aos="zoom-in">
    <div class="card card-bg">
        <div class="card-body">
            <?php if (isset($_SESSION['user'])): ?>
                <h2 class="card-title">Rakj ki a galériába képet</h2>
                <?php if ($userData[0]['role_id'] == 2): ?>
                    <form id='galleryForm' name='galleryForm' action='operations/op_gallery.php' method='post' enctype='multipart/form-data'>
                        <div class='d-flex justify-content-center'>
                            <div class='form-group w-100 text-left'>
                                <label for='opinion'>Leírás:</label>
                                <textarea class='form-control' id='opinion' name='opinion' rows='3'></textarea>
                                <small id="opinionError" class="text-danger"></small>
                            </div>
                        </div>
                        <div class='d-flex justify-content-center'>
                            <div class='input-group custom-file-button w-100'>
                                <label class='input-group-text card-bg' for='image'>Kép választása</label>
                                <input type='file' class='form-control' id='image' name='image'>
                            </div>
                            <small id="imageError" class="text-danger"></small>
                        </div>
                        <button type='submit' class='btn btn-dark w-50 mt-3'>Beküldés</button>
                    </form>
                <?php else: ?>
                    Nincs jogod képet feltölteni!
                <?php endif; ?>
            <?php else: ?>
                Nincs jogod képet feltölteni!
            <?php endif; ?>
        </div>
    </div>
</div>
<script src="scripts/gallery.js"></script>
<script>
    window.onload = function() {
        get_gallery('gallery');
    };
</script>
</body>