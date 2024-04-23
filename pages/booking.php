<?php
    include('operations/database.php');
    $stmt = $conn->prepare("SELECT * FROM services");
    $stmt->execute();
    $serviceCount = $stmt->rowCount();
    $fetchedServices = $stmt->fetchAll();

    $stmt = $conn->prepare("SELECT full_name, barbers.id AS barberID FROM users INNER JOIN barbers ON users.id = barbers.user_id");
    $stmt->execute();
    $barberCount = $stmt->rowCount();
    $fetchedBarbers = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
</head>
<body>
    <div style="display: flex; align-items: center; justify-content: center; height: 35rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-header">
                            <h2 class="text-center">Foglalj időpontot</h2>
                        </div>
                        <div class="card-body"> 
                            <form action="operations/op_booking.php" method="POST">
                                <div class="form-group">
                                    <label for="barber">Válassz egy borbélyt:</label>
                                    <select name="barber" id="barber" class="form-control">
                                        <?php
                                            for ($i = 0; $i < $barberCount; $i++) {
                                                $name = $fetchedBarbers[$i]["full_name"];
                                                $id = $fetchedBarbers[$i]["barberID"];
                                                echo "<option value='$id'>$name</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="service">Válassz egy szolgáltatást:</label>
                                    <select name="service" id="service" class="form-control">
                                        <?php
                                            for ($i = 0; $i < $serviceCount; $i++) {
                                                $name = $fetchedServices[$i]["name"];
                                                $id = $fetchedServices[$i]["id"];
                                                echo "<option value='$id'>$name</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Válassz egy dátumot:</label>
                                    <input type="datetime-local" name="date" id="date" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Név:</label>
                                    <input type="text" name="name" id="name" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['full_name']; ?>" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['email']; ?>" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone">Telefonszám:</label>
                                    <input type="tel" name="phone" id="phone" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['phone']; ?>" class="form-control">
                                </div>   
                                <div class="form-group text-center">
                                    <input type="submit" value="Foglalok" class="btn btn-dark w-75">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
