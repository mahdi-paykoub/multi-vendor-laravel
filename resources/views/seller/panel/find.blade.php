@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

@section('content')
@include('layouts.seller_panel_parts.header')

<!--text-->
<div class="container px-4 mt-5">
    <div class="d-md-flex align-items-center d-block">
        <div class="fs14 fw600 text-secondary ps-2">جستجو یا درج محصول</div>
        <svg stroke="currentColor" class="d-none d-md-block" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 5v14"></path>
        </svg>
        <div class="fs13 text-secondary pe-2 mt-2 mt-md-0 lh2">محصولی که قصد فروش آن را دارید، جستجو کنید. در غیر
            این‌صورت از "ایجاد
            کالای جدید" اقدام به درج کالای خود کنید
        </div>
    </div>
</div>
<!--search-->
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-12">
            <div class="panel-info-box bg-white p-4 br10">
                <div class="fs13 text-secondary">جستجوی کالا در میان کالاهای دیجی‌کالا بر اساس:</div>
                <div class="row mt-2">
                    <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                        <input type="text" class="w-100 seller-search-inp border px-3" placeholder="نام محصول یا DKP">
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2 mt-3 mt-md-0">
                        <div class="d-flex justify-content-end">
                            <button class="search-seller-btn fs13 px-4 br7">جستجو
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" id="search" x="0px" y="0px" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M20.031,20.79c0.46,0.46,1.17-0.25,0.71-0.7l-3.75-3.76c1.27-1.41,2.04-3.27,2.04-5.31
                                        c0-4.39-3.57-7.96-7.96-7.96s-7.96,3.57-7.96,7.96c0,4.39,3.57,7.96,7.96,7.96c1.98,0,3.81-0.73,5.21-1.94L20.031,20.79z
                                         M4.11,11.02c0-3.84,3.13-6.96,6.96-6.96c3.84,0,6.96,3.12,6.96,6.96c0,3.84-3.12,6.96-6.96,6.96C7.24,17.98,4.11,14.86,4.11,11.02
                                        z"></path>
                                    </g>
                                </svg>
                            </button>
                            <button class="search-seller-btn fs13 px-2 br7 me-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144m224 0L144 368"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--main-->
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-12 col-lg-3">
            <!--category-->
            <div class="panel-info-box bg-white br10">
                <div class="fw600 fs14 c-border-b text-secondary p-3">
                    دسته بندی نتایج
                </div>

            </div>
            <!--brand-->
            <div class="panel-info-box bg-white br10 pb-2 mt-4">
                <div class="fw600 fs14 c-border-b text-secondary p-3">
                    <div class="d-flex justify-content-between">
                        <input type="text" class="w-75 border-0" placeholder="برند">
                        <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" id="search" x="0px" y="0px" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M20.031,20.79c0.46,0.46,1.17-0.25,0.71-0.7l-3.75-3.76c1.27-1.41,2.04-3.27,2.04-5.31
                                        c0-4.39-3.57-7.96-7.96-7.96s-7.96,3.57-7.96,7.96c0,4.39,3.57,7.96,7.96,7.96c1.98,0,3.81-0.73,5.21-1.94L20.031,20.79z
                                         M4.11,11.02c0-3.84,3.13-6.96,6.96-6.96c3.84,0,6.96,3.12,6.96,6.96c0,3.84-3.12,6.96-6.96,6.96C7.24,17.98,4.11,14.86,4.11,11.02
                                        z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
                <div style="" class="seller-pr-brands-p pt-2">
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                    <div class="d-flex mt-2 justify-content-between px-3 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label fs13 text-secondary" for="flexRadioDefault7">
                                متام کالاها
                            </label>
                        </div>
                        <div class="fs13 text-secondary-2">
                            ASHBC
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-info-box bg-white br10 mt-4">
                <div class="fw600 fs14 c-border-b text-secondary p-3">
                    فیلتر بر اساس وضعیت کالا
                </div>

                <div class="p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label fs13 text-secondary" for="flexRadioDefault1">
                            متام کالاها
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label fs13 text-secondary" for="flexRadioDefault2">
                            قابل فروش
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                        <label class="form-check-label fs13 text-secondary" for="flexRadioDefault3">
                            به زودی
                        </label>
                    </div>
                </div>
            </div>
            <div class="panel-info-box bg-white br10 mt-4">
                <div class="fw600 fs14 c-border-b text-secondary p-3">
                    فیلتر بر اساس اصالت کالا
                </div>

                <div class="p-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                        <label class="form-check-label fs13 text-secondary" for="flexRadioDefault4">
                            متام کالاها
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked>
                        <label class="form-check-label fs13 text-secondary" for="flexRadioDefault5">
                            قابل فروش
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                        <label class="form-check-label fs13 text-secondary" for="flexRadioDefault6">
                            به زودی
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
            <div class="panel-info-box bg-white br10 pb-3">
                <div class="fs13 text-secondary c-border-b p-3">
                    <div>
                        فیلترهای اعمال شده:
                    </div>

                    <div class="row mt-2">
                        <div class="d-flex">
                            <div class="mx-1">
                                <div class="fs13 text-secondary">نام:</div>
                                <div class="bg-secondary-6 p-2 br7 w-fit mt-2 d-flex align-items-center">
                                    <div class="fs13 text-secondary-3">لوازم تعمیرات موبایل، تبلت و کالای دیجیتال
                                    </div>
                                    <div class="pe-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" fill-rule="evenodd" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="mx-1">
                                <div class="fs13 text-secondary">نام:</div>
                                <div class="bg-secondary-6 p-2 br7 w-fit mt-2 d-flex align-items-center">
                                    <div class="fs13 text-secondary-3">لوازم تعمیرات موبایل، تبلت و کالای دیجیتال
                                    </div>
                                    <div class="pe-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" fill-rule="evenodd" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4  d-lg-flex d-block justify-content-between px-3 align-items-center">
                    <div class="text-secondary fs15 d-lg-flex d-block align-items-center">
                        <div> کالای شما در میان نتایج وجود ندارد؟</div>
                        <div class="mt-3 mt-lg-0">
                            <a href="{{route('seller.panel.create.product')}}" class="fs14 re-reg-new-pr-btn me-lg-3">ایجاد کالای جدید</a>
                        </div>
                    </div>
                    <div class="mt-3 mt-lg-0">
                        <a href="" class="fs14 re-reg-new-pr-btn">
                            درخواست ایجاد کالا توسط دیجی‌کالا
                        </a>
                    </div>
                </div>
            </div>
            <!--search result-->
            <div class="panel-info-box bg-white br10 pb-3 mt-4">
                <!--top-->
                <div class="c-border-b p-3">
                    <div class="row">
                        <div class="col-12 col-xl-6 mt-1">
                            <div class="fs15 d-flex justify-content-between">
                                <div class=" text-secondary"> نتایج جستجو</div>
                                <div class="d-flex me-4">
                                    <div class="text-secondary-2">
                                        تعداد نتایج:
                                    </div>
                                    <div class="me-1">
                                        ۱۵۷ مورد
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-4 mt-xl-0">
                            <div class="d-flex justify-content-end">
                                <nav class="seller-find-pr-pa">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <svg stroke="currentColor" fill="#8b8b8b" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                                                </svg>

                                            </a>
                                        </li>

                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">۲</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <svg stroke="currentColor" fill="#8b8b8b" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--products-->
                <div class="px-2 c-border-b">
                    @foreach ($products as $product)
                    @php
                    $img = $product->galleries()->first()->image;
                    $cat = $product->productCategories()->first()->title;
                    $productInfo = $product->productInfos()->get();
                    $min_price = $productInfo->min('price');
                    @endphp

                    <div class="px-lg-3 on-hover-act-btns border-bottom pb-3">
                        <div class="d-lg-flex text-center d-block justify-content-lg-between p-4 align-items-center">
                            <a href="/product/{{$product->slug}}">
                                <div class="d-lg-flex d-block align-items-center text-center">
                                    <img src="{{$img}}" width="60" height="60" alt="">
                                    <div class="fs13 me-3 text-secondary text-hover-dashed mt-3 mt-lg-0"> سایه بان مدل
                                        {{ $product->title }}
                                    </div>
                                </div>
                            </a>
                            <div>
                                <button data-bs-toggle="modal" data-bs-target="#youSellModal" class="fs13 you-also-sell-btn mt-3 mt-lg-0"><span class="d-none d-lg-inline">شما هم </span>
                                    بفروشید
                                </button>
                            </div>
                        </div>
                        <div class="pr-b-info p-2">
                            <div class="d-flex justify-content-between align-items-center px-4">
                                <div>
                                    <span class="fs12 text-secondary-2">گروه:</span>
                                    <span class="fs13 text-secondary">{{$cat}}</span>
                                </div>
                                <div>
                                    <span class="fs12 text-secondary-2">وضعیت جاری:</span>
                                    <span class="fs13 text-secondary">قابل فروش</span>
                                </div>
                                <div>
                                    <span class="fs12 text-secondary-2">تعداد تنوع فعال:</span>
                                    <span class="fs13 text-secondary fv">{{ count($productInfo) }}</span>
                                </div>
                                <div class="d-none d-md-block">
                                    <span class="fs12 text-secondary-2">کمترین قیمت روی سایت:</span>
                                    <span class="fs13 text-secondary fv">{{number_format($min_price * 10)}}</span>
                                    <span class="fs12 text-secondary">ریال</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--bottom-->
                <div class="p-3">
                    <div class="row">
                        <div class="col-12 col-xl-6 mt-1">
                            <div class="fs15 d-flex justify-content-between">
                                <div class=" text-secondary"> نتایج جستجو</div>
                                <div class="d-flex me-4">
                                    <div class="text-secondary-2">
                                        تعداد نتایج:
                                    </div>
                                    <div class="me-1">
                                        ۱۵۷ مورد
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-4 mt-xl-0">
                            <div class="d-flex justify-content-end">
                                <nav class="seller-find-pr-pa">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <svg stroke="currentColor" fill="#8b8b8b" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
                                                </svg>

                                            </a>
                                        </li>

                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">۲</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                        <li class="page-item"><a class="page-link" href="#">۳</a></li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <svg stroke="currentColor" fill="#8b8b8b" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- you aloso sell modal -->
<div class="modal fade" id="youSellModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl br10">
        <div class="modal-content border-0">
            <div class="row">
                <div class="col-6 p-4 text-center">
                    <div class="mt-3 fs20">
                        نکات لازم قبل از فروش کالای درج شده در دیجی کالا:
                    </div>
                    <div class="text-secondary lh2 fs15 mt-3" style="line-height: 2.8;">
                        لطفا ابتدا تمامی اطلاعات درج شده را با کالای خود مقایسه و در صورت مطابقت این اطلاعات، “شما هم بفروشید” را انتخاب کنید در غیر این صورت کالای جدید درج کنید. (ارسال کالای مغایر با اطلاعات درج شده، موجب جریمه و کسر امتیاز می شود) حتما قبل از انتخاب گزینه "شما هم بفروشید" روی کالاهایی که نشان غیر اصل ندارند از اصالت کالای خود مطمئن شوید و در صورت غیر اصل بودن کالا، روی کالا با نشان غیر اصل قیمت گذاری کنید و در صورتی که کالای مورد نظر با نشان مربوطه وجود ندارد، اقدام به درج کالای جدید به همراه نشان غیر اصل کنید.
                    </div>
                    <button class="fs14 btn btn-info mt-4 px-5 text-white br10 btn-padding">متوجه شدم</button>
                </div>
                <div class="col-6 p-4  py-4" style="background-color:#f5f7fa ;">
                
                    <div class="d-flex justify-content-between">
                        <div></div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="text-center  py-5">
                        <img src="{{url('assets/frontend/image/text/89f1d173.png')}}" class="" alt="">
                        <div class="fw600 fs18 mt-4 icon-dark-color">
                            فروش کالای غیر اصل:
                        </div>
                        <div class="text-secondary lh2 fs15 mt-3" style="line-height: 2.8;">
                        همان طور که اطلاع دارید فروش کالای غیر اصل فقط در صورت درج "نشان کالای غیر اصل" هنگام درج کالا ممکن است. در صورت فروش کالای غیر اصل بدون داشتن این نشان شما موظف به پرداخت جریمه ای معادل 10 برابر کل فروش آن کالای غیر اصل خواهید بود.
                        </div>
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