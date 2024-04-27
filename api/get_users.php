<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json');
    
        // Get JSON as a string
        $json_str = file_get_contents('php://input');
        // Get as an object
        $json_obj = json_decode($json_str);

        $username = $json_obj->username;
        $email = $json_obj->email;

        if (isset($username) && !empty($username)) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
        } else if (isset($email) && !empty($email)) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
        } else {
            $stmt = $conn->prepare("SELECT * FROM users");
        }
    
        $stmt->execute();
        $fetchedData = $stmt->fetchAll();
        echo json_encode($fetchedData);
    } else {
        header('Location: ../index.php');
    }
?>