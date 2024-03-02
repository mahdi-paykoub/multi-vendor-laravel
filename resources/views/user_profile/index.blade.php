@extends('user_profile.profile_layout')
@section('responsive_setting')
    <div class="d-lg-none d-flex px-3 py-3 justify-content-between">
        <div>
            <svg stroke="currentColor" class="icon-dark-color" fill="none" stroke-width="2" viewBox="0 0 24 24"
                 stroke-linecap="round"
                 stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
            </svg>
        </div>
        <div>
            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                 viewBox="0 0 256 256" height="24"
                 width="24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M204.73,51.85A108.07,108.07,0,0,0,20,128v56a28,28,0,0,0,28,28H64a28,28,0,0,0,28-28V144a28,28,0,0,0-28-28H44.84A84.05,84.05,0,0,1,128,44h.64a83.7,83.7,0,0,1,82.52,72H192a28,28,0,0,0-28,28v40a28,28,0,0,0,28,28h19.6A20,20,0,0,1,192,228H136a12,12,0,0,0,0,24h56a44.05,44.05,0,0,0,44-44V128A107.34,107.34,0,0,0,204.73,51.85ZM64,140a4,4,0,0,1,4,4v40a4,4,0,0,1-4,4H48a4,4,0,0,1-4-4V140Zm124,44V144a4,4,0,0,1,4-4h20v48H192A4,4,0,0,1,188,184Z"></path>
            </svg>
            <svg stroke="currentColor" class="me-3 icon-dark-color" fill="currentColor" stroke-width="0"
                 viewBox="0 0 24 24" height="25" width="25"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                    d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"></path>
            </svg>
        </div>
    </div>
@endsection
@section('profile_content')
    <div class="border-responsive p-4 br10">
        <div class="d-flex justify-content-between">
            <div class="icon-dark-color fs15 fw600">
                <div>سفارش‌های من</div>
                <div class="border-custom-bottom bg-digi-red mt-3"></div>
            </div>
            <div>
                <a href="" class="fs13 text-info">
                    مشاهده همه
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                         height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4 text-center text-md-end">
                <div class="d-md-flex d-block align-items-center">
                    <img src="{{asset('assets/frontend/image/text/orders.svg')}}" width="64" height="64" alt="">
                    <div class="me-md-2">
                        <div class="fs14 fw600 icon-dark-color d-none d-md-block">۰ سفارش</div>
                        <div class="fs12 mt-2 mt-md-3">جاری</div>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center text-md-end">
                <div class="d-md-flex d-block align-items-center">
                    <img src="{{asset('assets/frontend/image/text/bashop-g.svg')}}" width="64" height="64" alt="">
                    <div class="me-md-2">
                        <div class="fs14 fw600 icon-dark-color d-none d-md-block">۰ سفارش</div>
                        <div class="fs12 mt-2 mt-md-3">تحویل شده</div>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center text-md-end">
                <div class="d-md-flex d-block align-items-center">
                    <img src="{{asset('assets/frontend/image/text/back-pro.svg')}}" width="64" height="64" alt="">
                    <div class="me-md-2">
                        <div class="fs14 fw600 icon-dark-color d-none d-md-block">۰ سفارش</div>
                        <div class="fs12 mt-2 mt-md-3">مرجوع شده</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
