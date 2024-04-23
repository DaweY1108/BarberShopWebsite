<?php

    session_start();
include('database.php');
if (isset($_SESSION['user'])) {
    if (isset($_POST['opinion']) && isset($_FILES['image'])) {
        if ($_FILES['image']['error'] == 0) {
            $opinion = $_POST['opinion'];
            $imgdata = file_get_contents($_FILES['image']['tmp_name']);
            $stmt = $conn->prepare("INSERT INTO gallery (user_id, opinion, photo) VALUES (:user_id, :opinion, :photo)");
            $stmt->bindParam(':user_id', $_SESSION['user']);
            $stmt->bindParam(':opinion', $opinion);
            $stmt->bindParam(':photo', $imgdata);
            $stmt->execute();
            header('Location: ../index.php?site=gallery');
        } else {
            echo "Error: " . $_FILES['image']['error'];
        }
    } else {
        echo "Error: Missing data!";
    }
}

?>