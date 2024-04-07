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
        <div class="col-12 bg-white br10 p-4 mb-5">
            <div class="fs15"> {{ $notification->title }}</div>
            <div class="mt-4 lh2 text-secondary fs14">
                {{ $notification->description }}
            </div>
            <div class="fs12 text-secondary mt-4">
                <span class="ps-1 fv">{{jdate($notification->created_at)->format('%d')}} </span>
                <span class="ps-1 fv">{{jdate($notification->created_at)->format('%B')}} </span>
                <span class="fv">{{jdate($notification->created_at)->format('%Y')}} </span>
            </div>
        </div>
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