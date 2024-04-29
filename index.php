<?php
    session_start();
    include('operations/database.php');
    include('config.php');
    include('elements/dividers.php');
    if (isset($_SESSION['user'])) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user']);
        $stmt->execute();
        $userData = $stmt->fetchAll();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/commonStyle.css" type="text/css"/>
    <link rel="stylesheet" href="styles/customScrollBar.css" type="text/css"/>
</head>
    <body> 
        <div>
            <?php
                include('elements/header.php');
            ?>
        </div>
        <div>
            <?php
                $site = 'home';
                $site = isset($_GET['site']) ? $_GET['site'] : 'home';
                if (!isset($site)) $site='home';
                $invalide = array('\\','/','/\/',':','.');
                $site = str_replace($invalide,' ',$site);
                if (!file_exists('pages/'. $site .'.php')) $site = 'error';
                include('pages/'. $site .'.php');
            ?>
        </div>
        <div>
            <?php
                include('elements/footer.php');
            ?>
        </div>
        
        <script src="https://kit.fontawesome.com/eb58c719d4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="scripts/api_calls.js"></script>
        <script src="scripts/md5.js">
        <script src="scripts/main.js"></script>
    </body>
</html>