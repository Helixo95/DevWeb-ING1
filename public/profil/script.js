console.log("Le fichier JavaScript est chargé.");

document.addEventListener('DOMContentLoaded', function() {
    // Validation du numéro de téléphone
    var phoneNumberInput = document.getElementById('phone-number-field').querySelector('input');
    var phoneErrorMessage = document.getElementById('phone-error-message');
    phoneErrorMessage.textContent = '';
    phoneErrorMessage.classList.remove('error-message');

    function validatePhoneNumber() {
        var phoneNumberValue = phoneNumberInput.value;
        var phoneNumberPattern = /^(07|06)[0-9]{8}$/;

        if (!phoneNumberPattern.test(phoneNumberValue)) {
            phoneErrorMessage.textContent = 'Le numéro de téléphone doit commencer par 07 ou 06 et comporter un total de 10 chiffres.';
            phoneErrorMessage.classList.add('error-message');
            return false;
        } else {
            phoneErrorMessage.textContent = '';
            phoneErrorMessage.classList.remove('error-message');
            return true;
        }
    }

    phoneNumberInput.addEventListener('input', validatePhoneNumber);

    // Validation de l'email
    var emailInput = document.getElementById('email').querySelector('input');
    var emailErrorMessage = document.getElementById('email-error-message');
    emailErrorMessage.textContent = '';
    emailErrorMessage.classList.remove('email-error-message');

    function validateEmail() {
        var emailValue = emailInput.value;
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        if (!emailPattern.test(emailValue)) {
            emailErrorMessage.textContent = 'Veuillez entrer une adresse email valide.';
            emailErrorMessage.classList.add('email-error-message');
            return false;
        } else {
            emailErrorMessage.textContent = '';
            emailErrorMessage.classList.remove('email-error-message');
            return true;
        }
    }

    emailInput.addEventListener('input', validateEmail);
});
