<?php
?>

<!DOCTYPE html>
<html>
<body>
    <div style="display: flex; align-items: center; justify-content: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-header">
                            <h2 class="text-center">Regisztráció</h2>
                        </div>
                        <div class="card-body">
                        <form name="registerForm" id="registerForm" action="operations/op_register.php" method="POST">
                                <div class="form-group">
                                    <label for="username">Felhasználónév:</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                    <small id="usernameError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="password">Teljes név:</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname">
                                    <small id="fullnameError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <small id="emailError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefonszám:</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                    <small id="phoneError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="password">Jelszó:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small id="passwordError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="password-again">Jelszó újra:</label>
                                    <input type="password" class="form-control" id="password-again" name="password-again">
                                    <small id="passwordAgainError" class="text-danger"></small>
                                </div>
                                <h6 class="text-center">Már van fiókod? <a href="?site=login">Jelentkezz be!</a></h6>
                                <button type="submit" class="btn btn-dark w-100">Regisztráció</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/register.js"></script>
</body>
</html>