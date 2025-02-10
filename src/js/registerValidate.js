var newUserName = document.querySelector("#username");
var newUserPass = document.querySelector("#password");
var newUserEmail = document.querySelector("#email");
var submitRegister = document.querySelector(".submitBtn");
newUserName.addEventListener("focusout", function () {
    if (newUserName.value && newUserPass.value && newUserEmail.value) {
        submitRegister.disabled = false;
    }
    else {
        submitRegister.disabled = true;
    }
});
newUserPass.addEventListener("focusout", function () {
    if (newUserName.value && newUserPass.value && newUserEmail.value) {
        submitRegister.disabled = false;
    }
    else {
        submitRegister.disabled = true;
    }
});
newUserEmail.addEventListener("focusout", function () {
    if (newUserName.value && newUserPass.value && newUserEmail.value) {
        submitRegister.disabled = false;
    }
    else {
        submitRegister.disabled = true;
    }
});
