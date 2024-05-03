<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json'); 
        // Get JSON as a string
        $json_str = file_get_contents('php://input');
        // Get as an object
        $json_obj = json_decode($json_str);
        if (isset($json_obj->id) && !empty($json_obj->id)) {
            $stmt = $conn->prepare("DELETE FROM bookings WHERE id = :id");
            $stmt->bindParam(":id", $json_obj->id);
            $stmt->execute();
        } else {
            header('Location: ../index.php');
        }
    } else {
        header('Location: ../index.php');
    }
?>