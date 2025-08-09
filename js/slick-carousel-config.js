// SLICK CAROUSEL CONFIGURATION
function initializeCoordinatorsSlider() {
    jQuery(function($){
        $('.coordinators-slider').slick({
            infinite: true,
            variableWidth: false,  // keep equal widths
            adaptiveHeight: false, // keep equal heights
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 3 } },
                { breakpoint: 768, settings: { slidesToShow: 2 } },
                { breakpoint: 500, settings: { slidesToShow: 1 } }
            ]
        });
    });
}

// Auto-initialize when document is ready
jQuery(document).ready(function() {
    initializeCoordinatorsSlider();
});
