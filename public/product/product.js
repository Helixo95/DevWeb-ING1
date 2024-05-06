function changeQuantity(change) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    var newQuantity = currentQuantity + change;

    if (newQuantity >= 0 && newQuantity <= 100) {
        quantityInput.value = newQuantity;
    }
}