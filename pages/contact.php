<?php

?>

<!DOCTYPE html>
<html>
<body>
    <section class="py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <h3 class="mb-5">Lépj kapcsolatba velünk</h3>
            
                    <ul class="contact-info__list list-style--none position-relative z-index-101">
                        <li class="mb-4 pl-4">
                            <p class="position-absolute"><i class="fas fa-envelope ms-2"></i> support@razorroom.com</p>
                        </li>
                        <li class="mb-4 pl-4">
                            <p class="position-absolute"><i class="fa-brands fa-facebook ms-2"></i> razorroom</p>
                        </li>
                        <li class="mb-4 pl-4">
                            <p class="position-absolute"><i class="fa-brands fa-instagram ms-2"></i> razorroom</p>
                        </li>
                        <li class="mb-4 pl-4">
                            <p class="position-absolute"><i class="fas fa-phone ms-2"></i> +36 30 1234 56 78</p>
                        </li>
                        <li class="mb-4 pl-4">
                            <p class="position-absolute"><i class="fa-solid fa-map-pin ms-2"></i> 1234 Senkifalva, Alma utca 6.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                <div class="card card-bg">
                        <div class="card-body">
                            <form id="contactForm" name="contactForm" action="operations/op_contact.php" class="needs-validation g-3" method="POST">
                                <div class="form-group has-error">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['email']; ?>" id="email" name="email" onchange="validateEmail()">
                                    <small id="emailError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="name">Név:</label>
                                    <input type="text" class="form-control" value="<?php if (isset($_SESSION['user'])) echo $userData[0]['full_name']; ?>" id="name" name="name" onchange="validateName()">
                                    <small id="nameError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="message">Üzenet:</label>
                                    <textarea class="form-control" id="message" name="message" rows="3" onchange="validateMessage()"></textarea>
                                    <small id="messageError" class="text-danger"></small>
                                </div>
                                <button type="submit" class="btn btn-dark w-100">Küldés</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="scripts/contact.js"></script>
</body>
</html>