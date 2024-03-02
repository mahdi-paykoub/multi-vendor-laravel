var swiper = new Swiper(".single-product-status-swiper", {
    slidesPerView: 6.8,
    spaceBetween: 2,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 4,
        },
        '576': {
            slidesPerView: 4,
        },
        '768': {
            slidesPerView: 4,

        },
        '992': {
            slidesPerView: 5,
        },
        '1050': {
            slidesPerView: 5,
        },
        '1200': {
            slidesPerView: 5,
        },
    },
});
var swiper2 = new Swiper(".related-products-swiper", {
    slidesPerView: 6.8,
    spaceBetween: 2,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 2.5,
        },
        '576': {
            slidesPerView: 2.5,
        },
        '768': {
            slidesPerView: 4,

        },
        '992': {
            slidesPerView: 5,
        },
        '1050': {
            slidesPerView: 6,
        },
        '1200': {
            slidesPerView: 6,
        },
    },
});
var swiper3 = new Swiper(".user-videos-swiper", {
    slidesPerView: 6.8,
    spaceBetween: 2,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 2,
        },
        '576': {
            slidesPerView: 2,
        },
        '768': {
            slidesPerView: 3,

        },
        '992': {
            slidesPerView: 3,
        },
        '1050': {
            slidesPerView: 4,
        },
        '1200': {
            slidesPerView: 4,
        },
    },
});
var swiper4 = new Swiper(".question-swiper", {
    slidesPerView: 6.8,
    spaceBetween: 2,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 2,
        },
        '576': {
            slidesPerView: 2,
        },
        '768': {
            slidesPerView: 3,

        },
        '992': {
            slidesPerView: 3,
        },
        '1050': {
            slidesPerView: 12,
        },
        '1200': {
            slidesPerView: 12,
        },
    },
});
var swiper5 = new Swiper(".single-product-img-swiper", {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    effect: 'fade',
    speed: 600,
});
var swiper = new Swiper(".modal-image-swiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

