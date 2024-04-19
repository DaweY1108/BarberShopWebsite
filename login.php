<?php

?>

<!DOCTYPE html>
<html>
<body>
    <div style="display: flex; align-items: center; justify-content: center; height: 35rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-body">
                            <h2 class="text-center">Bejelentkezés</h2>
                            <form action="login.php" class="needs-validation g-3" method="POST">
                                <div class="form-group has-error">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Jelszó:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <h6 class="text-center">Még nincs fiókod? <a href="?site=register">Regisztrálj be!</a></h6>
                                <button type="submit" class="btn btn-dark w-100">Belépés</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>