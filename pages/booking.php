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

    $service="0";
    $barber="0";
    if (isset($_GET["service"])) {
        $service = $_GET["service"];
    }
    if (isset($_GET["barber"])) {
        $barber = $_GET["barber"];
    }
    echo '<script>
        const userLoggedIn = ' . (isset($_SESSION['user']) ? 'true' : 'false') . ';
        const loggedInEmail = "' . (isset($_SESSION['user']) ? $userData[0]['email'] : '') . '";
    </script>';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Form</title>
</head>
<body>
    <div data-aos="zoom-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-header">
                            <h2 class="text-center">Foglalj időpontot</h2>
                        </div>
                        <div class="card-body"> 
                            <form id="bookingForm" name="bookingForm" action="operations/op_booking.php" method="POST">
                                <div class="form-group">
                                    <label for="barber">Válassz egy borbélyt:</label>
                                    <select name="barber" id="barber" class="form-control" onchange="validateBarber()" value="<?= $barber ?>">
                                        <option value='0'>Válassz...</option>
                                        <?php
                                            for ($i = 0; $i < $barberCount; $i++) {
                                                $name = $fetchedBarbers[$i]["full_name"];
                                                $id = $fetchedBarbers[$i]["barberID"];
                                                if ($barber == $id) {
                                                    echo "<option value='$id' selected='selected'>$name</option>";
                                                } else {
                                                    echo "<option value='$id'>$name</option>";
                                                }
                                            }
                                        ?>
                                    </select>
                                    <small id="barberError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="service">Válassz egy szolgáltatást:</label>
                                    <select name="service" id="service" class="form-control" onchange="validateService()">
                                        <option value='0'>Válassz...</option>
                                        <?php
                                            for ($i = 0; $i < $serviceCount; $i++) {
                                                $name = $fetchedServices[$i]["name"];
                                                $id = $fetchedServices[$i]["id"];
                                                if ($service == $id) {
                                                    echo "<option value='$id' selected='selected'>$name</option>";
                                                } else {
                                                    echo "<option value='$id'>$name</option>";
                                                }
                                                
                                            }
                                        ?>
                                    </select>
                                    <small id="serviceError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="date">Válassz egy dátumot:</label>
                                    <input type="datetime-local" name="date" id="date" class="form-control" onchange="validateDate()">
                                    <small id="dateError" class="text-danger"></small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="name">Név:</label>
                                    <input type="text" name="name" id="name" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['full_name']; ?>" class="form-control" onchange="validateName()">
                                    <small id="nameError" class="text-danger"></small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" id="email" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['email']; ?>" class="form-control" onchange="validateEmail()">
                                    <small id="emailError" class="text-danger"></small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone">Telefonszám:</label>
                                    <input type="phone" name="phone" id="phone" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['phone']; ?>" class="form-control" onchange="validatePhone()">
                                    <small id="phoneError" class="text-danger"></small>
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
    <script src="scripts/booking.js"></script>
</body>
</html>
