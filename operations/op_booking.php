<?php
    include('database.php');
    if (isset($_POST['barber']) && isset($_POST['service']) && isset($_POST['name']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['phone'])) {       
        $barberID = $_POST['barber'];
        $serviceID = $_POST['service'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $stmt = $conn->prepare("INSERT INTO bookings (barber_id, service_id, date, name, email, phone) VALUES (:barber_id, :service_id, :date, :name, :email, :phone)");
        $stmt->bindParam(':barber_id', $barberID);
        $stmt->bindParam(':service_id', $serviceID);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        header('Location: ../index.php?site=bookSuccess');
    } else {
        header('Location: ../index.php?site=booking');
    }
?>