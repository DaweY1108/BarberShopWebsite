<?php
    include(__DIR__ . '/../config.php');
    $conn = new PDO("mysql:host=".$database['host'].";dbname=".$database['database'], $database['username'], $database['password']); 
    if (!$conn) {
        die("Fatal Error: Connection Failed!");
    }
?>