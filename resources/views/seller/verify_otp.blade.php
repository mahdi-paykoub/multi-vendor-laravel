@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/seller-register.css')}}"/>
@endsection
@section('content')
    <div class="container mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 border-responsive br7 p-5 ">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 order-last order-lg-first">
                        <div class="">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M869 487.8L491.2 159.9c-2.9-2.5-6.6-3.9-10.5-3.9h-88.5c-7.4 0-10.8 9.2-5.2 14l350.2 304H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h585.1L386.9 854c-5.6 4.9-2.2 14 5.2 14h91.5c1.9 0 3.8-.7 5.2-2L869 536.2a32.07 32.07 0 0 0 0-48.4z"></path>
                            </svg>

                            <span class="fw600 icon-dark-color me-3 fs15">رمز یکبار مصرف</span>
                        </div>
                        <div class="text-secondary mt-4 fs14 text-center">
                            رمز را به شماره زیر پیامک کردیم. آن را وارد کنید:
                        </div>
                        <form action="{{route('verify.otp.logic')}}" method="post">
                            @csrf
                            <div class="mt-4 pt-2 text-center">
                            <span class="fs14 bg-secondary-6 p-4 py-2 br7">
                                <a href="">
                                    <span class="text-dark">09309519365</span>
                                    <svg class="text-info me-1" stroke="currentColor" fill="currentColor"
                                         stroke-width="0"
                                         viewBox="0 0 1024 1024"
                                         height="28" width="28" xmlns="http://www.w3.org/2000/svg"><path
                                            d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path></svg>
                                </a>
                            </span>
                            </div>
                            <div class="mt-4 pt-3">
                                <input type="text" name="code" class="br7 w-100 phone-number-inp px-2">
                            </div>
                            @foreach($errors->all() as $error)
                                <div class="fs13 px-1 text-digi-red mt-2">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                         stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line
                                            x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01"
                                              y2="16"></line>
                                    </svg>
                                    <span class="me-1">{{ $error }}</span>
                                </div>
                            @endforeach

                            <a href="">
                                <div class="text-info mt-3 fs12 text-center fw600">
                                    دریافت مجدد رمز یک‌بار مصرف
                                </div>
                            </a>
                            <div class="mt-5 pt-5">
                                <button class="w-100 btn fs14 fw600 text-white confirm-btn">تایید</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 d-none d-lg-block text-center">
                        <div>
                            <img src="assets/image/text/afb0eaadb57060d2de49.png" class="" alt="">
                        </div>
                        <div>
                            <img src="assets/image/text/737a1abb4fdfc439ea7e.png" width="230" height="170"
                                 class="mt-4 d-none d-lg-inline" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
