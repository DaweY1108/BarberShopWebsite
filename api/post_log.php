<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json'); 
        // Get JSON as a string
        $json_str = file_get_contents('php://input');
        // Get as an object
        $json_obj = json_decode($json_str);
        if (isset($json_obj->message) && !empty($json_obj->message)) {
            $stmt = $conn->prepare("INSERT INTO logs (message) VALUES (:message)");
            $stmt->bindParam(':message', $json_obj->message);
            $stmt->execute();
        } else {
            header('Location: ../index.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>