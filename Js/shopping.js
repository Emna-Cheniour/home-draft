var swiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 5000,
      },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2 ,
        slideShadows: true,
    },
    loop: true
    });