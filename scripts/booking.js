document.getElementById('bookingForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    validateBooking().then(isValid => {
        if (isValid) {
            event.target.submit(); 
        }
    });
});

async function validateBarber() {
    var barber = document.getElementById('barber').value;
    if (barber == '0') {
        document.getElementById("barberError").innerHTML = "Kérlek, válassz egy borbélyt!";
        email.style.border = "1px solid red";
        shakeElement("barber");
        return false;
    }
    document.getElementById("barberError").innerHTML = "";
    email.style.border = "1px solid green";
    return true;
}

async function validateService() {
    var service = document.getElementById('service').value;
    if (service == '0') {
        document.getElementById("serviceError").innerHTML = "Kérlek, válassz egy szolgáltatást!";
        email.style.border = "1px solid red";
        shakeElement("service");
        return false;
    }
    document.getElementById("serviceError").innerHTML = "";
    email.style.border = "1px solid green";
    return true;

}

async function validateDate() {
    var date = document.getElementById('date').value;
    if (date == "") {
        document.getElementById("dateError").innerHTML = "Kérlek, válassz egy dátumot!";
        email.style.border = "1px solid red";
        shakeElement("date");
        return false;
    }
    document.getElementById("dateError").innerHTML = "";
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

async function validateBooking() {
    const isValidBarber = await validateBarber();
    const isValidService = await validateService();
    const isValidDate = await validateDate();
    const isValidName = await validateName();
    const isValidEmail = await validateEmail();
    const isValidPhone = await validatePhone();
    return isValidBarber && isValidService && isValidDate && isValidName && isValidEmail && isValidPhone;
}