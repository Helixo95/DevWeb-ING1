console.log("Le fichier JavaScript est chargé.");

document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez le champ de saisie du numéro de téléphone
    var phoneNumberInput = document.getElementById('phone-number-field').querySelector('input');
    // Sélectionnez l'élément contenant le message d'erreur
    var errorMessage = document.getElementById('phone-error-message');
    // Initialisation du message d'erreur avec une chaîne vide
    errorMessage.textContent = '';

    errorMessage.classList.remove('error-message');

    // Fonction pour valider le numéro de téléphone
    function validatePhoneNumber() {
        // Récupérez la valeur du champ de saisie
        var phoneNumberValue = phoneNumberInput.value;

        // Définissez la regex pour la validation du numéro de téléphone
        var phoneNumberPattern = /^(07|06)[0-9]{8}$/;

        // Vérifiez si la valeur correspond à la regex
        if (!phoneNumberPattern.test(phoneNumberValue)) {
            // Affichez un message d'erreur
            errorMessage.textContent = 'Le numéro de téléphone doit commencer par 07 ou 06 et comporter un total de 10 chiffres.';
            // Ajoutez une classe CSS pour styliser le message d'erreur
            errorMessage.classList.add('error-message');
            return false; // Le numéro n'est pas valide
        } else {
            // Effacez le message d'erreur s'il est conforme à la contrainte
            errorMessage.textContent = '';
            // Supprimez la classe CSS pour le message d'erreur
            errorMessage.classList.remove('error-message');
            return true; // Le numéro est valide
        }
    }

    // Ajoutez un écouteur d'événements sur le champ de saisie pour valider en temps réel
    phoneNumberInput.addEventListener('input', validatePhoneNumber);
});
