document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    validateRegister().then(isValid => {
        if (isValid) {
            event.target.submit(); 
        }
    });
});

async function isUsernameFree(username) {
    const response = await fetch('api/get_users.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ username: username })
    });
    const data = await response.json();
    return data.length == 0;
}

async function isEmailFree(email) {
    const response = await fetch('api/get_users.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email: email })
    });
    
    const data = await response.json();
    return data.length == 0;
}

async function validateUserName() {
    var username = document.getElementById("username");

    if (username.value == "") {
        document.getElementById("usernameError").innerHTML = "A felhasználónév megadása kötelező!";
        username.style.border = "1px solid red";
        shakeElement("username");
        return false;
    }

    const usernameIsFree = await isUsernameFree(username.value);
    if (!usernameIsFree) {
        document.getElementById("usernameError").innerHTML = "A felhasználónév foglalt, válassz másikat!";
        username.style.border = "1px solid red";
        shakeElement("username");
        return false;
    }

    document.getElementById("usernameError").innerHTML = "";
    username.style.border = "1px solid green";
    return true;

}

async function validateFullName() {
    var fullname = document.getElementById("fullname");

    if (fullname.value == 'Vendég') {
        document.getElementById("fullnameError").innerHTML = "Ez a név nem használható!";
        fullname.style.border = "1px solid red";
        shakeElement("fullname");
        return false;
    }

    if (fullname.value == "") {
        document.getElementById("fullnameError").innerHTML = "A név megadása kötelező!";
        fullname.style.border = "1px solid red";
        shakeElement("fullname");
        return false;
    } else {
        document.getElementById("fullnameError").innerHTML = "";
        fullname.style.border = "1px solid green";
        return true;
    }
}

async function validateEmail() {
    var email = document.getElementById("email");
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email.value == "") {
        document.getElementById("emailError").innerHTML = "Az email cím megadása kötelező!";
        email.style.border = "1px solid red";
        shakeElement("email");
        return false;
    } 

    if (!emailRegex.test(email.value)) {
        document.getElementById("emailError").innerHTML = "Az email cím formátuma nem megfelelő!";
        email.style.border = "1px solid red";
        shakeElement("email");
        return false;
    }

    const emailIsFree = await isEmailFree(email.value);
    if (!emailIsFree) {
        document.getElementById("emailError").innerHTML = "Az email cím foglalt, válassz másikat!";
        email.style.border = "1px solid red";
        shakeElement("email");
        return false;
    }


    document.getElementById("emailError").innerHTML = "";
    email.style.border = "1px solid green";
    return true;
}

async function validatePhone() {
    var phone = document.getElementById("phone");
    var phoneRegex = /^\d{11}$/;

    if (phone.value == "") {
        document.getElementById("phoneError").innerHTML = "A telefonszám megadása kötelező!";
        phone.style.border = "1px solid red";
        shakeElement("phone");
        return false;
    } 

    if (!phoneRegex.test(phone.value)) {
        document.getElementById("phoneError").innerHTML = "A telefonszám formátuma nem megfelelő!";
        phone.style.border = "1px solid red";
        shakeElement("phone");
        return false;
    }

    document.getElementById("phoneError").innerHTML = "";
    phone.style.border = "1px solid green";
    return true;

}

async function validatePassword() {
    var password = document.getElementById("password");
    var passwordAgain = document.getElementById("password-again");

    if (password.value == "") {
        document.getElementById("passwordError").innerHTML = "A jelszó megadása kötelező!";
        password.style.border = "1px solid red";
        shakeElement("password");
        return false;
    }

    if (password.value.length < 6) {
        document.getElementById("passwordError").innerHTML = "A jelszónak legalább 6 karakternek kell lennie!";
        password.style.border = "1px solid red";
        shakeElement("password");
        return false;
    }

    if (password.value != passwordAgain.value) {
        document.getElementById("passwordError").innerHTML = "A jelszavak nem egyeznek!";
        document.getElementById("passwordAgainError").innerHTML = "A jelszavak nem egyeznek!";
        shakeElement("password");
        shakeElement("password-again");
        password.style.border = "1px solid red";
        passwordAgain.style.border = "1px solid red";
        return false;
    }

    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("passwordAgainError").innerHTML = "";
    password.style.border = "1px solid green";
    passwordAgain.style.border = "1px solid green";
    return true;

}

async function validateRegister() {
    var isUerValid = await validateUserName();
    var isFullNameValid = await validateFullName();
    var isEmailValid = await validateEmail();
    var isPhoneValid = await validatePhone();
    var isPasswordValid = await validatePassword();

    if (isUerValid && isFullNameValid && isEmailValid && isPhoneValid && isPasswordValid) {
        var name = document.getElementById("username").value;
        var logMessage = "Regisztrált a rendszerbe";
        sendLog(logMessage, name);
        return true;
    } else {
        return false;
    }
}