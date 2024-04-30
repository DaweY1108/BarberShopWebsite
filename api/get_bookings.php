<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json');
    
        // Get JSON as a string
        $json_str = file_get_contents('php://input');
        // Get as an object
        $json_obj = json_decode($json_str);

        if (isset($json_obj->userid) && !empty($json_obj->userid)) {
            $stmt = $conn->prepare("SELECT bookings.name AS userFullName, phone, email, services.name AS serviceName, date FROM (bookings INNER JOIN barbers ON bookings.barber_id = barbers.id) INNER JOIN services ON bookings.service_id = services.id WHERE barbers.user_id = :id");
            $stmt->bindParam(':id', $json_obj->userid);
        } else {
            $stmt = $conn->prepare("SELECT bookings.name AS userFullName, phone, email, services.name AS serviceName, date FROM (bookings INNER JOIN barbers ON bookings.barber_id = barbers.id) INNER JOIN services ON bookings.service_id = services.id");
        }
    
        $stmt->execute();
        $fetchedData = $stmt->fetchAll();
        echo json_encode($fetchedData);
    } else {
        header('Location: ../index.php');
    }
?>