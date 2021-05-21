var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 3,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
});