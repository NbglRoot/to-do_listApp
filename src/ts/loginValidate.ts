const userName = document.querySelector("#username") as HTMLInputElement;
const userPass = document.querySelector("#password") as HTMLInputElement;
const userEmail = document.querySelector("#email") as HTMLInputElement;
const submitLogin = document.querySelector(".submitBtn")! as HTMLButtonElement;

userName.addEventListener("focusout", () => {
  if (userName.value && userPass.value) {
    submitLogin.disabled = false;
  } else {
    submitLogin.disabled = true;
  }
});
userPass.addEventListener("focusout", () => {
  if (userName.value && userPass.value) {
    submitLogin.disabled = false;
  } else {
    submitLogin.disabled = true;
  }
});
userEmail.addEventListener("focusout", () => {
  if (userName.value && userPass.value && userEmail.value) {
    submitLogin.disabled = false;
  } else {
    submitLogin.disabled = true;
  }
});
