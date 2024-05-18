console.log("Le fichier JavaScript est chargé.");

document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne le champ de saisie de la date de naissance
    var birthDateInput = document.getElementById('birthDate-field').querySelector('input');
    // Sélectionne l'élément contenant le message d'erreur
    var errorMessage = document.getElementById('birthDate-error-message');
    // Initialisation du message d'erreur avec une chaîne vide
    errorMessage.textContent = '';

    errorMessage.classList.remove('message');

    // Fonction pour valider la date de naissance
    function validateBirthDate() {
        // Récupérez la valeur du champ de saisie
        var birthDateValue = birthDateInput.value;

        // Définissez la regex pour la validation de la date de naissance
        var birthDatePattern = /^(19|20)\d{2}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;

        // Vérifiez si la valeur correspond à la regex
        if (!birthDatePattern.test(birthDateValue)) {
            // Affichez un message d'erreur
            errorMessage.textContent = 'La date de naissance doit être de type AAAA-MM-JJ.';
            // Ajoutez une classe CSS pour styliser le message d'erreur
            errorMessage.classList.add('message');
            return false; // La date n'est pas valide
        } else {
            // Effacez le message d'erreur s'il est conforme à la contrainte
            errorMessage.textContent = '';
            // Supprimez la classe CSS pour le message d'erreur
            errorMessage.classList.remove('message');
            return true; // Le numéro est valide
        }
    }

    // Ajoutez un écouteur d'événements sur le champ de saisie pour valider en temps réel
    birthDateInput.addEventListener('input', validateBirthDate);
});