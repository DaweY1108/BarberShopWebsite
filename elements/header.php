<?php
?>

<!DOCTYPE html>
<html>
    <body class="body-bg">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-light" href="?site=home"><i class="fa-solid fa-scissors"></i> <?= $menuItems['title']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"><i class="fa-solid fa-bars text-center"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=reservation"><?= $menuItems['reservation']; ?> <i class="fa-regular fa-calendar fa-sm"></i></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=about"><?= $menuItems['about']; ?> <i class="fa-solid fa-address-card fa-sm"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=services"><?= $menuItems['services']; ?> <i class="fa-brands fa-servicestack fa-sm"></i></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=barbers"><?= $menuItems['barbers']; ?> <i class="fa-solid fa-scissors fa-sm"></i></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=gallery"><?= $menuItems['gallery']; ?> <i class="fa-solid fa-image fa-sm"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=contact"><?= $menuItems['contact']; ?> <i class="fa-solid fa-phone fa-sm"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="?site=login"><?= $menuItems['login']; ?> <i class="fa-solid fa-right-to-bracket fa-sm"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <?= $topDivider; ?>
    </body>
</html>