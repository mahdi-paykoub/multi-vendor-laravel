@extends('layouts.app')

@section('content')
    @include('layouts.product_parts.topbar')
    @include('layouts.product_parts.navbar')
    @include('layouts.product_parts.main_menu')
    @include('layouts.product_parts.main_landing')
    <!--mobile bottom menu-->
    <div
        class="d-lg-none mobile-bottom-menu w-100 fixed-bottom bg-white d-flex justify-content-between align-items-center px-4">
        <div class="text-center">
            <a href="">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                     viewBox="0 0 1024 1024"
                     height="24" width="24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3 0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8 24.9-25 24.9-65.5-.1-90.5z"></path>
                </svg>
                <div class="fs11 mt-1 icon-dark-color">
                    خانه
                </div>
            </a>
        </div>
        <div class="text-center">
            <a href="">
                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                     viewBox="0 0 24 24"
                     height="24" width="24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"></path>
                </svg>
                <div class="fs11 mt-1 text-secondary">
                    دسته بندی
                </div>
            </a>
        </div>
        <div class="text-center">
            <a href="">
                <svg stroke="currentColor" class="text-secondary-2" fill="none" stroke-width="2" viewBox="0 0 24 24"
                     aria-hidden="true" height="24"
                     width="24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <div class="fs11 mt-1 text-secondary">
                    سبد خرید
                </div>
            </a>
        </div>
        <div class="text-center">
            <a href="">
                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                     viewBox="0 0 1024 1024" height="24" width="24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                </svg>
                <div class="fs11 mt-1 text-secondary">
                    دیجی کالای من
                </div>
            </a>
        </div>

    </div>
    <!--content-->
    <div class="container px-4">
        <!--menu-->
        <div class="row justify-content-center mt-3 mt-md-4 pt-2">
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/269766a358cf34e58ccaf49aa3ac2d2db397af7a_1686642203.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/a42323e57223933581679d5cf6843d3dfac3eb3f_1693904601.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/bfcafaf7f0afffbfd326adc48e29e3449dd69910_1688462197.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/f01a2eeeba603d52ee3f4b32b186bc4e662dce60_1691999454.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                <div class="row">
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/d0dc31c892be8cf1408e4e14580b3f479da66bd1_1648897133.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/bfcafaf7f0afffbfd326adc48e29e3449dd69910_1688462197.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="">
                            <img src="assets/image/menu/64497b19038e2c72be6a31dfbda6625fd09a3432_1692258240.png"
                                 width="52" height="52" class="rounded-circle" alt="">
                            <div class="fs12 icon-dark-color mt-1">
                                سوپر مارکت
                            </div>
                        </a>
                    </div>
                    <div class="col text-center">
                        <a href="">
                            <div
                                class="d-flex menu-more-btn rounded-circle mx-auto justify-content-center align-items-center">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                     height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                                </svg>
                            </div>
                            <div class="fs12 icon-dark-color mt-1">
                                <!--TODO complete more btn-->
                                بیشتر
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container px-md-4">
        <!--amazing swiper-->
        <div class="row mt-3 mt-md-4">
            <div class="swiper amazing-swioer mySwiper amazing-swiper-main w-100 h-100 bg-digi-red br-0-15-responsive">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <a href="">
                            <div class="mt-3">
                                <img src="{{url('assets/frontend/image/text/text-amazing.svg')}}" width="92" height="77"
                                     alt="">
                            </div>
                            <div>
                                <img src="{{url('assets/frontend/image/text/box.webp')}}" width="120" height="115"
                                     alt="">
                            </div>
                            <div class="text-white fs14 mt-2 pt-1">مشاهده همه
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>


                    @foreach($products as $product)
                        @php
                            $image = $product->galleries()->first();
                            $info = $product->productInfos()->first();
                        @endphp
                        <div class="swiper-slide amazing-swiper">
                            <a href="product/{{$product->slug}}">
                                <div class="samazing-swiper-card bg-white w-100 py-3 text-center pb-4">
                                    <img src="{{url($image->image)}}" width="150" height="150"
                                         class="object-contain" alt="">
                                    <div class="fw600 mt-3 icon-dark-color justify-content-between d-flex px-2">
                                        <div class="text-white bg-digi-red br10 discount-badge fs12">۵٪</div>
                                        <div>
                                             <span class="fv">{{ number_format($info->price, 0, '', ',')}}</span>
                                            <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            <div
                                                class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                                                ۱۴,۵۵۰,۰۰۰
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endforeach

                    <div class="swiper-slide amazing-swiper">
                        <a href="">
                            <div
                                class="samazing-swiper-card d-flex align-items-center justify-content-center bg-white w-100 py-3 text-center pb-4">
                                <div>
                                    <svg class="text-info" stroke="currentColor" fill="none" stroke-width=".75"
                                         viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="45"
                                         width="45" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 8 8 12 12 16"></polyline>
                                        <line x1="16" y1="12" x2="8" y2="12"></line>
                                    </svg>
                                    <div class="fs14 icon-dark-color mt-3">مشاهده همه</div>
                                </div>

                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container px-4">
        <!--amazing product-->
        <div class="row amazing-product-parent br15 mt-3 mt-md-4 align-items-center">
            <div class="col-12 col-lg-5">
                <div class="d-flex align-items-center">
                    <a href="">
                        <div class="d-flex">
                            <img src="{{url('assets/frontend/image/text/box1.webp')}}"
                                 class="amazing-product-img object-contain" alt="">
                            <img src="{{url('assets/frontend/image/text/amazing.svg')}}" alt=""
                                 class="me-2 amazing-product-img-text">
                        </div>
                    </a>
                    <div class="bg-digi-green fs14 text-white amazing-discount-badge d-none d-xl-block me-3">
                        تا ۴۵٪ تخفیف
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7 px-0 bg-amazing">
                <div class="d-flex align-items-center justify-content-lg-end mt-3 mt-lg-0">
                    <div
                        class="amazing-products position-relative me-4 me-lg-1 ms-1 bg-white rounded-circle justify-content-center align-items-center d-flex">
                        <img src="assets/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp"
                             class="rounded-circle object-cover" alt="">
                        <div class="position-absolute amazing-discount bg-digi-red fs12 text-white px-2 fw600">۲۴٪</div>
                    </div>
                    <div
                        class="amazing-products position-relative mx-1 bg-white rounded-circle justify-content-center align-items-center d-flex">
                        <img src="assets/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp"
                             class="rounded-circle object-cover" alt="">
                        <div class="position-absolute amazing-discount bg-digi-red fs12 text-white px-2 fw600">۲۴٪</div>
                    </div>
                    <div
                        class="amazing-products position-relative mx-1 bg-white rounded-circle justify-content-center align-items-center d-flex">
                        <img src="assets/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp"
                             class="rounded-circle object-cover" alt="">
                        <div class="position-absolute amazing-discount bg-digi-red fs12 text-white px-2 fw600">۲۴٪</div>
                    </div>
                    <div
                        class="amazing-products position-relative mx-1 d-none d-md-flex bg-white rounded-circle justify-content-center align-items-center d-flex">
                        <img src="assets/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp"
                             class="rounded-circle object-cover" alt="">
                        <div class="position-absolute amazing-discount bg-digi-red fs12 text-white px-2 fw600">۲۴٪</div>
                    </div>
                    <div
                        class="amazing-products position-relative d-none d-xl-flex mx-1 bg-white rounded-circle justify-content-center align-items-center d-flex">
                        <img src="assets/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp"
                             class="rounded-circle object-cover" alt="">
                        <div class="position-absolute amazing-discount bg-digi-red fs12 text-white px-2 fw600">۲۴٪</div>
                    </div>
                    <div
                        class="amazing-products position-relative d-none d-xl-flex mx-1 bg-white rounded-circle justify-content-center align-items-center d-flex">
                        <img src="assets/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp"
                             class="rounded-circle object-cover" alt="">
                        <div class="position-absolute amazing-discount bg-digi-red fs12 text-white px-2 fw600">۲۴٪</div>
                    </div>

                    <a href="" class="me-auto ms-3 mx-lg-3">
                        <button class="fs12 amazing-all-btn fw600 bg-white border-0 text-digi-green d-none d-md-block">
                            <span class="ms-1"> بیش از 100 کالا</span>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"></path>
                            </svg>
                        </button>
                        <button
                            class="fs12 amazing-all-btn p-3 rounded-circle bg-white border-0 text-digi-green d-md-none">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                 height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"></path>
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!--introduction 1-->
        <div class="row">
            <div class="col-6 col-lg-3 mt-3">
                <a href="">
                    <img src="assets/image/banner/60929c534cf2862acc4b852f3974d91473487fd4_1693984527.webp"
                         class="w-100 object-cover br15 h-100" alt="">
                </a>
            </div>
            <div class="col-6 col-lg-3 mt-3">
                <a href="">
                    <img src="assets/image/banner/60929c534cf2862acc4b852f3974d91473487fd4_1693984527.webp"
                         class="w-100 object-cover br15 h-100" alt="">
                </a>
            </div>
            <div class="col-6 col-lg-3 mt-3">
                <a href="">
                    <img src="assets/image/banner/60929c534cf2862acc4b852f3974d91473487fd4_1693984527.webp"
                         class="w-100 object-cover br15 h-100" alt="">
                </a>
            </div>
            <div class="col-6 col-lg-3 mt-3">
                <a href="">
                    <img src="assets/image/banner/60929c534cf2862acc4b852f3974d91473487fd4_1693984527.webp"
                         class="w-100 object-cover br15 h-100" alt="">
                </a>
            </div>

        </div>
    </div>
    <div class="container px-md-5">
        <!--categories-->
        <!--TODO responsive-->
        <div class="row mt-5">
            <h5 class="text-center">
                دسته‌بندی‌های دیجی‌کالا
            </h5>
            <div class="row row-cols-lg-6 row-cols-3 row-cols-md-4 justify-content-center main-category-index">
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
                <div class="col px-0 mt-4 text-center">
                    <img src="assets/image/category/0c3cc1cb589df1c74c4ad95a742bb6df967956a8_1656161119.webp" alt="">
                    <div class=" fs13">کالای دیجیتال</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!--introduction 1-->
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <a href="">
                    <img src="assets/image/banner/c76819b158cce634ace871e33ba37ecfa9873b92_1693398663.webp"
                         class="w-100 br15 introduction-img" alt="">
                </a>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0">
                <a href="">
                    <img src="assets/image/banner/6d28fce4d8f4137532b20564c132547d6d51857d_1693380989.webp"
                         class="w-100 br15 introduction-img" alt="">
                </a>
            </div>

        </div>
    </div>
    <div class="container px-4">
        <!--offers-->
        <div class="row mt-4 mt-md-5 pt-2 pt-md-0">
            <h5 class="text-center">
                پیشنهاد دیجی‌کالا
            </h5>
            <div class="border br10 mt-3 px-0">
                <div class="swiper mySwiper offer-sweiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="rounded-circle mt-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                            <div class="hr-class"></div>
                            <div
                                class="rounded-circle mt-3 mb-3 position-relative mx-auto d-flex justify-content-center align-items-center p-1 offer-img-parent">
                                <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                     class="" width="60" height="60" alt="">
                            </div>
                            <div class="fs14 icon-dark-color mt-2 text-center mb-3">
                                گوشی موبایل
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--popular brands-->
        <div class="row mt-4">
            <div class="border br10">
                <div class="text-center mt-4">
                    <h5>
                        <svg stroke="currentColor" fill="#f9bc00" stroke-width="0" viewBox="0 0 256 256" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M243,96.05a20,20,0,0,0-17.26-13.72l-57-4.93-22.3-53.14h0a20,20,0,0,0-36.82,0L87.29,77.4l-57,4.93A20,20,0,0,0,18.87,117.4l43.32,37.8-13,56.24A20,20,0,0,0,79,233.1l49-29.76,49,29.76a20,20,0,0,0,29.8-21.66l-13-56.24,43.32-37.8A20,20,0,0,0,243,96.05Zm-66.75,42.62a20,20,0,0,0-6.35,19.63l11.39,49.32-42.94-26.08a19.9,19.9,0,0,0-20.7,0L74.71,207.62,86.1,158.3a20,20,0,0,0-6.35-19.63L41.66,105.44,91.8,101.1a19.92,19.92,0,0,0,16.69-12.19L128,42.42l19.51,46.49A19.92,19.92,0,0,0,164.2,101.1l50.14,4.34Z"></path>
                        </svg>
                        محبوب‌ترین برندها
                    </h5>
                </div>
                <div class="swiper mySwiper brand-swiper py-3 my-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/brand.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/percil.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/huawei.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/brand.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/percil.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/huawei.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/brand.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/percil.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/huawei.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/brand.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/percil.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/huawei.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/brand.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/percil.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <img src="assets/image/brand/huawei.png" class="w-75" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <!--introduction 2-->
        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <a href="">
                    <img src="assets/image/banner/c76819b158cce634ace871e33ba37ecfa9873b92_1693398663.webp"
                         class="w-100 br15 introduction-img" alt="">
                </a>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0">
                <a href="">
                    <img src="assets/image/banner/6d28fce4d8f4137532b20564c132547d6d51857d_1693380989.webp"
                         class="w-100 br15 introduction-img" alt="">
                </a>
            </div>

        </div>
    </div>
    <div class="container px-4">
        <!--offer 2-->
        <div class="row border br10 mt-4">
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-md-4">
        <!--free transport-->
        <div class="row free-tarnsport-parent br-0-15-responsive bg-digi-purple p-2 p-lg-3 mt-4">
            <div class="col-12 col-lg-4 bg-url-digiplus">
                <img src="assets/image/text/digiplus.svg" class="mt-3" width="128" height="32" alt="">
                <div class="text-white fs13 mt-2 mb-4">
                    خدمات ویژه برای اعضای دیجی‌پلاس
                </div>
                <a href="">
                    <button class="bg-transparent btn-register-in-digiplus text-white fs14 br7">عضویت
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="24"
                             width="24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                        </svg>
                    </button>
                </a>
            </div>
            <div class="col-12 col-lg-8 br15 bg-white">
                <div class="d-flex justify-content-between mt-4">
                    <div class="fs15 fw600">
                        <svg stroke="currentColor" class="text-digi-purple ms-1" fill="none" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round"
                             stroke-linejoin="round" height="23" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                            <path d="M3 9l4 0"></path>
                        </svg>
                        ارسال فوری و رایگان
                    </div>
                    <div>
                        <a href="" class="fs13 text-digi-purple">مشاهده همه
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                 height="1em"
                                 width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row mt-4 mb-4 mb-md-0">
                    <div class="col">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col d-none d-md-block">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col d-none d-xl-block">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                </div>
                <div class="row mt-4 mb-4 mb-md-0  d-none d-md-flex">
                    <div class="col">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col d-none d-md-block">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                    <div class="col d-none d-xl-block">
                        <img src="assets/image/product/7853ee9038eb09345e56475bcd7dc5a76f48deb3_1682340715.jpg"
                             class="w-100" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!--offer 2-->
        <div class="row border br10 mt-4">
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 border-left-light">
                <div class="mt-3 fs15 fw600">
                    گوشی موبایل
                </div>
                <div class="text-secondary fs12 mt-2">
                    بر اساس بازدیدهای شما
                </div>
                <div class="offer-non-swiper">
                    <div class="d-flex mt-3">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                        <div class="p-3">
                            <img src="assets/image/product/mobile-phone.webp" class="w-100" alt="">
                        </div>
                    </div>
                </div>

                <div class="text-center mb-3 pb-1">
                    <a href="" class="fs13 text-info">مشاهده
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!--most sell-->
        <div class="row border-md mb-5 mb-md-0 br15 mt-4 p-0 p-md-4">
            <h5 class="text-md-center">
                <svg stroke="currentColor" fill="#f9a825" stroke-width="0" viewBox="0 0 384 512" height="1em"
                     width="1em"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z"></path>
                </svg>
                <span class="me-2">  پرفروش ترین محصولات</span>
                <a href="" class="text-info float-start fs14 fw600">مشاهده همه</a>
            </h5>
            <div class="swiper most-sell-swiper mySwiper mt-md-3 pt-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--gif-->
        <div class="row mt-3">
            <div class="px-0">
                <img src="assets/image/gif/5f079d158f8aa071365852e3cc66a807c92f7440_1693604261.gif"
                     class="w-100 br15 object-cover" alt="">
            </div>
        </div>
        <!--selected products-->
        <div class="row border br15 mt-4 selected-products">
            <div class="text-center mt-4 mb-3">
                <h5>
                    <svg stroke="currentColor" class="text-danger" fill="none" stroke-width="2" viewBox="0 0 24 24"
                         stroke-linecap="round"
                         stroke-linejoin="round" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 15l6 -6"></path>
                        <circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
                        <circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
                        <path
                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1"></path>
                    </svg>
                    منتخب محصولات تخفیف و حراج
                </h5>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-xl-2 p-4 border-left-light border-bottom-light text-center">
                <img src="assets/image/product/mobile-phone.webp" alt="">
                <div class="mt-3 d-flex justify-content-between">
                    <div class="discount-badge fs13 br15 bg-digi-red text-white">
                        ۲۰٪
                    </div>
                    <div class="icon-dark-color">
                        <span class="fw600"> ۸,۰۵۰,۰۰۰</span>
                        <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                fill="currentColor"></path>
                        </svg>
                        <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                            ۱۴,۵۵۰,۰۰۰
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--hot products-->
        <div class="row border-md mb-5 mb-md-0 br15 mt-5 p-0 p-md-4">
            <h5 class="text-md-center">
                <svg stroke="currentColor" fill="#f9a825" stroke-width="0" viewBox="0 0 384 512" height="1em"
                     width="1em"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z"></path>
                </svg>
                <span class="me-2">  پرفروش ترین محصولات</span>
                <a href="" class="text-info float-start fs14 fw600">مشاهده همه</a>
            </h5>
            <div class="swiper most-sell-swiper mySwiper mt-md-3 pt-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <img src="assets/image/product/ec9a962187e1f82cc47e7a148ef99ec1c6fd024d_1656423336.jpg"
                                 alt="">
                            <div class="d-flex align-items-center  pe-2 pe-md-3">
                                <div class="fw600 text-info counter-most-sell">1</div>
                                <div class="border-bottom-light me-2 icon-dark-color py-4 lh2 title-most-sell">دفتر مشق
                                    مدل
                                    ایفل بسته 5
                                    عددی همراه با جایزه
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--weblog-->
        <div class="row mt-5">
            <div class="fw600 mb-2">
                خواندنی ها
            </div>
            @foreach($articles as $article)
                <div class="col-12 col-md-6 col-lg-3 mt-3">
                    <div class="card br10 weblog-index">
                        <a href="{{route('single.blog' ,$article->slug )}}">
                            <img class="card-img-top" src="{{$article->image}}" alt="{{$article->title}}">
                            <div class="card-body pb-1">
                                <p class="fs14 icon-dark-color pb-0 lh2">
                                    {{$article->title}}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.product_parts.footer')
@endsection

@section('scripts')
    <script src="{{asset('assets/frontend/js/index.js')}}"></script>
@endsection
