<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        nav {
            background-color: #333;
            padding: 10px;
        }
        nav button {
            background-color: #555;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
        }
        nav button:hover {
            background-color: #777;
        }
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .close {
            float: right;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Menú de navegación -->
    <nav>
        <button onclick="mostrarModal('inicio')">Inicio</button>
        <button onclick="mostrarModal('nosotros')">Nosotros</button>
        <button onclick="mostrarModal('mision')">Misión</button>
        <button onclick="mostrarModal('vision')">Visión</button>
        <button onclick="mostrarModal('contacto')">Contacto</button>
        <button onclick="mostrarModal('ubicacion')">Ubicación</button>
    </nav>

    <!-- Ventanas emergentes (modales) -->
    <div id="modal-inicio" class="modal">
        <span class="close" onclick="cerrarModal('inicio')">&times;</span>
        <h2>Inicio</h2>
        <p>Bienvenido a nuestra página web.</p>
    </div>

    <div id="modal-nosotros" class="modal">
        <span class="close" onclick="cerrarModal('nosotros')">&times;</span>
        <h2>Nosotros</h2>
        <p>Información sobre nuestra empresa.</p>
    </div>

    <div id="modal-mision" class="modal">
        <span class="close" onclick="cerrarModal('mision')">&times;</span>
        <h2>Misión</h2>
        <p>Nuestra misión es...</p>
    </div>

    <div id="modal-vision" class="modal">
        <span class="close" onclick="cerrarModal('vision')">&times;</span>
        <h2>Visión</h2>
        <p>Nuestra visión es...</p>
    </div>

    <div id="modal-contacto" class="modal">
        <span class="close" onclick="cerrarModal('contacto')">&times;</span>
        <h2>Contacto</h2>
        <form action="enviar.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea><br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <div id="modal-ubicacion" class="modal">
        <span class="close" onclick="cerrarModal('ubicacion')">&times;</span>
        <h2>Ubicación</h2>
        <p>Nuestra ubicación es...</p>
    </div>

    <!-- Overlay para el fondo oscuro -->
    <div id="overlay" class="overlay"></div>

    <script>
        // Funciones para mostrar y cerrar modales
        function mostrarModal(modalId) {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('modal-' + modalId).style.display = 'block';
        }

        function cerrarModal(modalId) {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('modal-' + modalId).style.display = 'none';
        }
    </script>

</body>
</html>
