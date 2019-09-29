// =========================================
// ** Contact Form Validation Highlighter  **
// =========================================

const formInput = document.querySelectorAll('input');
const formSelect = document.querySelectorAll('select');
const emailInput = document.querySelector('.email-input');

console.log(emailInput.value);

function formValidate(){
  this.classList.add('form-input-validation');
}

function emailCheck() {
  if (this.value.length === 0) {
    emailInput.classList.add('not-valid');
  } else {
    emailInput.classList.remove('not-valid');
  }
}

for (let i = 0; i < formInput.length; i++) {
  formInput[i].addEventListener('blur', formValidate);
}

for (let i = 0; i < formSelect.length; i++) {
  formSelect[i].addEventListener('blur', formValidate);
}

emailInput.addEventListener('blur', emailCheck);
