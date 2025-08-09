document.addEventListener('DOMContentLoaded', function () {
    const modalEl = document.getElementById('feedbackModal');
    
    if (!modalEl) {
        console.error('Modal #feedbackModal not found');
        return;
    }

    // Slick Carousel Elements
    const slickSlider = document.querySelector('.coordinators-slider');
    let isSlickInitialized = false;
    
    // Bootstrap Carousel Elements - FIX THE SELECTOR
    const bsCarouselEl = document.querySelector('#carouselExampleAutoplaying');
    let bsCarousel = null;
    
    // Initialize Bootstrap Carousel instance if found
    if (bsCarouselEl && typeof bootstrap !== 'undefined') {
        bsCarousel = bootstrap.Carousel.getOrCreateInstance(bsCarouselEl);
    }
    
    // Check if Slick is initialized (more reliable method)
    function checkSlickInitialization() {
        if (window.jQuery && slickSlider) {
            isSlickInitialized = jQuery(slickSlider).hasClass('slick-initialized');
        }
        return isSlickInitialized;
    }

    // When modal is about to show
    modalEl.addEventListener('show.bs.modal', function () {
        console.log('Modal opening - pausing carousels');
        
        // Pause Slick Carousel
        if (checkSlickInitialization()) {
            try {
                jQuery(slickSlider).slick('slickPause');
                console.log('Slick carousel paused');
            } catch (error) {
                console.error('Error pausing Slick:', error);
            }
        }
        
        // Pause Bootstrap Carousel
        if (bsCarousel) {
            try {
                bsCarousel.pause();
                console.log('Bootstrap carousel paused');
            } catch (error) {
                console.error('Error pausing Bootstrap carousel:', error);
            }
        }
        
        // Prevent body scrolling
        document.body.style.overflow = 'hidden';
    });

    // When modal is fully hidden
    modalEl.addEventListener('hidden.bs.modal', function () {
        console.log('Modal closed - resuming carousels');
        
        // Resume Slick Carousel
        if (isSlickInitialized) {
            try {
                jQuery(slickSlider).slick('slickPlay');
                console.log('Slick carousel resumed');
            } catch (error) {
                console.error('Error resuming Slick:', error);
            }
        }
        
        // Resume Bootstrap Carousel
        if (bsCarousel) {
            try {
                bsCarousel.cycle();
                console.log('Bootstrap carousel resumed');
            } catch (error) {
                console.error('Error resuming Bootstrap carousel:', error);
            }
        }
        
        // Restore body scrolling
        document.body.style.overflow = '';
    });

    // Also pause/resume on modal backdrop click or ESC key
    modalEl.addEventListener('hide.bs.modal', function () {
        // This fires when modal starts closing (before hidden.bs.modal)
        console.log('Modal hiding...');
    });

    /////////////////////////////////////////////////////////////////////////////////
    // Add this to your existing pauseCoordinatorsSlider.js after the first modal setup

    const modalChongEl = document.getElementById('feedbackModalChong');

    if (modalChongEl) {
    // Copy all the same event listeners for the Chong modal
    modalChongEl.addEventListener('show.bs.modal', function () {
        console.log('Modal Chong opening - pausing carousels');
        // ... same pause logic
    });

    modalChongEl.addEventListener('shown.bs.modal', function () {
        // ... same prevent scrolling logic
    });

    modalChongEl.addEventListener('hide.bs.modal', function () {
        // ... same restore scrolling logic
    });

    modalChongEl.addEventListener('hidden.bs.modal', function () {
        console.log('Modal Chong closed - resuming carousels');
        // ... same resume logic
    });
}
});