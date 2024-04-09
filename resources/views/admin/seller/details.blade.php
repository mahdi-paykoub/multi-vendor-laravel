@extends('admin.layouts.app')

@section('content')
@php
$sellerInfo = $seller->sellerInfo()->first();
$addresses=$seller->addresses()->get();
@endphp
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">اصلاعات فروشنده</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"> فروشنده</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">تنظیمات</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"><span class="visually-hidden">فهرست کشویی</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="javascript:;">عمل</a>
                <a class="dropdown-item" href="javascript:;">عمل دیگر</a>
                <a class="dropdown-item" href="javascript:;">هر چیز دیگر اینجا</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">لینک
                    جدا کننده</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="fs14">
                                تایید لوگو :
                            </div>
                            <svg data-infoname="logo" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'cart_name') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'cart_name')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'cart_name')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'cart_name')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                            </svg>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center">

                            <img src="{{image_url_assets($seller->sellerInfo->shop_logo,asset('assets/admin/images/avatar.jpg'))}}" alt="Admin" class="rounded-circle object-cover p-1 bg-primary" width="110" height="110">
                            <div class="mt-3">
                                تعیین وضعیت فروشگاه:
                            </div>
                            <div class="mt-1 d-flex">
                                <h4>{{$seller->sellerInfo->name}}</h4>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    @if ($seller->status == 'approved')
                                    <button type="button" class="btn btn-success btn-sm">تایید شده </button>
                                    @else
                                    <button type="button" class="btn btn-success btn-sm" onclick="$('#approvedForm').submit()">تایید شده </button>
                                    @endif
                                    @if ($seller->status == 'needToEdit')
                                    <button type="button" class="btn btn-primary btn-sm"> در انتظار ویرایش</button>
                                    @else
                                    <button type="button" class="btn btn-primary btn-sm" onclick="$('#needToEditForm').submit()">نیاز به ویرایش</button>
                                    @endif
                                    @if ($seller->status == 'unapproved')
                                    <button type="button" class="btn btn-danger btn-sm">تایید نشده</button>
                                    @else
                                    <button type="button" class="btn btn-danger btn-sm" onclick="$('#unapprovedForm').submit()">عدم تایید</button>
                                    @endif
                                </div>
                                <form id="approvedForm" action="{{route('admin.setSellerStatus' , $seller->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" value="approved" name="status">
                                </form>
                                <form id="needToEditForm" action="{{route('admin.setSellerStatus' , $seller->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" value="needToEdit" name="status">
                                </form>
                                <form id="unapprovedForm" action="{{route('admin.setSellerStatus' , $seller->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" value="unapproved" name="status">
                                </form>
                            </div>
                        </div>
                        <hr class="my-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>
                                    وب سایت
                                </h6>
                                <span class="text-secondary">https://example.com</span>
                            </li>
                            <li class=" list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                        </path>
                                    </svg>
                                    گیت هاب
                                </h6>
                                <span class="text-secondary">example</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                        </path>
                                    </svg>
                                    توییتر
                                </h6>
                                <span class="text-secondary">example@</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                                        </path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                    اینستاگرام
                                </h6>
                                <span class="text-secondary">example</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>
                                    فیسبوک
                                </h6>
                                <span class="text-secondary">example</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">سریال فروشگاه</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$sellerInfo->shop_code}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">وضعیت فروشگاه</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="حقیقی" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">موبایل ثبت شده</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$seller->phone_number}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">نام فروشنده</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->name}}" disabled>
                                    <svg data-infoname="name" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'name') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'name')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'name')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'name')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">ایمیل</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->email}}" disabled>
                                    <svg data-infoname="email" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'email') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'email')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'email')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'email')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">کد ملی</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->national_code}}" disabled>
                                    <svg data-infoname="national_code" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'national_code') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'national_code')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'national_code')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'national_code')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">شماره تماس ثابت</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->shop_number}}" disabled>
                                    <svg data-infoname="shop_number" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'shop_number') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'shop_number')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'shop_number')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'shop_number')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">وبسایت فروشگاه</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->website}}" disabled>
                                    <svg data-infoname="website" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'website') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'website')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'website')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'website')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">شماره کارت</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->cart_number}}" disabled>
                                    <svg data-infoname="cart_number" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'cart_number') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'cart_number')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'cart_number')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'cart_number')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0"> نام صاحب حساب</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control" value="{{$sellerInfo->cart_name}}" disabled>
                                    <svg data-infoname="cart_name" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'cart_name') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'cart_name')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'cart_name')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'cart_name')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">آدرس </h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-3">درباره فروشگاه</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <div class="d-flex align-items-center">
                                    <div style="font-size: 14px;">
                                        {{ $sellerInfo->about_shop }}
                                    </div>
                                    <svg data-infoname="about_shop" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'about_shop') @endphp" class="approveTick ms-2" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                        <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'about_shop')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                        <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'about_shop')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                        <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'about_shop')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                    </svg>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="button" class="btn btn-primary px-4" value="ذخیره تغییرات">
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="d-flex align-items-center mb-3">آدرس های ثبت شده</h5>
                                    <div>
                                        <svg data-infoname="address" class="approveTick ms-2" data-approvedstatus="@php echo has_info_confirmed($sellerInfo , 'cart_name') @endphp" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="28" width="28" xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#areYouConfirmed">
                                            <path class="circle" fill="@if (has_info_confirmed($sellerInfo , 'cart_name')) #15ca20 @else #333 @endif" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                            <path class="background" fill="@if (has_info_confirmed($sellerInfo, 'cart_name')) #15ca20 @else #fff @endif" d="M512 140c-205.4 0-372 166.6-372 372s166.6 372 372 372 372-166.6 372-372-166.6-372-372-372zm193.4 225.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.3 0 19.9 5 25.9 13.3l71.2 98.8 157.2-218c6-8.4 15.7-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.4 12.7z"></path>
                                            <path class="tick" fill="@if (has_info_confirmed($sellerInfo, 'cart_name')) #fff @else #333 @endif" d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    @if (count($addresses) !=0)
                                    @foreach ($addresses as $address)
                                    <div class="py-4 d-flex justify-content-between border-bottom">
                                        <div>
                                            <div class="mb-3 fs15res lh2">
                                                {{ $address->address }}
                                            </div>
                                            <div class="text-secondary-3">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
                                                </svg>
                                                <span class="fs15res me-1"> {{ $address->state }}</span>
                                            </div>
                                            <div class="mt-2 text-secondary-3">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                                <span class="fs15res me-1"> {{ $address->postal_code }}</span>
                                            </div>



                                        </div>

                                    </div>
                                    @endforeach
                                    @else
                                    <div class="alert alert-info">
                                        آدرسی ثبت نشده است
                                    </div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- are you sure? -->
<div class="modal fade" id="areYouConfirmed" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-5">
            <h5 class="confirm-or-not-txt"> </h5>
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger px-4 mt-4" data-bs-dismiss="modal" aria-label="Close">خیر</button>
                <button class="btn btn-primary  ms-3 px-4 mt-4 yes-sure-btn" data-infoname="" data-sellerid="{{$seller->id}}">بله</button>
            </div>
        </div>

    </div>
</div>


@endsection

@section('scripts')
<script>
    $('.yes-sure-btn').click(function() {
        $this = $(this)
        $seller_inp_name = $this.attr('data-infoname')
        $seller_id = $this.attr('data-sellerid')
        $infoname = $this.attr('data-infoname')

        $selected_element = $('*[data-infoname="' + $infoname + '"]')
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            }
        })

        $.ajax({
            type: 'POST',
            url: '/admin/seller/change/sellerInfo/status',
            data: JSON.stringify({
                name: $seller_inp_name,
                seller_id: $seller_id,
            }),
            success: function(data) {
                if (data.status == 'added') {
                    $selected_element.children('.circle').attr('fill', '#15ca20')
                    $selected_element.children('.background').attr('fill', '#15ca20')
                    $selected_element.children('.tick').attr('fill', '#fff')
                    $selected_element.attr('data-approvedstatus', true)
                    $('#areYouConfirmed').modal('hide')
                } else if (data.status == 'removed') {
                    $selected_element.children('.circle').attr('fill', '#333')
                    $selected_element.children('.background').attr('fill', '#fff')
                    $selected_element.children('.tick').attr('fill', '#333')
                    $selected_element.attr('data-approvedstatus', false)
                    $('#areYouConfirmed').modal('hide')
                }
            }
        });

    })
    $('#areYouConfirmed').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var data = $(e.relatedTarget).attr('data-infoname');
        var approvedstatus = $(e.relatedTarget).attr('data-approvedstatus');

        if (approvedstatus) {
            $text = 'آیا از لغو تایید اطمینان دارید؟';
        } else {
            $text = 'آیا از تایید اطمینان دارید؟';
        }

        //populate the textbox
        $('.confirm-or-not-txt').text($text);
        $('.yes-sure-btn').attr('data-infoname', data);
    });
</script>
@endsection