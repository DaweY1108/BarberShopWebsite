<?php
session_start();
    include('database.php');
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashedPassword = md5($password);
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();
        $user = $stmt->fetch();
        if ($user) {
            $_SESSION['user'] = $user['id'];
            header('Location: ../index.php?site=home');
        } else {
            header('Location: ../index.php?site=login');
        }
    } else {
        header('Location: ../index.php?site=login');
    }
?>