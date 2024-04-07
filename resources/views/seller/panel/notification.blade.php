@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

@section('content')
@include('layouts.seller_panel_parts.header')


<!--content-->
<div class="container px-4 mt-5">
    <div class="d-md-flex align-items-center d-block">
        <div class="fs14 fw600 text-secondary ps-2">اعلان ها</div>
        <svg stroke="currentColor" class="d-none d-md-block" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 5v14"></path>
        </svg>
        <div class="fs13 text-secondary pe-2 mt-2 mt-md-0 lh2">
            اینجا می‌توانید اعلان‌های دیجی‌کالا را ببینید
        </div>
    </div>
</div>

<div class="container px-4 mt-4">
    <div class="row">
        @if (count(get_seller_by_token()->notifications()->get()) != 0)
        <div class="col-12 bg-white br10 p-4 pb-0 mb-5">
            @foreach (get_seller_by_token()->notifications()->get() as $notification)
            <div class="d-flex @if (!$loop->last)
            border-bottom-light-2
            @endif pb-4 mb-4">
                <div>
                    <div class="speaker-img-pa bg-info rounded-circle px-1">
                        <img src="http://localhost:8000/assets/frontend/image/text/speaker.webp" width="16" height="16" alt="">

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
                                <a href="/seller-panel/notofication/detail/{{$notification->id}}" class="text-info fs13 fw600">

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
            @endforeach
        </div>
        @else
        <div class="col-12 bg-white br10 p-4 text-center mb-5">
            <img src="{{url('assets/frontend/image/text/emptymsg.png')}}" alt="">
            <div class="fs14 mt-3">نتیجه‌ای پیدا نکردیم...</div>
            <div class="fs12 text-secondary mt-2">فیلترها را تغییر دهید و دوباره امتحان کنید</div>
        </div>
        @endif
    </div>
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