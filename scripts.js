document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const modalText = document.getElementById('modal-text');
    const closeModal = document.querySelector('.close');

    document.querySelectorAll('nav ul li a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const section = this.getAttribute('data-section');
            let content = '';

            switch (section) {
                case 'inicio':
                    content = 'Bienvenido a la página de Inicio.';
                    break;
                case 'nosotros':
                    content = 'Información sobre Nosotros.';
                    break;
                case 'mision':
                    content = 'Nuestra Misión.';
                    break;
                case 'vision':
                    content = 'Nuestra Visión.';
                    break;
                case 'contacto':
                    content = 'Información de Contacto.';
                    break;
                case 'ubicacion':
                    content = 'Nuestra Ubicación.';
                    break;
            }

            modalText.textContent = content;
            modal.style.display = 'block';
        });
    });

    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });

    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch('contacto.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert('Mensaje enviado con éxito');
            this.reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
