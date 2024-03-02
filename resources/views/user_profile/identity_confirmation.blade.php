@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/user-panel.css')}}"/>
@endsection
@section('content')
    <div class="w-100 text-center py-3 identify-header-shadow">
        <img src="{{asset('assets/frontend/image/logo/logo.svg')}}" alt="">
    </div>

    <div class="container mt-4 px-4 ">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4 col-xxl-3 br10 border-responsive p-3">
                <div class="fs14 fw600 icon-dark-color">
                    <svg stroke="currentColor" class="ms-2" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                         stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                    ثبت اطلاعات شناسایی
                </div>
                <div class="text-secondary fs13 mt-4">اطلاعات شناسایی خود را مطابق با کارت ملی وارد کنید</div>
                <div class="text-secondary-light mt-4">
                    شماره موبایل
                </div>
                <div class="mt-3">
                    <input type="text" class="w-100 text-secondary-2 br10 identify-inputs phone" placeholder="۰۹۳۰۹۵۱۹۳۶۵"
                           disabled>
                </div>
                <div class="text-secondary mt-4">
                    کد ملی <span class="text-danger fs12">*</span>
                </div>
                <div class="mt-3">
                    <input type="text" class="w-100 text-secondary br10 identify-inputs">
                    <div class="text-secondary-2 fs14 pt-1 pe-3">متعلق به مالک شماره موبایل</div>
                </div>

                <div class="row mt-4 pt-2">
                    <div class="col-4">
                        <div class="fs14 icon-dark-color pe-1">
                            سال
                            <span class="text-danger fs13">*</span>
                        </div>
                        <select class="mt-2 w-100 br10 select-identify-inputs" name="">
                            <option value="" class="text-dark">سال</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <div class="fs14 icon-dark-color pe-1">
                            سال
                            <span class="text-danger fs13">*</span>
                        </div>
                        <select class="mt-2 w-100 br10 select-identify-inputs" name="">
                            <option value="" class="text-dark">سال</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <div class="fs14 icon-dark-color pe-1">
                            سال
                            <span class="text-danger fs13">*</span>
                        </div>
                        <select class="mt-2 w-100 br10 select-identify-inputs" name="">
                            <option value="" class="text-dark">سال</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                            <option value="" class="text-dark">1300</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex mt-4 text-secondary-3">
                    <svg stroke="currentColor" class="mt-1 ms-2" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em"
                         width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <div class="lh2 fs13">
                        ما درستی اطلاعات را توسط سامانه ثبت احوال، بررسی می‌کنیم. لطفا با دقت وارد کنید.
                    </div>
                </div>
                <div class="mt-5 border-top">
                    <button class="w-100 fs13 bg-digi-red btn-padding-2 border-0 text-white br10 mt-4">ثبت</button>
                </div>
            </div>
        </div>
    </div>

@endsection
