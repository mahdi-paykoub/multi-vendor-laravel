@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/inner-category.css')}}">
@endsection
@section('content')
@include('layouts.product_parts.topbar')
@include('layouts.product_parts.navbar')
@include('layouts.product_parts.main_menu')
@include('partials.mobileBottomMenue')


@if ($results->count())
<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-lg-3 ps-4">
            <div class=" border br10">
                <div class="d-flex justify-content-between p-3">
                    <div class="fs14 fw600">
                        فیلترها
                    </div>
                    <div><a href="" class="text-info fs12">حذف فیلتر ها</a></div>
                </div>
                <div class="mt-3">
                    <!--دکمه اولی-->
                    <div class="d-flex justify-content-between py-3 border-bottom-light-2 p-3" data-bs-toggle="collapse"
                        href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="fs14 fw600 icon-dark-color ">
                            دسته بندی ها
                        </div>
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                    <!--داخل اولی-->
                    <div class="collapse mt-4 px-4 max-scroll" id="collapseExample">
                        <!--دکمه دومی-->
                        <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                            </svg>
                            <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                همه کالاها
                            </div>
                        </div>
                        <!--داخل دومی-->
                        <div class="collapse mt-3 pe-5" id="collapseExample2">
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                        </div>

                        <!--دکمه داخلی-->
                        <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample3" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h24v24H0V0z"></path>
                                <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                            </svg>
                            <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                همه کالاها
                            </div>
                        </div>
                        <!--داخل دومی-->
                        <div class="collapse mt-3 pe-5" id="collapseExample3">
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                            <div class="mt-3 d-flex" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                <svg stroke="currentColor" class="" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                                </svg>
                                <div class="me-2 text-dark border-bottom-light-2 w-100 pb-3 fw600 fs14 text-secondary">
                                    داخل دومی
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--دکمه دوم-->
                    <div class="d-flex justify-content-between py-3 border-bottom-light-2 p-3" data-bs-toggle="collapse"
                        href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="fs14 fw600 icon-dark-color ">
                            برند
                        </div>
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"></path>
                        </svg>
                    </div>
                    <!--داخل دوم-->
                    <div class="collapse px-4 max-scroll" id="collapseExample5">
                        <div class="mt-3 position-relative">
                            <input type="text" class="inp-search-brand w-100 br10" placeholder="جستجوی برند...">
                            <svg stroke="currentColor" class="position-absolute" fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                                </path>
                            </svg>
                        </div>
                        <div class="mt-4">
                            <div class="fs11 text-secondary-2 mb-2 fw600">
                                همه‌ی برند‌ها
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom-light-2 py-3">
                                <div>
                                    <div class="d-flex align-items-center" dir="rtl">
                                        <input class="form-check-input" type="checkbox">
                                        <div class="fs14 fw600 icon-dark-color mt-1 me-3">
                                            نام برند
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 fs13 text-secondary">
                                    panter
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom-light-2 py-3">
                                <div>
                                    <div class="d-flex align-items-center" dir="rtl">
                                        <input class="form-check-input" type="checkbox">
                                        <div class="fs14 fw600 icon-dark-color mt-1 me-3">
                                            نام برند
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 fs13 text-secondary">
                                    panter
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom-light-2 py-3">
                                <div>
                                    <div class="d-flex align-items-center" dir="rtl">
                                        <input class="form-check-input" type="checkbox">
                                        <div class="fs14 fw600 icon-dark-color mt-1 me-3">
                                            نام برند
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 fs13 text-secondary">
                                    panter
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom-light-2 py-3">
                                <div>
                                    <div class="d-flex align-items-center" dir="rtl">
                                        <input class="form-check-input" type="checkbox">
                                        <div class="fs14 fw600 icon-dark-color mt-1 me-3">
                                            نام برند
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 fs13 text-secondary">
                                    panter
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom-light-2 py-3">
                                <div>
                                    <div class="d-flex align-items-center" dir="rtl">
                                        <input class="form-check-input" type="checkbox">
                                        <div class="fs14 fw600 icon-dark-color mt-1 me-3">
                                            نام برند
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 fs13 text-secondary">
                                    panter
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom-light-2 py-3">
                                <div>
                                    <div class="d-flex align-items-center" dir="rtl">
                                        <input class="form-check-input" type="checkbox">
                                        <div class="fs14 fw600 icon-dark-color mt-1 me-3">
                                            نام برند
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 fs13 text-secondary">
                                    panter
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3">
                        <div class="d-flex justify-content-between">
                            <div class="fs14 fw600 icon-dark-color">
                                فقط کالاهای موجود
                            </div>
                            <div class="checkbox-wrapper-22">
                                <label class="switch" for="checkbox">
                                    <input type="checkbox" id="checkbox" />
                                    <div class="slider round"></div>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9 pe-0 mt-3">
            <div class="d-flex mb-3 align-items-center">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="20"
                    width="20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M128,128a12,12,0,0,1-12,12H48a12,12,0,0,1,0-24h68A12,12,0,0,1,128,128ZM48,76H180a12,12,0,0,0,0-24H48a12,12,0,0,0,0,24Zm52,104H48a12,12,0,0,0,0,24h52a12,12,0,0,0,0-24Zm132.49-20.49a12,12,0,0,0-17,0L196,179V112a12,12,0,0,0-24,0v67l-19.51-19.52a12,12,0,0,0-17,17l40,40a12,12,0,0,0,17,0l40-40A12,12,0,0,0,232.49,159.51Z">
                    </path>
                </svg>
                <div class="fs12 me-1 ms-2 fw600">
                    مرتب سازی:
                </div>
                <div class="px-2">
                    <a href="" class="fs12 text-secondary-3"> مرتبط ترین</a>
                </div>
                <div class="px-2">
                    <a href="" class="fs12 text-digi-red fw600">جدیدترین</a>
                </div>
                <div class="px-2">
                    <a href="" class="fs12 text-secondary-3">گران‌ترین</a>
                </div>
                <div class="px-2">
                    <a href="" class="fs12 text-secondary-3"> مرتبط ترین</a>
                </div>
                <div class="px-2">
                    <a href="" class="fs12 text-secondary-3"> مرتبط ترین</a>
                </div>

                <div class="me-auto fs13 text-secondary">
                    ۱,۲۳۷ کالا
                </div>
            </div>
            <div class="row border-top">
                @foreach ($results as $result)
                @php
                $productInfo = $result->productInfos()->first();
                $img = $result->galleries()->first();
                @endphp

                <div
                    class="col-12 col-md-6 col-lg-4 col-xxl-3 pt-3 border-bottom-light-2 border-left-light pb-3 shadow-hover">
                    <a href="{{route('single.product.view' , $result->slug)}}">
                        <div class="position-relative text-center p-4">
                            <img src="{{ url($img->image) }}" class="object-contain" width="200" height="200" alt="">
                            <img src="assets/image/text/spacial-sell.svg"
                                class="position-absolute object-contain top-0 right-0" width="64" height="14" alt="">
                        </div>
                        <div class="fs12 fw600 icon-dark-color mt-2 lh2">
                            {{ $result->title }}
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                <svg stroke="currentColor" class="text-digi-red" fill="none" stroke-width="2"
                                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20"
                                    width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                    <path d="M3 9l4 0"></path>
                                </svg>
                                <span class="fs12 text-secondary">ارسال امروز</span>
                            </div>
                            <div class="pe-2">
                                <span class="fs12 fw600 text-secondary ms-1">4.2</span>
                                <img src="{{url('assets/frontend/image/text/start-colored.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="fw600 mt-4 icon-dark-color justify-content-between d-flex px-2">
                            <div class="text-white bg-digi-red br10 discount-badge fs12">۵٪</div>
                            <div>
                                <span class="fv">{{number_format($productInfo->price, 0, '', ',')}}</span>
                                <svg class="mr-2" width="17" height="17" viewBox="0 0 25 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.52917 11.5828C3.03731 11.5828 3.48194 11.502 3.86304 11.3403C4.2557 11.1786 4.58484 10.9592 4.85046 10.682C5.11608 10.4048 5.31818 10.0815 5.45677 9.71193C5.59535 9.35392 5.67619 8.97281 5.69929 8.5686H3.96698C3.378 8.5686 2.89295 8.50509 2.51184 8.37805C2.13074 8.25101 1.83047 8.06623 1.61105 7.82371C1.39162 7.58119 1.23571 7.29247 1.14332 6.95756C1.06248 6.6111 1.02206 6.22422 1.02206 5.79691C1.02206 5.35806 1.08558 4.94231 1.21261 4.54965C1.33965 4.157 1.52443 3.81053 1.76695 3.51027C2.00948 3.21 2.30974 2.97325 2.66775 2.80002C3.03731 2.61524 3.45884 2.52285 3.93234 2.52285C4.31344 2.52285 4.67723 2.58637 5.02369 2.71341C5.37015 2.84044 5.67619 3.04254 5.94181 3.31971C6.20743 3.58533 6.41531 3.93757 6.56544 4.37642C6.72712 4.80372 6.80797 5.32342 6.80797 5.9355V7.37331H8.47098C8.60956 7.37331 8.70195 7.42528 8.74815 7.52922C8.80589 7.62161 8.83476 7.76597 8.83476 7.9623C8.83476 8.17017 8.80589 8.32608 8.74815 8.43002C8.70195 8.52241 8.60956 8.5686 8.47098 8.5686H6.77332C6.75022 9.13449 6.63474 9.67151 6.42686 10.1796C6.23053 10.6878 5.95336 11.1324 5.59535 11.5135C5.23734 11.8946 4.81004 12.1949 4.31344 12.4143C3.81685 12.6453 3.25674 12.7608 2.63311 12.7608H0.796861L0.692923 11.5828H2.52917ZM2.09609 5.72762C2.09609 6.01634 2.12496 6.26464 2.18271 6.47251C2.252 6.68039 2.36171 6.85362 2.51184 6.9922C2.67353 7.11924 2.88718 7.2174 3.1528 7.2867C3.41842 7.34444 3.75333 7.37331 4.15754 7.37331H5.71661V6.07408C5.71661 5.21948 5.54916 4.6074 5.21424 4.23784C4.87933 3.86828 4.41738 3.6835 3.8284 3.6835C3.27406 3.6835 2.84676 3.86828 2.54649 4.23784C2.24622 4.6074 2.09609 5.10399 2.09609 5.72762ZM11.3338 7.37331C11.4839 7.37331 11.582 7.42528 11.6282 7.52922C11.686 7.62161 11.7149 7.76597 11.7149 7.9623C11.7149 8.17017 11.686 8.32608 11.6282 8.43002C11.582 8.52241 11.4839 8.5686 11.3338 8.5686H8.47545C8.32531 8.5686 8.22715 8.52241 8.18095 8.43002C8.12321 8.33763 8.09434 8.19327 8.09434 7.99694C8.09434 7.78907 8.12321 7.63316 8.18095 7.52922C8.22715 7.42528 8.32531 7.37331 8.47545 7.37331H11.3338ZM14.1927 7.37331C14.3429 7.37331 14.441 7.42528 14.4872 7.52922C14.545 7.62161 14.5738 7.76597 14.5738 7.9623C14.5738 8.17017 14.545 8.32608 14.4872 8.43002C14.441 8.52241 14.3429 8.5686 14.1927 8.5686H11.3344C11.1843 8.5686 11.0861 8.52241 11.0399 8.43002C10.9822 8.33763 10.9533 8.19327 10.9533 7.99694C10.9533 7.78907 10.9822 7.63316 11.0399 7.52922C11.0861 7.42528 11.1843 7.37331 11.3344 7.37331H14.1927ZM17.0517 7.37331C17.2019 7.37331 17.3 7.42528 17.3462 7.52922C17.404 7.62161 17.4328 7.76597 17.4328 7.9623C17.4328 8.17017 17.404 8.32608 17.3462 8.43002C17.3 8.52241 17.2019 8.5686 17.0517 8.5686H14.1934C14.0433 8.5686 13.9451 8.52241 13.8989 8.43002C13.8412 8.33763 13.8123 8.19327 13.8123 7.99694C13.8123 7.78907 13.8412 7.63316 13.8989 7.52922C13.9451 7.42528 14.0433 7.37331 14.1934 7.37331H17.0517ZM19.9107 7.37331C20.0608 7.37331 20.159 7.42528 20.2052 7.52922C20.2629 7.62161 20.2918 7.76597 20.2918 7.9623C20.2918 8.17017 20.2629 8.32608 20.2052 8.43002C20.159 8.52241 20.0608 8.5686 19.9107 8.5686H17.0524C16.9023 8.5686 16.8041 8.52241 16.7579 8.43002C16.7002 8.33763 16.6713 8.19327 16.6713 7.99694C16.6713 7.78907 16.7002 7.63316 16.7579 7.52922C16.8041 7.42528 16.9023 7.37331 17.0524 7.37331H19.9107ZM21.4705 7.37331C21.9209 7.37331 22.2789 7.25205 22.5445 7.00953C22.8217 6.767 22.9602 6.43209 22.9602 6.00479V3.61421H24.0862V6.00479C24.0862 6.82475 23.8553 7.45993 23.3933 7.91033C22.9429 8.34918 22.3251 8.5686 21.5397 8.5686H19.9114C19.7612 8.5686 19.6631 8.52241 19.6169 8.43002C19.5591 8.33763 19.5303 8.19327 19.5303 7.99694C19.5303 7.78907 19.5591 7.63316 19.6169 7.52922C19.6631 7.42528 19.7612 7.37331 19.9114 7.37331H21.4705ZM24.2595 1.39685H22.8736V0.166916H24.2595V1.39685ZM22.0594 1.39685H20.6736V0.166916H22.0594V1.39685ZM10.2553 22.2221C10.2553 22.8458 10.1571 23.429 9.96076 23.9718C9.76444 24.5261 9.48149 25.0054 9.11193 25.4096C8.74237 25.8253 8.29197 26.1545 7.76073 26.397C7.24104 26.6395 6.65206 26.7608 5.99378 26.7608H4.97172C3.67826 26.7608 2.67353 26.3624 1.95751 25.5655C1.24149 24.7686 0.883476 23.6773 0.883476 22.2914V19.2599H1.99215V22.2568C1.99215 22.7534 2.0499 23.2038 2.16538 23.608C2.29242 24.0122 2.48297 24.3587 2.73704 24.6474C3.00267 24.9476 3.3318 25.1786 3.72446 25.3403C4.11712 25.502 4.59061 25.5828 5.14495 25.5828H5.90717C6.44996 25.5828 6.92345 25.4904 7.32766 25.3056C7.73186 25.1324 8.06678 24.8957 8.3324 24.5954C8.60956 24.2951 8.81167 23.9429 8.9387 23.5387C9.07729 23.1345 9.14658 22.713 9.14658 22.2741V17.6142H10.2553V22.2221ZM6.0804 17.2331H4.62526V15.9685H6.0804V17.2331ZM14.7322 22.5686C14.4319 22.5686 14.1432 22.5282 13.866 22.4473C13.5889 22.355 13.3406 22.2048 13.1211 21.9969C12.9133 21.7891 12.7458 21.5177 12.6188 21.1828C12.4917 20.8363 12.4282 20.409 12.4282 19.9009V11.8283H13.5542V19.693C13.5542 20.178 13.6582 20.5822 13.866 20.9056C14.0855 21.2174 14.4377 21.3733 14.9227 21.3733H15.2172C15.4713 21.3733 15.5983 21.5696 15.5983 21.9623C15.5983 22.3665 15.4713 22.5686 15.2172 22.5686H14.7322ZM15.5025 21.3733C15.9529 21.3733 16.2936 21.2636 16.5246 21.0442C16.7556 20.8247 16.871 20.5303 16.871 20.1607V19.5024C16.871 18.4977 17.1251 17.7124 17.6333 17.1465C18.1529 16.5806 18.869 16.2977 19.7813 16.2977C20.2548 16.2977 20.6706 16.3727 21.0286 16.5229C21.3866 16.673 21.6811 16.8866 21.9121 17.1638C22.1546 17.441 22.3336 17.7701 22.4491 18.1512C22.5646 18.5323 22.6223 18.9539 22.6223 19.4158C22.6223 20.409 22.3625 21.1828 21.8428 21.7371C21.3231 22.2914 20.6128 22.5686 19.712 22.5686C19.2501 22.5686 18.8055 22.482 18.3781 22.3088C17.9508 22.124 17.6159 21.8006 17.3734 21.3387C17.2695 21.6043 17.1424 21.8179 16.9923 21.9796C16.8422 22.1413 16.6863 22.2683 16.5246 22.3607C16.3629 22.4416 16.1897 22.4993 16.0049 22.534C15.8317 22.5571 15.6642 22.5686 15.5025 22.5686H15.2254C15.0752 22.5686 14.9771 22.5224 14.9309 22.43C14.8731 22.3376 14.8442 22.1933 14.8442 21.9969C14.8442 21.7891 14.8731 21.6332 14.9309 21.5292C14.9771 21.4253 15.0752 21.3733 15.2254 21.3733H15.5025ZM21.5136 19.5197C21.5136 18.9192 21.3808 18.4342 21.1152 18.0646C20.8496 17.6835 20.3934 17.4929 19.7467 17.4929C18.5456 17.4929 17.9451 18.1916 17.9451 19.589C17.9451 20.178 18.1068 20.6226 18.4301 20.9229C18.765 21.2232 19.1923 21.3733 19.712 21.3733C20.301 21.3733 20.7456 21.2116 21.0459 20.8883C21.3577 20.5649 21.5136 20.1087 21.5136 19.5197Z"
                                        fill="currentColor"></path>
                                </svg>
                                <div class="mt-2 pb-2 text-decoration-line-through ps-1 text-secondary-light fs12">
                                    ۱۴,۵۵۰,۰۰۰
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@else

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 col-md-2 text-center mt-4">
            <img src="{{url('assets/frontend/image/text/not-found.svg')}}" alt="" class="w-100">

        </div>

    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-12">
            <div class="border p-4 w-fit mx-auto br10 px-5">
                <div class="d-flex align-items-center">
                    <svg stroke="currentColor" class="text-secondary" fill="#f9a825" stroke-width="0"
                        viewBox="0 0 20 20" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="me-2">
                        <div class="fw600" style="color: #3f4064;">کالایی با این مشخصات پیدا نکردیم</div>
                        <div class="fs13 text-secondary-2 mt-2">پیشنهاد می‌کنیم فیلترها را تغییر دهید</div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
@endif
@include('layouts.product_parts.footer')
@endsection

@section('scripts')
<script>
var swiper3 = new Swiper(".category-amazing-swiper", {
    slidesPerView: 6.8,
    spaceBetween: 10,
    freeMode: true,
    breakpoints: {
        '480': {
            slidesPerView: 2,
        },
        '576': {
            slidesPerView: 2,
        },
        '768': {
            slidesPerView: 3,

        },
        '992': {
            slidesPerView: 8,
        },
        '1050': {
            slidesPerView: 8,
        },
        '1200': {
            slidesPerView: 8,
        },
    },
});
</script>
@endsection