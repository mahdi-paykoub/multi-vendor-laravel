@extends('seller.profile.layout')

@section('profile_content')
<!--content-->
<div class="border-bottom-light-2">
    <div class="w-fit">
        <span class="px-3 text-info">اطلاعات فروشگاه</span>
        <div class="w-100 mt-2 px-4" style="width: 100%;height: 4px;background: #1ab1d4;border-radius: 5px 5px 0 0"></div>
    </div>
</div>
<div class="row pt-4">
    <div class="fs14">برای اینکه فروشگاه شما وجهه بهتری داشته باشد، اطلاعات زیر را تکمیل کنید</div>
</div>
<div class="row mt-4">
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>وضعیت فروشنده</div>
                <div class="fs15 text-dark mt-3 fw600">حقیقی</div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>کُد فروشنده</div>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div> نام فروشگاه
                    @if (has_info_confirmed($shop_info , 'shop_name'))
                    <span class="fs12 badge-green me-2">تایید شده</span>
                    @else
                    <span class="fs12 badge-red me-2">تایید نشده</span>
                    @endif
                </div>
                @if ($shop_info->shop_name != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $shop_info->shop_name }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" class="text-info cursor-pointer" data-bs-toggle="modal" data-bs-target="#setNameModal" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>درباره فروشگاه
                    @if (has_info_confirmed($shop_info , 'about_shop'))
                    <span class="fs12 badge-green me-2">تایید شده</span>
                    @else
                    <span class="fs12 badge-red me-2">تایید نشده</span>
                    @endif
                </div>
                @if ($shop_info->about_shop != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $shop_info->about_shop }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" fill="none" data-bs-toggle="modal" data-bs-target="#setAboutStoreModal" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" class="text-info" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>شماره تلفن ثابت فروشگاه
                    @if (has_info_confirmed($shop_info , 'shop_number'))
                    <span class="fs12 badge-green me-2">تایید شده</span>
                    @else
                    <span class="fs12 badge-red me-2">تایید نشده</span>
                    @endif
                </div>
                @if ($shop_info->shop_number != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $shop_info->shop_number }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" class="text-info cursor-pointer" data-bs-toggle="modal" data-bs-target="#setFixNumberModal" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 px-4 py-4 border-bottom">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary">
                <div>وب‌سایت فروشگاه
                    @if (has_info_confirmed($shop_info , 'website'))
                    <span class="fs12 badge-green me-2">تایید شده</span>
                    @else
                    <span class="fs12 badge-red me-2">تایید نشده</span>
                    @endif
                </div>
                @if ($shop_info->shop_website != null)
                <div class="fs15 text-dark mt-3 fw600">{{ $shop_info->shop_website }}</div>
                @else
                <div class="fs15 text-dark mt-3 fw600">وارد کنید</div>
                @endif
            </div>
            <div>
                <svg stroke="currentColor" fill="none" data-bs-toggle="modal" data-bs-target="#setWebsiteModal" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" class="text-info" stroke-linejoin="round" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>

            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 border-left-responsive px-4 py-4">
        <div class="d-flex justify-content-between align-items-center">
            <div class="fs14 text-secondary d-flex align-items-center cursor-pointer" data-bs-toggle="modal" data-bs-target="#setLogoModal">
                <div>
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
                </div>
                <div class="me-3">
                    <div>نماد فروشگاه (لوگو)
                        @if (has_info_confirmed($shop_info , 'logo'))
                        <span class="fs12 badge-green me-2">تایید شده</span>
                        @else
                        <span class="fs12 badge-red me-2">تایید نشده</span>
                        @endif
                    </div>
                    <div class="fs12 text-secondary-2 mt-3">اگر لوگو دارید، بارگذاری کنید</div>
                </div>
            </div>
            <div>
                <svg stroke="currentColor" data-bs-toggle="modal" data-bs-target="#setLogoModal" class="text-info cursor-pointer" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="23" width="23" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                </svg>
            </div>
        </div>
    </div>

</div>



<!-- store name modal -->
<div class="modal fade" id="setNameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">نام فروشگاه </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.store.name')}}" method="post">
                @csrf
                <div class="modal-body">

                    <input type="text" name="shop_name" value="{{$shop_info->shop_name}}" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--  about store modal -->
<div class="modal fade" id="setAboutStoreModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">درباره فروشگاه</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.store.about')}}" method="post">
                @csrf
                <div class="modal-body">
                    <textarea name="shop_about" style="height: 130px;" id="" cols="30" rows="10" class="w-100 mt-2 inp-seller-profile p-3 text-secondary">{{$shop_info->about_shop}}</textarea>
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  fix number store modal -->
<div class="modal fade" id="setFixNumberModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">شماره تلفن ثابت</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.store.fix_number')}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="" class="fs14 text-secondary mt-3">شماره تلفن ثابت فروشگاه خود را وارد کنید</label>
                    <input type="text" name="shop_number" value="{{$shop_info->shop_number}}" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  website store modal -->
<div class="modal fade" id="setWebsiteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">آدرس وب‌سایت فروشگاه</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('seller.profile.store.website')}}" method="post">
                @csrf
                <div class="modal-body">
                    <label for="" class="fs14 text-secondary mt-3">آدرس وب‌سایت فروشگاه</label>
                    <input type="text" name="shop_website" value="{{$shop_info->shop_website}}" class="w-100 mt-2 inp-seller-profile px-3 text-secondary">
                </div>
                <div class="modal-footer mt-3">
                    <button type="submit" class="btn-for-seller-profile">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--  logo store modal -->
<div class="modal fade" id="setLogoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="modal-title fs15 icon-dark-color fw600" id="exampleModalLabel">نماد فروشگاه (لوگو)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
                <label for="" class="fs14"> اگر لوگو دارید، بارگذاری کنید چون فروشگاه‌ را حرفه‌ای نشان می‌دهد</label>
            </div>
            <div>
                <form method="post" action="{{route('seller.profile.store.logo')}}" class="dropzone border-0 d-block store-logo-dropzone" id="storeLogo">
                    @csrf
                    <div class="d-flex align-items-center dz-default dz-message py-0 my-0">
                        <div style="height:120px;width:120px" class="add-logo-btn-box  br10 d-flex align-items-center justify-content-center">
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
                        <div class="pe-3 text-secondary-2">
                            <div class="fs11">پس‌زمینه ترجیحاً سفید</div>
                            <div class="fs11 mt-2">قالب مربع</div>
                            <div class="fs11 mt-2">حداقل ۶۰۰ در ۶۰۰ پیکسل</div>
                            <div class="fs11 mt-2">فرمت PNG یا JPG</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer mt-3" action="{{route('seller.profile.store.logo')}}" method="post">
                <button class="btn-for-seller-profile" id="submit-store-logo-img">تایید</button>
            </div>

        </div>
    </div>
</div>


@endsection