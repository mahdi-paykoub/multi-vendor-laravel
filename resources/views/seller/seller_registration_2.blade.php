@extends('seller.seller_layout')

@section('main_content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-11 mb-4 mb-lg-5">
        <div class="mt-md-5 pt-lg-5 d-none d-md-block  fs20 icon-dark-color">
            <svg stroke="currentColor" class="cursor-pointer" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
            </svg>

            لطفا اطلاعات کسب‌و‌کارتان را وارد کنید
        </div>
        <form action="{{route('seller.business.info.logic')}}" class="mt-5" method="post">
            @csrf
            <div class="col-12 col-lg-11 border-responsive br7 p-3">
                <div class="alert alert-secondary p-2 fs14">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                    </svg>
                    <span class="me-2"> شماره حساب باید متعلق به صاحب کد ملی باشد</span>
                    <span class="fs13">(الزامی نیست)</span>
                </div>

                <div class="row mt-5">
                    <div class="col-6 fs15">
                        کدملی
                        <span class="text-danger">*</span>
                        <div class="mt-2">
                            <input type="text" value="{{old('national_code' , $seller_info->national_code) }}" name="national_code" dir="ltr" class="br7 w-100 phone-number-inp px-2">
                        </div>
                        @error('national_code')
                        <div class="fs13 px-1 text-digi-red mt-2">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                            <span class="me-1">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>

                    <div class="col-6 fs15">
                        شماره کارت
                        <span class="text-danger">*</span>
                        <div class="mt-2">
                            <input type="text" value="{{old('cart_number' , $seller_info->cart_number) }}" name="cart_number" class="br7 w-100 phone-number-inp px-2" placeholder="0000 - 0000 - 0000 - 0000" dir="ltr">
                        </div>
                        @error('cart_number')
                        <div class="fs13 px-1 text-digi-red mt-2">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                            <span class="me-1">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row align-items-end pt-5">
                    <div class="col-12 col-lg-6 fs15 mt-5 ">
                        نام فروشگاه
                        <div class="mt-2">
                            <input type="text" class="br7 w-100 phone-number-inp px-2" value="{{old('shop_name' , $seller_info->shop_name) }}" placeholder="مانند آذرخش ، بازارک و ..." name="shop_name">
                            @error('shop_name')
                            <div class="fs13 px-1 text-digi-red my-2">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                                <span class="me-1">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="text-secondary fs12 mt-1">
                                    نام‌های غیرمجاز:
                                </div>
                            </div>
                            <div class="col-8 fs12 text-secondary mt-2">
                                <ul>
                                    <li class="mt-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="9" width="9" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                        </svg>
                                        نام مقدس مانند نام ائمه
                                    </li>
                                    <li class="mt-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="9" width="9" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                        </svg>
                                        نام برند مانند نایک، چرم مشهد و...
                                    </li>
                                    <li class="mt-1">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="9" width="9" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                        </svg>
                                        واژه‌های عامیانه مانند خَفَن، باحال و...
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 fs15 mt-5 text-end">
                        <button class=" br7 btn fs14 fw600 text-white confirm-btn">تایید</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection