jQuery(document).ready(function($) {
    $('.recent-comments-carousel').slick({
        vertical: true, // Habilitar el desplazamiento vertical
        infinite: true,
        slidesToShow: 1, // Mostrar un slide a la vez
        slidesToScroll: 1, // Desplazar un slide a la vez
        speed: 10000, // Velocidad lenta para un efecto más continuo (en milisegundos)
        autoplay: true,
        autoplaySpeed: 0, // Sin pausas entre desplazamientos
        cssEase: 'linear', // Movimiento lineal sin aceleración o desaceleración
        arrows: false, // Desactivar flechas de navegación
        dots: false, // Desactivar los puntos de navegación
        verticalSwiping: true, // Habilitar el swipe vertical en dispositivos táctiles
    });
});