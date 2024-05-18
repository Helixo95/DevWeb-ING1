console.log("Le fichier JavaScript est chargé.");

document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez le champ de saisie du numéro de téléphone
    var birthDateInput = document.getElementById('birthDate-field').querySelector('input');
    // Sélectionnez l'élément contenant le message d'erreur
    var errorMessage = document.getElementById('birthDate-error-message');
    // Initialisation du message d'erreur avec une chaîne vide
    errorMessage.textContent = '';

    errorMessage.classList.remove('error-message');

    // Fonction pour valider le numéro de téléphone
    function validateBirthDate() {
        // Récupérez la valeur du champ de saisie
        var birthDateValue = birthDateInput.value;

        // Définissez la regex pour la validation du numéro de téléphone
        var birthDatePattern = /^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-(19|20)\d{2}$/;

        // Vérifiez si la valeur correspond à la regex
        if (!birthDatePattern.test(birthDateValue)) {
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
    birthDateInput.addEventListener('input', validateBirthDate);
});