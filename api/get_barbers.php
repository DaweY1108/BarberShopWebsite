<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json');
        $stmt = $conn->prepare("SELECT * FROM users INNER JOIN barbers ON barbers.user_id = users.id");
        $stmt->execute();
        $fetchedData = $stmt->fetchAll();
        echo json_encode($fetchedData);
    } else {
        header('Location: ../index.php');
    }
?>