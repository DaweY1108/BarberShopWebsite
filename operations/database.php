<?php
    include(__DIR__ . '/../config.php');
    $conn = new PDO("mysql:host=".$database['host'].";dbname=".$database['database'], $database['username'], $database['password']); //Csatlakozas az adatbazishoz
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    if (!$conn) {
        die("Fatal Error: Connection Failed!");
    }
?>