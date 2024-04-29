<?php
    session_start();
    include('database.php');
    if (isset($_POST['username']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['password-again'])) {
        if (!empty($_POST['username']) && !empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['password-again'])){
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $password_again = $_POST['password-again'];
            if ($password == $password_again) {
                $hashedPassword = md5($password);
                $stmt = $conn->prepare("INSERT INTO users (username, full_name, email, phone, password) VALUES (:username, :fullname, :email, :phone, :password)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':fullname', $fullname);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->execute();
                header('Location: ../index.php?site=login');
            } else {
                header('Location: ../index.php?site=register');
            }
        } else {
            header('Location: ../index.php?site=register');
        }
    } else {
        header('Location: ../index.php?site=register');
    }
?>