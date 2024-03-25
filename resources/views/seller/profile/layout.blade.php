@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

@section('content')
@include('layouts.seller_panel_parts.header')

<!--content-->
<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="bg-white br10 py-3">
                <!--add shop logo-->
                <div class="right-menu-box-p">
                    <div class="d-flex px-3 border-bottom-menu-bar pb-4 align-items-center">
                        <div class="add-logo-btn-box br10 d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="19" width="19" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M363 277h-86v86h-42v-86h-86v-42h86v-86h42v86h86v42z"></path>
                                    <path d="M256 90c44.3 0 86 17.3 117.4 48.6C404.7 170 422 211.7 422 256s-17.3 86-48.6 117.4C342 404.7 300.3 422 256 422c-44.3 0-86-17.3-117.4-48.6C107.3 342 90 300.3 90 256c0-44.3 17.3-86 48.6-117.4C170 107.3 211.7 90 256 90m0-42C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48z">
                                    </path>
                                </svg>
                                <div class="fs12">
                                    افزودن
                                </div>
                            </div>
                        </div>
                        <div class="fs15 fw600 icon-dark-color me-4">
                            لاراولیک
                        </div>
                    </div>

                    <a href="{{route('seller.profile.view')}}" class="d-flex align-items-center border-bottom-menu-bar {{is_active_route('seller.profile.view' , 'active')}} text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                            </path>
                        </svg>
                        <div class="me-3 fs15">
                            اطلاعات مالک کسب‌وکار
                        </div>
                    </a>

                    <a href="{{route('seller.profile.store.info')}}" class="d-flex align-items-center border-bottom-menu-bar {{is_active_route('seller.profile.store.info' , 'active')}} text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z"></path>
                        </svg>
                        <div class="me-3 fs15">
                            اطلاعات فروشگاه
                        </div>
                    </a>
                    <a href="{{route('seller.profile.address')}}" class="d-flex align-items-center border-bottom-menu-bar {{is_active_route('seller.profile.address' , 'active')}} text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-width="2" d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z"></path>
                        </svg>
                        <div class="me-3 fs15">
                            آدرس‌ها
                        </div>
                    </a>
                    <a href="{{route('seller.profile.finance')}}" class="d-flex align-items-center border-bottom-menu-bar {{is_active_route('seller.profile.finance' , 'active')}} text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                        </svg>
                        <div class="me-3 fs15">
                            مالی
                        </div>
                    </a>
                    <a href="{{route('seller.profile.document.info')}}" class="d-flex align-items-center border-bottom-menu-bar {{is_active_route('seller.profile.document.info' , 'active')}} text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11zM8 15.01l1.41 1.41L11 14.84V19h2v-4.16l1.59 1.59L16 15.01 12.01 11 8 15.01z"></path>
                        </svg>
                        <div class="me-3 fs15">
                            مدارک
                        </div>
                    </a>
                    <a href="" class="d-flex align-items-center border-bottom-menu-bar text-dark">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 336v40a40 40 0 0 1-40 40H104a40 40 0 0 1-40-40V136a40 40 0 0 1 40-40h152c22.09 0 48 17.91 48 40v40m64 160 80-80-80-80m-192 80h256"></path>
                        </svg>
                        <div class="me-3 fs15">
                            خروج از حساب کاربری
                        </div>
                    </a>

                </div>

            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="bg-white w-100 p-3 br10">

                @yield('profile_content')
            </div>
        </div>
    </div>
</div>



@include('layouts.seller_panel_parts.footer')
@endsection