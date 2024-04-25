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


<div id='gallery' class="container"></div>

<?= $fullDivider ?>

<div class="container text-center" style="padding-top: 50px; padding-bottom: 50px;">
    <div class="card card-bg">
        <div class="card-body">
            <h2 class="card-title">Írd meg a véleményed</h2>
            <?php
                if(isset($_SESSION['user'])) {
                    echo "
                        <form action='operations/op_gallery.php' method='post' enctype='multipart/form-data'>
                            <div class='d-flex justify-content-center'>
                                <div class='form-group w-100 text-left'>
                                    <label for='opinion'>Vélemény:</label>
                                    <textarea class='form-control' id='opinion' name='opinion' rows='3'required></textarea>
                                </div>
                            </div>
                            <div class='d-flex justify-content-center'>
                                <div class='input-group custom-file-button w-100'>
                                    <label class='input-group-text card-bg' for='image'>Kép választása</label>
                                    <input type='file' class='form-control' id='image' name='image'>
                                </div>
                            </div>
                            <button type='submit' class='btn btn-primary w-50 mt-3'>Beküldés</button>
                        </form>
                    ";
                } else {
                    echo "Csak bejelentkezett felhasználó írhat véleményt!";
                }
            ?>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        get_gallery('gallery');
    };
</script>
</body>