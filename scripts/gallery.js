document.getElementById('galleryForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    validateGallery().then(isValid => {
        if (isValid) {
            event.target.submit(); 
        }
    });
});

async function validateOpinion() {
    var opinion = document.getElementById("opinion");

    if (opinion.value == "") {
        document.getElementById("opinionError").innerHTML = "Az vélemény megadása kötelező!";
        opinion.style.border = "1px solid red";
        return false;
    }

    document.getElementById("opinionError").innerHTML = "";
    opinion.style.border = "1px solid green";
    return true;
}

async function validateImage() {
    var image = document.getElementById("image");

    if (image.value == "") {
        document.getElementById("imageError").innerHTML = "Az kép megadása kötelező!";
        image.style.border = "1px solid red";
        return false;
    }

    document.getElementById("imageError").innerHTML = "";
    image.style.border = "1px solid green";
    return true;
}

async function validateGallery() {
    const isValidOpinion = await validateOpinion();
    const isValidImage = await validateImage();

    return isValidOpinion && isValidImage;
}
