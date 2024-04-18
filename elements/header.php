<?php
?>

<!DOCTYPE html>
<html>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-light" href="#"><i class="fa-solid fa-shop"></i> <?= $headerText['title']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"><i class="fa-solid fa-bars text-center"></i></span>
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
                        <a class="nav-link text-light" href="?site=register"><?= $headerText['signup']; ?> </a>
                    </li>
                </ul>
            </div>
        </nav>
        <?= $topDivider; ?>
    </body>
</html>