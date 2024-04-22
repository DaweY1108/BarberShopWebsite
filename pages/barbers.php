<?php
    include('operations/database.php');
    $stmt = $conn->prepare("SELECT * FROM users INNER JOIN barbers ON barbers.user_id = users.id");
    $stmt->execute();
    $dataCount = $stmt->rowCount();
    $fetchedData = $stmt->fetchAll();  
?>

<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Borbélyok </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes borbélyt</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <?php
            for ($i = 0; $i < $dataCount; $i++) {
                $imageLoc = "images/barbers/".$fetchedData[$i]["id"].".jpg";
                $name = $fetchedData[$i]["full_name"];
                $description = $fetchedData[$i]["description"];
                $skills = $fetchedData[$i]["skills"];
                echo "<div class='container mx-auto mt-5 col-12'>
                        <div class='row justify-content-center pb-5'>
                            <div class='card card-bg col-md-6 mt-100'>
                                <div class='card-content'>
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col-md-4'>
                                                <img src='$imageLoc' alt='$name' class='img-fluid shadow border-1'>
                                            </div>
                                            <div class='col-md-8'>
                                                <h4 class='text-center my-3'>$name</h4>
                                                <h5>Bemutatkozás</h5>
                                                <hr style='border-width: 1px; border-color: black'>
                                                <h6>$description</h6>
                                                <br>
                                                <h5>Skillek</h5>
                                                <hr style='border-width: 1px; border-color: black'>
                                                <h6>$skills</h6>
                                            </div>
                                        </div>
                                        <div class='row justify-content-right pt-3'>
                                            <button type='button' class='btn btn-lg btn-block btn-dark'>Foglalok</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
            }
        ?>
    </body>
</html>