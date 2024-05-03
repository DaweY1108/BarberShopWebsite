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
    return data;
}

async function validateEmail() {
    var email = document.getElementById("email");
    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email.value == "") {
        document.getElementById("emailError").innerHTML = "Az email cím megadása kötelező!";
        shakeElement("email");
        email.style.border = "1px solid red";
        return false;
    }

    if (!emailRegex.test(email.value)) {
        document.getElementById("emailError").innerHTML = "Az email cím formátuma nem megfelelő!";
        email.style.border = "1px solid red";
        shakeElement("email");
        return false;
    }

    const user = await getUserByEmail(email.value);
    if (user.length == 0) {
        document.getElementById("emailError").innerHTML = "Az email cím nem létezik!";
        shakeElement("email");
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
        shakeElement("password");
        return false;
    }

    const user = await getUserByEmail(email.value);

    const passwordMD5 = md5(password.value);
    if (user[0].password != passwordMD5) {
        document.getElementById("passwordError").innerHTML = "Hibás jelszó!";
        password.style.border = "1px solid red";
        shakeElement("password");
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
        var user = await getUserByEmail(document.getElementById("email").value);
        var logMessage = " Bejelentkezett a rendszerbe!";
        var name = user[0].username;
        await sendLog(logMessage, name);
        return true;
    } else {
        return false;
    }
}