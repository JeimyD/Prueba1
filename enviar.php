<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $message) {
        // Aquí puedes agregar el código para enviar el correo electrónico o guardar en una base de datos
        echo "Mensaje recibido correctamente.";
    } else {
        echo "Por favor, complete todos los campos correctamente.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
