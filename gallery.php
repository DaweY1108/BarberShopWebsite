<?php
?>

<!DOCTYPE html>
<body>

<div>
    <div class="container text-dark text-center my-5">
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h1>- Galéria -</h1>
      <hr style="border-width: 1px; border-color: black" class="w-50">
      <h4 class="pt-5">Itt megtalálod az összes felhasználó által feltöltött képet, vagy akár te is tölthetsz fel sajátot!</h4>
    </div>
</div>

<?= $fullDivider ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 py-3">
            <div class="card card-bg">
                <img class="m-2 border-primary border-2 rounded-2 border-dark" src="https://backcountrygallery.com/wp-content/uploads/ngg_featured/peeking-raccoon.jpg" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title text-center">Image 2</h5>
                    <hr style="border-width: 1px; border-color: black;" class="w-25 align-left">
                </div>
            </div>
        </div>
    </div>
    <!-- Add more rows for additional images -->
</div>

<div class="container text-center">
    <div class="card card-bg">
        <div class="card-body">
            <h5 class="card-title">Upload Image</h5>
            <form action="gallery.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Select Image:</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
</body>