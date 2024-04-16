<?php
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="common/header/header.css" type="text/css"/>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-light" href="#"><i class="fa-solid fa-shop"></i> <?= $headerText['title']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><?= $headerText['contact']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><?= $headerText['login']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><?= $headerText['signup']; ?> </a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>