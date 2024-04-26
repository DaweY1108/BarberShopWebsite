document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    validateRegister().then(isValid => {
        if (isValid) {
            event.target.submit(); 
        }
    });
});

async function isUsernameTaken(username) {
    const response = await fetch('api/get_users.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
    });
    const data = await response.json();
    const usernames = data.map(user => user.username);
    return usernames.includes(username);
}

async function validateRegister() {
    var username = document.getElementById("username");
    var fullname = document.getElementById("fullname");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var password = document.getElementById("password");
    var passwordAgain = document.getElementById("password-again");

    if (username.value == "") {
        document.getElementById("usernameError").innerHTML = "A felhasználónév megadása kötelező!";
        username.style.border = "1px solid red";
        return false;
    } else {
        document.getElementById("usernameError").innerHTML = "";
        username.style.border = "1px solid green";
    }

    const usernameIsTaken = await isUsernameTaken(username.value);
    if (usernameIsTaken) {
        document.getElementById("usernameError").innerHTML = "This username is already taken!";
        username.style.border = "1px solid red";
        return false;
    }


    if (fullname.value == "") {
        document.getElementById("fullnameError").innerHTML = "A név megadása kötelező!";
        fullname.style.border = "1px solid red";
        return false;
    } else {
        document.getElementById("fullnameError").innerHTML = "";
        fullname.style.border = "1px solid green";
    }

    if (email.value == "") {
        document.getElementById("emailError").innerHTML = "Az email cím megadása kötelező!";
        email.style.border = "1px solid red";
        return false;
    } else {
        document.getElementById("emailError").innerHTML = "";
        email.style.border = "1px solid green";
    }

    if (phone.value == "") {
        document.getElementById("phoneError").innerHTML = "A telefonszám megadása kötelező!";
        phone.style.border = "1px solid red";
        return false;
    }
    else {
        document.getElementById("phoneError").innerHTML = "";
        phone.style.border = "1px solid green";
    }

    if (password.value == "") {
        document.getElementById("passwordError").innerHTML = "A jelszó megadása kötelező!";
        password.style.border = "1px solid red";
        return false;
    } else {
        document.getElementById("passwordError").innerHTML = "";
        password.style.border = "1px solid green";
    }

    if (passwordAgain.value == "") {
        document.getElementById("passwordAgainError").innerHTML = "A jelszó újra megadása kötelező!";
        passwordAgain.style.border = "1px solid red";
        return false;
    } else {
        document.getElementById("passwordAgainError").innerHTML = "";
        passwordAgain.style.border = "1px solid green";
    }

    if (password.value != passwordAgain.value) {
        document.getElementById("passwordError").innerHTML = "A jelszavak nem egyeznek!";
        document.getElementById("passwordAgainError").innerHTML = "A jelszavak nem egyeznek!";
        password.style.border = "1px solid red";
        passwordAgain.style.border = "1px solid red";
        return false;
    } else {
        document.getElementById("passwordError").innerHTML = "";
        document.getElementById("passwordAgainError").innerHTML = "";
        password.style.border = "1px solid green";
        passwordAgain.style.border = "1px solid green";
    }

    return false;
}