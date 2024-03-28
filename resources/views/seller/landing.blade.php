@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/Become-a-seller.css')}}" />
@endsection
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-be-seller py-3 sticky-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">
                <img src="assets/image/logo/digi-text.svg" width="95" height="24" alt="">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a href="{{route('sign.in.view')}}" class="fs13 text-white mt-2 ms-3">ورود به پنل فوشندگان</a>
                <a href="{{route('sign.in.view')}}">
                    <button class="bg-transparent fs14 text-white be-seller-register-btn">ثبت‌نام</button>
                </a>
            </ul>
        </div>
    </div>
</nav>
<!--landing-->
<div class="bg-image-url-seller d-flex align-items-center px-3 px-md-5">
    <div class="container mt-5 pt-5">
        <h1 class="fw600 text-white">در دیجی‌کالا فروشنده شوید!</h1>
        <div class="mt-4 text-white">
            تنها در دیجی‌کالا بدون تعطیلی بفروشید
        </div>
        <a href="">
            <button class="bg-be-seller br7 text-white fs13 border-0 mt-4 register-seller-landing-btn">ثبت‌نام فروشنده
            </button>
        </a>
    </div>
</div>
<!--content-->
<div class="pb-5 bg-red-light-become">
    <div class="container px-4">
        <div class="row box-why-be-seller p-5 br15">
            <div class="col-4 mt-4 text-white d-flex align-items-center">
                <div class="">
                    <h1 class="">چرا در دیجی‌کالا بفروشیم؟</h1>
                    <div class="border-custom-bottom bg-white mt-4"></div>
                    <div class="mt-4 pt-3">از زبان فروشنده‌ها</div>
                </div>
            </div>
            <div class="col-8 mt-4">
                <video class="w-100 br15" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <div class="container px-3 px-md-5 mt-5">
        <div class="">
            <div class="fw600 fs20">چرا دیجی‌کالا جای خوبی برای فروش کالاست؟</div>
            <div class="border-custom-bottom bg-be-seller mt-3"></div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-lg-4 mt-4">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                </svg>
                <div class="fw600 icon-dark-color mt-3">
                    فروش آنلاین ۲۴/۷ در هر نقطه از ایران
                </div>
                <div class="border-custom-bottom bg-secondary-3 mt-3"></div>
                <div class="mt-3 fs14 text-secondary lh2">
                    ۲۴ ساعته در تمام هفته، می‌توانید سفارش دریافت کنید و بفروشید
                </div>
            </div>
            <div class="col-6 col-lg-4 mt-4">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                </svg>
                <div class="fw600 icon-dark-color mt-3">
                    فروش آنلاین ۲۴/۷ در هر نقطه از ایران
                </div>
                <div class="border-custom-bottom bg-secondary-3 mt-3"></div>
                <div class="mt-3 fs14 text-secondary lh2">
                    ۲۴ ساعته در تمام هفته، می‌توانید سفارش دریافت کنید و بفروشید
                </div>
            </div>
            <div class="col-6 col-lg-4 mt-4">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                </svg>
                <div class="fw600 icon-dark-color mt-3">
                    فروش آنلاین ۲۴/۷ در هر نقطه از ایران
                </div>
                <div class="border-custom-bottom bg-secondary-3 mt-3"></div>
                <div class="mt-3 fs14 text-secondary lh2">
                    ۲۴ ساعته در تمام هفته، می‌توانید سفارش دریافت کنید و بفروشید
                </div>
            </div>
            <div class="col-6 col-lg-4 mt-4">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                </svg>
                <div class="fw600 icon-dark-color mt-3">
                    فروش آنلاین ۲۴/۷ در هر نقطه از ایران
                </div>
                <div class="border-custom-bottom bg-secondary-3 mt-3"></div>
                <div class="mt-3 fs14 text-secondary lh2">
                    ۲۴ ساعته در تمام هفته، می‌توانید سفارش دریافت کنید و بفروشید
                </div>
            </div>
            <div class="col-6 col-lg-4 mt-4">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                </svg>
                <div class="fw600 icon-dark-color mt-3">
                    فروش آنلاین ۲۴/۷ در هر نقطه از ایران
                </div>
                <div class="border-custom-bottom bg-secondary-3 mt-3"></div>
                <div class="mt-3 fs14 text-secondary lh2">
                    ۲۴ ساعته در تمام هفته، می‌توانید سفارش دریافت کنید و بفروشید
                </div>
            </div>
            <div class="col-6 col-lg-4 mt-4">
                <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                </svg>
                <div class="fw600 icon-dark-color mt-3">
                    فروش آنلاین ۲۴/۷ در هر نقطه از ایران
                </div>
                <div class="border-custom-bottom bg-secondary-3 mt-3"></div>
                <div class="mt-3 fs14 text-secondary lh2">
                    ۲۴ ساعته در تمام هفته، می‌توانید سفارش دریافت کنید و بفروشید
                </div>
            </div>
        </div>
    </div>
    <div class="px-0 px-lg-5">
        <div class="container w-100 d-flex align-items-center bg-url-arrow-left mt-5">
            <div class="w-100">
                <div class="fs18 fw600 icon-dark-color">فرآیند شروع کار</div>
                <div class="border-custom-bottom bg-be-seller mt-3"></div>
                <div class="row mt-2 px-5">
                    <div class="col-3 text-center">
                        <div class="icon-parent-seller rounded-circle w-fit h-fit mx-auto p-2 position-relative">
                            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="38" width="38" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <div class="position-absolute number-count-seller fs11 fw600 mx-auto">
                                ۱
                            </div>
                        </div>

                        <div class="mt-3 icon-dark-color fs14">
                            ثبت‌نام در پنل فروشندگان
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="icon-parent-seller2 rounded-circle w-fit h-fit mx-auto p-2 position-relative">
                            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="38" width="38" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <div class="position-absolute number-count-seller fs11 fw600 mx-auto">
                                ۲
                            </div>
                        </div>

                        <div class="mt-3 icon-dark-color fs14">
                            ثبت‌نام در پنل فروشندگان
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="icon-parent-seller2 rounded-circle w-fit h-fit mx-auto p-2 position-relative">
                            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="38" width="38" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <div class="position-absolute number-count-seller fs11 fw600 mx-auto">
                                ۲
                            </div>
                        </div>

                        <div class="mt-3 icon-dark-color fs14">
                            ثبت‌نام در پنل فروشندگان
                        </div>
                    </div>
                    <div class="col-3 text-center">
                        <div class="icon-parent-seller2 rounded-circle w-fit h-fit mx-auto p-2 position-relative">
                            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="38" width="38" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <div class="position-absolute number-count-seller fs11 fw600 mx-auto">
                                ۲
                            </div>
                        </div>

                        <div class="mt-3 icon-dark-color fs14">
                            ثبت‌نام در پنل فروشندگان
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="fs20 fw600 icon-dark-color">
            مدارک مورد نیاز
        </div>
        <div class="border-custom-bottom bg-be-seller mt-3"></div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10  bg-white p-4 mt-5">
                <div class="row">
                    <div class="col-6 text-center">
                        <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <span class="icon-dark-color fs18 fw600">فرد حقیقی</span>
                        <div class="mt-3 text-secondary">
                            تصویر کارت ملی یا کارت شناسایی معتبر
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <span class="icon-dark-color fs18 fw600">فرد حقوقی</span>
                        <div class="mt-3 text-secondary px-5 lh2">
                            تصاویر ثبت‌نام در وب‌سایت «evat.ir»، روزنامه رسمی شرکت و کارت ملی صاحبین امضا
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12 col-lg-4">
            <div class="fs20 fw600 icon-dark-color">میزان کمیسیون در هر دسته‌بندی</div>
            <div class="border-custom-bottom bg-be-seller mt-3"></div>
            <div class="mt-4 lh2 fs18 text-secondary">
                با دیجی‌کالا دیگر نیازی به پرداخت اجاره فروشگاه، طراحی سایت، دریافت پنل و... ندارید! تنها هزینه‌ای اندک
                برای استفاده از خدمات دیجی‌کالا و کمیسیون می‌پردازید. میزان کمیسیون متناسب با دسته‌بندی کالا تعیین
                می‌شود. اینجا می‌توانید میزان کمیسیون هر دسته‌بندی را با جزئیات ببینید
            </div>
        </div>
        <div class="col-12 col-lg-8 pe-lg-5 pe-4">
            <div class="row">
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
                <div class="col-6 col-lg-4 mt-5">
                    <span class="">
                        <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="mt-2">
                            کالای دیجیتال
                        </div>
                        <div class="text-secondary mt-2 fs12">از ۱٪ تا ۲۰٪ کمیسیون</div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-be-seller mt-5">
    <div class="container ms-0">
        <div class="row">
            <div class="col-5 pt-5 px-5">
                <div class="text-white fw600">
                    ارسال کالا به روش‌های مختلف
                </div>
                <div class="mt-4 text-white fs15 lh2">
                    اگر استان شما هنوز انبار دیجی‌کالا ندارد، نگران نباشید! شما می‌توانید از امکان
                    «ارسال توسط فروشنده» استفاده کنید یا کالای خود را به
                    «انبار سیار» دیجی‌کالا در استان خود تحویل دهید.
                </div>
            </div>
            <div class="col-7 px-0">
                <img src="assets/image/text/map.PNG" class="w-100 border-1px-seller" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 px-5">
    <div class="row">
        <div class="col-12">
            <div class="fw600 fs20 icon-dark-color">
                داستان‌های موفقیت از زبان فروشندگان
            </div>
            <div class="border-custom-bottom bg-be-seller mt-3"></div>
        </div>
        <div class="col-12 col-lg-6 mt-4 border br10 p-2">
            <video src="" controls class="w-100 br10">
            </video>
        </div>
        <div class="col-12 col-lg-6 mt-4">
            <div>
                <div class="swiper mySwiper seller-comments-swiper br-bottom-2px py-3 py-md-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-5 py-5">
                            <div class="mt-5 fs14 text-secondary fs15">
                                مهدی پایکوب بناب
                            </div>
                            <div class="mt-2 fs12 text-secondary">
                                فروشگاه برادران پایکوب
                            </div>
                            <p class="mt-2 fs14 text-secondary lh2">
                                دیجی‌کالا برای همه ایرانه و طبیعت‌گردها و افراد دغدغه‌مند که به حمایت از کسب و کارهای
                                بومی فکر می‌کنن این فرصت رو دارن تا با کمک مارکت‌پلیسِ دیجی‌کالا، هم کارشونو گسترش بدن و
                                هم به اقتصاد محلی این روستاها کمک کنن!
                            </p>
                        </div>
                        <div class="swiper-slide px-5 py-5">
                            <div class="mt-5 fs14 text-secondary fs15">
                                مهدی پایکوب بناب
                            </div>
                            <div class="mt-2 fs12 text-secondary">
                                فروشگاه برادران پایکوب
                            </div>
                            <p class="mt-2 fs14 text-secondary lh2">
                                دیجی‌کالا برای همه ایرانه و طبیعت‌گردها و افراد دغدغه‌مند که به حمایت از کسب و کارهای
                                بومی فکر می‌کنن این فرصت رو دارن تا با کمک مارکت‌پلیسِ دیجی‌کالا، هم کارشونو گسترش بدن و
                                هم به اقتصاد محلی این روستاها کمک کنن!
                            </p>
                        </div>
                        <div class="swiper-slide px-5 py-5">
                            <div class="mt-5 fs14 text-secondary fs15">
                                مهدی پایکوب بناب
                            </div>
                            <div class="mt-2 fs12 text-secondary">
                                فروشگاه برادران پایکوب
                            </div>
                            <p class="mt-2 fs14 text-secondary lh2">
                                دیجی‌کالا برای همه ایرانه و طبیعت‌گردها و افراد دغدغه‌مند که به حمایت از کسب و کارهای
                                بومی فکر می‌کنن این فرصت رو دارن تا با کمک مارکت‌پلیسِ دیجی‌کالا، هم کارشونو گسترش بدن و
                                هم به اقتصاد محلی این روستاها کمک کنن!
                            </p>
                        </div>
                        <div class="swiper-slide px-5 py-5">
                            <div class="mt-5 fs14 text-secondary fs15">
                                مهدی پایکوب بناب
                            </div>
                            <div class="mt-2 fs12 text-secondary">
                                فروشگاه برادران پایکوب
                            </div>
                            <p class="mt-2 fs14 text-secondary lh2">
                                دیجی‌کالا برای همه ایرانه و طبیعت‌گردها و افراد دغدغه‌مند که به حمایت از کسب و کارهای
                                بومی فکر می‌کنن این فرصت رو دارن تا با کمک مارکت‌پلیسِ دیجی‌کالا، هم کارشونو گسترش بدن و
                                هم به اقتصاد محلی این روستاها کمک کنن!
                            </p>
                        </div>
                        <div class="swiper-slide px-5 py-5">
                            <div class="mt-5 fs14 text-secondary fs15">
                                مهدی پایکوب بناب
                            </div>
                            <div class="mt-2 fs12 text-secondary">
                                فروشگاه برادران پایکوب
                            </div>
                            <p class="mt-2 fs14 text-secondary lh2">
                                دیجی‌کالا برای همه ایرانه و طبیعت‌گردها و افراد دغدغه‌مند که به حمایت از کسب و کارهای
                                بومی فکر می‌کنن این فرصت رو دارن تا با کمک مارکت‌پلیسِ دیجی‌کالا، هم کارشونو گسترش بدن و
                                هم به اقتصاد محلی این روستاها کمک کنن!
                            </p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 px-5">
    <div class="row">
        <div class="col-12 border br15 bg-secondary-5 p-5">
            <div class="fs18 fw600">
                سوالات شما
            </div>
            <div class="border-custom-bottom bg-be-seller my-3"></div>
            <div class="mt-4 pb-4 border-bottom">

                <div class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="fs14 fw600 icon-dark-color">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟
                    </div>
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse mt-3" id="collapseExample">
                    <div class="lh2 bg-secondary-2 fs14 text-secondary ps-3">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه
                        معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی
                        کالا به چه معناست؟
                    </div>

                </div>
            </div>
            <div class="mt-4 pb-4 border-bottom">

                <div class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="fs14 fw600 icon-dark-color">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟
                    </div>
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse mt-3" id="collapseExample">
                    <div class="lh2 bg-secondary-2 fs14 text-secondary ps-3">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه
                        معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی
                        کالا به چه معناست؟
                    </div>

                </div>
            </div>
            <div class="mt-4 pb-4 border-bottom">

                <div class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="fs14 fw600 icon-dark-color">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟
                    </div>
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse mt-3" id="collapseExample">
                    <div class="lh2 bg-secondary-2 fs14 text-secondary ps-3">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه
                        معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی
                        کالا به چه معناست؟
                    </div>

                </div>
            </div>
            <div class="mt-4 pb-4 border-bottom">

                <div class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="fs14 fw600 icon-dark-color">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟
                    </div>
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse mt-3" id="collapseExample">
                    <div class="lh2 bg-secondary-2 fs14 text-secondary ps-3">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه
                        معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی
                        کالا به چه معناست؟
                    </div>

                </div>
            </div>
            <div class="mt-4 pb-4 border-bottom">

                <div class="d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="fs14 fw600 icon-dark-color">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟
                    </div>
                    <div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                </div>
                <div class="collapse mt-3" id="collapseExample">
                    <div class="lh2 bg-secondary-2 fs14 text-secondary ps-3">
                        ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه
                        معناست؟ ثبت نام به عنوان فروشنده در دیجی کالا به چه معناست؟ ثبت نام به عنوان فروشنده در دیجی
                        کالا به چه معناست؟
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer mt-5">
    <div class="container px-4 pb-4">
        <div class="d-flex justify-content-between">
            <div>
                <img src="assets/image/logo/digi.svg" height="30" alt="">
                <div class="mt-3">
                    <span class="ms-3 fs12 icon-dark-color">تلفن پشتیبانی ۶۱۹۳۰۰۰۰ - ۰۲۱</span>
                    <span>|</span>
                    <span class="me-3 fs12 icon-dark-color">۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم</span>
                </div>
            </div>
            <div class="d-none d-md-block">
                <button class="footer-back-to-up-btn bg-transparent fs12">
                    <span class="ms-1">بازگشت به بالا</span>
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <img src="assets/image/footer/express-delivery.svg" width="56" height="56" alt="">
                <div class="fs12 icon-dark-color">
                    امکان تحویل اکسپرس
                </div>
            </div>
            <div class="col text-center">
                <img src="assets/image/footer/express-delivery.svg" width="56" height="56" alt="">
                <div class="fs12 icon-dark-color">
                    امکان تحویل اکسپرس
                </div>
            </div>
            <div class="col text-center">
                <img src="assets/image/footer/express-delivery.svg" width="56" height="56" alt="">
                <div class="fs12 icon-dark-color">
                    امکان تحویل اکسپرس
                </div>
            </div>
            <div class="col text-center d-none d-md-block">
                <img src="assets/image/footer/express-delivery.svg" width="56" height="56" alt="">
                <div class="fs12 icon-dark-color">
                    امکان تحویل اکسپرس
                </div>
            </div>
            <div class="col text-center d-none d-md-block">
                <img src="assets/image/footer/express-delivery.svg" width="56" height="56" alt="">
                <div class="fs12 icon-dark-color">
                    امکان تحویل اکسپرس
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-2">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fw600">
                    با دیجی‌کالا
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="fw600">
                    با دیجی‌کالا
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="fw600">
                    با دیجی‌کالا
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                        <li><a href="">
                                گزینه 1
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="fw600 icon-dark-color">
                    همراه ما باشید!
                </div>

                <div class="d-flex mt-4">
                    <svg stroke="currentColor" class="text-secondary-2 ms-4 me-2" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="33" width="33" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                    <svg stroke="currentColor" class="text-secondary-2 mx-4" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="33" width="33" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg>
                    <svg stroke="currentColor" class="text-secondary-2 mx-4" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="33" width="33" xmlns="http://www.w3.org/2000/svg">
                        <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1 1 68.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7 120.2 0 142.3 79.1 142.3 181.9v209.4z"></path>
                    </svg>
                    <svg stroke="currentColor" class="text-secondary-2 mx-4" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="33" width="33" xmlns="http://www.w3.org/2000/svg">
                        <title></title>
                        <path d="M12.0014 1.5938C2.7317 1.5906-1.9119 12.7965 4.641 19.3515c2.975 2.976 7.4496 3.8669 11.3374 2.257 3.8877-1.61 6.4228-5.4036 6.4228-9.6116 0-5.7441-4.6555-10.4012-10.3997-10.4031zM6.11 6.783c.5011-2.5982 3.8927-3.2936 5.376-1.1028 1.4834 2.1907-.4216 5.0816-3.02 4.5822-1.6118-.3098-2.6668-1.868-2.356-3.4794zm4.322 8.9882c-.5045 2.5971-3.8965 3.288-5.377 1.0959-1.4807-2.1922.427-5.0807 3.0247-4.5789 1.612.3114 2.6655 1.8714 2.3524 3.483zm1.2605-2.405c-1.1528-.2231-1.4625-1.7273-.4917-2.3877.9708-.6604 2.256.18 2.0401 1.3343-.1347.7198-.8294 1.1924-1.5484 1.0533zm6.197 3.8375c-.501 2.5981-3.8927 3.2935-5.376 1.1028-1.4834-2.1908.4217-5.0817 3.0201-4.5822 1.6117.3097 2.6667 1.8679 2.356 3.4794zm-1.9662-5.5018c-2.5981-.501-3.2935-3.8962-1.1027-5.3795 2.1907-1.4834 5.0816.4216 4.5822 3.02-.3082 1.6132-1.8668 2.6701-3.4795 2.3595zm-2.3348 11.5618l2.2646.611c1.9827.5263 4.0167-.6542 4.5433-2.6368l.639-2.4016a11.3828 11.3828 0 0 1-7.4469 4.4274zM21.232 3.5985l-2.363-.6284a11.3757 11.3757 0 0 1 4.3538 7.619l.6495-2.4578c.5194-1.9804-.6615-4.0076-2.6403-4.5328zM.6713 13.8086l-.5407 2.04c-.5263 1.9826.6542 4.0166 2.6368 4.5432l2.1066.5618a11.3792 11.3792 0 0 1-4.2027-7.145zM10.3583.702L8.1498.1261C6.166-.4024 4.1296.7785 3.603 2.763l-.5512 2.082A11.3757 11.3757 0 0 1 10.3583.702Z"></path>
                    </svg>
                </div>
                <div class="mt-4 pt-3">
                    <span class="icon-dark-color fs15 fw600">با ثبت ایمیل، از جدید‌ترین تخفیف‌ها با‌خبر شوید</span>
                </div>
                <div class="d-flex mt-4">
                    <div>
                        <input type="text" class="news-input pe-3 ps-5" placeholder="ایمیل شما">
                    </div>
                    <div>
                        <button class="btn text-white news-footer-btn me-2 br7">
                            ثبت
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--application download-->
        <div class="row mt-5 application-download-box br10 p-3">
            <div class="col-12 col-lg-5">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                    <img src="assets/image/logo/footerlogo2.webp" width="44" height="44" alt="">
                    <h5 class="text-white me-3 mt-1">
                        دانلود اپلیکیشن دیجی‌کالا
                    </h5>
                </div>
            </div>
            <div class="col-12 col-lg-7 text-center text-lg-start">


                <img src="assets/image/footer/sib-app.svg" height="45" width="160" class="mx-1 mt-4 mt-lg-0 object-cover" alt="">
                <img src="assets/image/footer/myket.svg" height="45" width="160" class="mx-1  mt-4 mt-lg-0 object-cover" alt="">
                <img src="assets/image/footer/coffe-bazzar.svg" height="45" width="160" class="mx-1 mt-3 mt-lg-0 object-cover" alt="">

            </div>
        </div>
        <!--footer description-->
        <div class="row mt-5 main-footer pt-5">
            <div class="col-12 col-xl-8">
                <h5 class="icon-dark-color fw600">
                    فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین
                </h5>
                <div class="text-secondary fs12 lh2">
                    یک خرید اینترنتی مطمئن، نیازمند فروشگاهی است که بتواند کالاهایی متنوع، باکیفیت و دارای قیمت مناسب را
                    در مدت زمانی کوتاه به دست مشتریان خود برساند و ضمانت بازگشت کالا هم داشته باشد؛ ویژگی‌هایی که
                    فروشگاه اینترنتی دیجی‌کالا سال‌هاست بر روی آن‌ها کار کرده و توانسته از این طریق مشتریان ثابت خود را
                    داشته باشد.

                </div>
            </div>
            <div class="col-12 col-xl-4 mt-4 mt-xl-0">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <div class="border p-3 br7">
                        <img src="assets/image/footer/rezi.webp" width="80" height="80" alt="">
                    </div>
                    <div class="border p-3 br7 me-2">
                        <img src="assets/image/footer/rezi.webp" width="80" height="80" alt="">
                    </div>
                    <div class="border p-3 br7 me-2">
                        <img src="assets/image/footer/rezi.webp" width="80" height="80" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--copy right-->
        <div class="row main-footer mt-5 pt-4">
            <div class="fs12 text-secondary text-center lh2">
                برای استفاده از مطالب دیجی‌کالا، داشتن «هدف غیرتجاری» و ذکر «منبع» کافیست. تمام حقوق اين وب‌سايت نیز
                برای شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) است.
            </div>
        </div>
    </div>
</footer>


@endsection
@section('scripts')
<script>
    var seller_comments = new Swiper(".seller-comments-swiper", {
        slidesPerView: 6.8,
        spaceBetween: 100,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            '480': {
                slidesPerView: 1.2,
            },
        },
    });
</script>
@endsection