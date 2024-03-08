@extends('user_profile.profile_layout', ['class' => 'd-none d-lg-block'])
@section('responsive_setting')
    <div class="d-lg-none d-flex px-3 py-3">
        <div>
            <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0"
                 viewBox="0 0 448 512" height="20"
                 width="20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"></path>
            </svg>
        </div>
        <div class="icon-dark-color pe-2 fs15">
            دیدگاه‌ها
        </div>
    </div>
    <div class="w-100 sep-m-s d-lg-none"></div>
@endsection
@section('profile_content' )
    <div class="border-responsive pt-lg-4 br10">
        <div class="d-none d-lg-block px-4 icon-dark-color fs15 fw600">
            <div> دیدگاه‌ها</div>
        </div>
        <ul class="nav nav-tabs justify-content-around justify-content-lg-start mt-lg-5 mt-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="bg-transparent border-0 px-3 text-secondary fs15res active-user-tab-menu active"
                        id="current-orders" data-bs-toggle="tab"
                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">در انتظار ثبت نظر
                    <span class="badge fv">3</span>
                </button>
                <div class="mt-2"></div>
            </li>
            <li class="nav-item" role="presentation">
                <button class="bg-transparent border-0 px-3  text-secondary fs15res active-user-tab-menu"
                        id="delivered-orders"
                        data-bs-toggle="tab"
                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">دیدگاه‌های من
                    <span class="badge bg-secondary-4">۱</span>
                </button>
                <div class="mt-2"></div>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            {{--first content--}}
            <div class="tab-pane fade show active p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!--my product comments-->
                <div class="p-3 br10 d-flex align-items-center" style="background: rgba(89,214,235,.1);">
                    <img src="{{asset('assets/frontend/image/text/get-points.svg')}}" width="58" height="50" alt="">
                    <div class="fs13">
                        <div class=""> از این کالاها راضی هستید؟</div>
                        <div class="mt-1 text-secondary">
                            با ثبت دیدگاه برای هر کالا ۵ امتیاز از دیجی‌کلاب بگیرید!
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 col-lg-6 mt-3">
                        <div class="border-responsive br10 p-lg-3">
                            <div class="d-flex mt-2">
                                <img
                                    src="{{asset('assets/frontend/image/product/8a24458523e54b6bca1dbe5337652122c365e067_1674033576.webp')}}"
                                    width="96" onwheel="96" alt="">
                                <div class="fw600 mt-2 fs14 icon-dark-color">
                                    هدفون بی سیم مدل HBQ-I7
                                </div>
                            </div>
                            <button class="btn btn-outline-danger fs13 mt-4 br10 w-100 btn-padding-2">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                     stroke-linecap="round" stroke-linejoin="round" height="20" width="20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"></path>
                                </svg>
                                <span class="me-2"> ثبت دیدگاه و امتیاز</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{--secon content--}}
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!--all comments-->
                @if(count($user_comments) !== 0)
                    @foreach($user_comments as $user_comment)
                        @if ($user_comment->commentable_type === \App\Models\Product::class)
                            @php
                                $productImg=$user_comment->commentable->galleries()->first()->image;
                            @endphp
                            <div class="d-md-flex d-block px-lg-4 mt-3 align-items-center pb-3">
                                <div class="">
                                    <img src="{{$productImg}}" width="80" height="80"
                                         alt="">
                                    <div
                                        class="badge bg-rate-{{$user_comment->rate}} fs11 h-fit float-start mt-2 ms-2 fv">
                                        {{$user_comment->rate}}.۰

                                    </div>
                                </div>
                                <div class="w-100 mt-2 mt-lg-0 ps-2">
                                    <div class="d-flex justify-content-between me-3 border-bottom-light-2 w-100 mt-2">
                                        <div class="icon-dark-color fs15res pb-3 fw600 lh2">
                                            {{$user_comment->title}}
                                            @if($user_comment->approved !== 0)
                                                <span
                                                    class="comment-verified-badge fs11 fw600 br15 ms-3 me-2 d-inline-block mt-2">تایید شده</span>
                                            @endif
                                        </div>
                                        <div>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                 viewBox="0 0 16 16"
                                                 height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="me-3 border-bottom-light-2 w-100 mt-3">
                                        <div class="text-secondary fs15res pb-3 lh2">
                                            {{$user_comment->comment}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                @else
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-5 col-lg-3 text-center py-5">
                            <img src="{{asset('assets/frontend/image/text/order-empty.svg')}}" class="w-100 p-3" alt="">
                            <div class="fs12 icon-dark-color">
                                هنوز هیچ نظری ندارید
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="mb-5"></div>

@endsection




