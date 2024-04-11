@extends('admin.layouts.app')

@section('content')
@php
$order_productInfos = $order->productInfos()->get();
// $products =[];
// foreach($order_productInfos as $order_productInfo){
// $products[]= $order_productInfo->product()->first();
// }
@endphp
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">فروشگاه</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">جزئیات سفارش</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->
<h4 class="mt-4 border-bottom pb-3">محصولات این سفارش</h4>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid pt-3">

    @foreach ($order_productInfos as $order_productInfo)
    @php
    $product= $order_productInfo->product()->first();
    $img = $product->galleries()->first()->image;
    $seller = $order_productInfo->seller()->first();
    $sellerInfo = $seller->sellerInfo()->first();
    @endphp
    <div class="col">
        <div class="card">
            <img src="{{ $img }}" class="card-img-top" alt="...">
            <!-- <div class="">
                <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span></div>
            </div> -->
            <div class="card-body">
                <h6 class="card-title cursor-pointer">{{$product->title}}</h6>
                <div class="clearfix">
                    <p class="mb-0 float-end fw-bold">
                        <span>{{ number_format($order_productInfo->price) }} تومان</span>
                    </p>
                </div>
                <div class="mt-3">
                    <span>کد فروشنده:</span>
                    <span>{{$sellerInfo->shop_code}}</span>
                </div>
                <div class="mt-2">
                    <span>نام فروشنده:</span>
                    <span>{{$sellerInfo->name}}</span>
                </div>
            </div>

        </div>
    </div>
    @endforeach


</div>
<div class="row border-top mt-4 pt-3">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                    <div class="mt-3">
                        <h4>{{$order->user()->first()->name}}</h4>
                        <p class="text-secondary mb-1">کاربر سفارش دهنده</p>
                        <p class="text-muted font-size-sm"></p>
                        <button class="btn btn-primary">دنبال کردن</button>
                        <button class="btn btn-outline-primary">پیام</button>
                    </div>
                </div>
                <hr class="my-4">


            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">نام کامل</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$order->user()->first()->name}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">ایمیل</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="{{$order->user()->first()->email}}" disabled>
                    </div>
                </div>

                <h6 class="mb-0 mt-5 font-weight-bold border-top pt-3">آدرس ثبت شده برای ارسال مرسوله:</h6>
                <div class="py-3 d-flex justify-content-between">
                    <div>
                        @php
                        $user_address = $order->address()->first()
                        @endphp
                        <div class="mb-3 fs15res lh2">
                            {{ $user_address->address }}
                        </div>
                        <div class="text-secondary-3">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
                            </svg>
                            <span class="fs15res me-1"> {{ $user_address->state }}</span>
                        </div>
                        <div class="text-secondary-3 mt-2">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
                            </svg>
                            <span class="fs15res me-1"> {{ $user_address->city }} </span>
                        </div>
                        <div class="mt-2 text-secondary-3">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="fs15res me-1"> {{ $user_address->postal_code }}</span>
                        </div>
                        <div class="mt-2 text-secondary-3">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="fs15res me-1"> {{ $user_address->plaque }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection