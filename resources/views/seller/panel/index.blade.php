@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

@section('content')
@include('layouts.seller_panel_parts.header')

@php
$seller = get_seller_by_token();
$sellerInfo = get_seller_by_token()->sellerInfo()->first();

$seller_shop_logo = $sellerInfo->shop_logo == null ? url('assets/frontend/image/user/noneuser.png'):$sellerInfo->shop_logo ;
@endphp

<!--content-->
<div class="container px-3 px-lg-4 mt-4 pb-5">
    {{--1th part--}}
    <div class="row">
        <div class="col-12 col-lg-3">
            <!--profile panel-->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="panel-info-box bg-white text-center h-100 br10 p-4">
                        <img src="{{ $seller_shop_logo }}" class="rounded-circle object-cover border m-4" width="70" height="70" alt="">
                        <div class="icon-dark-color">
                            {{ $sellerInfo->shop_name }}
                        </div>
                        <div class="d-flex mt-4 pt-2 pb-1 justify-content-between px-3">
                            <a href="{{route('seller.panel.product.management')}}" class="text-center br7">
                                <svg class="text-secondary-2" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M13 10h-2V8h2v2zm0-4h-2V1h2v5zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2zm-8.9-5h7.45c.75 0 1.41-.41 1.75-1.03L21 4.96 19.25 4l-3.7 7H8.53L4.27 2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2z"></path>
                                </svg>
                                <div class="text-secondary fs13 mt-1">
                                    محصولات
                                </div>
                                </ش>

                                <a href="{{route('seller.notofications')}}" class="text-center br7">
                                    <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z"></path>
                                    </svg>
                                    <div class="text-secondary fs13 mt-1">
                                        پیام ها
                                    </div>
                                </a>
                                <a href="{{route('seller.profile.view')}}" class="text-center br7">
                                    <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                                    </svg>
                                    <div class="text-secondary fs13 mt-1">
                                        پروفایل
                                    </div>
                                </a>
                        </div>
                    </div>
                </div>
                <!--rate-->
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="panel-info-box bg-white br10 mt-4 mt-md-0 mt-lg-4">
                        <div class="text-secondary-2 fw600 border-bottom p-3">
                            امتیاز عملکرد شما
                        </div>

                        <!--rate star-->
                        <div class="mt-4">

                        </div>
                        <div class="text-center fs14 text-secondary-2 ">
                            عضویت از
                            <span class="fv">{{ jdate($seller->created_at)->ago()  }}</span>
                        </div>

                        <div class="d-flex justify-content-center mt-4 p-3">
                            <div class="fs12 text-secondary-2 text-center">
                                <div> تاخیر</div>
                                <div>در ارسال</div>
                                <div class="mt-2 bg-secondary-6 br7 fs20 fw600 px-4 py-2">
                                    ٪۱۰۰
                                </div>
                            </div>
                            <div class="fs12 text-secondary-2 me-3 text-center">
                                <div> لغو</div>
                                <div>سفارش</div>
                                <div class="mt-2 bg-secondary-6 br7 fs20 fw600 px-4 py-2">
                                    ٪۱۰۰
                                </div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-between mt-4 pt-2 text-secondary p-3">
                            <div class="fs14"> رضایت خرید مشتریان از کالا</div>
                            <div>۰ ٪</div>
                        </div>
                        <div class="px-3">
                            <div class="progress br15 mt-2 " style="height: 9px;">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="text-secondary fs13 mt-1 pb-4 px-3">از ۰ رأی</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-9 mt-4">
            <div class="row px-5 px-md-0">
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <div class="text-secondary fs15">
                        <span>وضعیت مدارک</span>
                        <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                    <div class="mt-2 fs15 text-secondary-3">درحال بررسی</div>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <div class="circle-sign sign-red position-relative">
                        <div class="text-secondary fs15">
                            <span>وضعیت مدارک</span>
                            <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="mt-2 fs15 text-secondary-3">درحال بررسی</div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <div class="circle-sign sign-yellow position-relative">
                        <div class="text-secondary fs15">
                            <span>وضعیت مدارک</span>
                            <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="mt-2 fs15 text-secondary-3">درحال بررسی</div>
                    </div>
                </div>
                <div class="col-12 col-md-3 mt-3 mt-md-0">
                    <div class="circle-sign sign-red position-relative">
                        <div class="text-secondary fs15">
                            <span>وضعیت مدارک</span>
                            <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                            </svg>
                        </div>
                        <div class="mt-2 fs15 text-secondary-3">درحال بررسی</div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mt-lg-5">
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                    <div class="seller-box-type bg-white br10 p-2">
                        <a href="{{route('seller.panel.find.product')}}">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="text-secondary fw600 px-3">افزودن محصول جدید</div>

                                <div>
                                    <button class="add-new-product-btn border-0 br7 text-white">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="26" width="26" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8Z"></path>
                                            <path d="M192 474h672q8 0 8 8v60q0 8-8 8H160q-8 0-8-8v-60q0-8 8-8Z"></path>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                    <div class="seller-box-type bg-white br10 p-2">
                        <a href="{{route('seller.panel.product.management')}}">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-secondary fw600 px-3">مدیریت محصولات</div>
                                <div>
                                    <button class="pay-status-btn border-0 br7 shadow-none bg-white d-flex align-items-center">
                                        <span class="fv">0</span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3 mt-md-0">
                    <div class="seller-box-type bg-white br10 p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-secondary fw600 px-3">افزودن محصول جدید</div>
                            <div>
                                <button class="pay-status-btn border-0 br7 text-white">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" fill-rule="evenodd" height="26" width="26" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"></path>
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12 mt-4">
                    <div class="bg-white br10 p-3">
                        <div class="fs15">
                            برای فروش در دیجی‌کالا چه کاری نیاز است؟
                        </div>
                        <div class="fs13 mt-2 text-secondary border-bottom-light-2 pb-3">
                            با وارد کردن اطلاعات زیر، ثبت‌نام خود را کامل کنید تا بتوانید فروش در دیجی‌کالا را شروع کنید
                        </div>


                        <div class="row mt-4">
                            <div class="col-4">
                                <a href="{{route('seller.profile.view')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600">نام و نام خانوادگی</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('seller.profile.store.info')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600">نام فروشگاه</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('seller.profile.address')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600 fw600">آدرس فروشگاه</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('seller.profile.finance')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600">شماره کارت</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('seller.profile.view')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600">ایمیل</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('seller.profile.view')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600">کد ملی</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="{{route('seller.profile.document.info')}}" class="text-dark">
                                    <div class="d-flex justify-content-between br7 border-custom-light mt-3 p-3">
                                        <div>
                                            <span class="fs14 fw600">مدارک</span>
                                            <span class="fs12 badge-green me-2">تایید شده</span>
                                            <!-- <span class="fs12 badge-red me-2">تایید شده</span> -->
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">

                                <button class="btn btn-info px-5 mt-3 text-white fs14 btn-padding br7">بررسی اطلاعات من</button>
                              
                            </div>

                        </div>
                    </div>

                </div>
                <!-- <div class="col-12 col-md-4 mt-3">
                    <div class="seller-performance-info bg-white panel-info-box br10">
                        <div class="border-bottom border-bottom p-3 fs15 fw600 text-secondary-2">
                            مدیریت موجودی انبار
                        </div>
                        <div class="p-3 pb-4">
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3">
                    <div class="seller-performance-info bg-white panel-info-box br10">
                        <div class="border-bottom border-bottom p-3 fs15 fw600 text-secondary-2">
                            مدیریت موجودی انبار
                        </div>
                        <div class="p-3 pb-4">
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3">
                    <div class="seller-performance-info bg-white panel-info-box br10">
                        <div class="border-bottom border-bottom p-3 fs15 fw600 text-secondary-2">
                            مدیریت موجودی انبار
                        </div>
                        <div class="p-3 pb-4">
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-3 mt-4">
                                <div class="fs14 text-secondary-2 w-75 lh2"> کل تنوع‌های فعال
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                    </svg>
                                </div>
                                <div class="fw600 fs25 text-secondary">
                                    ۰
                                </div>

                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </div>

    {{--2th part--}}
    <div class="row">
        <div class="col-12 col-lg-3">
            <!--wallet-->
            <div class="panel-info-box bg-white br10  mt-4">
                <div class="text-secondary-2 fw600 border-bottom p-3">
                    کیف پول
                </div>
                <div class="text-center w-100 p-3">
                    <div class="fs13 text-secondary wallet-box pt-3 pb-2">
                        <div>
                            موجودی کیف پول شما
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-1">
                            <div class="fs30 fw600 icon-dark-color">۰
                            </div>
                            <div class="icon-dark-color me-2 fs15 fw600"> ریال</div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between px-3 align-items-center">
                    <div class="d-flex">
                        <div>
                            <svg stroke="currentColor" fill="#57cfb1" stroke-width="0" viewBox="0 0 256 256" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                                <path d="M228,208a4,4,0,0,1-4,4H32a4,4,0,0,1-4-4V48a4,4,0,0,1,8,0V166.34l57.17-57.17a4,4,0,0,1,5.66,0L128,138.34,190.34,76H160a4,4,0,0,1,0-8h40a4,4,0,0,1,4,4v40a4,4,0,0,1-8,0V81.66l-65.17,65.17a4,4,0,0,1-5.66,0L96,117.66l-60,60V204H224A4,4,0,0,1,228,208Z"></path>
                            </svg>

                        </div>
                        <div class="me-2">
                            <div class="fs14 text-secondary">
                                میزان واریزی
                            </div>
                            <div class="text-secondary-2 fs12">
                                در ۳۰ روز گذشته
                            </div>
                        </div>
                    </div>
                    <div class="fw600" style="color: #57cfb1!important">
                        ۰ ریال
                    </div>
                </div>
                <div class="d-flex justify-content-between px-3 align-items-center mt-4">
                    <div class="d-flex">
                        <div>
                            <svg stroke="currentColor" fill="#ef5661" stroke-width="0" viewBox="0 0 256 256" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                                <path d="M228,208a4,4,0,0,1-4,4H32a4,4,0,0,1-4-4V48a4,4,0,0,1,8,0V62.34l60,60,29.17-29.17a4,4,0,0,1,5.66,0L196,158.34V128a4,4,0,0,1,8,0v40a4.13,4.13,0,0,1-.08.78,3.37,3.37,0,0,1-.1.34,2.8,2.8,0,0,1-.13.41,2.87,2.87,0,0,1-.2.39c-.05.1-.1.2-.16.3a4.19,4.19,0,0,1-1.11,1.11l-.31.16a3.48,3.48,0,0,1-.38.2,2.8,2.8,0,0,1-.41.13,3.37,3.37,0,0,1-.34.1,4.13,4.13,0,0,1-.78.08H160a4,4,0,0,1,0-8h30.34L128,101.66,98.83,130.83a4,4,0,0,1-5.66,0L36,73.66V204H224A4,4,0,0,1,228,208Z"></path>
                            </svg>
                        </div>
                        <div class="me-2">
                            <div class="fs14 text-secondary">
                                میزان واریزی
                            </div>
                            <div class="text-secondary-2 fs12">
                                در ۳۰ روز گذشته
                            </div>
                        </div>
                    </div>
                    <div class="fw600" style="color: #ef5661!important;">
                        ۰ ریال
                    </div>
                </div>


                <div class="mt-4 text-center pb-4">
                    <button class="fs14 detail-wallet-btn border-0 br7">جزئیات کیف پول</button>
                </div>
            </div>
            <!--news-->
            <div class="panel-info-box bg-white br10  mt-4">
                <div class="text-secondary-2 fw600 border-bottom p-3">
                    آخرین مطالب سلر آکادمی
                </div>

                <div class="mt-3 p-3">
                    <a href="">
                        <div class="d-flex align-items-center mt-4">
                            <div>
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="br7 object-cover" width="50" height="50" alt="">
                            </div>
                            <div class="text-secondary fs15 me-3">
                                تبلیغ کالاهای اقتصادی و ارزان قیمت دیجی‌...
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex align-items-center mt-4">
                            <div>
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="br7 object-cover" width="50" height="50" alt="">
                            </div>
                            <div class="text-secondary fs15 me-3">
                                تبلیغ کالاهای اقتصادی و ارزان قیمت دیجی‌...
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex align-items-center mt-4">
                            <div>
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="br7 object-cover" width="50" height="50" alt="">
                            </div>
                            <div class="text-secondary fs15 me-3">
                                تبلیغ کالاهای اقتصادی و ارزان قیمت دیجی‌...
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 text-center pb-4">
                    <button class="fs13 detail-wallet-btn border-0 br7">مشاهده مطالب بیشتر</button>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-9">
            <!--manage product-->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="bg-white panel-info-box br10 ">
                        <div class="border-bottom p-4 fw600 text-secondary-2">
                            مدیریت محصولات
                        </div>
                        <div class="row p-4 justify-content-between">
                            <div class="col-6 col-lg-2 mt-3 mt-lg-0">
                                <div class="fs30 text-secondary fw600">
                                    ۰
                                </div>
                                <div class="ps-4 fs13 lh1-7 text-secondary-2">کالاهای درج شده
                                    در ۳۰ روز گذشته
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 mt-3 mt-lg-0">
                                <div class="fs30 text-secondary fw600">
                                    ۰
                                </div>
                                <div class="ps-4 fs13 lh1-7 text-secondary-2">کالاهای درج شده
                                    در ۳۰ روز گذشته
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 mt-3 mt-lg-0">
                                <div class="fs30 text-secondary fw600">
                                    ۰
                                </div>
                                <div class="ps-4 fs13 lh1-7 text-secondary-2">کالاهای درج شده
                                    در ۳۰ روز گذشته
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 mt-3 mt-lg-0">
                                <div class="fs30 text-secondary fw600">
                                    ۰
                                </div>
                                <div class="ps-4 fs13 lh1-7 text-secondary-2">کالاهای درج شده
                                    در ۳۰ روز گذشته
                                </div>
                            </div>
                            <div class="col-6 col-lg-2 mt-3 mt-lg-0">
                                <div class="fs30 text-secondary fw600">
                                    ۰
                                </div>
                                <div class="ps-4 fs13 lh1-7 text-secondary-2">کالاهای درج شده
                                    در ۳۰ روز گذشته
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--imges-->
            <div class="row mt-4">
                <div class="col-12">
                    <img src="{{asset('assets/frontend/image/text/384804d3.jpg')}}" class="w-100 br10" alt="">
                    <img src="{{asset('assets/frontend/image/text/ea6269a5c7143515121f5658feec31895eba4cf6_1696685511.jpg')}}" class="w-100 br10 mt-5" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--3ed part-->
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="panel-info-box bg-white br10 mt-4">
                <div class="text-secondary-2 fw600 border-bottom fs15 p-3">
                    وضعیت فروش (ناخالص)
                </div>
                <div class="p-3">
                    <div class="">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>
                    <div class="mt-2">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>
                    <div class="mt-2">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="panel-info-box bg-white br10 mt-4">
                <div class="text-secondary-2 fw600 border-bottom fs15 p-3">
                    وضعیت فروش (ناخالص)
                </div>
                <div class="p-3">
                    <div class="">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>
                    <div class="mt-2">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>
                    <div class="mt-2">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="panel-info-box bg-white br10 mt-4">
                <div class="text-secondary-2 fw600 border-bottom fs15 p-3">
                    وضعیت فروش (ناخالص)
                </div>
                <div class="p-3">
                    <div class="">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>
                    <div class="mt-2">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>
                    <div class="mt-2">
                        <div class="fs20 text-secondary d-flex align-items-center">
                            <div class="fs30 fw600">۰</div>
                            <div class="fs18 me-2">ریال</div>
                        </div>
                        <div class="text-secondary-2">فروش هفته جاری</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.seller_panel_parts.footer')
@endsection
@section('scripts')
<script>
    $('.profile-menu-svg').click(function() {
        $('.profile-menu').toggle()
    })
</script>
@endsection