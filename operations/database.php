<?php
    include('./dbconfig.php');
    try {
        $db = new PDO("mysql:host={$database['host']};dbname={$database['database']}", $database['username'], $database['password']);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
?>