@extends('layouts.app')

@section('content')
    @include('layouts.product_parts.topbar')
    @include('layouts.product_parts.navbar')
    @include('layouts.product_parts.main_menu')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <div class="mt-5 icon-dark-color fw600 fs18">
                    صفحه‌ای که دنبال آن بودید پیدا نشد!
                </div>
                <div class="mt-4">
                    <a href="{{route('main')}}" class="text-info fs12 fw600 fv">
                        صفحه اصلی
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="15"
                             width="15" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.939 4.939 6.879 12l7.06 7.061 2.122-2.122L11.121 12l4.94-4.939z"></path>
                        </svg>
                    </a>
                </div>
                <div class="mt-5">
                    <img src="{{url('assets/frontend/image/text/page-not-found.webp')}}" width="60%" alt="">
                </div>
            </div>
        </div>
    </div>

    @include('layouts.product_parts.footer')
@endsection
