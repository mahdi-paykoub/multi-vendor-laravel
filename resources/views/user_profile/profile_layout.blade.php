@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/user-panel.css')}}"/>
@endsection
@section('content')
    <div class="d-none d-lg-block">
        @include('layouts.product_parts.topbar')
        @include('layouts.product_parts.navbar')
        @include('layouts.product_parts.main_menu')
    </div>
    @yield('responsive_setting')

    <div class="container px-md-4 mt-3 mt-lg-5">
        <div class="row">
            <div class="col-12 col-lg-3 ps-lg-0 {{ $class ?? '' }}">
                <div class="border-responsive py-3 br10">
                    <div class="fw600 px-3 fs14">
                        مهدی پایکوب
                    </div>
                    <div class="d-flex justify-content-between px-3 align-items-center pb-3 border-bottom-light-2">
                        <div class="text-secondary-2 mt-1 fs14"> ۰۹۳۰۹۵۱۹۳۶۵</div>

                        <svg stroke="currentColor" class="text-info" fill="currentColor" stroke-width="0"
                             viewBox="0 0 24 24" height="20"
                             width="20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 19.707 18 10.414 13.586 6l-9.293 9.293a1.003 1.003 0 0 0-.263.464L3 21l5.242-1.03c.176-.044.337-.135.465-.263zM21 7.414a2 2 0 0 0 0-2.828L19.414 3a2 2 0 0 0-2.828 0L15 4.586 19.414 9 21 7.414z"></path>
                        </svg>
                    </div>
                    {{--repeat here--}}
                    <a href="{{route('index.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('index.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 24 24" height="24"
                                 width="24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z"></path>
                            </svg>
                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600"> خلاصه فعالیت ها</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('orders.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('orders.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>

                            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2"
                                 viewBox="0 0 24 24"
                                 aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>

                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">سفارش ها</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('lists.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('lists.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 512 512"
                                 height="23" width="23" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
                            </svg>

                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">لیست های من</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('comments.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('comments.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 512 512"
                                 height="23" width="23" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"></path>
                            </svg>
                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">دیدگاه ها</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('message.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('message.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2"
                                 viewBox="0 0 24 24"
                                 stroke-linecap="round" stroke-linejoin="round" height="24" width="24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>


                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">پیغام ها</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('address.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('address.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 24 24"
                                 height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path
                                    d="M20.94 11A8.994 8.994 0 0 0 13 3.06V1h-2v2.06A8.994 8.994 0 0 0 3.06 11H1v2h2.06A8.994 8.994 0 0 0 11 20.94V23h2v-2.06A8.994 8.994 0 0 0 20.94 13H23v-2h-2.06zM12 19c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"></path>
                            </svg>

                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">آدرس ها</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('info.profile')}}">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div
                                class="{{is_active_route('info.profile' , 'active-user-panel-menu')}} ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 448 512"
                                 height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"></path>
                            </svg>

                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">اطلاعات حساب کاربری</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex align-items-center py-2 on-hover-color-m ps-2">
                            <div class="ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" style="transform: rotate(180deg);" class="icon-dark-color" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                 stroke-linecap="round" stroke-linejoin="round" height="24" width="24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2"></path>
                                <path d="M15 12h-12l3 -3"></path>
                                <path d="M6 15l-3 -3"></path>
                            </svg>

                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs14 me-2 icon-dark-color fw600">خروج</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w-100 sep-m-s mt-4 d-lg-none">

                </div>
            </div>
            <div class="col-12 col-lg-9 mt-2 mt-lg-0">
                <div class="border p-3 br10 mb-3">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center fs12 org-color">
                            <svg stroke="currentColor" class="ms-2" fill="#f9a825" stroke-width="0" viewBox="0 0 16 16"
                                 height="15"
                                 width="15" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
                            </svg>
                            با تایید هویت می‌توانید‌ امنیت حساب کاربری‌تان را افزایش دهید و از امکان «خرید اعتباری» نیز
                            استفاده
                            کنید

                        </div>
                        <div class="text-start">
                            <a href="" class="text-info fs13">
                                تایید هویت
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @yield('profile_content')
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
@endsection
