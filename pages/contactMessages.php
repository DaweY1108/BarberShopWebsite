<?php
?>

<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="container text-dark text-center my-5">
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h1> Üzenetek </h1>
                <hr style="border-width: 1px; border-color: black" class="w-50">
                <h4 class="pt-5">Itt megtalálod az összes üzenetet, amelyet a felhasználók üzentek</h4>
            </div>
        </div>

        <?= $fullDivider ?>

        <div class='container mx-auto mt-5'>
            <ul class="list-group">
                <li class="list-group-item my-3 card-bg">
                    <div class="row">
                        <div class="col-md-7">
                            <h4><i class="fa-solid fa-user mr-3"></i> John Doe</h4>
                            <hr style="border-width: 1px; border-color: black" class="w-100">
                            <h6 text-justify>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center">
                            <form action="?site=contactMessages" method="post" class="w-100">
                                <div class="form-group">
                                    <label for="opinion">Üzenet:</label>
                                    <textarea class="form-control" id="opinion" name="opinion" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark w-100">Küldés</button>
                                </div>
                            </form>
                            
                        </div>
                        <div class="col-md-1 d-flex justify-content-center align-items-center">
                            <button class="btn btn-danger"><i class="fa-solid fa-x"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>