<?php
    include('database.php');
    if (!isset($_POST['name']) && !isset($_POST['email']) && isset($_POST['message'])) {
        $name = 'Vendég';
        $email = 'Nincs megadva';
        $message = $_POST['message'];
        $stmt = $conn->prepare("INSERT INTO contact (email, name, message) VALUES (:email, :name, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        header('Location: ../index.php?site=home');
    } else if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $stmt = $conn->prepare("INSERT INTO contact (email, name, message) VALUES (:email, :name, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        header('Location: ../index.php?site=home');
    } else {
        header('Location: ../index.php?site=contact');
    }
?>