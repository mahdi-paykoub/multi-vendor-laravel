@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/login.css')}}">
@endsection

@section('content')
   {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}


    <div class="container px-4 my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5 col-xl-4 border-responsive br10 p-4">



                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="text-center">
                        <a href="{{route('main')}}">
                            <img src="{{url('assets/frontend/image/logo/logo.svg')}}" width="140" height="50" alt="">
                        </a>
                    </div>
                    <div class="mt-4">
                        بازیابی رمز عبور
                    </div>

                    <div class="mt-3">
                        <input type='email' id="email" class="login-input br7 w-100 @error('email') err-inp-login @enderror"
                               name="email" placeholder="آدرس ایمیل ..."
                               value="{{ old('email') }}">
                        @error('email')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button class="w-100 bg-digi-red text-white br7 border-0 login-send-btn fs15">ارسال لینک
                            بازنشانی رمز عبور
                        </button>
                    </div>
                    <div class="mt-4 fs12 text-center">
                        ورود شما به معنای <span class="text-info">پذیرش شرایط</span> دیجی‌کالاو <span
                            class="text-info">قوانین </span> حریم‌خصوصی است
                    </div>
                </form>
                @if (session('status'))
                    <div class="text-center bg-secondary-6 mt-4 fs14 br10 py-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
