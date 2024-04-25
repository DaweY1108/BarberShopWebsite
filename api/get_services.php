<?php
    include('../operations/database.php');
    header('Content-Type: application/json');
    $stmt = $conn->prepare("SELECT * FROM services");
    $stmt->execute();
    $dataCount = $stmt->rowCount();
    $fetchedData = $stmt->fetchAll();  
    echo json_encode($fetchedData);
?>