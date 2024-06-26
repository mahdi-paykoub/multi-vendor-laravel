@extends('seller.profile.layout')

@section('profile_content')


<!--content-->
<div class="border-bottom-light-2">
    <div class="w-fit">
        <span class="px-3 text-info">آدرس شما
        </span>
        <div class="w-100 mt-2 px-4" style="width: 100%;height: 4px;background: #1ab1d4;border-radius: 5px 5px 0 0"></div>
    </div>
</div>
<div class="d-lg-flex justify-content-between align-items-center mt-3 border-bottom-light-2 pb-3">
    <div class="fs14">
        اینجا می‌توانید آدرس‌‌هایتان را ببنید و مدیریت کنید
        @if (!has_info_confirmed($shop_info , 'address'))
        <span class="fs12 badge-red me-2">تایید نشده</span>
        @endif
    </div>
    <div class="mt-4 mt-lg-0">
        <button class="border-0 text-white br7 btn-padding fs14 px-4" style="background-color: #1ab1d4;" type="button" data-bs-toggle="modal" data-bs-target="#mapModal">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
            </svg>
            <span class="me-1">افزودن آدرس فروشگاه </span>
        </button>
    </div>
</div>

<div>
    @if (count($user_addresses) != 0)


    @foreach($user_addresses as $user_address)
    <div class="py-4 d-flex justify-content-between @if(!$loop->last) border-bottom @endif">
        <div>
            <div class="mb-3 fs15res lh2">
                {{$user_address->address}}
            </div>
            <div class="text-secondary-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"></path>
                </svg>
                <span class="fs15res me-1">{{$user_address->city}}</span>
            </div>
            <div class="mt-2 text-secondary-3">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="fs15res me-1">{{$user_address->postal_code}}</span>
            </div>
            {{-- <div class="mt-2 text-secondary-3">
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                              height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                         </svg>
                         <span class="fs15res me-1">۰۹۳۰۹۵۱۹۳۶۵</span>
                     </div>--}}
            <div class="mt-2 text-secondary-3">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="21" width="21" xmlns="http://www.w3.org/2000/svg">
                    <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                </svg>
                <span class="fs15res me-1">{{get_seller_by_token()->sellerInfo->name}}</span>
            </div>

        </div>
        <div>
            <div class="text-start">
                @if (!has_info_confirmed($shop_info , 'address') && get_seller_status() != 'approvedQueue')
                <div class="dropdown">
                    <svg stroke="currentColor" class="icon-dark-color" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="20" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                    </svg>
                    <ul class="dropdown-menu mt-2 dropdown-del-adr-menu br10 p-3 shadow border-0" aria-labelledby="dropdownMenuButton1">
                        <form action="{{route('delete.seller.address' ,$user_address->id )}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-100 d-flex align-items-center cursor-pointer bg-transparent border-0">
                                <svg stroke="currentColor" class="text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                    <path d="M15 16h4v2h-4zm0-8h7v2h-7zm0 4h6v2h-6zM3 18c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V8H3v10zm2-8h6v8H5v-8zm5-6H6L5 5H2v2h12V5h-3z"></path>
                                </svg>
                                <div class="fs14 me-2">حذف آدرس</div>
                            </button>
                        </form>
                    </ul>
                </div>
                @else
                <span class="fs12 badge-green me-2">تایید شده</span>
                @endif

            </div>
            <img src="{{asset('assets/frontend/image/text/emptyAddress.webp')}}" class="mt-2" width="130" height="115" alt="">
        </div>
    </div>
    @endforeach

    @else
    <div class="row justify-content-center">

        <div class="col-6 col-md-5 col-lg-3 text-center py-5">
            <img src="{{url('assets/frontend/image/text/emptyaddr.png')}}" class="w-100 p-3" alt="">
            <div class="fs14 icon-dark-color">
                هنوز آدرس ثبت نکرده‌اید.
            </div>
        </div>
    </div>
    @endif
</div>




<!--map Modal -->
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down modal-dialog-scrollable modal-lg">
        <div class="modal-content border-0 br15">
            <div class="modal-header">
                <div class="d-flex w-100 justify-content-between align-items-center">
                    <div>
                        <div class="fw600">
                            آدرس جدید
                        </div>
                        <div class="fs13 text-secondary-2 mt-3">
                            موقعیت مکانی آدرس را مشخص کنید.
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn-close fs14" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="pt-1 position-relative">
                    {{--map--}}
                    <div id='map' style="height: 400px" class="seller-address-map w-100"></div>
                    <div class="search_address_inp text-center position-absolute w-100">
                        <input type="text" class="px-3 border" id="main-sr-addr-inp" placeholder="جستجوی آدرس">
                        <div class="ajx-res-src-val mx-auto">
                            {{--add response here--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer shadow w-100">
                <div class="row w-100">
                    <div class="row align-items-center">
                        <div class="text-center">
                            <div class="fs13 text-secondary-2">
                                گر فروشگاه ندارید، آدرس منزل، مغازه یا انبار شخصی را مشخص کنید
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--address modal--}}
<div class="modal fade" style="z-index: 1000000;" id="addressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 br15">
            <div class="modal-header">
                <div class="d-flex w-100 justify-content-between align-items-center pt-2">
                    <div>
                        <div class="fw600">
                            جزئیات آدرس
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn-close fs14" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <div class="modal-body my-4 px-4">
                <div>
                    <label for="">
                        استان <span class="text-digi-red">*</span>
                    </label>
                    <input type="text" class="form-control mt-1 state" name="shop_state">
                    <input type="hidden">
                    <input type="hidden" value="">
                </div>
                <div class="mt-3">
                    <label for="">
                        شهر <span class="text-digi-red">*</span>
                    </label>
                    <input type="text" class="form-control mt-1 city" name="shop_city">
                </div>
                <div class="mt-3">
                    <label for="">
                        آدرس <span class="text-digi-red">*</span>
                    </label>
                    <input type="text" class="form-control mt-1 address" name="shop_address">
                    <div class="fs12 text-secondary mt-1">آدرس مطابق با مکان انتخابی شما روی نقشه و قابل ‌ویرایش
                        است
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <label for="">
                            پلاک
                        </label>
                        <input type="text" class="form-control mt-1 plaque">
                    </div>
                    <div class="col-6">
                        <label for="">
                            کد پستی <span class="text-digi-red">*</span>
                        </label>
                        <input type="text" class="form-control mt-1 postal_code" name="postal_code">
                    </div>
                </div>

            </div>
            <div class="modal-footer shadow w-100">
                <div class="w-100">
                    <button style="background-color: #1ab1d4;" class="btn btn-padding-2 w-100 fs15 btn-danger br7 border-0 send-address-data">
                        ثبت آدرس
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection