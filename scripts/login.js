document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    validateLogin().then(isValid => {
        if (isValid) {
            event.target.submit(); 
        }
    });
});

async function getUserByEmail(email) {
    const response = await fetch('api/get_users.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ email: email })
    });
    
    const data = await response.json();
    console.log(data);
    return data;
}

async function validateEmail() {
    var email = document.getElementById("email");

    if (email.value == "") {
        document.getElementById("emailError").innerHTML = "Az email cím megadása kötelező!";
        email.style.border = "1px solid red";
        return false;
    }

    const user = await getUserByEmail(email.value);
    if (user.length == 0) {
        document.getElementById("emailError").innerHTML = "Az email cím nem létezik!";
        email.style.border = "1px solid red";
        return false;
    }

    document.getElementById("emailError").innerHTML = "";
    email.style.border = "1px solid green";
    return true;
}

async function validatePassword() {
    var password = document.getElementById("password");

    if (password.value == "") {
        document.getElementById("passwordError").innerHTML = "A jelszó megadása kötelező!";
        password.style.border = "1px solid red";
        return false;
    }

    const user = await getUserByEmail(email.value);

    const passwordMD5 = md5(password.value);
    if (user[0].password != passwordMD5) {
        document.getElementById("passwordError").innerHTML = "Hibás jelszó!";
        password.style.border = "1px solid red";
        return false;
    }
    document.getElementById("passwordError").innerHTML = "";
    password.style.border = "1px solid green";
    return true;
}

async function validateLogin() {
    var isEmailValid = await validateEmail();
    var isPasswordValid = await validatePassword();
    if (isEmailValid && isPasswordValid) {
        return true;
    } else {
        return false;
    }
}