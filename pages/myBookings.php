<?php
    include('operations/database.php');
    if (isset($_SESSION['user'])) {
        if ($userData[0]['role_id'] != 2) { 
            echo '<script> location.replace("index.php?site=error"); </script>';
        }
    } else {
        echo '<script> location.replace("index.php?site=error"); </script>';
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Foglalások </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes foglalást, akik hozzád foglaltak</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div class='container mx-auto mt-5' id="bookings">
        </div>
    </body>
    <script>
        window.onload = function() {
            get_bookings('bookings', <?= $_SESSION['user'] ?>);
        };
    </script>
</html>