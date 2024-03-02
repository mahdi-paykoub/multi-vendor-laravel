@extends('seller.seller_layout')

@section('main_content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9 mb-4 mb-lg-5">
            <div class="mt-md-5 pt-lg-5 d-none d-md-block fs20 icon-dark-color">
                <svg stroke="currentColor" class="cursor-pointer" fill="currentColor" stroke-width="0"
                     viewBox="0 0 16 16" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg>
                انتخاب موقعیت مکانی روی نقشه
            </div>
        </div>
        <div class="col-12 col-lg-9 border-responsive br7 p-4">
            <div class="text-center position-relative">
                <div id='map' class="seller-address-map w-100 br10"></div>
                <div class="search_address_inp position-absolute w-100">
                    <input type="text" class="px-3 border" id="main-sr-addr-inp" placeholder="جستجوی آدرس">
                    <div class="ajx-res-src-val mx-auto">
                        {{--add response here--}}
                    </div>
                </div>
            </div>
            <div class="mt-2 fs13 text-secondary px-3">آدرس خود را بر روی نقشه انتخاب کنید</div>
        </div>
    </div>
@endsection

