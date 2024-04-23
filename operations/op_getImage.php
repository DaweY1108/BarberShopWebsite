<?php
   include('database.php');
   $id = $_GET['id'];
   $stmt = $conn->prepare("SELECT photo FROM gallery WHERE id=:id");
   $stmt->bindParam(":id", $id);
   $stmt->execute();
   $row = $stmt->fetchAll();
   header("Content-type: image/jpeg");
   echo $row[0]['photo'];
?>