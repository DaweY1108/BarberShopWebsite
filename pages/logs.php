<?php
    if (isset($_SESSION['user'])) {
        if ($userData[0]['role_id'] != 3) {
            echo '<script> location.replace("index.php?site=error"); </script>';
        }
    } else {
        echo '<script> location.replace("index.php?site=error"); </script>';
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <div data-aos="zoom-in">
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Logok </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod, hogy ki milyen műveletet hajtott végre</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div class='container mx-auto mt-5' id="logs">
            
        </div>
        <script>
            window.onload = function() {
                get_logs('logs');
            };
        </script>
    </body>
</html>