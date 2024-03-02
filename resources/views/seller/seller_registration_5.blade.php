@extends('seller.seller_layout')

@section('main_content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 mb-4 mb-lg-5">
            <div class="mt-md-5 pt-lg-5 d-none d-md-block  fs20 icon-dark-color">
                <svg stroke="currentColor" class="cursor-pointer" fill="currentColor" stroke-width="0"
                     viewBox="0 0 16 16" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg>
                ورود به پنل
            </div>
        </div>
        <div class="col-10 border-responsive br7 p-5">
            <div class="fs20 text-center fw600 icon-dark-color">
                به خانواده بزرگ فروشندگان دیجی‌کالا خوش آمدید!
            </div>
            <div class="mt-4 text-center">
                <img src="assets/image/text/890f29859841e4c432c2.png" width="320" height="240" alt="">
            </div>
            <div class=" text-center">
                <form action="{{route('final.seller.register')}}" method="post">
                    @csrf
                    <button class="br7 btn fs14 fw600 text-white confirm-btn me-2">ورود به پنل</button>
                </form>
            </div>

        </div>

    </div>
@endsection
