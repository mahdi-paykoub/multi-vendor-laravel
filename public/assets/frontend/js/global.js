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

let do_swiper = () => {
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
}
// navbar ajax
$('.search-navbar-inp').on('keyup paste', function () {
    $this = $(this)
    $searched_val = $this.val();
    if ($searched_val.trim().length > 2) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            }
        })

        $.ajax({
            type: 'POST',
            url: '/search/ajax',
            data: JSON.stringify({
                value: $searched_val
            }),
            success: function (data) {
                console.log(data.products)
                $('.parent-of-cat-res').html(addSearchCatResult(data.cats))
                $('.parent-of-product-res').html(addSearchProductResult(data.products))
                do_swiper();
            }
        });
    }


})
let addSearchCatResult = ($cats) => {
    return `
    ${Object.values($cats).map(function ($cat) {
        return `
        <a href="/category/${$cat['slug']}">
            <div class="w-100 d-flex justify-content-between align--center px-2 mt-4">
                <div class="d-flex">
                    <svg stroke="currentColor" fill="#a1a3a8" stroke-width="0" viewBox="0 0 24 24" height="23" width="23"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                        </path>
                    </svg>
                
                        <div class="fs14 me-3 text-dark">${$cat['title']}</div>
                    
                </div>
                <div>
                    <svg stroke="currentColor" class="text-secondary-2 mb-2" stroke-width="3" viewBox="0 0 24 24"
                        aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg>
                </div>
            </div>
        </a>
        `
    }).join("")}
    
    `;
}
let addSearchProductResult = ($products) => {
    return `
   
    ${$products.map(function ($product) {
        return `
                <div class="swiper-slide p-1 br7">
                    <a href="/product/${$product['slug']}">
                        <div class="d-flex align-items-center">
                            <div>
                                <img width="60" height="60" class="object-cover" src="${$product['img']}" alt="">
                            </div>
                            <div class="fs11  text-dark">
                                <div class="fs12 me-1"> ${($product['title'].substr(0, $product['title'].lastIndexOf(' ', 20)) + '...')}</div>
                        
                            </div>
                        </div>
                    </a>
                </div>
          
        `
    }).join("")}
  
    
    `;
}

