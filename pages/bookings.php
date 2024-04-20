<?php
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

        <div class='container mx-auto mt-5'>
            <ul class="list-group">
                <li class="list-group-item my-3 card-bg">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><i class="fa-solid fa-user mr-3"></i> John Doe</h5>
                            <h5><i class="fa-solid fa-phone mr-3"></i> 06701234567</h5>
                            <h5><i class="fa-solid fa-envelope mr-3"></i> johndoe@gmail.com</h5>
                        </div>
                        <div class="col-md-5">
                            <h5><i class="fa-solid fa-calendar mr-3"></i> 2022.01.01</h5>
                            <h5><i class="fa-solid fa-clock mr-3"></i> 12:00</h5>
                            <h5><i class="fa-solid fa-scissors mr-3"></i> Hajvágás</h5>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-lg btn-block btn-dark">Törlés</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>