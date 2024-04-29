<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json'); 
        // Get JSON as a string
        $json_str = file_get_contents('php://input');
        // Get as an object
        $json_obj = json_decode($json_str);
        if (isset($json_obj->message) && !empty($json_obj->message) && isset($json_obj->name) && !empty($json_obj->name)) {
            $stmt = $conn->prepare("INSERT INTO logs (name, message) VALUES (:name, :message)");
            $stmt->bindParam(":name", $json_obj->name);
            $stmt->bindParam(':message', $json_obj->message);
            $stmt->execute();
        } else {
            header('Location: ../index.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>