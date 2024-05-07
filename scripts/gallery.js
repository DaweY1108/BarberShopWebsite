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
        shakeElement("opinion");
        return false;
    }

    document.getElementById("opinionError").innerHTML = "";
    opinion.style.border = "1px solid green";
    return true;
}

function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

function isImage(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
      case 'jpeg':
        return true;
      case 'jpg':
        return true;
      case 'png':
        return true;
    }
    return false;
  }


async function validateImage() {
    var image = document.getElementById("image");

    if (image.value == "") {
        document.getElementById("imageError").innerHTML = "Az kép megadása kötelező!";
        image.style.border = "1px solid red";
        shakeElement("image");
        return false;
    }

    if (!isImage(image.value)) {
        document.getElementById("imageError").innerHTML = "Csak kép formátumok engedélyezettek!";
        image.style.border = "1px solid red";
        shakeElement("image");
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
