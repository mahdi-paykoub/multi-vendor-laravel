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
                    <a href="">
                        <div class="d-flex align-items-center py-2 on-hover-color-m  border-bottom-light-2 ps-2">
                            <div class="active-user-panel-menu ms-2 d-none d-lg-block"></div>
                            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                                 viewBox="0 0 24 24" height="24"
                                 width="24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z"></path>
                            </svg>
                            <div class="d-flex justify-content-between w-100 py-2">
                                <div class="fs13 me-2 icon-dark-color fw600"> خلاصه فعالیت ها</div>
                                <svg stroke="currentColor" class="text-secondary d-lg-none" fill="currentColor"
                                     stroke-width="0" viewBox="0 0 24 24" height="1em"
                                     width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
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
                                    <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
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
