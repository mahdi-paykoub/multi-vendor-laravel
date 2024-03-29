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
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div> نام و نام خانوادگی</div>
                @if ($seller_info->name != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $seller_info->name }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" class="text-info cursor-pointer" data-bs-toggle="modal" data-bs-target="#setNameModal" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>کُد ملی</div>
                @if ($seller_info->national_code != null)
                <div class="fs15 text-dark mt-3 fw600 fv">{{ $seller_info->national_code }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" fill="none" data-bs-toggle="modal" data-bs-target="#setNationalCode" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" class="text-info" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>شماره موبایل ثبت‌نام <span class="fs14 text-danger">*</span>
                <span class="fs12 badge-green me-2">تایید شده</span>
                </div>
                <div class="fs15 text-dark mt-3 fw600 fv">{{ $phone_number }} </div>
            </div>
           
        </div>
    </div>
    <div class="col-12 col-lg-6 px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>ایمیل<span class="fs14 text-danger">*</span> </div>
                @if ($seller_info->email != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $seller_info->email }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" fill="none" data-bs-toggle="modal" data-bs-target="#setEmailModal" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" class="text-info" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>

            </div>
        </div>
    </div>
    <!-- <div class="col-12 col-lg-6 border-left-responsive px-4 py-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>ایمیل <span class="fs14 text-danger">*</span> </div>
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
            </div>
            <div>
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" class="text-info" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>

            </div>
        </div>
    </div> -->
</div>



<!-- name modal -->
<div class="modal fade" id="setNameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">اطلاعات خود را وارد کنید</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.name')}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="" class="fs14">نام و نام خانوادگی</label>
                    <input type="text" name="name" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
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
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">اطلاعات خود را وارد کنید</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.nationalCode')}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="" class="fs14">کدملی</label>
                    <input type="text" name="national_code" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- email  modal -->
<div class="modal fade" id="setEmailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">اطلاعات خود را وارد کنید</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.email')}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="" class="fs14">ایمیل</label>
                    <input type="text" name="email" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection