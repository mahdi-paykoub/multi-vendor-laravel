<!--nav bar-->
<header class="sticky-top w-100 bg-white" id="navbar-sticky-shadow">
    <div class="custom-nav-bar-container mx-auto nav-bar-parent py-2 px-lg-4 px-2">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex search-input-width align-items-center">
                <div class="d-none d-lg-block">
                    <a href="{{route('main')}}">
                    <img src="{{get_en_logo()}}" width="115" height="30" alt="">
                    </a>
                </div>
                {{--mobile search--}}
                <div class="mobile-search-box w-100 px-3 d-lg-none d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchCanvas" aria-controls="offcanvasBottom">
                    <svg stroke="currentColor" fill="#9ea5ac" stroke-width="0" viewBox="0 0 24 24" height="23" width="23" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                        </path>
                    </svg>
                    <div class="me-2 fs12 text-secondary">
                        جستجو در
                    </div>
                    <div>
                        <img src="{{url('assets/frontend/image/logo/digi.svg')}}" width="90" height="24" class="me-2" alt="">
                    </div>
                </div>
                {{--mobile search canvas--}}
                <div class="offcanvas offcanvas-bottom h-100 d-lg-none" tabindex="-1" id="searchCanvas" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-body small">
                        <div class="w-100 p-3">
                            <div class="d-flex align-items-center pb-2 bbc-c">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144m124-144H100"></path>
                                </svg>

                                <input type="text" class="search-navbar-inp w-100 border-0 me-2" placeholder="جستجو">
                            </div>
                            <div class="mt-2">
                                <div class="swiper mySwiper show-search-results-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide p-1 br7">
                                            <a href="">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img width="60" height="60" class="object-cover" src="{{url('assets/frontend/image/product/mobile-phone.webp')}}" alt="">
                                                    </div>
                                                    <div class="fs11  text-dark">
                                                        <div class="fs12"> گوشی شایومی برای نسل</div>
                                                        <div class="mt-2 fs11 text-secondary"> گوشی موبایل شیائومی مدل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide p-1 br7">
                                            <a href="">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img width="60" height="60" class="object-cover" src="{{url('assets/frontend/image/product/mobile-phone.webp')}}" alt="">
                                                    </div>
                                                    <div class="fs11  text-dark">
                                                        <div class="fs12"> گوشی شایومی برای نسل</div>
                                                        <div class="mt-2 fs11 text-secondary"> گوشی موبایل شیائومی مدل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide p-1 br7">
                                            <a href="">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img width="60" height="60" class="object-cover" src="{{url('assets/frontend/image/product/mobile-phone.webp')}}" alt="">
                                                    </div>
                                                    <div class="fs11  text-dark">
                                                        <div class="fs12"> گوشی شایومی برای نسل</div>
                                                        <div class="mt-2 fs11 text-secondary"> گوشی موبایل شیائومی مدل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide p-1 br7">
                                            <a href="">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img width="60" height="60" class="object-cover" src="{{url('assets/frontend/image/product/mobile-phone.webp')}}" alt="">
                                                    </div>
                                                    <div class="fs11  text-dark">
                                                        <div class="fs12"> گوشی شایومی برای نسل</div>
                                                        <div class="mt-2 fs11 text-secondary"> گوشی موبایل شیائومی مدل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide p-1 br7">
                                            <a href="">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img width="60" height="60" class="object-cover" src="{{url('assets/frontend/image/product/mobile-phone.webp')}}" alt="">
                                                    </div>
                                                    <div class="fs11  text-dark">
                                                        <div class="fs12"> گوشی شایومی برای نسل</div>
                                                        <div class="mt-2 fs11 text-secondary"> گوشی موبایل شیائومی مدل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="swiper-slide p-1 br7">
                                            <a href="">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img width="60" height="60" class="object-cover" src="{{url('assets/frontend/image/product/mobile-phone.webp')}}" alt="">
                                                    </div>
                                                    <div class="fs11  text-dark">
                                                        <div class="fs12"> گوشی شایومی برای نسل</div>
                                                        <div class="mt-2 fs11 text-secondary"> گوشی موبایل شیائومی مدل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <img class="w-100 search-banner-navbar object-cover br10" src="{{url('assets/frontend/image/banner/c0cabfba852b8e781f0a187399d9148b9aead122_1682838535.webp')}}" alt="">
                            </div>
                            <div class="popular-search-in-search mt-4">
                                <div class="d-flex align-items-center">
                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M145.93,14.77A12,12,0,0,0,127,19.89L107.07,74.5,87.38,55.39a12,12,0,0,0-17.9,1.33C47.27,85.82,36,115.19,36,144a92,92,0,0,0,184,0C220,82.85,168.2,33.25,145.93,14.77ZM128,212a68.07,68.07,0,0,1-68-68c0-19.94,7-40.62,20.71-61.64l22.93,22.25a12,12,0,0,0,19.63-4.5l20.21-55.4C165.39,65.61,196,102.29,196,144A68.07,68.07,0,0,1,128,212Z">
                                        </path>
                                    </svg>
                                    <div class="fs14 me-2">جستجو های پرطرفدار</div>
                                </div>
                                <div class="mt-4 pb-2">
                                    <div class="swiper swiper-ser-res">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide text-center">
                                                <div class="box-search-word-result d-inline-block">
                                                    <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                        <div> ویتامین سی</div>
                                                        <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide text-center">
                                                <div class="box-search-word-result d-inline-block">
                                                    <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                        <div> ویتامین سی</div>
                                                        <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide text-center">
                                                <div class="box-search-word-result d-inline-block">
                                                    <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                        <div> ویتامین سی</div>
                                                        <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide text-center">
                                                <div class="box-search-word-result d-inline-block">
                                                    <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                        <div> ویتامین سی</div>
                                                        <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide text-center">
                                                <div class="box-search-word-result d-inline-block">
                                                    <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                        <div> ویتامین سی</div>
                                                        <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide text-center">
                                                <div class="box-search-word-result d-inline-block">
                                                    <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                        <div> ویتامین سی</div>
                                                        <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--search--}}
                <div id="main-search-inp-parent" class="main-search-inp-parent me-lg-3 d-none d-lg-flex align-items-center br7 position-relative">
                    <div class="d-flex align-items-center px-2">
                        <svg stroke="currentColor" fill="#989ba0" stroke-width="0" viewBox="0 0 24 24" height="23" width="23" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                            </path>
                        </svg>
                        <span class="fs13 text-secondary">جستجو</span>
                    </div>
                    <div id="for-main-search-show" class="w-100 border bg-white br7 display-none p-3 position-absolute top-0 for-main-search-show">
                        <div class="d-flex align-items-center pb-2">
                            <svg stroke="currentColor" fill="#424750" stroke-width="0" viewBox="0 0 24 24" height="23" width="23" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                            </svg>
                            <form action="{{ route('search.product') }}" class="w-100">
                                <input type="text" name="search" class="search-navbar-inp w-100 border-0 me-2 fs14 text-secondary" placeholder="جستجو">
                            </form>
                        </div>
                        <div class="mt-3">
                            <div class="swiper mySwiper show-search-results-swiper">
                                <div class="swiper-wrapper parent-of-product-res">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 parent-of-cat-res">

                        </div>
                        <div class="mt-4">
                            <img class="w-100 search-banner-navbar object-cover br10" src="{{url('assets/frontend/image/banner/c0cabfba852b8e781f0a187399d9148b9aead122_1682838535.webp')}}" alt="">
                        </div>
                        <div class="popular-search-in-search mt-4">
                            <div class="d-flex align-items-center">
                                <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M145.93,14.77A12,12,0,0,0,127,19.89L107.07,74.5,87.38,55.39a12,12,0,0,0-17.9,1.33C47.27,85.82,36,115.19,36,144a92,92,0,0,0,184,0C220,82.85,168.2,33.25,145.93,14.77ZM128,212a68.07,68.07,0,0,1-68-68c0-19.94,7-40.62,20.71-61.64l22.93,22.25a12,12,0,0,0,19.63-4.5l20.21-55.4C165.39,65.61,196,102.29,196,144A68.07,68.07,0,0,1,128,212Z">
                                    </path>
                                </svg>
                                <div class="fs14 me-2">جستجو های پرطرفدار</div>
                            </div>
                            <div class="mt-4 pb-2">
                                <div class="swiper swiper-ser-res">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <div class="box-search-word-result d-inline-block">
                                                <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                    <div> ویتامین سی</div>
                                                    <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <div class="box-search-word-result d-inline-block">
                                                <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                    <div> ویتامین سی</div>
                                                    <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <div class="box-search-word-result d-inline-block">
                                                <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                    <div> ویتامین سی</div>
                                                    <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <div class="box-search-word-result d-inline-block">
                                                <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                    <div> ویتامین سی</div>
                                                    <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <div class="box-search-word-result d-inline-block">
                                                <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                    <div> ویتامین سی</div>
                                                    <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide text-center">
                                            <div class="box-search-word-result d-inline-block">
                                                <a href="" class="fs13 d-flex align-items-center px-3 py-2 d-flex icon-dark-color fw600 ">
                                                    <div> ویتامین سی</div>
                                                    <svg stroke="currentColor" class="me-2" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="align-items-center d-none d-lg-flex">
                @guest
                <a href="{{route('login')}}" class="ms-3">
                    <button class="login-nav-bar-btn br7 icon-dark-color fs12 bg-transparent border fw600">
                        <svg stroke="currentColor" class="icon-dark-color ms-1" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                            </path>
                        </svg>
                        ورود | ثبت‌نام
                    </button>
                </a>
                @endguest
                @auth
                <div class="ps-4 cursor-pointer position-relative">
                    <div id="for-show-s-m">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                            <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z">
                            </path>
                        </svg>

                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7 10l5 5 5-5H7z"></path>
                        </svg>
                    </div>
                    <div class="position-absolute box-login-menu py-1 bg-white display-none" id="box-login-menu-s">
                        <div class="py-3 border-bottom-light-2 p-3">
                            <a href="{{route('index.profile')}}">
                                <div class="d-flex justify-content-between align-items-center icon-dark-color">
                                    <div class="">{{Auth::user()->name}}</div>
                                    <div>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="px-3 pt-3 on-hover-color-m">
                            <a href="{{route('orders.profile')}}">
                                <div class="d-flex align-items-center icon-dark-color">
                                    <div class="pb-3">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M18 6h-2c0-2.21-1.79-4-4-4S8 3.79 8 6H6c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6-2c1.1 0 2 .9 2 2h-4c0-1.1.9-2 2-2zm6 16H6V8h2v2c0 .55.45 1 1 1s1-.45 1-1V8h4v2c0 .55.45 1 1 1s1-.45 1-1V8h2v12z">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="me-3 fs15 pb-3 border-bottom-light-2 w-100">
                                        سفارش ها
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 pt-3 on-hover-color-m">
                            <a href="{{route('lists.profile')}}">
                                <div class="d-flex align-items-center icon-dark-color">
                                    <div class="pb-3">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z">
                                            </path>
                                        </svg>


                                    </div>
                                    <div class="me-3 fs15 pb-3 border-bottom-light-2 w-100">
                                        لیست ها
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 pt-3 on-hover-color-m">
                            <a href="{{route('comments.profile')}}">
                                <div class="d-flex align-items-center icon-dark-color">
                                    <div class="pb-3">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z">
                                            </path>
                                        </svg>

                                    </div>
                                    <div class="me-3 fs15 pb-3 border-bottom-light-2 w-100">
                                        دیدگاه ها
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 pt-3 on-hover-color-m">
                            <form id="logout-form" class="d-none" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="d-flex align-items-center icon-dark-color">
                                    <div class="pb-3">
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="me-3 fs15 pb-3 w-100">
                                        خروج از حساب کاربری
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endauth
                <a href="{{route('shop.cart.view')}}" class="border-end pe-4 position-relative">
                    <svg stroke="currentColor" fill="#3f4064" stroke-width="0" viewBox="0 0 256 256" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100,216a20,20,0,1,1-20-20A20,20,0,0,1,100,216Zm84-20a20,20,0,1,0,20,20A20,20,0,0,0,184,196ZM235.47,75.53l-27.29,88.7A27.87,27.87,0,0,1,181.41,184H82.93A28.13,28.13,0,0,1,56,163.69L21.81,44H12a12,12,0,0,1,0-24H24.82A20.08,20.08,0,0,1,44.05,34.51L51.34,60H224a12,12,0,0,1,11.47,15.53ZM207.75,84H58.19l20.89,73.1a4,4,0,0,0,3.85,2.9h98.48a4,4,0,0,0,3.83-2.82Z">
                        </path>
                    </svg>
                    @if(\App\Facades\Cart::count())
                    <div class="fv show-cart-count bg-digi-red position-absolute right-0 fs13 d-flex align-items-center justify-content-center text-white">
                        <span class="p-count" style="padding-top: 2px">
                            {{\App\Facades\Cart::count()}}
                        </span>
                    </div>
                    @endif
                </a>
            </div>
        </div>
    </div>
</header>
{{--blur page on focus--}}