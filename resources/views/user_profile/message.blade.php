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
            پیغام ها
        </div>
    </div>
    <div class="w-100 sep-m-s mt- d-lg-none"></div>
@endsection
@section('profile_content')
    <div class="border-responsive p-4 br10 mb-5">
        <!--empty-->
        <div class="row justify-content-center">
            <div class="d-none d-lg-block">
                <div>پیغام ها</div>
                <div class="border-custom-bottom bg-danger mt-2"></div>
            </div>
            <div class="col-6 col-md-5 col-lg-3 text-center py-5 mt-5">
                <img src="{{asset('assets/frontend/image/text/empty-notification.svg')}}" class="w-100 p-3" alt="">
                <div class="fs14 icon-dark-color">
                    هنوز پیامی نیومده
                </div>
            </div>
        </div>
    </div>
@endsection
