<?php
    include(__DIR__ . '/../config.php');
    $conn = new PDO("mysql:host=".$database['host'].";dbname=".$database['database'], $database['username'], $database['password']); //Csatlakozas az adatbazishoz
    if (!$conn) {
        die("Fatal Error: Connection Failed!");
    }
?>