//remember to add errorDiv to checkoutForm.php
// remember to add 'fail' to CSS
const email = document.querySelector('#email');
const phone = document.querySelector('#phone');
const cardType = document.querySelector('#cardType');
const cardNumber = document.querySelector('#cardNumber');

const errorDiv = document.querySelectorAll('.error');

let emailErrorMsg="Please enter a valid email";
let phoneErrorMsg="Please enter a valid phone number";
let cardTypeErrorMsg="Please select a card type";
let cardNumberErrorMsg="Please make sure you have entered the correct card number";
let defaultMsg="";

function vaildateEmail(){
    let e = email.value;
    let regexp=/\S+@\S+\.\S+/;

    if(regexp.test(e)){ 
        errorDiv[0].innerHTML = defaultMsg;
        email.classList.remove('fail')
        return true;
}
    else {
        errorDiv[0].innerHTML = emailErrorMsg;
        email.classList.add('fail')}
        return false;
    }

    function clear(){
        email.classList.remove('fail');
        username.classList.remove('fail');
        password.classList.remove('fail');
        confirmPassword.classList.remove('fail');
    
        errorDiv.forEach(element => { 
            element.innerHTML = defaultMsg;
        })
     }