@extends('layouts.app')

@section('content')
@include('layouts.product_parts.topbar')
@include('layouts.product_parts.navbar')
@include('layouts.product_parts.main_menu')
<!--mobile bottom menu-->
<div class="d-lg-none mobile-bottom-menu w-100 fixed-bottom bg-white d-flex justify-content-between align-items-center px-4">
    <div class="text-center">
        <a href="">
            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3 0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8 24.9-25 24.9-65.5-.1-90.5z">
                </path>
            </svg>
            <div class="fs11 mt-1 icon-dark-color">
                خانه
            </div>
        </a>
    </div>
    <div class="text-center">
        <a href="">
            <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">
                </path>
            </svg>
            <div class="fs11 mt-1 text-secondary">
                دسته بندی
            </div>
        </a>
    </div>
    <div class="text-center">
        <a href="">
            <svg stroke="currentColor" class="text-secondary-2" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
            </svg>
            <div class="fs11 mt-1 text-secondary">
                سبد خرید
            </div>
        </a>
    </div>
    <div class="text-center">
        <a href="">
            <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z">
                </path>
            </svg>
            <div class="fs11 mt-1 text-secondary">
                دیجی کالای من
            </div>
        </a>
    </div>

</div>
<!--content-->


<!--content-->
<div class="container px-4 mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="border-responsive p-4 d-block text-center text-lg-end d-lg-flex justify-content-between br10">
                <div class="d-lg-none text-center">
                    <img src="assets/image/text/Fail.svg" width="200" height="96" alt="">

                </div>
                <div class="mt-4">
                    <div class="fw600 fs20" style="color: #577b5a;">
                       سفارش شما با موفقیت ثبت گردید.
                    </div>
                    <div class="fs14 mt-3">
                        <span class="text-secondary">شماره سفارش</span>
                        <span>۳۸۲۹۳۳۴۷۷</span>
                    </div>
                    <div class="mt-4 pt-2">
                        <a href="" class="btn btn-danger btn-padding br7 bg-digi-red fs14">پیگیری سفارش</a>
                    </div>
                </div>
                <div class="d-none d-lg-block">
                    <img src="{{url('assets/frontend/image/text/Fail.svg')}}" width="200" height="96" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="d-lg-none" style="border-bottom: 8px solid #f0f0f1;">

</div>
<div class="container px-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 mt-3">
            <div class="border-responsive p-4 br10">
                <div class="d-flex align-items-center">
                    <svg stroke="currentColor" class="d-none d-lg-block" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M248 64C146.39 64 64 146.39 64 248s82.39 184 184 184 184-82.39 184-184S349.61 64 248 64z">
                        </path>
                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M220 220h32v116"></path>
                        <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M208 340h88"></path>
                        <path d="M248 130a26 26 0 1 0 26 26 26 26 0 0 0-26-26z"></path>
                    </svg>
                    <div class="fs15 me-2 text-secondary lh1-7git"> چنانچه مبلغی از حساب شما کسر شده است، تا ۲۴ ساعت آینده به
                        حساب شما باز
                        خواهد گشت.
                    </div>
                </div>

                <div class="mt-4 fs15 fw600">
                    جزئیات پرداخت
                </div>
                <div class="mt-4 d-flex align-items-center">
                    <div class="fs13 ps-4">
                        درگاه
                    </div>
                    <div class="fs13 px-4">
                        <div class="text-secondary-2">
                            شماره پیگیری
                        </div>
                        <div class="mt-3">
                            ۳۰۲۰۱۵۷۵۳
                        </div>
                    </div>
                    <div class="fs13 px-4">
                        <div class="text-secondary-2">
                            تاریخ
                        </div>
                        <div class="mt-3">
                            ۲۷ اسفند ۱۴۰۲
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include('layouts.product_parts.footer')
@endsection