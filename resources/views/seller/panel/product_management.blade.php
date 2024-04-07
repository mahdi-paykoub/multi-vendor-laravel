@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

@section('content')
@include('layouts.seller_panel_parts.header')


<!--content-->
<!-- text -->
<div class="container px-4 mt-5">
    <div class="d-md-flex align-items-center d-block">
        <div class="fs14 fw600 text-secondary ps-2">مدیریت کالا</div>
        <svg stroke="currentColor" class="d-none d-md-block" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 5v14"></path>
        </svg>
        <div class="fs13 text-secondary pe-2 mt-2 mt-md-0 lh2">
            تکمیل، ویرایش، انتشار کالا و افزودن تنوع را اینجا مدیریت کنید
        </div>
    </div>
</div>
<!-- search -->
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-12">
            <div class="panel-info-box bg-white p-4 br10">
                <div class="fs13 text-secondary">جستجوی کالا در میان کالاهای دیجی&zwnj;کالا بر اساس:</div>
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
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-6">
            <a href="" class="fs12 add-new-product-btn text-white br7">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z">
                    </path>
                </svg>

                افزودن کالای جدید</a>
        </div>
        <div class="col-6 text-end ps-3">
            <span class="fs15">
                <span class="text-secondary">تعداد نتایج:</span>
                <span class="tey">۸</span>
            </span>
        </div>
    </div>
</div>
<!-- products -->
<div class="container px-4 mt-1 pb-4 mt-5">
    @foreach ($seller_products as $seller_product)
    @php
    $cat =$seller_product->productCategories()->first();
    @endphp
    <div class="d-lg-flex border align-items-center br7 p-2 px-3 onhover-bg-blue mt-3">
        <div class="w-res-25">
            <div class="d-flex align-items-center">
                <img src="assets/image/product/113502481.webp" width="60" height="60" alt="">
                <div class="me-2">
                    <div class="fs13"> {{$seller_product->title}}</div>
                    <div class="bg-secondary-3 w-fit py-1 px-3 fs12 text-secondary mt-2 br15">
                        DKP-14581762
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-flex align-items-center justify-content-between w-100 mt-3 mt-lg-0">
            <div class="fs14 lh2 mt-3 mt-md-0">
                <span class="fs12 text-secondary d-lg-none">گروه کالایی:</span>
                {{ $cat->name }}
            </div>
            <div class="bg-secondary-3 d-none d-lg-block w-fit py-1 px-3 fs12 text-secondary mt-2 br15 mt-3 mt-md-0">
                دیجی‌کالا
            </div>
            <div class="text-success fs14 lh2 mt-3 mt-md-0 d-none d-lg-block">
                تجهیزات
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4 d-md-none">
                <div class="bg-secondary-3 w-fit py-1 px-3 fs12 text-secondary br15 mt-md-0">
                    آماده انتشار
                </div>
                <button class="fs12 add-new-product-btn text-white br7 border-0 px-4 shadow-none p-2">انتشار
                    کالا</button>
            </div>
            <div class="bg-secondary-3 d-none d-lg-block w-fit py-1 px-3 fs12 text-secondary mt-2 br15 mt-3 mt-md-0">
                آماده انتشار
            </div>
            <div class="fs14 lh2 mt-3 mt-md-0 d-none d-lg-block">
                ۰
            </div>
            <div class="mt-3 mt-md-0 d-none d-md-block">
                <button class="fs12 add-new-product-btn text-white br7 border-0 px-4 shadow-none">انتشار
                    کالا</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- pagination -->
<div class="d-flex justify-content-center pb-5">
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

@include('layouts.seller_panel_parts.footer')
@endsection
@section('scripts')
<script>
    $('.profile-menu-svg').click(function() {
        $('.profile-menu').toggle()
    })
</script>
@endsection