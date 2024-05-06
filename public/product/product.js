document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.quantity-btn');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var change = this.classList.contains('increase') ? 1 : -1;
            var prodId = this.closest('.quantity-selector').querySelector('.quantity-input').id.split('_')[1];
            changeQuantity(change, prodId);
        });
    });
});


function changeQuantity(change, prodId) {
    var quantityInput = document.getElementById('quantity_' + prodId);
    if (!quantityInput) {
        console.error("Input not found for prodId:", prodId);
        return;  // Sortie précoce si l'input n'est pas trouvé
    }

    var currentQuantity = parseInt(quantityInput.value);
    var newQuantity = currentQuantity + change;

    // Ajoutez des logs pour déboguer
    console.log("Current Quantity:", currentQuantity);
    console.log("Change Requested:", change);
    console.log("New Quantity Calculated:", newQuantity);

    if (newQuantity >= 0 && newQuantity <= 100) {  // Ajustez selon les maximaux et minimaux applicables
        quantityInput.value = newQuantity;
    } else {
        console.log("New quantity out of valid range:", newQuantity);
    }
}
