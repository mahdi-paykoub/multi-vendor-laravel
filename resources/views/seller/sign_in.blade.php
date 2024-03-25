@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/seller-register.css')}}"/>
@endsection
@section('content')

    <div class="container mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 border-responsive br7 py-5 p-4">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 order-last order-lg-first">
                        <div class="fs12 fw600 icon-dark-color d-none d-lg-block">ورود یا ثبت نام</div>
                        <div class="mt-5 fs15 icon-dark-color">
                            سلام!
                        </div>
                        <div class="mt-2 fs15 icon-dark-color">
                            برای فروش در دیجی‌کالا آماده‌اید؟
                        </div>
                        <div class="mt-2 fs15 icon-dark-color">
                            شماره موبایل یا ایمیل خود را وارد کنید:
                        </div>
                        <div class="mt-4 icon-dark-color fs15">
                            شماره موبایل
                        </div>
                        <form action="{{route('sign.in.logic')}}" method="post">
                            @csrf
                            <div class="mt-2">
                                <input type="text" name="phone_number" class="br7 w-100 phone-number-inp px-2 fs15">
                            </div>
                            @error('phone_number')
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
                                <span class="me-1">{{ $message }}</span>
                            </div>
                            @enderror
                            <div class="mt-5 pt-5">
                                <button class="w-100 btn fs14 fw600 text-white confirm-btn">تایید</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 text-center">
                        <div>
                            <img src="{{url('assets/frontend/image/text/afb0eaadb57060d2de49.png')}}" class="" alt="">
                        </div>
                        <div>
                            <img src="{{url('assets/frontend/image/text/737a1abb4fdfc439ea7e.png')}}" width="230" height="170"
                                 class="mt-4 d-none d-lg-inline" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
