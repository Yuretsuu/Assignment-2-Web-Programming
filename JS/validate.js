//remember to add errorDiv to checkoutForm.php
// remember to add 'fail' to CSS

var email;
var phone;
var cardType;
var cardNumber;
var cardExpiry;
var cardCVV;

var errorDiv;

var emailErrorMsg="Please enter a valid email";
var phoneErrorMsg="Please enter a valid phone number";
var cardTypeErrorMsg="Please select a card type";
var cardNumberErrorMsg="Please make sure you have entered the correct card number";
var cardExpiryErrorMsg= "Please enter the expiry date of your card";
var cardCVVErrorMsg= "Please enter the 3 digit code on the back of your card";

var defaultMsg="";

window.onload = function(){

    email = document.querySelector('#email');
    phone = document.querySelector('#phone');
    cardType = document.querySelector('#cardType');
    cardNumber = document.querySelector('#cardNumber');
    cardExpiry = document.querySelector('#cardExpiry');
    cardCVV = document.querySelector('#CVV');

    errorDiv = document.querySelectorAll('.errorDiv');
}

function vaildateEmail(){
    let e = email.value;
    let regexp=/\S+@\S+\.\S+/;

    if(regexp.test(e)){ 
        errorDiv[0].innerHTML = defaultMsg;
        email.classList.remove('fail');
        return true;
    }
        errorDiv[0].innerHTML = emailErrorMsg;
        email.classList.add('fail');
    
        return false;
    }

function validatePhoneNumber(){
    let p = phone.value;
    if ((p!= "") && (p.length == 10)) {
        errorDiv[1].innerHTML = defaultMsg;
        phone.classList.remove('fail');
        return true;
    }
    errorDiv[1].innerHTML = phoneErrorMsg;
    phone.classList.add('fail');
    return false;
}

function validateCardType(){
    let cType = cardType.value;

    if (cType != "") {
        errorDiv[2].innerHTML = defaultMsg;
        cardType.classList.remove('fail');
        return true;
    }
    errorDiv[2].innerHTML = cardTypeErrorMsg;
    cardType.classList.add('fail');
    return false;
}

function validateCardNumber(){
    let cNumber = cardNumber.value;

    if ((cNumber !="") && (cNumber.length == 16)){
        errorDiv[3].innerHTML = defaultMsg;
        cardNumber.classList.remove('fail');
        return true;
    }
    errorDiv[3].innerHTML = cardNumberErrorMsg;
    cardType.classList.add('fail');
    return false;
}

function validateExpiry() {
    let expiry = Date.parse(cardExpiry.value);
    let today = new Date();

    if ((expiry != NaN) && (expiry > today)) {
        errorDiv[4].innerHTML = defaultMsg;
        cardExpiry.classList.remove('fail');
        return true;
    }
    errorDiv[4].innerHTML = cardExpiryErrorMsg;
    cardExpiry.classList.add('fail');
    return false;
}

function validateCVV(){
    let cvv= cardCVV.value;

    if ((cvv !="") && (cvv.length == 3)){
        errorDiv[5].innerHTML = defaultMsg;
        cardCVV.classList.remove('fail');
        return true;
    }
    errorDiv[5].innerHTML = cardCVVErrorMsg;
    cardCVV.classList.add('fail');
    return false;
}

function validate(){
    
    let a = vaildateEmail();
    let b = validatePhoneNumber ();
    let c = validateCardType();
    let d = validateCardNumber();
    let e = validateExpiry();
    let f = validateCVV();

    console.log(e);

    return (a && b && c && d);
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