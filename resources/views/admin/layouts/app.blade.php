<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="assets/admin/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('assets/admin/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/admin/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/admin/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/header-colors.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/admin/css/custom-style.css')}}" />
    {{--select 2--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield('styles')
</head>

<body class="rtl">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{asset('assets/admin/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Synadmin</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-last-page'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">داشبورد</div>
                    </a>
                    <ul>
                        <li><a href="index.html"><i class="bx bx-left-arrow-alt"></i>تجزیه و تحلیل</a>
                        </li>
                        <li><a href="index2.html"><i class="bx bx-left-arrow-alt"></i>فروش</a>
                        </li>
                        <li><a href="index3.html"><i class="bx bx-left-arrow-alt"></i>فروشگاه</a>
                        </li>
                        <li><a href="index4.html"><i class="bx bx-left-arrow-alt"></i>متناوب</a>
                        </li>
                        <li><a href="index5.html"><i class="bx bx-left-arrow-alt"></i>بیمارستان</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="lni lni-book"></i>
                        </div>
                        <div class="menu-title">مقالات</div>
                    </a>
                    <ul>
                        <li><a href="{{route('admin.article.index')}}"><i class="bx bx-left-arrow-alt"></i>همه مقالات</a>
                        </li>
                        <li><a href="{{route('admin.article.create')}}"><i class="bx bx-left-arrow-alt"></i>ایجاد مقاله جدید</a>
                        </li>
                        <li><a href="{{route('admin.article-category.index')}}"><i class="bx bx-left-arrow-alt"></i>دسته
                                بندی</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                        </div>
                        <div class="menu-title">فروشگاه</div>
                    </a>
                    <ul>
                        <li><a href="{{route('admin.product.index')}}"><i class="bx bx-left-arrow-alt"></i>همه محصولات</a>
                        </li>
                        <li><a href="{{route('admin.published.products')}}"><i class="bx bx-left-arrow-alt"></i>محصولات تایید شده</a>
                        </li>
                        <li><a href="{{route('admin.unpublished.products')}}"><i class="bx bx-left-arrow-alt"></i>محصولات تایید نشده</a>
                        </li>
                        <li><a href="ecommerce-products-details.html"><i class="bx bx-left-arrow-alt"></i>جزئیات
                                محصول</a>
                        </li>
                        <li><a href="{{route('admin.product.create')}}"><i class="bx bx-left-arrow-alt"></i>افزودن محصول
                                جدید</a>
                        </li>
                        <li><a href="ecommerce-orders.html"><i class="bx bx-left-arrow-alt"></i>سفارشات</a>
                        </li>
                        <li><a href="{{route('admin.brand.index')}}"><i class="bx bx-left-arrow-alt"></i>برند ها</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="lni lni-users"></i>
                        </div>
                        <div class="menu-title">کاربران</div>
                    </a>
                    <ul>
                        <li><a href="{{route('admin.user.index')}}"><i class="bx bx-left-arrow-alt"></i>همه کاربران</a>
                        </li>
                        <li><a href="{{route('admin.user.create')}}"><i class="bx bx-left-arrow-alt"></i>افزودن کاربر
                                جدید</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="lni lni-layers"></i>
                        </div>
                        <div class="menu-title">دسته بندی</div>
                    </a>
                    <ul>
                        {{-- <li>
                          <a href="{{route('admin..index')}}"><i class="bx bx-left-arrow-alt"></i> دسته بندی محصولات</a>
                </li>--}}
                <li>
                    <a href="{{route('admin.article-category.index')}}"><i class="bx bx-left-arrow-alt"></i>دسته
                        بندی مقالات</a>
                </li>
                <li>
                    <a href="{{route('admin.product-category.index')}}"><i class="bx bx-left-arrow-alt"></i>دسته
                        بندی محصولات</a>
                </li>

                <li>
                    <a href="{{route('admin.select.category.view')}}"><i class="bx bx-left-arrow-alt"></i>
                        لندینگ دسته محصولات
                    </a>
                </li>


            </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow" aria-expanded="false">
                    <div class="parent-icon"><i class="fadeIn animated bx bx-message-square-edit"></i>
                    </div>
                    <div class="menu-title">پیغام ها</div>
                </a>
                <ul class="mm-collapse">
                    <li><a href="{{route('admin.notification.index')}}"><i class="bx bx-left-arrow-alt"></i>پیغام ها</a>
                    </li>

                    <li><a href="{{route('admin.notification.create')}}"><i class="bx bx-left-arrow-alt"></i> ساخت پیغام</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-hand"></i>
                    </div>
                    <div class="menu-title">سطوح دسترسی کاربران</div>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.permission.index')}}"><i class="bx bx-left-arrow-alt"></i>
                            لیست دسترسی ها
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.permission.create')}}"><i class="bx bx-left-arrow-alt"></i>
                            افزودن دسترسی جدید
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.role.index')}}"><i class="bx bx-left-arrow-alt"></i>
                            لسیت نقش ها
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin.role.create')}}"><i class="bx bx-left-arrow-alt"></i>
                            افزودن نقش جدید
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-shopify"></i>
                    </div>
                    <div class="menu-title">فروشندگان</div>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.seller.index')}}"><i class="bx bx-left-arrow-alt"></i>
                            لیست فروشندگان
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"> <i class="lni lni-star"></i>
                    </div>
                    <div class="menu-title">امکانات</div>
                </a>
                <ul>
                    <li>
                        <a href="{{route('admin.global.option')}}"><i class="bx bx-left-arrow-alt"></i>
                            امکانات عمومی
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.global.option.menu')}}"><i class="bx bx-left-arrow-alt"></i>
                           منوها
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.global.option.footer')}}"><i class="bx bx-left-arrow-alt"></i>
                           فوتر
                        </a>
                    </li>
                </ul>
            </li>

            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="top-menu-left d-none d-lg-block">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box">
                            <input type="text" class="form-control search-control" placeholder="جستجو ..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                            <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="javascript:;"> <i class='bx bx-search'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="row row-cols-3 g-3 p-3">
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
                                            </div>
                                            <div class="app-title">تیم ها</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
                                            </div>
                                            <div class="app-title">پروژه ها</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
                                            </div>
                                            <div class="app-title">وظایف</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
                                            </div>
                                            <div class="app-title">نظرات</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
                                            </div>
                                            <div class="app-title">فایل ها</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
                                            </div>
                                            <div class="app-title">هشدار ها</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">اعلان ها</p>
                                            <p class="msg-header-clear ms-auto">علامت گذاری همه به عنوان خوانده شده</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">کاربران جدید<span class="msg-time float-end">14
                                                            ثانیه پیش</span></h6>
                                                    <p class="msg-info">5 کاربر جدید ثبت نام کردند</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">سفارشات جدید <span class="msg-time float-end">2
                                                            دقیقه پیش</span></h6>
                                                    <p class="msg-info">شما یک سفارش جدید دریافت کردید</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">24 فایل PDF<span class="msg-time float-end">19
                                                            دقیقه پیش</span></h6>
                                                    <p class="msg-info">فایل های pdf جدید تولید شدند</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">زمان پاسخگویی <span class="msg-time float-end">28 دقیقه پیش</span></h6>
                                                    <p class="msg-info">میانگین زمان پاسخوگیی 5.1 دقیقه است</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">تایید محصول جدید <span class="msg-time float-end">2 ساعت پیش</span></h6>
                                                    <p class="msg-info">محصول جدید شما تایید شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">دیدگاه جدید <span class="msg-time float-end">4
                                                            ساعت پیش</span></h6>
                                                    <p class="msg-info">دیدگاه های جدید کاربران دریافت شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">ارسال محصول شما <span class="msg-time float-end">5 ساعت پیش</span></h6>
                                                    <p class="msg-info">محصول شما با موفقیت ارسال شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">24 نویسنده جدید<span class="msg-time float-end">1 روز پیش</span></h6>
                                                    <p class="msg-info">در هفته گذشته 24 نویسنده جدید به شرکت پیوست</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">هشدار های دفاعی <span class="msg-time float-end">2 هفته پیش</span></h6>
                                                    <p class="msg-info">45% هشدار کمتر در 4 هفته گذشته</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">مشاهده همه اعلان ها</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                    <i class='bx bx-comment'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">پیغام ها</p>
                                            <p class="msg-header-clear ms-auto">علامت گذاری همه به عنوان خوانده شده</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="{{asset('assets/admin/images/avatars/avatar-1.png')}}" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">رضا افشار <span class="msg-time float-end">5
                                                            ثانیه پیش</span></h6>
                                                    <p class="msg-info">این یک پیام استاندارد است</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">پریسا توکلی <span class="msg-time float-end">14
                                                            ثانیه پیش</span></h6>
                                                    <p class="msg-info">پکیج های جدید منتشر شدند</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">پدرام شریفی <span class="msg-time float-end">8
                                                            دقیقه پیش</span></h6>
                                                    <p class="msg-info">نسخه جدید قالب به روز رسانی شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">یلدا رسولی <span class="msg-time float-end">15
                                                            دقیقه پیش</span></h6>
                                                    <p class="msg-info">اولین نسخه اپلیکیشن به درستی ایجاد شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">امیر صبوری <span class="msg-time float-end">22
                                                            دقیقه پیش</span></h6>
                                                    <p class="msg-info">لورم ایپسوم متن ساختگی نامفهوم</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">ساناز پگاه <span class="msg-time float-end">2
                                                            ساعت پیش</span></h6>
                                                    <p class="msg-info">ویژگی های جدید محصول تعریف شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">سعید صادقی <span class="msg-time float-end">4
                                                            ساعت پیش</span></h6>
                                                    <p class="msg-info">لورم اپیسوم متن ساختگی</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">فریبا سبحانی <span class="msg-time float-end">6
                                                            ساعت پیش</span></h6>
                                                    <p class="msg-info">این مورد در 1960 ثانیه محبوب شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">علیرضا قربانی <span class="msg-time float-end">2 ساعت پیش</span></h6>
                                                    <p class="msg-info">نسخه جدید قالب به روز رسانی شد</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">محمد خالقی <span class="msg-time float-end">2
                                                            روز پیش</span></h6>
                                                    <p class="msg-info">شما می توانید این پیام را ذخیره کنید</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/admin/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">جواد علیپور <span class="msg-time float-end">5
                                                            روز پیش</span></h6>
                                                    <p class="msg-info">لورم ایپسوم متن ساختگی نامفهوم</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">مشاهده همه پیغام ها</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('assets/admin/images/avatars/avatar-2.png')}}" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">پریسا توکلی</p>
                                <p class="designattion mb-0">طراح وب</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>پروفایل</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>تنظیمات</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>داشبورد</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>درآمد</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>دانلود
                                        ها</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>خروج</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">کپی رایت © 2021. تمامی حقوق محفوظ است.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"><i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">سفارشی ساز قالب</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">استایل های قالب</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">روشن</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">تاریک</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">نیمه تاریک</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">تِم مینیمال</label>
            </div>
            <hr />
            <h6 class="mb-0">رنگ هدر</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
            <hr />
            <h6 class="mb-0">پس زمینه سایدبار</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    {{--select 2--}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!--app JS-->
    <script src="{{asset('assets/admin/js/app.js')}}"></script>
    <script>
        new PerfectScrollbar('.customers-list');
        new PerfectScrollbar('.store-metrics');
        new PerfectScrollbar('.product-list');
    </script>
    @yield('scripts')

</body>

</html>