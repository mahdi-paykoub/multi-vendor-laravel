@extends('user_profile.profile_layout', ['class' => 'd-none d-lg-block'])
@section('responsive_setting')
<div class="d-lg-none d-flex px-3 py-3">
    <div>
        <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
        </svg>
    </div>
    <div class="icon-dark-color pe-2 fs15">
        لیست ها
    </div>
</div>
<div class="w-100 sep-m-s mt- d-lg-none"></div>
@endsection
@section('profile_content')
<div class="border-responsive pt-4 br10 mb-5">
    <div class="justify-content-between px-4 d-none d-lg-flex">
        <div class="icon-dark-color fs15 fw600">
            <div>لیست ها</div>
        </div>
    </div>

    <ul class="nav nav-tabs justify-content-around justify-content-lg-start mt-lg-5 mt-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="bg-transparent border-0 px-3 text-secondary fs15res active-user-tab-menu active" id="current-orders" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">لیست علاقه‌مندی
                @if (count($products) != 0)
                <span class="badge fv">{{ count($products) }}</span>
                @endif

            </button>
            <div class="mt-2"></div>
        </li>
        <li class="nav-item" role="presentation">
            <button class="bg-transparent border-0 px-3  text-secondary fs15res active-user-tab-menu" id="delivered-orders" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> لیست عمومی
                @if (count($wishLists) != 0)
                <span class="badge bg-secondary-4 fv">{{ count($wishLists) }}</span>
                @endif
            </button>
            <div class="mt-2"></div>
        </li>
        <li class="nav-item" role="presentation">
            <button class="bg-transparent border-0 px-3  text-secondary fs15res active-user-tab-menu" id="delivered-orders" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="profile" aria-selected="false"> اطلاع‌رسانی‌ها

            </button>
            <div class="mt-2"></div>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <!-- liked posts -->
        <div class="tab-pane show active fade p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
            <!--wish list-->
            <div class="row user-panel-wish-list">
                @if (count($products) != 0)
                @foreach ($products as $product)
                @php
                $img = $product->galleries()->first();
                $productInfo = $product->productInfos()->first();
                @endphp

                <div class="col-12 col-lg-6 border-bottom-light-2 pb-4 pt-5">
                    <a href="/product/{{$product->slug}}">
                        <div class="text-center">
                            <img src="{{url($img->image)}}" width="150" height="150" alt="">
                        </div>
                        <h3 class="fs13 lh2 mt-4 text-dark">
                            کنسول بازی مایکروسافت مدل XBOX SERIES X ظرفیت 1 ترابایت به همراه کارت طلایی نصب بازی
                        </h3>
                        <div class="mt-2 text-danger fs12">
                            <span class="fv">{{ $productInfo->quantity }}</span> عدد در انبار باقی مانده
                        </div>
                        <div class="d-flex justify-content-end text-dark fw600 align-items-center">
                            <span class="fs18 ms-1 fv">{{number_format($productInfo->price, 0, '', ',')}}</span>
                            <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
                    <div class="row px-0 mt-4 mx-0">
                        <div class="col-3">
                            <button class="btn-for-delete-add bg-transparent for-delete-btn fs13 br10 w-100">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path>
                                </svg>
                                حذف
                            </button>
                        </div>
                        <div class="col-8 ps-0">
                            <button class="btn-for-delete-add br10  for-add-btn fs13 bg-transparent w-100">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"></path>
                                </svg>
                                <span class="me-1"> افزودن به سبد</span>
                            </button>
                        </div>
                    </div>

                </div>
                @endforeach
                @else
                <!--empty-->
                <div class="row justify-content-center">
                    <div class="col-6 col-md-5 col-lg-3 text-center py-5">
                        <img src="{{url('assets/frontend/image/text/favorites-list-empty.svg')}}" class="w-100 p-3" alt="">
                        <div class="fs14 icon-dark-color">
                            لیست علاقه مندی شما خالی است
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
        <!-- wish list -->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="justify-content-between mt-3 px-3 align-items-center border-bottom-light-2 pb-3 display-none d-lg-flex">
                <div class="fs14">اینجا می‌توانید لیست‌های مختلف از کالاهای محبوبتان بسازید و به دیگران
                    پیشنهاد دهید.
                </div>
                <button class="btn btn-danger fs14 bg-digi-red br7" data-bs-toggle="modal" data-bs-target="#addWishListModal">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8Z"></path>
                        <path d="M192 474h672q8 0 8 8v60q0 8-8 8H160q-8 0-8-8v-60q0-8 8-8Z"></path>
                    </svg>
                    ساختن لیست
                </button>
            </div>


            <!--full-->

            <div class="row px-4 pb-4">
                @if (count($wishLists) != 0)
                @foreach ($wishLists as $wishList)
                @php
                $products= $wishList->products()->get();
                @endphp
                <div class="col-12 col-lg-6 mt-3">
                    <div class="border-responsive br10 p-lg-4 h-100">
                        <div class="fw600 fs13">{{ $wishList->title }}</div>
                        <div class="">
                            @foreach ($products as $product)
                            @php
                            $img =$product->galleries()->first();
                            @endphp
                            <img width="48" height="50" class="object-fit-cover mt-4 ms-2" src="{{$img->image}}" alt="">
                            @endforeach
                        </div>
                        <div class="mt-3 lh2 text-secondary fs11">
                            {{ $wishList->description }}
                        </div>
                        @if (count($products) == 0)
                        <div class="empty-wish-list-box p-1 mt-3 d-flex align-items-center justify-content-center">
                            <img src="{{url('assets/frontend/image/text/wish-list.svg')}}" width="56" height="50" alt="">
                            <div class="fs12">این لیست خالی است!</div>
                        </div>
                        @endif
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <button class="btn btn-outline-danger fs12 br7">
                                <svg stroke="currentColor" class="ms-1" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 12c0 1.654 1.346 3 3 3 .794 0 1.512-.315 2.049-.82l5.991 3.424c-.018.13-.04.26-.04.396 0 1.654 1.346 3 3 3s3-1.346 3-3-1.346-3-3-3c-.794 0-1.512.315-2.049.82L8.96 12.397c.018-.131.04-.261.04-.397s-.022-.266-.04-.397l5.991-3.423c.537.505 1.255.82 2.049.82 1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3c0 .136.022.266.04.397L8.049 9.82A2.982 2.982 0 0 0 6 9c-1.654 0-3 1.346-3 3z"></path>
                                </svg>
                                اشتراک گذاری
                            </button>
                            <a href="/profile/wish-list/{{$wishList->id}}/details" class="fs12 text-info fw600">
                                مشاهده و ویرایش
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="17" width="17" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <!--empty-->
                <div class="row justify-content-center pt-lg-5">
                    <div class="col-6 col-md-5 col-lg-3 text-center">
                        <img src="{{url('assets/frontend/image/text/wish-list.svg')}}" class="w-100 p-3" alt="">
                        <div class="fs14 icon-dark-color">
                            هنوز هیچ لیستی نساخته اید
                        </div>
                        <button class="btn btn-outline-danger fs12 br7 mt-3 d-lg-none">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8Z"></path>
                                <path d="M192 474h672q8 0 8 8v60q0 8-8 8H160q-8 0-8-8v-60q0-8 8-8Z"></path>
                            </svg>
                            ساختن لیست جدید
                        </button>
                    </div>
                    <div class="text-center mt-4 pt-2">
                        <div class="fs15 text-secondary">
                            می‌توانید از لیست‌های زیر اﺳﺘﻔﺎده ﮐﻨﯿﺪ یا لیست خلاقانه خود را بسازید.
                        </div>
                    </div>
                    <div class="row mt-5 pb-5">
                        <div class="col-6 col-lg-3 text-center">
                            <img src="{{url('assets/frontend/image/text/wish-list-home.svg')}}" width="36" height="36" alt="">
                            <div class="fw600 fs12 icon-dark-color mt-1">
                                خرید روزانه
                            </div>
                            <div class="text-secondary fs12 mt-2 lh2">
                                خرید های روزانه را به صورت یکجا در اینجا ثبت کنید
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 text-center">
                            <img src="{{url('assets/frontend/image/text/wish-list-home.svg')}}" width="36" height="36" alt="">
                            <div class="fw600 fs12 icon-dark-color mt-1">
                                پیشنهاد به دوستان
                            </div>
                            <div class="text-secondary fs12 mt-2 lh2">
                                کالاهای موردنظرتان را به دوستان پیشنهاد کنید.
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mt-4 mt-lg-0 text-center">
                            <img src="{{url('assets/frontend/image/text/wish-list-birthday.svg')}}" width="36" height="36" alt="">
                            <div class="fw600 fs12 icon-dark-color mt-1">
                                هدیه‌ها
                            </div>
                            <div class="text-secondary fs12 mt-2 lh2">
                                برای هدیه خریدن، از قبل ایده‌هایتان را جمع کنید.
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 mt-4 mt-lg-0 text-center">
                            <img src="{{url('assets/frontend/image/text/wish-list-birth.svg')}}" width="36" height="36" alt="">
                            <div class="fw600 fs12 icon-dark-color mt-1">
                                آرزوها
                            </div>
                            <div class="text-secondary fs12 mt-2 lh2">
                                کالاهایی که دوست دارید در آینده داشته باشید.
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>


            <!-- add whish list modal -->
            <div class="modal fade" id="addWishListModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down modal-dialog-scrollable">
                    <div class="modal-content border-0">
                        <div class="d-flex justify-content-between p-3 border-bottom">
                            <div class="modal-title fw600" id="exampleModalLabel">ساختن لیست</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('add.wish.list')}}" method="post">
                                @csrf
                                <div class="">
                                    <label for="" class="fs14">عنوان لیست*</label>
                                    <input type="text" name="title" class="w-100 mt-2 px-2 wish-inp h40 text-secondary fs14">
                                </div>
                                <div class="mt-4">
                                    <label for="" class="fs14">توضیحات</label>
                                    <div>
                                        <textarea name="description" class="w-100 wish-inp mt-2 p-2 h120 text-secondary fs14" id="" cols="20"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3 text-start">
                                    <button class="btn btn-outline-danger px-3 br10 fs15 ms-2" type="button">انصراف</button>
                                    <button class="btn btn-danger bg-digi-red br10 fs15" type="submit">تایید</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- notofication -->
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <!--empty-->
            <div class="row justify-content-center">
                <div class="col-6 col-md-5 col-lg-3 text-center py-5">
                    <img src="{{asset('assets/frontend/image/text/widcpa.svg')}}" class="w-100 p-3" alt="">
                    <div class="fs14 icon-dark-color">
                        لیست اطلاع‌رسانی‌های شما خالی است.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection