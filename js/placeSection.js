function adjustCarousel() {
    const width = window.innerWidth;
    const containers = document.querySelectorAll('.cards-container');
    
    containers.forEach(container => {
        container.style.flexWrap = 'nowrap';
        
        // Ajustar según tamaño
        if (width >= 1200) {
            container.style.justifyContent = 'space-between';
            // Mostrar 4 tarjetas
        } else if (width >= 992) {
            // Mostrar 3 tarjetas para desktop pequeño
            container.style.justifyContent = 'flex-start';
            container.style.gap = '15px';
        } else if (width >= 770) {
            // Mostrar 3 tarjetas para tablet grande (770-991px)
            container.style.justifyContent = 'flex-start';
            container.style.gap = '10px';
        } else if (width >= 576) {
            // Mostrar 2 tarjetas para tablet pequeña
            container.style.justifyContent = 'flex-start';
            container.style.gap = '8px';
        } else {
            // Mostrar 1 tarjeta para móvil
            container.style.justifyContent = 'center';
        }
    });
}

window.addEventListener('load', adjustCarousel);
window.addEventListener('resize', adjustCarousel);

// Inicializar carrusel de Bootstrap
document.addEventListener('DOMContentLoaded', function() {
    new bootstrap.Carousel(document.getElementById('mexicoTourismCarousel'), {
        interval: 5000
    });
});