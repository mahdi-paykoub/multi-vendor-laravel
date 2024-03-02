@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/single-blog.css')}}"/>

@endsection
@section('content')

    @include('layouts.blog_parts.main_menu')
    <!--content-->
    <div class="container px-3 px-lg-4">
        <div class="row">
            <div class="col-12 col-lg-2 h-fit px-0 d-none d-lg-block">
                <div class="home-blog-right-menu">
                    <div class="home-blog-right-top p-3 text-white fs20 fw600 text-center">
                        digikala MAG
                    </div>
                    <div class="border pt-3 text-center">
                        <div class="">
                            <a href="">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="19"
                                     width="19" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M3,1 L3,23 L16,23 L21,18 L21,1 L3,1 Z M6,17 L11,17 M6,13 L18,13 M6,9 L16,9 M3,5 L21,5 M21,17 L15,17 L15,23"></path>
                                </svg>
                                <span class="fs13 text-secondary-3 me-2">جدیدترین مطالب</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="19"
                                     width="19" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M3,1 L3,23 L16,23 L21,18 L21,1 L3,1 Z M6,17 L11,17 M6,13 L18,13 M6,9 L16,9 M3,5 L21,5 M21,17 L15,17 L15,23"></path>
                                </svg>
                                <span class="fs13 text-secondary-3 me-2">جدیدترین مطالب</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="19"
                                     width="19" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M3,1 L3,23 L16,23 L21,18 L21,1 L3,1 Z M6,17 L11,17 M6,13 L18,13 M6,9 L16,9 M3,5 L21,5 M21,17 L15,17 L15,23"></path>
                                </svg>
                                <span class="fs13 text-secondary-3 me-2">جدیدترین مطالب</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="19"
                                     width="19" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M3,1 L3,23 L16,23 L21,18 L21,1 L3,1 Z M6,17 L11,17 M6,13 L18,13 M6,9 L16,9 M3,5 L21,5 M21,17 L15,17 L15,23"></path>
                                </svg>
                                <span class="fs13 text-secondary-3 me-2">جدیدترین مطالب</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="19"
                                     width="19" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M3,1 L3,23 L16,23 L21,18 L21,1 L3,1 Z M6,17 L11,17 M6,13 L18,13 M6,9 L16,9 M3,5 L21,5 M21,17 L15,17 L15,23"></path>
                                </svg>
                                <span class="fs13 text-secondary-3 me-2">جدیدترین مطالب</span>
                            </a>
                        </div>
                        <div class="bg-secondary-6  mt-3 py-2">
                            <a href="" class="fs13 text-secondary">
                                فروشگاه اینترنتی دیجیکالا
                            </a>
                        </div>
                    </div>

                </div>
                <div class="mt-4">
                    <img src="assets/image/banner/Talent-1401.10.14-3.jpg" width="100%" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="d-flex mt-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center w-100">
                        <div class="text-secondary fs13 ms-2">
                            هشتگ‌های داغ :
                        </div>
                        <div class="bg-secondary-6 br7 p-2 w-50">
                            <div class="swiper mySwiper hashtag-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="" class="fs12 text-info">#سامسونگ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none">
                        <a href="">
                            <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                 id="search" x="0px"
                                 y="0px" viewBox="0 0 24 24" height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M20.031,20.79c0.46,0.46,1.17-0.25,0.71-0.7l-3.75-3.76c1.27-1.41,2.04-3.27,2.04-5.31
                                          c0-4.39-3.57-7.96-7.96-7.96s-7.96,3.57-7.96,7.96c0,4.39,3.57,7.96,7.96,7.96c1.98,0,3.81-0.73,5.21-1.94L20.031,20.79z
                                           M4.11,11.02c0-3.84,3.13-6.96,6.96-6.96c3.84,0,6.96,3.12,6.96,6.96c0,3.84-3.12,6.96-6.96,6.96C7.24,17.98,4.11,14.86,4.11,11.02	z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="mt-4 home-banner">
                    <img src="assets/image/banner/mobile-buying-guide.jpg" class="object-cover" width="100%" alt="">
                </div>

                <div class="">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <a href="{{route('single.blog' ,$lastArticle->slug )}}">
                                <div class="position-relative mt-3 header-post-img-p">
                                    <img src="{{$lastArticle->image}}"
                                         class="w-100 object-cover right-main-blog-img" alt="">
                                    <div
                                        class="position-absolute w-100 h-100 top-0 right-0 z-10 d-flex align-items-end text-white">
                                        <div class="px-4 pb-3 fw600 fs14 lh1-7">
                                            {{$lastArticle->title}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                @foreach($foreArticles  as $foreArticle)
                                    <div class="col-12 col-md-6 mt-3">
                                        <a href="{{route('single.blog',$foreArticle->slug)}}">
                                            <div
                                                class="position-relative header-post-img-p header-post-img-p header-post-img-p-2">
                                                <img src="{{$foreArticle->image}}" class="w-100 object-cover"
                                                     alt="">
                                                <div
                                                    class="position-absolute w-100 h-100 top-0 right-0 z-10 d-flex align-items-end text-white">
                                                    <div class="px-2 px-xl-3 pb-2 pb-xl-3 fw600 fs13 lh1-7">
                                                        {{$foreArticle->title}}
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
            </div>
        </div>
    </div>
    <!--seprator-->
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="fs15 text-secondary ps-4">
                <span class="fw600">منتخب</span> سردبیر
            </div>
            <div class="border-responsive-width border-top">

            </div>
            <div class="px-4 d-lg-block d-none">
                <button class="btn btn-outline-dark fs14 px-4">مشاهده عناوین</button>
            </div>

        </div>
    </div>

    <div class="container px-4 mt-4">
        <div class="swiper mySwiper card-swiper py-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card bx-sh">
                        <img src="assets/image/article/Untitled-5-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs14 lh1-7">هر آنچه لازم است قبل از خرید بهترین دوچرخه برقی بدانید</p>
                        </div>
                        <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35" height="35"
                                     alt="">
                                <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                            </div>
                            <div class="text-secondary-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bx-sh">
                        <img src="assets/image/article/Untitled-5-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs14 lh1-7">هر آنچه لازم است قبل از خرید بهترین دوچرخه برقی بدانید</p>
                        </div>
                        <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35" height="35"
                                     alt="">
                                <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                            </div>
                            <div class="text-secondary-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bx-sh">
                        <img src="assets/image/article/Untitled-5-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs14 lh1-7">هر آنچه لازم است قبل از خرید بهترین دوچرخه برقی بدانید</p>
                        </div>
                        <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35" height="35"
                                     alt="">
                                <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                            </div>
                            <div class="text-secondary-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bx-sh">
                        <img src="assets/image/article/Untitled-5-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs14 lh1-7">هر آنچه لازم است قبل از خرید بهترین دوچرخه برقی بدانید</p>
                        </div>
                        <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35" height="35"
                                     alt="">
                                <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                            </div>
                            <div class="text-secondary-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bx-sh">
                        <img src="assets/image/article/Untitled-5-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs14 lh1-7">هر آنچه لازم است قبل از خرید بهترین دوچرخه برقی بدانید</p>
                        </div>
                        <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35" height="35"
                                     alt="">
                                <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                            </div>
                            <div class="text-secondary-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card bx-sh">
                        <img src="assets/image/article/Untitled-5-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text fs14 lh1-7">هر آنچه لازم است قبل از خرید بهترین دوچرخه برقی بدانید</p>
                        </div>
                        <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35" height="35"
                                     alt="">
                                <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                            </div>
                            <div class="text-secondary-2">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--seprator-->
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="fs15 text-secondary ps-4">
                <span class="fw600">منتخب</span> سردبیر
            </div>
            <div class="border-responsive-width border-top">

            </div>
        </div>
    </div>
    <!--newest video blogs-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="d-flex justify-content-center align-items-center py-4 active-new-blog-post px-4">
                    <div class="d-flex align-items-center">
                        <img src="assets/image/article/06.10-22.jpg" class="br7" width="60" height="60" alt="">
                        <div class="ps-5 pe-3">
                            <div class="fs13 lh1-7 text-secondary-3">در کُره لاس وگاس چه فناوری‌هایی نهفته است؟ (زیرنویس
                                فارسی)
                            </div>
                            <div class="mt-2">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="text-secondary-2 fs12">۱۵ ساعت قبل</span>
                            </div>

                        </div>

                    </div>
                    <div class="d-none d-md-block">
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                             viewBox="0 0 16 16" height="25"
                             width="25" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                        </svg>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-4 px-4">
                    <div class="d-flex align-items-center">
                        <img src="assets/image/article/06.10-22.jpg" class="br7" width="60" height="60" alt="">
                        <div class="ps-5 pe-3">
                            <div class="fs13 lh1-7 text-secondary-3">در کُره لاس وگاس چه فناوری‌هایی نهفته است؟ (زیرنویس
                                فارسی)
                            </div>
                            <div class="mt-2">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="text-secondary-2 fs12">۱۵ ساعت قبل</span>
                            </div>

                        </div>

                    </div>
                    <div class="d-none d-md-block">
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                             viewBox="0 0 16 16" height="25"
                             width="25" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                        </svg>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-4 px-4">
                    <div class="d-flex align-items-center">
                        <img src="assets/image/article/06.10-22.jpg" class="br7" width="60" height="60" alt="">
                        <div class="ps-5 pe-3">
                            <div class="fs13 lh1-7 text-secondary-3">در کُره لاس وگاس چه فناوری‌هایی نهفته است؟ (زیرنویس
                                فارسی)
                            </div>
                            <div class="mt-2">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="text-secondary-2 fs12">۱۵ ساعت قبل</span>
                            </div>

                        </div>

                    </div>
                    <div class="d-none d-md-block">
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                             viewBox="0 0 16 16" height="25"
                             width="25" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                        </svg>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-4 px-4">
                    <div class="d-flex align-items-center">
                        <img src="assets/image/article/06.10-22.jpg" class="br7" width="60" height="60" alt="">
                        <div class="ps-5 pe-3">
                            <div class="fs13 lh1-7 text-secondary-3">در کُره لاس وگاس چه فناوری‌هایی نهفته است؟ (زیرنویس
                                فارسی)
                            </div>
                            <div class="mt-2">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="text-secondary-2 fs12">۱۵ ساعت قبل</span>
                            </div>

                        </div>

                    </div>
                    <div class="d-none d-md-block">
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                             viewBox="0 0 16 16" height="25"
                             width="25" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                        </svg>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center py-4 px-4">
                    <div class="d-flex align-items-center">
                        <img src="assets/image/article/06.10-22.jpg" class="br7" width="60" height="60" alt="">
                        <div class="ps-5 pe-3">
                            <div class="fs13 lh1-7 text-secondary-3">در کُره لاس وگاس چه فناوری‌هایی نهفته است؟ (زیرنویس
                                فارسی)
                            </div>
                            <div class="mt-2">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 1024 1024"
                                     height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path
                                        d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                <span class="text-secondary-2 fs12">۱۵ ساعت قبل</span>
                            </div>

                        </div>

                    </div>
                    <div class="d-none d-md-block">
                        <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                             viewBox="0 0 16 16" height="25"
                             width="25" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-4 mt-lg-5">
                    <button class="fs12 border bg-transparent btn-padding-2 px-5 br7">
                        <svg stroke="currentColor" fill="#fa617b" stroke-width="0" viewBox="0 0 448 512" height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path>
                        </svg>

                        ویدیو های بیشتر
                    </button>
                </div>
            </div>
            <div class="col-12 col-xl-6 mt-4 mt-xl-0">
                <div class="new-blogs-main-left">
                    <img src="assets/image/article/06.10-22.jpg" class="img-h-new-video" width="100%" alt="">
                </div>
                <div class="fs20 text-secondary mt-lg-3 lh1-7 py-4 px-3">
                    در کُره لاس وگاس چه فناوری‌هایی نهفته است؟ (زیرنویس فارسی)
                </div>
                <div class="fs13 lh2 text-secondary">
                    کره لاس وگاس به عنوان بزرگ‌ترین صفحه نمایش یکپارچه‌ی جهان، حالا هم از نمایشگر بیرونی و هم نمایشگر
                    داخلی
                    خود رونمایی و توجه زیادی را به خود معطوف کرده است. سالن عظیم موسیقی و سرگرمی «کره» (Sphere) که در
                    لاس
                    وگاس آمریکا قرار گرفته است و با هزینه‌ی 2.3 میلیارد دلاری افتتاح شد از فناوری‌های پیشرفته‌ا ...
                    <a href="">بیشتر بخوانید</a>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <div class="d-flex align-items-center">
                        <img src="assets/image/user/user1.jpg" width="35" height="35" class="rounded-circle" alt="">
                        <div class="fs12 text-secondary-2 me-2">
                            مهدی پایکوب
                        </div>
                        <div class="me-4 text-secondary-2">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                 height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                <path
                                    d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                            </svg>
                        </div>
                        <div class="text-secondary-2 fs12 me-2">۵ ساعت قبل</div>
                    </div>
                    <div class="text-secondary-2">
                        <span class="fs12">۰</span>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                             height="1em"
                             width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"></path>
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--seprator-->
    <div class="container mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="fs15 text-secondary ps-4">
                <span class="fw600">منتخب</span> سردبیر
            </div>
            <div class="border-responsive-width border-top">

            </div>


        </div>
    </div>
    <!--new blogs-->
    <div class="container px-4 mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 mt-3">
                        <div class="card bx-sh">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="card-img-top"
                                     alt="...">
                                <div class="card-body">
                                    <p class="text-secondary fs15">۸ تجهیزات ساخت موسیقی ضروری برای هنرمندان
                                        تازه‌کار</p>
                                </div>
                                <div class="mt-1 px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="assets/image/user/user1.jpg" class="rounded-circle" width="35"
                                             height="35" alt="">
                                        <span class="fs12 text-secondary-2">مهدی پایکوب</span>
                                    </div>
                                    <div class="text-secondary-2">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" height="1em" width="1em"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path
                                                d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                        </svg>
                                        <span class="fs12">
								۸ مهر ۱۴۰۲                           </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!--seprator-->
                <div class="container mt-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="border-responsive-width border-top">

                        </div>
                        <div class="pe-1 pe-md-4">
                            <button class="btn btn-outline-dark fs14 ">مشاهده عناوین</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 px-4 mt-3">
                <div>
                    <img src="assets/image/article/seriallx.jpg" class="object-cover" width="100%" alt="">
                </div>
                <div class="mt-3">
                    <img src="assets/image/article/seriallx.jpg" class="object-cover" width="100%" alt="">
                </div>
                <div class="box-blog-content-shadow br7 py-4 mt-4">
                    <div class="text-secondary text-center fs14">
                        <span class="fw600">محبوب‌ترین‌ها </span>
                    </div>
                    <div class="text-center border-bottom-light-2 pb-4">
                        <div class="mt-4">
                            <a href="">
                                <img src="assets/image/article/Amin-1402.07.12-2-300x190.jpg" class="object-cover br7"
                                     width="120" height="120" alt="">
                            </a>
                        </div>
                        <div class="pt-3 px-4">
                            <a href="" class="text-secondary">
                                ۱۰ لپ‌تاپ محبوب در دیجی کالا (۱۰ مهر ۱۴۰۲)
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center px-3 mt-4 py-2">
                        <div class="">
                            <img src="assets/image/article/06.10-22.jpg" class="br7 object-cover" width="60" height="60"
                                 alt="">
                        </div>
                        <div class="border-bottom-light-2 pb-3">
                            <div class="fs13 px-3 icon-dark-color lh2">
                                بررسی پاوربانک یوسمز CD189؛ بدنه&zwnj;ی شفاف و عملکرد خوب
                            </div>
                            <div class="mt-2 px-3">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                                </svg>
                                <span class="fs12 text-secondary-2">۲ مهر | ۲۰:۳۰</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center px-3 mt-4 py-2">
                        <div class="">
                            <img src="assets/image/article/06.10-22.jpg" class="br7 object-cover" width="60" height="60"
                                 alt="">
                        </div>
                        <div class="border-bottom-light-2 pb-3">
                            <div class="fs13 px-3 icon-dark-color lh2">
                                بررسی پاوربانک یوسمز CD189؛ بدنه&zwnj;ی شفاف و عملکرد خوب
                            </div>
                            <div class="mt-2 px-3">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                                </svg>
                                <span class="fs12 text-secondary-2">۲ مهر | ۲۰:۳۰</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center px-3 mt-4 py-2">
                        <div class="">
                            <img src="assets/image/article/06.10-22.jpg" class="br7 object-cover" width="60" height="60"
                                 alt="">
                        </div>
                        <div class="border-bottom-light-2 pb-3">
                            <div class="fs13 px-3 icon-dark-color lh2">
                                بررسی پاوربانک یوسمز CD189؛ بدنه&zwnj;ی شفاف و عملکرد خوب
                            </div>
                            <div class="mt-2 px-3">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                                </svg>
                                <span class="fs12 text-secondary-2">۲ مهر | ۲۰:۳۰</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center px-3 mt-4 py-2">
                        <div class="">
                            <img src="assets/image/article/06.10-22.jpg" class="br7 object-cover" width="60" height="60"
                                 alt="">
                        </div>
                        <div class="border-bottom-light-2 pb-3">
                            <div class="fs13 px-3 icon-dark-color lh2">
                                بررسی پاوربانک یوسمز CD189؛ بدنه&zwnj;ی شفاف و عملکرد خوب
                            </div>
                            <div class="mt-2 px-3">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                                </svg>
                                <span class="fs12 text-secondary-2">۲ مهر | ۲۰:۳۰</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center px-3 mt-4 py-2">
                        <div class="">
                            <img src="assets/image/article/06.10-22.jpg" class="br7 object-cover" width="60" height="60"
                                 alt="">
                        </div>
                        <div class="border-bottom-light-2 pb-3">
                            <div class="fs13 px-3 icon-dark-color lh2">
                                بررسی پاوربانک یوسمز CD189؛ بدنه&zwnj;ی شفاف و عملکرد خوب
                            </div>
                            <div class="mt-2 px-3">
                                <svg stroke="currentColor" class="text-secondary-2" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                                    <path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path>
                                </svg>
                                <span class="fs12 text-secondary-2">۲ مهر | ۲۰:۳۰</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.blog_parts.footer')
@endsection

@section('scripts')
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{asset('/assets/frontend/js/bootstrap.min.js')}}"></script>
    <script>
        var swiper = new Swiper(".card-swiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4.5,
                    spaceBetween: 20,
                },
            },
        });

        var swiper = new Swiper(".hashtag-top", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 30,
                },
            },
        });
    </script>
@endsection
