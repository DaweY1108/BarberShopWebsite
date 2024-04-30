function shakeElement(elementID) {
    var element = document.getElementById(elementID);
    element.classList.add('shake');
    setTimeout(function() {
        element.classList.remove('shake');
    }, 500);
}