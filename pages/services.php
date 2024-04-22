<?php
    include('operations/database.php');
    $stmt = $conn->prepare("SELECT * FROM services");
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
                <h1> Szolgáltatások </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes szolgáltatást árakkal együtt</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div class="container">
            <div class="card-deck mb-3 text-center">
                <?php
                    for ($i = 0; $i < $dataCount; $i++) {
                        $name = $fetchedData[$i]["name"];
                        $price = $fetchedData[$i]["price"];
                        $description = $fetchedData[$i]["description"];
                        echo "
                        <div class='card card-bg mb-4 box-shadow'>
                            <div class='card-header'>
                                <h4 class='my-0 font-weight-normal'>$name</h4>
                            </div>
                            <div class='card-body'>
                                <h1 class='card-title pricing-card-title'>$price Ft</small></h1>
                                <ul class='list-unstyled mt-3 mb-4'>
                                <li>$description</li>
                                </ul>
                                <button type='button' class='btn btn-lg btn-block btn-dark'>Foglalok</button>
                            </div>
                        </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </body>
</html>