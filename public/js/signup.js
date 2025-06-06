/******/ (() => { // webpackBootstrap
/*!********************************!*\
  !*** ./resources/js/signup.js ***!
  \********************************/
function validateEmail(email) {
  var pattern = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\
    [[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
  return pattern.test(email);
}
function validatePassword(password) {
  if (password.length < 6) return false;
  return true;
}
function logSubmit(event) {
  var email = document.getElementById('email').value;
  var errorLog = document.getElementById('errorLog');
  /*if(!validateEmail(email))
  {
      errorLog.textContent = 'Проверьте правильность email!';
      event.preventDefault();
  }*/
  var password = document.getElementById('password').value;
  if (!validatePassword(password)) {
    errorLog.textContent = 'В пароле должно быть минимум 6 символов!';
    event.preventDefault();
  } else {
    var password_again = document.getElementById('password_again').value;
    if (password != password_again) {
      errorLog.textContent = 'Пароли не совпадают!';
      event.preventDefault();
    }
  }
}
var form = document.getElementById('form');
form.addEventListener('submit', logSubmit);
/******/ })()
;