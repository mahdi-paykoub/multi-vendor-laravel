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
                لطفا به این سوالات پاسخ دهید
            </div>
        </div>
        <div class="col-10 border-responsive br7 p-4">
            <form action="">
                <div class="swiper mySwiper question_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-md-3">
                            <div> شغل اصلی شما چیست؟</div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label fs14 text-secondary" for="flexRadioDefault1">
                                    کارمند
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2"
                                       checked>
                                <label class="form-check-label  fs14 text-secondary" for="flexRadioDefault2">
                                    شغل آزاد
                                </label>
                            </div>

                        </div>
                        <div class="swiper-slide px-md-3">
                            <div> شغل اصلی شما چیست؟</div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault1">
                                <label class="form-check-label fs14 text-secondary" for="flexRadioDefault1">
                                    sfvdfv
                                </label>
                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                       id="flexRadioDefault2"
                                       checked>
                                <label class="form-check-label  fs14 text-secondary" for="flexRadioDefault2">
                                    dfvfdv
                                </label>
                            </div>

                        </div>
                    </div>

                   {{-- <div class="seller-next-qu">
                        <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="30"
                             width="30" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
                        </svg>
                    </div>--}}
                </div>
            </form>

            <div class="mt-5 text-secondary fs14 px-md-3">
                سوال ۱ از ۶
            </div>

            <div class="text-start mt-5 text-end">
                <a href="{{route('final.seller.panel.view')}}"
                   class="br7 px-4 btn fs14 fw600 confirm-btn bg-transparent border text-info">بعدا پاسخ
                    میکنم
                </a>
                <button class="br7 btn fs14 fw600 text-white confirm-btn me-2">تایید</button>
            </div>
        </div>

    </div>

@endsection
