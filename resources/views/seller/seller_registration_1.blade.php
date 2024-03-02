@extends('seller.seller_layout')

@section('main_content')
    <div class="row justify-content-center">
        <div class="col-10 mb-4 mb-lg-5">
            <div class="mt-md-5 pt-lg-5 d-none d-md-block  fs20 icon-dark-color">
                وضعیت خود را انتخاب کنید
            </div>
        </div>

        <div class="col-10 col-lg-5">
            <div class="border br7 p-3">
                <div class="text-center">
                    <img src="assets/image/text/59e4a50609903c2c1c74.png" width="200" height="150" alt="">
                </div>
                <div class="mt-3 icon-dark-color fw600">
                    فروشنده حقیقی
                </div>
                <div class="mt-3 lh2 fs15 text-secondary">
                    فروشنده حقیقی، یک فرد است که مشخصاتی مانند نام، نام خانوادگی، تاریخ تولد، کد ملی، شماره
                    شناسنامه و... دارد، اما شرکت و کد اقتصادی ندارد
                </div>
                <div class="mt-4 text-end">
                    <form action="{{route('select.seller.status.logic')}}" method="post">
                        @csrf
                        <input type="hidden" name="shop_status" value="personal">
                        <button class="border-0 br7 btn-for-seller-type text-white fs14">فروشنده حقیقی هستم
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                 height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                            </svg>
                        </button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-10 col-lg-5 mt-4 mt-lg-0">
            <div class="border br7 p-3">
                <div class="text-center">
                    <img src="assets/image/text/f5eb55b576507aeb4869.png" width="200" height="150" alt="">
                </div>
                <div class="mt-3 icon-dark-color fw600">
                    فروشنده حقیقی
                </div>
                <div class="mt-3 lh2 fs15 text-secondary">
                    فروشنده حقیقی، یک فرد است که مشخصاتی مانند نام، نام خانوادگی، تاریخ تولد، کد ملی، شماره
                    شناسنامه و... دارد، اما شرکت و کد اقتصادی ندارد
                </div>
                <div class="mt-4 text-end">
                    <button class="border-0 br7 btn-for-seller-type text-dark bg-secondary-6 fs14">فروشنده حقوقی
                        هستم
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                             height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div>
            @error('email')
            <span class="fs13 px-1">{{ $message }}</span>
            @enderror
        </div>
    </div>
@endsection
