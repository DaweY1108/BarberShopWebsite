<?php
    include('operations/database.php');
    if (isset($_SESSION['user'])) {
        if ($userData[0]['role_id'] == 2) {
            $stmt = $conn->prepare("SELECT bookings.name AS userFullName, phone, email, services.name AS serviceName, date FROM (bookings INNER JOIN barbers ON bookings.barber_id = barbers.id) INNER JOIN services ON bookings.service_id = services.id WHERE barbers.user_id = :id");
            $stmt->bindParam(':id', $userData[0]['id']);
            $stmt->execute();
            $dataCount = $stmt->rowCount();
            $fetchedData = $stmt->fetchAll(); 
        } else {
            echo '<script> location.replace("index.php?site=error"); </script>';
        }
    } else {
        echo '<script> location.replace("index.php?site=error"); </script>';
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Foglalások </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes foglalást, akik hozzád foglaltak</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div class='container mx-auto mt-5'>
            <?php for ($i = 0; $i < $dataCount; $i++): ?>
                <?php
                    $dateString = $fetchedData[$i]["date"];
                    $date = new DateTime($dateString);
                    $dateDate = $date->format('Y. m. d.');
                    $dateHour = $date->format('H:i'); 
                ?>
                <ul class="list-group">
                    <li class="list-group-item my-3 card-bg">
                        <div class="row">
                            <div class="col-md-4">
                                <h5><i class="fa-solid fa-user mr-3"></i> <?= $fetchedData[$i]['userFullName'] ?></h5>
                                <h5><i class="fa-solid fa-phone mr-3"></i> <?= $fetchedData[$i]['phone']?></h5>
                                <h5><i class="fa-solid fa-envelope mr-3"></i> <?= $fetchedData[$i]['email']?></h5>
                            </div>
                            <div class="col-md-5">
                                <h5><i class="fa-solid fa-calendar mr-3"></i> <?= $dateDate ?></h5>
                                <h5><i class="fa-solid fa-clock mr-3"></i> <?= $dateHour ?></h5>
                                <h5><i class="fa-solid fa-scissors mr-3"></i> <?= $fetchedData[$i]['serviceName']?></h5>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-lg btn-block btn-dark">Törlés</button>
                            </div>
                        </div>
                    </li>
                </ul>
            <?php endfor; ?>
        </div>
    </body>
</html>