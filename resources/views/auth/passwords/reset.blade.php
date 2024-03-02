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
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
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

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="text-center">
                        <a href="{{route('main')}}">
                            <img src="{{url('assets/frontend/image/logo/logo.svg')}}" width="140" height="50" alt="">
                        </a>
                    </div>
                    <div class="mt-4">
                        بازیابی رمز عبور
                    </div>

                    <div class="mt-4">
                        <input type='email' id="email"
                               class="login-input br7 w-100 @error('email') err-inp-login @enderror"
                               name="email" placeholder="آدرس ایمیل"
                               value="{{ $email ?? old('email') }}">
                        @error('email')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input type='password'
                               class="login-input br7 w-100 @error('email') err-inp-login @enderror"
                               name="password" placeholder="پسورد">
                        @error('password')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <input type='password'
                               class="login-input br7 w-100 @error('email') err-inp-login @enderror"
                               name="password_confirmation" placeholder="تکرار پسورد">
                        @error('password_confirmation')
                        <span class="fs13 px-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button class="w-100 bg-digi-red text-white br7 border-0 login-send-btn fs15">
                            بازنشانی رمز عبور
                        </button>
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
