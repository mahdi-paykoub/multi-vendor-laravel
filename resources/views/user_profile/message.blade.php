@extends('user_profile.profile_layout', ['class' => 'd-none d-lg-block'])
@section('responsive_setting')
<div class="d-lg-none d-flex px-3 py-3">
    <div>
        <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
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

        @if (count($notifications) != 0)
        @foreach ($notifications as $notification)
        <div class="border-bottom py-4">
            <div class="d-flex">
                <div>
                    <div class="speaker-img-pa bg-digi-red rounded-circle px-1">
                        <img src="{{url('assets/frontend/image/text/speaker.webp')}}" width="16" height="16" alt="">

                    </div>
                </div>
                <div class="me-3 w-100">
                    <div class="fs14">
                        {{ $notification->title }}
                    </div>
                    <div class="text-secondary-2 fs13 mt-2">
                        {{ substr($notification->description, 0, 100) . ' ...' }}
                    </div>
                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        <div>
                            @if ($notification->link !=null)
                            <a href="/{{$notification->link}}" class="text-info fs13 fw600">
                                @else
                                <a href="/profile/notification/detail/{{$notification->id}}" class="text-info fs13 fw600">

                                    @endif
                                    جزئیات بیشتر
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                        </path>
                                    </svg>
                                </a>
                        </div>
                        <div class="fs12 text-secondary mt-2">
                            <span class="ps-1 fv">{{jdate($notification->created_at)->format('%d')}} </span>
                            <span class="ps-1 fv">{{jdate($notification->created_at)->format('%B')}} </span>
                            <span class="fv">{{jdate($notification->created_at)->format('%Y')}} </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <!-- empty -->
        <div class="col-6 col-md-5 col-lg-3 text-center py-5">
            <img src="{{asset('assets/frontend/image/text/empty-notification.svg')}}" class="w-100 p-3" alt="">
            <div class="fs14 icon-dark-color">
                هنوز پیامی نیومده
            </div>
        </div>
        @endif


    </div>
</div>
@endsection