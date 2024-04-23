<?php
    if (isset($_SESSION['user'])) {
        if ($userData[0]["role_id"] != 1) {
            $stmt = $conn->prepare("SELECT name FROM roles WHERE id = :id");
            $stmt->bindParam(':id', $userData[0]["role_id"]);
            $stmt->execute();
            $fetchedRole = $stmt->fetchAll();
            $role = " - ".$fetchedRole[0]["name"];
        } else {
            $role = "";
        }
    } else {
        $role = "";
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand text-light" href="?site=home"><i class="fa-solid fa-scissors"></i> <?= $menuItems['title']; ?> <?= $role ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-light"><i class="fa-solid fa-bars text-center"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php
                            if (isset($_SESSION['user'])) {
                                if ($userData[0]['role_id'] == 2) {
                                    echo '<a class="nav-link text-light" href="?site=myBookins">'. $menuItems['bookings'].' <i class="fa-regular fa-calendar fa-sm"></i></i></a>';
                                } else {
                                    echo '<a class="nav-link text-light" href="?site=booking">'. $menuItems['booking'].' <i class="fa-regular fa-calendar fa-sm"></i></i></a>';
                                }
                            } else {
                                echo '<a class="nav-link text-light" href="?site=booking">'. $menuItems['booking'].' <i class="fa-regular fa-calendar fa-sm"></i></i></a>';
                            }
                        ?>
                    </li>
                    <li class="nav-item">
                        <?php
                            if (isset($_SESSION['user'])) {
                                if ($userData[0]['role_id'] == 1) {
                                    echo '<a class="nav-link text-light" href="?site=users">'. $menuItems['about'].' <i class="fa-solid fa-users fa-sm"></i></i></a>';
                                }
                            } else {
                                echo '<a class="nav-link text-light" href="?site=about">'. $menuItems['about'].' <i class="fa-solid fa-users fa-sm"></i></i></a>';
                            }
                        ?>
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
                       <?php
                            if (isset($_SESSION['user'])) {
                                echo '<a class="nav-link text-light" href="operations/op_logout.php">'.$menuItems['logout'].' <i class="fa-solid fa-sign-out-alt fa-sm"></i></a>';
                            } else {
                                echo '<a class="nav-link text-light" href="?site=login">'.$menuItems['login'].' <i class="fa-solid fa-sign-in-alt fa-sm"></i></a>';
                            }
                        ?>
                    </li>
                    <li class="nav-item">
                        <div class="text-light nav-link">
                            Bejelentkezve: <?php if (isset($_SESSION['user'])) { echo $userData[0]['full_name']; } else { echo 'Vendég'; } ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <?= $topDivider; ?>
        <div style="margin-bottom: 20px">
    </body>
</html>