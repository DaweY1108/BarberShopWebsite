<?php
    include('../operations/database.php');
    header('Content-Type: application/json');
    $stmt = $conn->prepare("SELECT gallery.id AS photoID, full_name, opinion FROM gallery INNER JOIN users ON gallery.user_id = users.id");
    $stmt->execute();
    $dataCount = $stmt->rowCount();
    $fetchedData = $stmt->fetchAll();
    echo json_encode($fetchedData);
?>