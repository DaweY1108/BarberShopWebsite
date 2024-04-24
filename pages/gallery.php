<?php
    include('operations/database.php');
    $stmt = $conn->prepare("SELECT gallery.id AS photoID, full_name, opinion, photo FROM gallery INNER JOIN users ON gallery.user_id = users.id");
    $stmt->execute();
    $dataCount = $stmt->rowCount();
    $fetchedData = $stmt->fetchAll();  
    
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


<div class="container">
    <?php
        for ($i = 0; $i < $dataCount; $i++) {
            $name = $fetchedData[$i]["full_name"];
            $opinion = $fetchedData[$i]["opinion"];
            $photoID = $fetchedData[$i]["photoID"];
            echo "
            <div class='row card-bg py-3 border my-3'>
                <div class='col-md-4 py-2 bg-light shadow mx-2'>
                    <div class='d-flex flex-column justify-content-md-start justify-content-center align-items-center'>
                        <img src='operations/op_getImage.php?id=$photoID' alt='' class='img-fluid border border-dark my-2 shadow'/>
                        <h6 class='card-title text-center py-3'>$name</h6>
                    </div>
                </div>
                <div class='col-md-7 mx-4'>
                    <div class='media-body'>
                        <h5 class='card-text text-justify px-2 py-3'>$opinion</h5>
                    </div>
                </div>
            </div>
            ";
        }
            
    ?>
</div>

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
</body>