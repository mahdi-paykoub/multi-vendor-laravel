@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/login.css')}}">
@endsection

@section('content')
    <div class="container px-4 my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-xl-4 border-responsive br10 p-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="text-center">
                        <img src="{{url('assets/frontend/image/logo/logo.svg')}}" width="140" height="50" alt="">
                    </div>
                    <div class="mt-4">
                        <a href="{{route('login')}}" class="fw600 fs18 icon-dark-color">ورود</a>
                        <a href="{{route('register')}}"  class="fw600 fs18 icon-dark-color">  | ثبت‌نام</a>
                    </div>
                    <div class="text-secondary mt-3 fs14">
                        سلام!
                    </div>
                    <div class="text-secondary mt-2 fs14">
                        لطفا اطلاعات مورد نیاز را تکمیل کنید
                    </div>


                    <div class="mt-4">
                        <input type="text" class="login-input br7 w-100 mt-2 @error('name') err-inp-login @enderror"
                               name="name" placeholder="نام ...">
                        @error('name')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mt-4">
                        <input type=email class="login-input br7 w-100 @error('email') err-inp-login @enderror"
                               name="email" placeholder="آدرس ایمیل ...">
                        @error('email')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input type="password" class="login-input br7 w-100 @error('password') err-inp-login @enderror"
                               name="password" placeholder="پسورد  ...">
                        @error('password')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input type="password"
                               class="login-input br7 w-100 @error('password_confirmation') err-inp-login @enderror"
                               name="password_confirmation" placeholder="تایید پسورد  ...">
                        @error('password_confirmation')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mt-4">
                        <button class="w-100 bg-digi-red text-white br7 border-0 login-send-btn fs15" type="submit">ثبت
                            نام
                        </button>
                        <a href="{{route('google.register')}}" >
                            <button type="button" class="w-100 br7 border-0 login-send-btn mt-3 fs14">ورود با گوگل
                                <svg stroke="currentColor" class="me-1" fill="currentColor" stroke-width="0" version="1.1"
                                     x="0px" y="0px"
                                     viewBox="0 0 48 48" enable-background="new 0 0 48 48" height="24" width="24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
	c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
	c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                    <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
	C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                    <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                    <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="mt-4 fs12 text-center">
                        ورود شما به معنای <span class="text-info">پذیرش شرایط</span> دیجی‌کالاو <span
                            class="text-info">قوانین </span> حریم‌خصوصی است
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
