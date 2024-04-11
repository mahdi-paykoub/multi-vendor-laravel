@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

@section('content')
@include('layouts.seller_panel_parts.header')


<!--content-->
<div class="container px-4 mt-4">
    <div class="d-md-flex align-items-center d-block">
        <div class="fs14 fw600 text-secondary ps-2">سفارش‌های جاری</div>
        <svg stroke="currentColor" class="d-none d-md-block" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 5v14"></path>
        </svg>
        <div class="fs13 text-secondary pe-2 mt-2 mt-md-0 lh2">
            جزئیات سفارش‌های جاری خود را اینجا ببینید
        </div>
    </div>
</div>

<div class="container px-4 mt-4">
    <div class="bg-white br10 p-4 mb-5">
        <div class="row">
            <div class="col-3">
                <button class="btn btn-info text-white fs13 br10 btn-padding">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"></path>
                    </svg>
                    <span class="me-2">ایجاد محموله</span>
                </button>
            </div>
            <div class="col-9">

            </div>
        </div>
        <div class="row mt-4 br10 py-3 align-items-center" style="background-color: #eff5ff;">
            <div class="col">
                <div class="">
                    <input type="checkbox" class="form-check-input">
                    <span class="fs14 me-2">ردیف</span>
                </div>
            </div>
            <div class="col-3">
                <div class="">
                    <span class="fs14 me-2">عنوان</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد محصول</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد تنوع</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد فروشنده</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">تعداد سفارش</span>
                </div>
            </div>

            <div class="col">
                <div class="">
                    <span class="fs14 me-2">جزئیات</span>
                </div>
            </div>

        </div>
        <!-- re here -->
        <div class="row py-3 align-items-center border-bottom-light-2">
            <div class="col">
                <div class="">
                    <input type="checkbox" class="form-check-input">
                    <span class="fs14 me-2">1</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex align-items-center">
                    <img src="{{url('assets/frontend/image/product/664d3783527b060deb7d4eedb71b5ce283adc598_1611391561.webp')}}" width="50" height="50" class="object-cover" alt="">
                    <div class="fs13 text-secondary me-2">نام محصول مورد نظر در این قسمت نوشته میشه</div>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 text-primary fv fw600">23654781</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد تنوع</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد فروشنده</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 fv">5</span>
                </div>
            </div>

            <div class="col text-secondary">
                <div class="">
                    <span class="fs14 me-2">
                        <a href="">
                            <svg class="text-secondary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 0 0-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 0 0 0-17.47C428.89 172.28 347.8 112 255.66 112z"></path>
                                <circle cx="256" cy="256" r="80" fill="none" stroke-miterlimit="10" stroke-width="32"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
        <div class="row py-3 align-items-center border-bottom-light-2">
            <div class="col">
                <div class="">
                    <input type="checkbox" class="form-check-input">
                    <span class="fs14 me-2">1</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex align-items-center">
                    <img src="{{url('assets/frontend/image/product/664d3783527b060deb7d4eedb71b5ce283adc598_1611391561.webp')}}" width="50" height="50" class="object-cover" alt="">
                    <div class="fs13 text-secondary me-2">نام محصول مورد نظر در این قسمت نوشته میشه</div>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 text-primary fv fw600">23654781</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد تنوع</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد فروشنده</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 fv">5</span>
                </div>
            </div>

            <div class="col text-secondary">
                <div class="">
                    <span class="fs14 me-2">
                        <a href="">
                            <svg class="text-secondary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 0 0-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 0 0 0-17.47C428.89 172.28 347.8 112 255.66 112z"></path>
                                <circle cx="256" cy="256" r="80" fill="none" stroke-miterlimit="10" stroke-width="32"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
        <div class="row py-3 align-items-center border-bottom-light-2">
            <div class="col">
                <div class="">
                    <input type="checkbox" class="form-check-input">
                    <span class="fs14 me-2">1</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex align-items-center">
                    <img src="{{url('assets/frontend/image/product/664d3783527b060deb7d4eedb71b5ce283adc598_1611391561.webp')}}" width="50" height="50" class="object-cover" alt="">
                    <div class="fs13 text-secondary me-2">نام محصول مورد نظر در این قسمت نوشته میشه</div>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 text-primary fv fw600">23654781</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد تنوع</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد فروشنده</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 fv">5</span>
                </div>
            </div>

            <div class="col text-secondary">
                <div class="">
                    <span class="fs14 me-2">
                        <a href="">
                            <svg class="text-secondary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 0 0-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 0 0 0-17.47C428.89 172.28 347.8 112 255.66 112z"></path>
                                <circle cx="256" cy="256" r="80" fill="none" stroke-miterlimit="10" stroke-width="32"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
        <div class="row py-3 align-items-center border-bottom-light-2">
            <div class="col">
                <div class="">
                    <input type="checkbox" class="form-check-input">
                    <span class="fs14 me-2">1</span>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex align-items-center">
                    <img src="{{url('assets/frontend/image/product/664d3783527b060deb7d4eedb71b5ce283adc598_1611391561.webp')}}" width="50" height="50" class="object-cover" alt="">
                    <div class="fs13 text-secondary me-2">نام محصول مورد نظر در این قسمت نوشته میشه</div>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 text-primary fv fw600">23654781</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد تنوع</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2">کد فروشنده</span>
                </div>
            </div>
            <div class="col">
                <div class="">
                    <span class="fs14 me-2 fv">5</span>
                </div>
            </div>

            <div class="col text-secondary">
                <div class="">
                    <span class="fs14 me-2">
                        <a href="">
                            <svg class="text-secondary" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 0 0-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 0 0 0-17.47C428.89 172.28 347.8 112 255.66 112z"></path>
                                <circle cx="256" cy="256" r="80" fill="none" stroke-miterlimit="10" stroke-width="32"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

        </div>
    </div>


    <!-- empty -->
    <!-- <div class="row bg-white br10 p-4 text-center mb-5">
        <div class="col-12 ">
            <img src="{{url('assets/frontend/image/text/emptymsg.png')}}" alt="">
            <div class="fs14 mt-3">سفارشی پیدا نشد ...</div>

        </div>
    </div> -->
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