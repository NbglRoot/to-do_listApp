var userName = document.querySelector("#username");
var userPass = document.querySelector("#password");
var userEmail = document.querySelector("#email");
var submitLogin = document.querySelector(".submitBtn");
userName.addEventListener("focusout", function () {
    if (userName.value && userPass.value) {
        submitLogin.disabled = false;
    }
    else {
        submitLogin.disabled = true;
    }
});
userPass.addEventListener("focusout", function () {
    if (userName.value && userPass.value) {
        submitLogin.disabled = false;
    }
    else {
        submitLogin.disabled = true;
    }
});
userEmail.addEventListener("focusout", function () {
    if (userName.value && userPass.value && userEmail.value) {
        submitLogin.disabled = false;
    }
    else {
        submitLogin.disabled = true;
    }
});
