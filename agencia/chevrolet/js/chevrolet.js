var swiper = new Swiper('.super-specific-swiper', {
    slidesPerView: 4,
    spaceBetween: 20,
    navigation: {
        nextEl: '.super-specific-next',
        prevEl: '.super-specific-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1025: {
            slidesPerView: 4,
            spaceBetween: 20,
        }
    }
});