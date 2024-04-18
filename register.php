<?php

?>

<!DOCTYPE html>
<html>
<body class="body-bg">
    <div class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="row justify-content-center py-6">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-body">
                            <h2 class="text-center">Regisztráció</h2>
                            <form action="register.php" method="POST">
                                <div class="form-group">
                                    <label for="username">Felhasználónév:</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Teljes név:</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Jelszó:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password-again">Jelszó újra:</label>
                                    <input type="password" class="form-control" id="password-again" name="password-again" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>