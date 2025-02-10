const newUserName = document.querySelector("#username") as HTMLInputElement;
const newUserPass = document.querySelector("#password") as HTMLInputElement;
const newUserEmail = document.querySelector("#email") as HTMLInputElement;
const submitRegister = document.querySelector(
  ".submitBtn"
)! as HTMLButtonElement;

newUserName.addEventListener("focusout", () => {
  if (newUserName.value && newUserPass.value && newUserEmail.value) {
    submitRegister.disabled = false;
  } else {
    submitRegister.disabled = true;
  }
});
newUserPass.addEventListener("focusout", () => {
  if (newUserName.value && newUserPass.value && newUserEmail.value) {
    submitRegister.disabled = false;
  } else {
    submitRegister.disabled = true;
  }
});
newUserEmail.addEventListener("focusout", () => {
  if (newUserName.value && newUserPass.value && newUserEmail.value) {
    submitRegister.disabled = false;
  } else {
    submitRegister.disabled = true;
  }
});
