<?php
    include('./dbconfig.php');
    $conn = new mysqli($database['host'], $database['user'], $database['password'], $database['database']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>