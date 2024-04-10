@extends('seller.profile.layout')
@section('profile_content')
<!--content-->
<div class="border-bottom-light-2">
    <div class="w-fit">
        <span class="px-3 text-info">اطلاعات مالک کسب‌وکار</span>
        <div class="w-100 mt-2 px-4" style="width: 100%;height: 4px;background: #1ab1d4;border-radius: 5px 5px 0 0"></div>
    </div>
</div>
<div class="row mt-4">
    <div class="pb-4 fs14">
        حساب بانکی باید به نام مالک پنل باشد
    </div>
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div> شماره کارت
                    @if (has_info_confirmed($seller_info , 'cart_number'))
                    <span class="fs12 badge-green me-2">تایید شده</span>
                    @else
                    <span class="fs12 badge-red me-2">تایید نشده</span>
                    @endif
                </div>
                @if ($seller_info->cart_number != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $seller_info->cart_number }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                @if (!has_info_confirmed($seller_info , 'cart_number') && get_seller_status() != 'approvedQueue')
                <svg stroke="currentColor" class="text-info cursor-pointer" data-bs-toggle="modal" data-bs-target="#setNameModal" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                @endif

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div> صاحب حساب
                    @if (has_info_confirmed($seller_info , 'cart_name'))
                    <span class="fs12 badge-green me-2">تایید شده</span>
                    @else
                    <span class="fs12 badge-red me-2">تایید نشده</span>
                    @endif
                </div>
                @if ($seller_info->cart_name != null)
                <div class="fs15 text-dark mt-3 fw600 fv">{{ $seller_info->cart_name }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                @if (!has_info_confirmed($seller_info , 'cart_name') && get_seller_status() != 'approvedQueue')
                <svg stroke="currentColor" fill="none" data-bs-toggle="modal" data-bs-target="#setNationalCode" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" class="text-info" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                @endif
            </div>
        </div>
    </div>
</div>



<!-- name modal -->
<div class="modal fade" id="setNameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">شماره کارت را وارد کنید </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.cart.number')}}" method="post">
                @csrf

                <div class="modal-body">
                    <div class="pb-4 pt-3 fs14">
                        شماره کارت باید متعلق به صاحب کُد ملی باشد
                    </div class="">
                    <label for="" class="fs14">شماره کارت

                    </label>
                    <input type="text" value="@if ($seller_info->cart_number != null){{$seller_info->cart_number}}@endif" name="cart_number" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- national code modal -->
<div class="modal fade" id="setNationalCode" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel"> نام صاحب حساب را وارد کنید</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.cart.name')}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="" class="fs14">نام کامل صاحب حساب

                    </label>
                    <input type="text" value="@if ($seller_info->cart_name != null){{$seller_info->cart_name}}@endif" name="cart_name" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection