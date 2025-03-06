<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Validar que los campos no estén vacíos
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
        // Aquí podrías enviar el mensaje por correo electrónico o guardarlo en una base de datos
        mail("tuemail@dominio.com", "Nuevo mensaje de contacto", $mensaje, "From: $email");

        // Responder con un mensaje de éxito
        echo "<script>alert('¡Mensaje enviado correctamente!'); window.location.href='index.html';</script>";
    } else {
        // Responder con un mensaje de error
        echo "<script>alert('Por favor, complete todos los campos.'); window.location.href='index.html';</script>";
    }
}
?>
