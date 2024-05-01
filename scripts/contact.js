document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    validateContact().then(isValid => {
        if (isValid) {
            event.target.submit(); 
        }
    });
});

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

    document.getElementById("emailError").innerHTML = "";
    email.style.border = "1px solid green";
    return true;
}

async function validateName() {
    var name = document.getElementById("name");

    if (name.value == "") {
        document.getElementById("nameError").innerHTML = "A név megadása kötelező!";
        name.style.border = "1px solid red";
        shakeElement("name");
        return false;
    }

    document.getElementById("nameError").innerHTML = "";
    name.style.border = "1px solid green";
    return true;
}

async function validateMessage() {
    var message = document.getElementById("message");

    if (message.value == "") {
        document.getElementById("messageError").innerHTML = "Az üzenet megadása kötelező!";
        message.style.border = "1px solid red";
        shakeElement("message");
        return false;
    }

    document.getElementById("messageError").innerHTML = "";
    message.style.border = "1px solid green";
    return true;
}

async function validateContact() {
    const emailIsValid = await validateEmail();
    const nameIsValid = await validateName();
    const messageIsValid = await validateMessage();
    return emailIsValid && nameIsValid && messageIsValid;
}