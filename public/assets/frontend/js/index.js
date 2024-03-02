var swiper_amazing_on_top = new Swiper(".amazing-swiper-main", {
    slidesPerView: 6.8,
    spaceBetween: 2,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 2.5,
        },
        '576': {
            slidesPerView: 3.5,
        },
        '768': {
            slidesPerView: 4.1,

        },
        '992': {
            slidesPerView: 5.5,
        },
        '1050': {
            slidesPerView: 6.5,
        },
        '1200': {
            slidesPerView: 7.1,
        },
    },
});
var swiper2 = new Swiper(".offer-sweiper", {
    slidesPerView: 6.99,
    spaceBetween: 0,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 3.1,
        },
        '576': {
            slidesPerView: 3.6,
        },
        '768': {
            slidesPerView: 4.5,

        },
        '992': {
            slidesPerView: 5.5,
        },
        '1050': {
            slidesPerView: 6.5,
        },
        '1200': {
            slidesPerView: 6.99,
        },
    },
});
var swiper3 = new Swiper(".brand-swiper", {
    slidesPerView: 9,
    spaceBetween: 0,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 4.5,
        },
        '576': {
            slidesPerView: 5.5,
        },
        '768': {
            slidesPerView: 6.5,

        },
        '992': {
            slidesPerView: 7.5,
        },
        '1050': {
            slidesPerView: 8.5,
        },
        '1200': {
            slidesPerView: 9,
        },
    },
});
var swiper4 = new Swiper(".most-sell-swiper", {
    slidesPerView: 4,
    spaceBetween: 15,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 1.7,
        },
        '576': {
            slidesPerView: 1.7,
        },
        '768': {
            slidesPerView: 2.5,

        },
        '992': {
            slidesPerView: 3,
        },
        '1050': {
            slidesPerView: 3.5,
        },
        '1200': {
            slidesPerView: 4,
        },
    },
});
var swiper5 = new Swiper(".slider-swiper", {
    spaceBetween: 0,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".landing-prev-btn",
        prevEl: ".landing-next-btn",
    },
});
