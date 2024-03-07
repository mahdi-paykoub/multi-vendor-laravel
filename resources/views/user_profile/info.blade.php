@extends('user_profile.profile_layout', ['class' => 'd-none d-lg-block'])
@section('responsive_setting')
    <div class="d-lg-none d-flex px-3 py-3">
        <div>
            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                 viewBox="0 0 448 512" height="20"
                 width="20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
            </svg>
        </div>
        <div class="icon-dark-color pe-2 fs15">
            اطلاعات حساب کاربری
        </div>
    </div>
    <div class="w-100 sep-m-s mt- d-lg-none"></div>
@endsection
@section('profile_content')
    <!--verify code-->
    <div class="border-responsive px-4 br10 mt-4 mb-5">
        <div class="row">
            <div class="col-12 col-lg-6 px-4 border-left-responsive border-bottom">
                <div class="d-flex justify-content-between align-items-center py-4">
                    <div>
                        <div class="fs15 text-secondary-3"> نام و نام خانوادگی</div>
                        <div class="fs15 mt-2">{{Auth::user()->name}}</div>
                    </div>
                    <svg
                        type="button" data-bs-toggle="modal" data-bs-target="#userNameModal"
                        stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round" height="25" width="25"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center py-4 h-100">
                    <div>
                        <div class="fs15 text-secondary-3">کد ملی</div>
                        @if(($userInfo) !== null)
                            <div class="fs15 mt-2">{{$userInfo->national_code}}</div>
                        @endif
                    </div>
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                         type="button" data-bs-toggle="modal" data-bs-target="#userNationalCodeModal"
                         stroke-linecap="round" stroke-linejoin="round" height="25" width="25"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-4 border-left-responsive border-bottom">
                <div class="d-flex justify-content-between align-items-center py-4 h-100">
                    <div>
                        <div class="fs15 text-secondary-3">شماره موبایل
                            {{--<span class="phone-number-status text-white">تاییدشده</span>--}}
                        </div>
                        @if($userInfo !== null)
                            <div class="fs15 mt-2">{{$userInfo->phone_number}}</div>
                        @endif
                    </div>
                    <svg stroke="currentColor"
                         fill="none" stroke-width="2" viewBox="0 0 24 24"
                         type="button" data-bs-toggle="modal" data-bs-target="#phoneNumberModal"
                         stroke-linecap="round" stroke-linejoin="round" height="25" width="25"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>

                </div>
            </div>
            <div class="col-12 col-lg-6 px-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center py-4 h-100">
                    <div>
                        <div class="fs15 text-secondary-3">ایمیل</div>
                        <div class="fs15 mt-2">{{auth()->user()->email}}</div>
                    </div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                         type="button" data-bs-toggle="modal" data-bs-target="#emailModal"
                         height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M482 152h60q8 0 8 8v704q0 8-8 8h-60q-8 0-8-8V160q0-8 8-8Z"></path>
                        <path d="M192 474h672q8 0 8 8v60q0 8-8 8H160q-8 0-8-8v-60q0-8 8-8Z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-4 border-left-responsive border-bottom">
                <div class="d-flex justify-content-between align-items-center py-4 h-100">
                    <div>
                        <div class="fs15 text-secondary-3">تاریخ تولد</div>
                        <div class="fs20 mt-2">

                        </div>
                    </div>
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                         stroke-linecap="round" stroke-linejoin="round" height="25" width="25"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-4 border-bottom">
                <div class="d-flex justify-content-between align-items-center py-4 h-100">
                    <div>
                        <div class="fs15 text-secondary-3">رمز عبور</div>
                        <div class="fs20 mt-2">
                            •••••••
                        </div>
                    </div>
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                         stroke-linecap="round" stroke-linejoin="round" height="25" width="25"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-4 border-left-responsive">
                <div class="d-flex justify-content-between align-items-center py-4 h-100">
                    <div>
                        <div class="fs15 text-secondary-3">شغل</div>
                        <div class="fs20 mt-2">

                        </div>
                    </div>
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                         stroke-linecap="round" stroke-linejoin="round" height="25" width="25"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 20h9"></path>
                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                    </svg>
                </div>
            </div>

        </div>
    </div>




    <!--user name Modal -->
    <div class="modal fade" id="userNameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 border-0">
                <div class="d-flex justify-content-between border-bottom pb-3">
                    <div class="fs15 fw600 icon-dark-color">
                        ثبت اطلاعات شناسایی
                    </div>
                    <div>
                        <svg
                            type="button" data-bs-dismiss="modal" aria-label="Close"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                        </svg>
                    </div>
                </div>
                <form action="{{route('update.user.name')}}" method="post">
                    @csrf
                    <div class="mt-3 text-secondary fs14 lh2">
                        لطفا اطلاعات شناسایی خود را وارد کنید. نام و نام خانوادگی شما باید با اطلاعاتی که وارد می‌کنید
                        همخوانی داشته باشند.
                    </div>
                    <div class="mt-4">
                        <span class="icon-dark-color"> نام و نام خانوادگی</span>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="mt-2">
                        <input type="text" name="name" value="{{Auth::user()->name}}"
                               class="w-100 identify-inputs br7 on-hover-border-inp">
                        @error('name')
                        <span class="fs13 text-digi-red px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-start mt-4 pt-2">
                        <button type="submit" class="btn btn-danger bg-digi-red br7 fs14 btn-padding-2">ثبت اطلاعات
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--national code Modal -->
    <div class="modal fade" id="userNationalCodeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 border-0">
                <div class="d-flex justify-content-between border-bottom pb-3">
                    <div class="fs15 fw600 icon-dark-color">
                        ثبت اطلاعات شناسایی
                    </div>
                    <div>
                        <svg
                            type="button" data-bs-dismiss="modal" aria-label="Close"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                        </svg>
                    </div>
                </div>
                <form action="{{route('update.user.nationalCode')}}" method="post">
                    @csrf
                    <div class="mt-3 text-secondary fs14 lh2">
                        لطفا اطلاعات شناسایی خود را وارد کنید. نام و نام خانوادگی شما باید با اطلاعاتی که وارد می‌کنید
                        همخوانی داشته باشند.
                    </div>
                    <div class="mt-4">
                        <span class="icon-dark-color">کد ملی</span>
                        <span class="text-danger">*</span>
                    </div>
                    <div class="mt-2">
                        @if($userInfo === null)
                            <input type="text" name="national_code"
                                   class="w-100 identify-inputs br7 on-hover-border-inp">
                        @else
                            <input type="text" name="national_code" value="{{$userInfo->national_code}}"
                                   class="w-100 identify-inputs br7 on-hover-border-inp">
                        @endif
                        @error('national_code')
                        <span class="fs13 text-digi-red px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-start mt-4 pt-2">
                        <button type="submit" class="btn btn-danger bg-digi-red br7 fs14 btn-padding-2">ثبت اطلاعات
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--email Modal -->
    <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 border-0">
                <div class="d-flex justify-content-between border-bottom pb-3">
                    <div class="fs15 fw600 icon-dark-color">
                        ویرایش پست الکترونیکی
                    </div>
                    <div>
                        <svg
                            type="button" data-bs-dismiss="modal" aria-label="Close"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                        </svg>
                    </div>
                </div>
                <form action="{{route('update.user.email')}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <input type="text" name="email" value="{{auth()->user()->email}}"
                               class="w-100 identify-inputs br7 on-hover-border-inp">
                        @error('email')
                        <span class="fs13 text-digi-red px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-start mt-4 pt-2">
                        <button type="submit" class="btn btn-danger bg-digi-red br7 fs14 btn-padding-2">ثبت اطلاعات
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--phone number Modal -->
    <div class="modal fade" id="phoneNumberModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-4 border-0">
                <div class="d-flex justify-content-between border-bottom pb-3">
                    <div class="fs15 fw600 icon-dark-color">
                        ویرایش شماره موبایل
                    </div>
                    <div>
                        <svg
                            type="button" data-bs-dismiss="modal" aria-label="Close"
                            stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                            height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M289.94 256l95-95A24 24 0 00351 127l-95 95-95-95a24 24 0 00-34 34l95 95-95 95a24 24 0 1034 34l95-95 95 95a24 24 0 0034-34z"></path>
                        </svg>
                    </div>
                </div>
                <form action="{{route('update.user.phoneNumber')}}" method="post">
                    @csrf
                    <div class="mt-3">
                        @if($userInfo === null)
                            <input type="text" name="phone_number"
                                   class="w-100 identify-inputs br7 on-hover-border-inp">
                        @else
                            <input type="text" name="phone_number" value="{{$userInfo->phone_number}}"
                                   class="w-100 identify-inputs br7 on-hover-border-inp">
                        @endif
                        @error('phone_number')
                        <span class="fs13 text-digi-red px-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-start mt-4 pt-2">
                        <button type="submit" class="btn btn-danger bg-digi-red br7 fs14 btn-padding-2">ثبت اطلاعات
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
