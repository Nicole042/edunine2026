document.addEventListener('DOMContentLoaded', function () {
  // Collect the modals you want to control
  const modals = [
    document.getElementById('feedbackModal'),
    document.getElementById('coordinatorsModal'),
    document.getElementById('coordinatorsModalAle'),
    document.getElementById('coordinatorsModalJoséMartín')
  ].filter(Boolean);

  if (modals.length === 0) {
    console.warn('No target modals found');
    return;
  }

  // Slick (jQuery) carousel
  const slickSlider = document.querySelector('.coordinators-slider');
  const hasSlick = () =>
    !!(window.jQuery && slickSlider && jQuery(slickSlider).hasClass('slick-initialized'));

  // Bootstrap carousel
  const bsCarouselEl = document.querySelector('#carouselExampleAutoplaying');
  const bsCarousel = (bsCarouselEl && window.bootstrap)
    ? bootstrap.Carousel.getOrCreateInstance(bsCarouselEl)
    : null;

  function pauseCarousels() {
    if (hasSlick()) {
      try { jQuery(slickSlider).slick('slickPause'); } catch (e) { console.error(e); }
    }
    if (bsCarousel) {
      try { bsCarousel.pause(); } catch (e) { console.error(e); }
    }

    // Fallback scroll lock (Bootstrap should do this, but enforce if overridden)
    document.documentElement.style.overflow = 'hidden';
    document.body.style.overflow = 'hidden';
  }

  function resumeCarousels() {
    if (hasSlick()) {
      try { jQuery(slickSlider).slick('slickPlay'); } catch (e) { console.error(e); }
    }
    if (bsCarousel) {
      try { bsCarousel.cycle(); } catch (e) { console.error(e); }
    }

    // Remove fallback scroll lock
    document.documentElement.style.overflow = '';
    document.body.style.overflow = '';
  }

  // Hook all chosen modals
  modals.forEach((modal) => {
    modal.addEventListener('shown.bs.modal', pauseCarousels);
    modal.addEventListener('hidden.bs.modal', resumeCarousels);
  });
});
