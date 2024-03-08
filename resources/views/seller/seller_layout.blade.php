@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/seller-register.css')}}"/>
@endsection
@section('map_styles')
    <link rel="stylesheet" href="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.css"/>

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3 px-0">
                <div class="d-md-none pt-4 pb-2 p-4">
                    <svg stroke="currentColor" class="cursor-pointer" fill="currentColor" stroke-width="0"
                         viewBox="0 0 16 16" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                    </svg>

                    <span class="me-2">  وضعیت خود را انتخاب کنید</span>

                </div>
                <div class="right-progress-menu w-100 pt-lg-5 py-4 pe-md-2 pe-lg-4">

                    <!--desktop-->
                    <div class="d-none d-md-block">
                        <div class="d-flex align-items-center fw600 fs15 my-2">
                            <div class="icon-p-shape i-active">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="22"
                                     width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M12,22 C17.5228475,22 22,17.5228475 22,12 C22,6.4771525 17.5228475,2 12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 Z M12,10 L12,18 M12,6 L12,8"></path>
                                </svg>
                            </div>
                            <div class="me-2">
                                اطلاعات
                            </div>
                        </div>
                        <!--subs-->
                        <div class="subset-of-progress-menu sub-active fw600">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                 height="16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            <span class="me-1 fs12">وضعیت فروشنده</span>
                        </div>
                        <div class="subset-of-progress-menu fw600">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                 height="16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            <span class="me-1 fs12">وضعیت فروشنده</span>
                        </div>
                        <div class="d-flex align-items-center fw600 fs15 my-2">
                            <div class="icon-p-shape">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="22"
                                     width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path>
                                </svg>
                            </div>
                            <div class="me-2 text-secondary">
                                آدرس
                            </div>
                        </div>
                        <!--subs-->
                        <div class="subset-of-progress-menu fw600">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                 height="16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            <span class="me-1 fs12">وضعیت فروشنده</span>
                        </div>
                        <div class="subset-of-progress-menu fw600">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                 height="16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            <span class="me-1 fs12">وضعیت فروشنده</span>
                        </div>
                        <div class="d-flex align-items-center fw600 fs15 my-2">
                            <div class="icon-p-shape">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="22"
                                     width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path>
                                </svg>
                            </div>
                            <div class="me-2 text-secondary">
                                آموزش
                            </div>
                        </div>
                        <!--subs-->
                        <div class="subset-of-progress-menu fw600">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                 height="16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            <span class="me-1 fs12">وضعیت فروشنده</span>
                        </div>
                        <div class="subset-of-progress-menu fw600">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                 height="16"
                                 width="16" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zm2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5z"></path>
                            </svg>
                            <span class="me-1 fs12">وضعیت فروشنده</span>
                        </div>

                        <div class="d-flex align-items-center fw600 fs15 my-2">
                            <div class="icon-p-shape">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="22"
                                     width="22" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10 .002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"></path>
                                </svg>
                            </div>
                            <div class="me-2 text-secondary">
                                ورود به پنل
                            </div>
                        </div>
                    </div>

                    <!--mobile-->
                    <div class="d-flex justify-content-between px-4 d-md-none">
                        <div class="d-flex align-items-center">
                            <div class="mobile-p-shapes icon-p-shape i-active">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="15"
                                     width="15" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M12,22 C17.5228475,22 22,17.5228475 22,12 C22,6.4771525 17.5228475,2 12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 Z M12,10 L12,18 M12,6 L12,8"></path>
                                </svg>
                            </div>
                            <div class="fs11 fw600 icon-dark-color me-1">اطلاعات</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mobile-p-shapes icon-p-shape i-active">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="15"
                                     width="15" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M12,22 C17.5228475,22 22,17.5228475 22,12 C22,6.4771525 17.5228475,2 12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 Z M12,10 L12,18 M12,6 L12,8"></path>
                                </svg>
                            </div>
                            <div class="fs11 fw600 icon-dark-color me-1">اطلاعات</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mobile-p-shapes icon-p-shape i-active">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="15"
                                     width="15" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M12,22 C17.5228475,22 22,17.5228475 22,12 C22,6.4771525 17.5228475,2 12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 Z M12,10 L12,18 M12,6 L12,8"></path>
                                </svg>
                            </div>
                            <div class="fs11 fw600 icon-dark-color me-1">اطلاعات</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mobile-p-shapes icon-p-shape i-active">
                                <svg stroke="currentColor" class="text-white" fill="currentColor" stroke-width="0"
                                     viewBox="0 0 24 24" height="15"
                                     width="15" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-width="2"
                                          d="M12,22 C17.5228475,22 22,17.5228475 22,12 C22,6.4771525 17.5228475,2 12,2 C6.4771525,2 2,6.4771525 2,12 C2,17.5228475 6.4771525,22 12,22 Z M12,10 L12,18 M12,6 L12,8"></path>
                                </svg>
                            </div>
                            <div class="fs11 fw600 icon-dark-color me-1">اطلاعات</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-9 mb-5">
                @yield('main_content')
            </div>
        </div>
    </div>
    {{--address modal--}}
    <div class="modal fade" style="z-index: 1000000;"
         id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0">
                <div class="modal-body mt-4 px-4">
                    <form action="{{route('seller.address.logic')}}" method="post">
                        @csrf
                        <div>
                            <label for="">
                                استان <span class="text-digi-red">*</span>
                            </label>
                            <input type="text" class="form-control mt-1 shop_state" name="shop_state">
                            @error('shop_state')
                            <div class="fs13 px-1 text-digi-red mt-2">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                     stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line
                                        x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01"
                                          y2="16"></line>
                                </svg>
                                <span class="me-1">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="">
                                شهر <span class="text-digi-red">*</span>
                            </label>
                            <input type="text" class="form-control mt-1 shop_city" name="shop_city">
                            @error('shop_city')
                            <div class="fs13 px-1 text-digi-red mt-2">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                     stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line
                                        x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01"
                                          y2="16"></line>
                                </svg>
                                <span class="me-1">{{ $message }}</span>
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="">
                                آدرس <span class="text-digi-red">*</span>
                            </label>
                            <input type="text" class="form-control mt-1 shop_address" name="shop_address">
                            @error('shop_address')
                            <div class="fs13 px-1 text-digi-red my-2">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                     stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line
                                        x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01"
                                          y2="16"></line>
                                </svg>
                                <span class="me-1">{{ $message }}</span>
                            </div>
                            @enderror
                            <div class="fs12 text-secondary mt-1">آدرس مطابق با مکان انتخابی شما روی نقشه و قابل ‌ویرایش
                                است
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-6">
                                <label for="">
                                    پلاک
                                </label>
                                <input type="text" class="form-control mt-1">
                            </div>
                            <div class="col-6">
                                <label for="">
                                    کد پستی <span class="text-digi-red">*</span>
                                </label>
                                <input type="text" class="form-control mt-1" name="postal_code">
                                @error('postal_code')
                                <div class="fs13 px-1 text-digi-red my-2">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                         stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line
                                            x1="12" y1="8" x2="12" y2="12"></line>
                                        <line x1="12" y1="16" x2="12.01"
                                              y2="16"></line>
                                    </svg>
                                    <span class="me-1">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="my-4 pt-1 mt-3">
                            <div class="text-end mt-4">
                                <button type="button" data-bs-dismiss="modal" aria-label="Close"
                                        class="br7 px-4 btn fs14 fw600 confirm-btn bg-transparent border text-info">بعدا
                                    انتخاب
                                    میکنم
                                </button>
                                <button type="submit" class="br7 btn fs14 fw600 text-white confirm-btn ms-1">تایید
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="{{asset('/assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="https://static.neshan.org/sdk/leaflet/v1.9.4/neshan-sdk/v1.0.8/index.js"></script>


    <script>
        var swiper5 = new Swiper(".question_swiper", {
            speed: 200,
            navigation: {
                nextEl: ".seller-next-qu",
            },
         /*   effect: 'fade',*/
        });


        const testLMap = new L.Map("map", {
            key: "web.7f108dbefd34420ab21ea5b72beb9eee",
            maptype: "neshan",
            poi: false,
            traffic: false,
            center: [35.699756, 51.338076],
            zoom: 14,
        })


        function onMapClick(e) {
            $lng = e.latlng.lng
            $lat = e.latlng.lat

            $.ajaxSetup({
                headers: {'Api-Key': 'service.fd80e037e6174b4c8763e069fce2a22c'}
            })

            $.ajax({
                type: 'get',
                url: 'https://api.neshan.org/v5/reverse?lat=' + $lat + '&lng=' + $lng + '',
                success: function (res) {
                    $city = res.city
                    $state = res.state
                    $formatted_address = res.formatted_address

                    $('.shop_address').val($formatted_address)
                    $('.shop_city').val($city)
                    $('.shop_state').val($state)
                }
            })
            $('#addressModal').modal('toggle');

            var myModal = document.getElementById('addressModal')
        }

        testLMap.on('click', onMapClick);


        $("#main-sr-addr-inp").on("keyup paste", function () {
            $inpuValue = $(this).val()

            $.ajaxSetup({
                headers: {'Api-Key': 'service.375ba0da42d041468bb987e2e6b653dc'}
            })
            $.ajax({
                type: 'get',
                url: 'https://api.neshan.org/v1/search?term=' + $inpuValue + '&lat=' + 35.699756 + '&lng=' + 51.338076 + '',
                success: function (data) {
                    console.log(data)
                    var res = '';
                    $.each(data.items, function (key, value) {
                        $cus_class = key == 0 ? "" : "pt-3"
                        res +=
                            '<div data-x="' + value.location.x + '" data-y="' + value.location.y + '" class="d-flex response-of-location-search cursor-pointer ' + $cus_class + '">' +
                            '<svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">' +
                            '<path fill="none" stroke-width="2" d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z"></path> </svg>' +
                            '<div class="me-2 w-100 text-start border-bottom pb-3">' +
                            '<div class="fs15 text-dark">' + value.title + '</div>' +
                            '<div class="text-secondary mt-2 fs13">' + value.address + '</div></div>' +
                            '</div>'
                    });

                    $('.ajx-res-src-val').addClass('d-block').html(res);
                    if ($inpuValue == '') {
                        $('.ajx-res-src-val').removeClass('d-block').addClass('display-none');
                    }

                    $('.response-of-location-search').click(function () {
                        $lat_n = $(this).attr('data-x')
                        $lng_n = $(this).attr('data-y')

                        testLMap.setView(new L.LatLng($lng_n, $lat_n), 16, { animation: true });

                        $('.ajx-res-src-val').removeClass('d-block').addClass('display-none');

                    })
                }
            });
        });


    </script>
@endsection
