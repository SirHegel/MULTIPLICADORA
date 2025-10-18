// Validación básica del formulario en JavaScript
document.getElementById('multiplication-form').addEventListener('submit', function (e) {
    const numberField = document.getElementById('number'); // Obtiene el campo de entrada
    const errorMessage = document.getElementById('error-message'); // Obtiene el mensaje de error
    const numberValue = numberField.value.trim(); // Valor del campo, eliminando espacios en blanco

    // Verifica que el campo no esté vacío, sea un número y sea positivo
    if (numberValue === '' || isNaN(numberValue) || parseInt(numberValue) <= 0) {
        e.preventDefault(); // Detiene el envío del formulario
        errorMessage.style.display = 'block'; // Muestra el mensaje de error
    } else {
        errorMessage.style.display = 'none'; // Oculta el mensaje de error
    }
});