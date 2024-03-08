window.addEventListener("scroll", function () {
    if (window.scrollY >= 70) {
        if (!document.getElementById('navbar-sticky-shadow').classList.contains('header-shadow-unique')) {
            document.getElementById('navbar-sticky-shadow').classList.add("header-shadow-unique");
        }
    }
    if (document.getElementById("navbar-sticky-shadow").offsetTop <= 70) {
        if (document.getElementById('navbar-sticky-shadow').classList.contains('header-shadow-unique')) {
            document.getElementById('navbar-sticky-shadow').classList.remove("header-shadow-unique");
        }
    }
    /*main-menu-sticky-shadow*/
    if (document.getElementById("navbar-sticky-shadow").offsetTop <= 70) {

    }
});

document.getElementById('for-show-s-m').onclick = function (e) {
    document.getElementById('box-login-menu-s').classList.toggle('display-none');
}


document.getElementById('main-search-inp-parent').onclick = function (e) {
    document.getElementById('for-main-search-show').classList.remove('display-none');
    document.getElementById('blur-page-on-focus').classList.remove('display-none');
    document.getElementById('for-delete-elm').classList.remove('display-none');
}
document.getElementById('for-delete-elm').onclick = function () {
    document.getElementById('for-main-search-show').classList.add('display-none');
    document.getElementById('blur-page-on-focus').classList.add('display-none');
    document.getElementById('for-delete-elm').classList.add('display-none');
}

var swiper_ama_top = new Swiper(".swiper-ser-res", {
    slidesPerView: 4.3,
    spaceBetween: 0,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 3.5,
        },
        '576': {
            slidesPerView: 4,
        },
        '768': {
            slidesPerView: 5,

        },
        '992': {
            slidesPerView: 4.3,
        },

    },
});
var swiper_se_top_res = new Swiper(".show-search-results-swiper", {
    slidesPerView: 2.2,
    spaceBetween: 6,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 2.1,
        },
        '576': {
            slidesPerView: 2.6,
        },
        '768': {
            slidesPerView: 3.5,

        },
        '992': {
            slidesPerView: 2.5,
        },

    },
});

let toast = ($errMsg) => {
    document.getElementById('toast-here').innerHTML = `
    <div class="tosti-box">
        <div class="fs14 lh2">
           ${$errMsg}
        </div>
        <div class="fs14 ok-c cursor-pointer" onclick="deleteToast()">
            باشه
        </div>
    </div>
    `
}

let deleteToast = ($errMsg) => {
    document.getElementById('toast-here').innerHTML = '';
}
