@extends('layouts.app')
@section('styles')
{{--select 2--}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{--dropzone--}}
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


<link rel="stylesheet" href="{{asset('assets/frontend/css/seller-panel.css')}}">
@endsection

{{--TODO responsive this page--}}

@section('content')
@include('layouts.seller_panel_parts.header')

<!--content-->
<div class="container px-3 px-lg-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <!--text-->
            <div class="d-md-flex align-items-center d-block mt-5">
                <div class="fs14 fw600 text-secondary ps-2"> درج محصول</div>
                <svg stroke="currentColor" class="d-none d-md-block" fill="none" stroke-width="1" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5v14"></path>
                </svg>
                <div class="fs13 text-secondary pe-2 mt-2 mt-md-0 lh2">
                    اطلاعات محصول‌تان را در این صفحه وارد کنید
                </div>
            </div>


            <div class="bg-white ps-3 py-5 br10 mt-4" style="box-shadow: 0px 0px 9px #e5e5e5;">
                <form action="{{route('seller.create.product.logic')}}" method="post" id="upload-form" class="dropzone" enctype="multipart/form-data">
                    @csrf


                    {{--first step--}}
                    <div class="position-relative">
                        <div class="content-progress h-100">
                        </div>
                        <div class="d-flex pb-5">
                            <div class="position-relative">
                                <div class="content-progress-step mx-3 position-relative z_index100">
                                    <div class="m-auto"></div>
                                </div>

                            </div>

                            <div class="d-flex fw600 text-secondary-2 w-100 align-items-center fs15 line-after-text" type="button" data-bs-toggle="collapse" data-bs-target="#firstStep" aria-expanded="false" aria-controls="collapseExample">
                                گام اول: انتخاب گروه کالا
                            </div>
                            <svg stroke="currentColor" fill="none" class="text-info" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                        </div>
                        <div class="collapse pe-1 show" id="firstStep">
                            <div class="pe-5 ps-2">
                                {{--text--}}
                                <div class="fs14 text-secondary">
                                    برای درج کالای جدید ابتدا گروه کالای خود را انتخاب کنید:
                                </div>
                                {{--search--}}
                                <div class="mt-4 pt-2 fs13 text-secondary">
                                    جستجوی گروه کالای شما:
                                </div>
                                <div class="mt-2">
                                    <input type="text" class="seller-search-inp w-100 border br7 px-3" placeholder="نام کالا،  دسته بندی و یا کد دسته بندی مورد نظر خود را بنویسید، مثال: گوشی موبایل">
                                </div>

                                {{--select category--}}
                                <div class="select-category-parent mt-3 py-2 position-relative">
                                    {{--loader--}}
                                    <div class="loader-before-cat-ajax position-absolute
                                            top-0 d-none right-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                        <div class="loader21"></div>
                                    </div>
                                    <div class="row add-here-col-2">
                                        <div class="col-2" data-catboxid="1">
                                            @foreach($product_cats as $product_cat)
                                            <input type="radio" class="-none for-change-inp display-none" name="ForSelect-1">
                                            <div data-catid="{{$product_cat->id}}" data-cattitle="{{$product_cat->title}}" class="d-flex justify-content-between align-items-center px-2 py-2 my-1 cat-items-s cat-items">

                                                <div class="fs13 text-secondary-2">
                                                    {{$product_cat->title}}
                                                </div>
                                                <div class="">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                                    </svg>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                {{--writen category--}}
                                <div class="mt-3 pb-5">
                                    <div class="d-flex">
                                        <div class="d-flex px-2 bg-secondary-2 br7 fs13 align-items-center ms-3" style="flex: 1 1 0">
                                            <div class="px-2 text-secondary ps-4">گروه کالایی انتخابی شما:</div>


                                            {{--add here--}}
                                            <div class="add-last-target d-flex align-content-center">
                                            </div>

                                        </div>
                                        <div class="ms-2">
                                            <button class="btn-select-p-cat-s btn-select-p-cat" type="button" disabled>
                                                {{--active class--}}
                                                انتخاب گروه کالا
                                            </button>
                                        </div>
                                        <div>
                                            <button class="remove-selected-cat br7" type="button">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" fill-rule="evenodd" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="fs12 mt-3 text-digi-red cat_id">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--second step--}}
                    <div class="position-relative">
                        <div class="content-progress h-100">
                        </div>
                        <div class="d-flex pb-5 pt-5">
                            <div class="position-relative">
                                <div class="content-progress-step mx-3 position-relative z_index100">
                                    {{--active mood--}}
                                    <div class="m-auto"></div>
                                </div>
                                <div class="content-progress mx-auto">
                                </div>
                            </div>

                            <div class="d-flex fw600 text-secondary-2 w-100 align-items-center fs15 line-after-text" type="button" data-bs-toggle="collapse" data-bs-target="#secondStep" aria-expanded="false" aria-controls="collapseExample">
                                گام دوم: درج اطلاعات کالا
                            </div>
                            <svg stroke="currentColor" fill="none" class="text-info" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                        </div>
                        <div class="collapse pe-2 second-collase" id="">
                            <div class="pe-5 ps-2">
                                {{--name--}}
                                <div class="row">
                                    <div class="col-3">
                                        <label for="" class="fs13 text-secondary"> اصالت کالا:
                                            <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                            </svg>
                                        </label>
                                        <div class="originality-box w-100 mt-2 d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <input type="checkbox" name="originality" class="form-check-input">
                                                <div class="fs12 me-2 mt-1">نشان کالای غیر اصل</div>
                                                <div class="fs12 me-2 mt-1 fw600">
                                                    (غیر اصل)
                                                </div>
                                            </div>
                                            <div class="">
                                                <svg stroke="currentColor" style="transform: rotateY(180deg)" fill="#606265" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                                                </svg>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <label for="" class="fs13 text-secondary"> نام کالا:
                                            <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                            </svg>
                                        </label>
                                        <div>
                                            <input type="text" name="title" class="seller-product-inp w-100 mt-2" placeholder="نام کالای خود را با رعایت این ترتیب درج نمائید: ماهیت کالا + برند + مدل">
                                            <div class="fs12 mt-1 text-digi-red d-none title"></div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="" class="fs13 text-secondary">
                                            برند یا نام سازنده کالا:
                                            <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                            </svg>
                                        </label>
                                        <div class="mt-2">
                                            <select name="brand_id" class="brand-select-two px-2 w-100">
                                                <option value=""></option>
                                                <option value="-1">مطعلق به برند خاصی نیست</option>
                                                @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="fs12 mt-1 text-digi-red d-none brand_id"></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- size & weight--}}
                                <div class="row mt-5">
                                    <div class="col-6">
                                        <div class="row">
                                            <label for="" class="fs13 text-secondary">ابعاد بسته‌بندی (سانتیمتر):
                                                <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                </svg>
                                            </label>
                                            <div class="col-4">
                                                <div>
                                                    <input type="text" name="dimensions[length]" class="seller-product-inp w-100 mt-2" placeholder="طول">
                                                    <div class="fs12 mt-1 text-digi-red d-none dimensions_length"></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <input type="text" name="dimensions[width]" class="seller-product-inp w-100 mt-2" placeholder="عرض">
                                                    <div class="fs12 mt-1 text-digi-red d-none dimensions_width"></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <input type="text" name="dimensions[height]" class="seller-product-inp w-100 mt-2" placeholder="ارتفاع">
                                                    <div class="fs12 mt-1 text-digi-red d-none dimensions_height"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="" class="fs13 text-secondary">
                                            وزن بسته بندی (گرم):
                                            <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                            </svg>
                                        </label>
                                        <div>
                                            <input type="text" name="dimensions[weight]" class="seller-product-inp w-100 mt-2" placeholder="وزن">
                                            <div class="fs12 mt-1 text-digi-red d-none dimensions_weight"></div>
                                        </div>
                                    </div>
                                </div>
                                {{--description--}}
                                <div class="row mt-4">
                                    <label for="" class="fs13">شرح کالا:
                                        <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                        </svg>
                                    </label>
                                    <div>
                                        <textarea placeholder="برای معرفی بهتر کالا به مشتریان، پیشنهاد می‌‌شود 150 کلمه درباره‌ کالای خود بنویسید." name="description" id="" class="w-100 mt-2 product-intro seller-product-inp"></textarea>
                                        <div class="fs12 text-digi-red d-none description"></div>
                                    </div>
                                </div>
                                {{--strengths and weaknesses--}}
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <label for="" class="fs13 text-secondary">نقاط قوت:</label>
                                        <div class="position-relative">
                                            <input type="text" class="w-100 mt-2 seller-product-inp">
                                            <div class="add-s-w position-absolute">
                                                <svg stroke="currentColor" fill="fill" class="text-white" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="" class="fs13 text-secondary">نقاط ضعف:</label>
                                        <div class="position-relative">
                                            <input type="text" class="w-100 mt-2 seller-product-inp">
                                            <div class="add-s-w position-absolute">
                                                <svg stroke="currentColor" fill="fill" class="text-white" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5v14"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="show-s-w p-4 br10">

                                        </div>
                                    </div>
                                    <div class="col-6 mt-3">
                                        <div class="show-s-w p-4 br10">

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 text-start continue-third-part">
                                    <button class="btn-select-p-cat-s active px-4" type="button">ادامه دادن</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--third step--}}
                    <div class="position-relative">
                        <div class="content-progress h-100">
                        </div>
                        <div class="d-flex pb-5 pt-5">
                            <div class="position-relative">
                                <div class="content-progress-step mx-3 position-relative z_index100">
                                    {{--active mood--}}
                                    <div class="m-auto"></div>
                                </div>
                                <div class="content-progress mx-auto">
                                </div>
                            </div>

                            <div class="d-flex fw600 text-secondary-2 w-100 align-items-center fs15 line-after-text" type="button" data-bs-toggle="collapse" data-bs-target="#thirdStep" aria-expanded="false" aria-controls="collapseExample">
                                گام سوم: درج ویژگی‌های کالا
                            </div>
                            <svg stroke="currentColor" fill="none" class="text-info" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                        </div>
                        <div class="collapse pe-1 third-collapse" id="">
                            <div class="pe-5 ps-2">
                                {{-- fixed attr--}}
                                <div class="row mb-4">
                                    <div class="col-12 mb-5">
                                        <div class="box-give-info">
                                            {{--gides--}}
                                            <div class="d-flex align-items-center">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                </svg>
                                                <div class="fs14 text-secondary me-2">
                                                    <span class="fw600 ps-1">ویژگی ثابت</span> ویژگی هایی اند که
                                                    برای هر
                                                    محصول مختص همان محصول است و با تغییر این ویژگی کالا باید تغییر
                                                    کند.
                                                </div>


                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                </svg>
                                                <div class="fs14 text-secondary me-2">
                                                    فروشنده محترم دقت کنید وجود <span class="fw600 px-1">ویژگی ثابت</span> برای هر محصول <span class="fw600 px-1">الزامی</span> است و باید حتما آن را ثبت
                                                    نمایید
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                </svg>
                                                <div class="fs14 text-secondary me-2">
                                                    ویژگی مورد نظر را جستجو کنید در صورت نبودن ویژگی در لیست ما آن
                                                    را
                                                    <span class="px-1 fw600">ثبت</span> نمایید
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                </svg>
                                                <div class="fs14 text-secondary me-2">
                                                    به عنوان مثال برای لپتاپ ویژگی هایی مانند رم، گرافیک، رزولوشن
                                                    باید
                                                    ثبت شود.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative pe-4 mt-1">
                                            <button type="button" class="btn-select-p-cat-s active fs18 add-fixed-attr-s add-fixed-attr z_index100 position-relative">
                                                افزودن ویژگی ثابت
                                                <svg stroke="currentColor" style="transform: rotateY(180deg)" fill="#fff" stroke-width="0" viewBox="0 0 16 16" height="17" width="17" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                                                </svg>
                                            </button>
                                            <div class="position-absolute dashed-btn-c">

                                            </div>

                                        </div>
                                        <div class="px-4">
                                            <div class="fs15 seller-error-box px-3 mt-4 d-none fixedAttributes"></div>
                                        </div>
                                    </div>
                                </div>
                                {{-- fixed parent--}}
                                <div class="p-of-fixed-attr pe-4"></div>


                                {{--select var attr--}}
                                <div class="br10 p-4 mt-5" style="background: #f5f7fa">
                                    <div class="row py-2">
                                        <div class="fs15 text-secondary d-flex align-items-center">
                                            <svg stroke="currentColor" fill="#4fcce9" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9h-4v4h-2v-4H9V9h4V5h2v4h4v2z"></path>
                                            </svg>
                                            <span class="me-2"> براساس محصول خود، تنوع مورد نظر را انتخاب نمایید:</span>
                                        </div>
                                        <div class="d-flex align-items-center mt-4 pt-2">
                                            <div>
                                                <input id="color-var" value="color" name="varType" type="radio" class="form-check-input">
                                                <label for="color-var" class="fs15 text-secondary me-1">رنگ</label>
                                            </div>
                                            <div class="me-4">
                                                <input id="size-var" value="size" name="varType" type="radio" class="form-check-input">
                                                <label for="size-var" class="fs15 text-secondary me-1">سایز</label>
                                            </div>
                                            <div class="me-4">
                                                <input id="none-var" value="none" name="varType" type="radio" class="form-check-input">
                                                <label for="none-var" class="fs15 text-secondary me-1">بدون رنگ بدون
                                                    سایز</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--btn parent--}}
                                <div class="btn-pa">
                                </div>
                                <div class="px-4">
                                    <div class="fs15 seller-error-box px-3 mt-4 d-none varAttributes"></div>
                                </div>


                                {{--var parebt--}}
                                <div class="p-of-var-attr pe-4">
                                </div>

                                <div class="mt-4 text-start continue-fourth-part">
                                    <button class="btn-select-p-cat-s active px-4" type="button">ادامه دادن</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{--Fourth step--}}
                    <div class="position-relative">
                        <div class="content-progress h-100">
                        </div>
                        <div class="d-flex pt-5">
                            <div class="position-relative">
                                <div class="content-progress-step mx-3 position-relative z_index100">
                                    {{--active mood--}}
                                    <div class="m-auto"></div>
                                </div>
                            </div>

                            <div class="d-flex fw600 text-secondary-2 w-100 align-items-center fs15 line-after-text" type="button" data-bs-toggle="collapse" data-bs-target="#fourthStep" aria-expanded="false" aria-controls="collapseExample">
                                گام چهارم: بارگذاری تصاویر
                            </div>
                            <svg stroke="currentColor" fill="none" class="text-info" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                        </div>
                        <div class="collapse fourth-collapse" id="">
                            <div class="pe-5 ps-2 mt-5">


                                <div class="dz-default dz-message">
                                    <div id="productImg" class="product-img-from p-4">
                                        <div class="row align-items-center dropzone-text cursor-pointer">
                                            <div class="col-3 text-start">
                                                <div class="text-center">
                                                    <div class="blue-circle rounded-circle position-relative mx-auto">
                                                        <svg stroke="currentColor" fill="none" class="position-absolute m-auto" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="30" width="30" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="text-secondary fs14 mt-2">بارگذاری تصاویر</div>
                                                </div>
                                            </div>
                                            <div class="col-9 mb-3">
                                                <div class="d-flex align-items-center mt-3">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                    </svg>
                                                    <div class="fs14 text-secondary me-1">ابعاد
                                                        تصویر بایستی در بازه ۶۰۰x۶۰۰ تا ۲۵۰۰x۲۵۰۰ و حجم آن باید کمتر
                                                        از
                                                        ۶
                                                        مگابایت باشد.
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mt-3">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                    </svg>
                                                    <div class="fs14 text-secondary me-1">ابعاد
                                                        کالا
                                                        باید
                                                        ۸۵٪ کل تصویر را در برگیرد و پس زمینه تصویر اصلی باید کاملاً
                                                        سفید
                                                        باشد.
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mt-3">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                    </svg>
                                                    <div class="fs14 text-secondary me-1">ابعاد
                                                        تصویر
                                                        باید
                                                        فقط کالایی که قصد فروش آن را دارید نمایش دهد و بدون هیچ
                                                        لوگو،
                                                        نوشته
                                                        و یا
                                                        واترمارکی
                                                        باشد..

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mt-3">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                    </svg>
                                                    <div class="fs14 text-secondary me-1">ابعاد

                                                        تصویر شما باید مربعی باشد یا ابعاد یک در یک داشته باشد

                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mt-3">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                    </svg>
                                                    <div class="fs14 text-secondary me-1">ابعاد
                                                        فرمت تصاویر بایستی JPG یا webp باشد
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mt-3">
                                                    <svg stroke="currentColor" class="text-secondary" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                    </svg>
                                                    <div class="fs14 text-secondary me-1">ابعاد
                                                        امکان آپلود چندین تصویر به صورت همزمان وجود دارد
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropzone-previews h-fit dropzone border-0"></div>

                            </div>
                        </div>
                    </div>


                    {{--send btn--}}
                    <div class="text-start ps-2 mt-5">
                        <button class="btn-select-p-cat-s px-4 fs15" type="submit" id="send-product-btn">
                            ذخیره کالا
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="last-modal-redirect" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content p-4 border-0">
            <div class="mt-4 text-center fs15 text-secondary">
                کالای شما با موفقیت ایجاد شد.
            </div>
            <div class="mt-4 text-center fs15 text-secondary">
                می‌توانید هر یک از مراحل زیر را برای ادامه انتخاب نمایید.
            </div>

            <div class="text-center mt-5">
                <a href="{{route('seller.panel.create.product')}}" type="button" class="btn-select-p-cat-s active px-4">ثبت کالای جدید</a>
                <a type="button" class="btn-select-p-cat-s me-3 border-0 text-dark">مدیریت محصولات</a>
            </div>
        </div>
    </div>
</div>

{{--loader--}}
<div class="loader-after-submit-parent d-flex align-items-center w-100 justify-content-center d-none">
    <div class="loader mb-5"></div>
</div>

@include('layouts.seller_panel_parts.footer')
@endsection

@section('scripts')

{{--jquery--}}
{{--https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js--}}
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
{{--select 2--}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
    Dropzone.options.uploadForm = {
        // The configuration we've talked about above
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,
        maxFiles: 5,
        previewsContainer: '.dropzone-previews',
        addRemoveLinks: true,
        dictRemoveFile: '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M15 16h4v2h-4zm0-8h7v2h-7zm0 4h6v2h-6zM3 18c0 1.1.9 2 2 2h6c1.1 0 2-.9 2-2V8H3v10zm2-8h6v8H5v-8zm5-6H6L5 5H2v2h12V5h-3z"></path></svg>',
        dictCancelUpload: '<span class="fs12">لغو آپلود</span>',
        init: function() {
            var myDropzone = this;

            this.element.querySelector("#send-product-btn").addEventListener("click", function(e) {
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });

            this.on("sendingmultiple", function() {
                $('.loader-after-submit-parent').removeClass('d-none')

            });
            this.on("successmultiple", function(files, response) {
                $('.loader-after-submit-parent').addClass('d-none')
                $('#last-modal-redirect').modal('show');
            });
            this.on("errormultiple", function(files, response) {
                $response = Object.entries(response.errors)
                $response.forEach(function($error) {
                    $className = $error[0].replaceAll('.', '_')
                    $('.' + $className).text($error[1][0]).removeClass('d-none')
                })
                $.each(myDropzone.files, function(i, file) {
                    file.status = Dropzone.QUEUED
                });
                $('.loader-after-submit-parent').addClass('d-none')
            });
        }

    }


    let createNewAttr = ({
        id
    }) => {
        return `<div class="row mt-4" id="fixedAttribute-${id}">
                                <div class="col-4">
                                   <div> <label for="" class="mb-2 fs13">نام ویژگی کالا:</label></div>
                                    <select name="fixedAttributes[${id}][name]"
                                            class="do-select-2 px-2 w-100">
                                    </select>
                                    <div class="fs12 mt-1 text-digi-red fixedAttributes_${id}_name"></div>
                                </div>
                                <div class="col-4">
                                    <div><label for="" class="mb-2 fs13">مقدار ویژگی کالا:</label></div>
                                    <select name="fixedAttributes[${id}][value]"
                                            class="do-select-2 px-2 w-100">
                                    </select>
                                    <div class="fs12 mt-1 text-digi-red fixedAttributes_${id}_value"></div>
                                </div>
                                <div class="col-4">
                                    <button class="remove-selected-cat br7 -ver-40"
                                        onclick="document.getElementById('fixedAttribute-${id}').remove()">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                             viewBox="0 0 1024 1024" fill-rule="evenodd" height="25" width="25"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>`
    }
    $('.add-fixed-attr').click(function() {
        $p_of_fixed_attr = $('.p-of-fixed-attr')
        $id = $p_of_fixed_attr.children().length;


        $p_of_fixed_attr.append(createNewAttr({
            id: $id
        }))
        $('.do-select-2').select2({
            tags: true
        });
    })
    let add_child_cats = (cat, id) => {
        return `<div class="col-2" data-catboxid="${id}">
                         ${cat.map((item) => {
                return `
                     <input type="radio" class="-none for-change-inp display-none" name="ForSelect-${id}">
                <div data-catid="${item.id}" data-cattitle="${item.title}"
                     class="d-flex justify-content-between align-items-center px-2 py-2 my-1 cat-items-s cat-items-${id}">

                    <div class="fs13 text-secondary-2">
                        ${item.title}
                    </div>
                    <div class="">
                        <svg stroke="currentColor" class="text-secondary"
                             fill="currentColor"
                             stroke-width="0"
                             viewBox="0 0 512 512" height="14" width="14"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                        </svg>
                    </div>
                </div>`
            }).join('')}
                    </div>`
    }
    let cat_target_html = ($catTitle, $catId) => {
        return `
            <div class="d-flex align-content-center cat-target-items">
                                                <div class="">
                                                   ${$catTitle}
                                                </div>
                                                <input type="hidden" value="${$catId}" name="cat_ids[]">
                                                <div class="mx-2">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                         viewBox="0 0 512 512" height="1em" width="1em"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"></path>
                                                    </svg>
                                                </div>
                                            </div>
            `
    }
    let add_cat_target = ($afterThis, $catTitle, $catId) => {
        $add_last_target = $('.add-last-target')

        $add_last_target.children('.cat-target-items').slice($afterThis - 1).remove();
        $add_last_target.append(cat_target_html($catTitle, $catId))
    }
    let add_cat_child = ($this) => {
        $('.loader-before-cat-ajax').removeClass('d-none')
        $this.prev().prop('checked', true);

        $add_here_col_2 = $('.add-here-col-2')

        $afterThis = $this.parent().attr('data-catboxid')

        $add_here_col_2.children('.col-2').slice($afterThis).remove();

        $id = $add_here_col_2.children().length + 1


        $catId = $this.attr('data-catid')
        $catTitle = $this.attr('data-cattitle')


        add_cat_target($afterThis, $catTitle, $catId);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            }
        })

        $.ajax({
            type: 'POST',
            url: '/seller-panel/get-product-categories-ajax',
            data: JSON.stringify({
                catID: $catId
            }),
            success: function(data) {
                if (data.data.length === 0) {
                    $('.btn-select-p-cat').prop("disabled", false).addClass('active')
                } else {
                    $('.add-here-col-2').append(add_child_cats(data.data, $id))
                    $('.btn-select-p-cat').prop("disabled", true).removeClass('active')
                }


                $('.cat-items-' + $id).click(function() {
                    $this = $(this)
                    add_cat_child($this)
                })
                $('.loader-before-cat-ajax').addClass('d-none')
            }
        });
    }
    $('.cat-items').click(function() {
        $this = $(this)
        add_cat_child($this)
    })
    $('.remove-selected-cat').click(function() {
        $('.add-here-col-2').children('.col-2').slice(1).remove();
        $('.add-last-target').children('.cat-target-items').slice(0).remove();
    })
    $('.brand-select-two').select2({
        placeholder: ''
    });
    let add_related_btn = ($title, $class) => {
        return `
             <div class="row mb-4 mt-5 ${$class}">
                                        <div class="col-12">
                                            <div class="position-relative pe-4 mt-1">
                                                <button type="button"
                                                        class="btn-select-p-cat-s active fs18 add-var-attr add-fixed-attr-s z_index100 position-relative">
                                                    افزودن تنوع ${$title}
                                                    <svg stroke="currentColor" style="transform: rotateY(180deg)"
                                                         fill="#fff"
                                                         stroke-width="0" viewBox="0 0 16 16" height="17" width="17"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path>
                                                    </svg>
                                                </button>
                                                <div class="position-absolute dashed-btn-c">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
`
    }

    $('input[type=radio][name=varType]').change(function() {
        $('.p-of-var-attr').children().remove()
        $('.btn-pa').children().remove()
        if (this.value == 'color') {

            $('.btn-pa').append(add_related_btn('رنگ', 'for-color'))

            $('.add-var-attr').click(function() {
                $parent_variable_attr = $('.p-of-var-attr')
                $id = $parent_variable_attr.children().length;
                $parent_variable_attr.append(addVarAttr({
                    id: $id,
                    hasVal: true,
                    hasSize: false,
                    selected_title: 'رنگ',
                    isColor: true
                }))
                $('.do-select-2').select2({
                    tags: true
                });
            })

        } else if (this.value == 'size') {
            $('.btn-pa').append(add_related_btn('سایز', 'for-size'))

            $('.add-var-attr').click(function() {
                $parent_variable_attr = $('.p-of-var-attr')
                $id = $parent_variable_attr.children().length;
                $parent_variable_attr.append(addVarAttr({
                    id: $id,
                    hasVal: true,
                    hasSize: true,
                    selected_title: 'سایز'
                }))
                $('.do-select-2').select2({
                    tags: true
                });
            })
        } else if (this.value == 'none') {
            $('.btn-pa').append(add_related_btn('', 'for-none'))

            $('.add-var-attr').click(function() {
                $parent_variable_attr = $('.p-of-var-attr')
                $id = $parent_variable_attr.children().length;
                $parent_variable_attr.append(addVarAttr({
                    id: $id,
                    hasVal: false,
                    hasSize: false,
                    selected_title: false
                }))
                $('.do-select-2').select2({
                    tags: true
                });
            })
        }
    });
    let addVarAttr = ({
        id,
        hasVal,
        hasSize,
        selected_title,
        isColor = false
    }) => {
        return ` <div class="" id="varAttribute-${id}">
                                         ${hasSize ? `<div class="row mt-4">
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <label for="" class="fs13 text-secondary">ابعاد بسته&zwnj;بندی (سانتیمتر):
                                                                    <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                                    </svg>
                                                                </label>
                                                                <div class="col-4">
                                                                    <div>
                                                                        <input type="text" name="varAttributes[${id}][dimensions][length]" class="seller-product-inp w-100 mt-2" placeholder="طول">
                                                                        <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_dimensions_length"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div>
                                                                        <input type="text" name="varAttributes[${id}][dimensions][width]" class="seller-product-inp w-100 mt-2" placeholder="عرض">
                                                                        <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_dimensions_width"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div>
                                                                        <input type="text" name="varAttributes[${id}][dimensions][height]" class="seller-product-inp w-100 mt-2" placeholder="ارتفاع">
                                                                        <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_dimensions_height"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="" class="fs13 text-secondary">
                                                                وزن بسته بندی (گرم):
                                                                <svg stroke="currentColor" class="ver-5 text-digi-red" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="11" width="11" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"></path>
                                                                </svg>
                                                            </label>
                                                            <div>
                                                                <input type="text" name="varAttributes[${id}][dimensions][weight]" class="seller-product-inp w-100 mt-2" placeholder="وزن">
                                                                 <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_dimensions_weight"></div>
                                                            </div>
                                                        </div>
                                                     </div>` : ''}
                                        <div class="row mt-4">
                                            ${hasVal ? `<div class="col-4">
                                                <div><label for="" class="mb-2 fs13">${selected_title !== false ? selected_title : ''}  کالا:</label></div>

                                                 ${isColor ? `<div><input type="color" class="color-picker-value" name="varAttributes[${id}][value]"></div>` : `<select name="varAttributes[${id}][value]"
                                                        class="do-select-2 px-2 w-100">
                                                    <option value=""></option>
                                                </select>`}

                                                 <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_value"></div>
                                            </div>` : ''}
                                            <div class="col-4">
                                                <div><label for="" class="mb-2 fs13">قیمت کالا:</label></div>
                                                <input type="text" name="varAttributes[${id}][price]" class="seller-product-inp w-100">
                                                <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_price"></div>
                                            </div>
                                            <div class="col-3">
                                                <div><label for="" class="mb-2 fs13">تعداد کالا:</label></div>
                                                <input type="text" name="varAttributes[${id}][quantity]" class="seller-product-inp w-100">
                                                <div class="fs12 mt-1 d-none text-digi-red varAttributes_${id}_quantity"></div>
                                            </div>
                                            <div class="col-1 text-center">
                                                <button class="remove-selected-cat br7 -ver-40"
                                                        onclick="document.getElementById('varAttribute-${id}').remove()">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                         viewBox="0 0 1024 1024" fill-rule="evenodd" height="25" width="25"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M799.855 166.312c.023.007.043.018.084.059l57.69 57.69c.041.041.052.06.059.084a.118.118 0 0 1 0 .069c-.007.023-.018.042-.059.083L569.926 512l287.703 287.703c.041.04.052.06.059.083a.118.118 0 0 1 0 .07c-.007.022-.018.042-.059.083l-57.69 57.69c-.041.041-.06.052-.084.059a.118.118 0 0 1-.069 0c-.023-.007-.042-.018-.083-.059L512 569.926 224.297 857.629c-.04.041-.06.052-.083.059a.118.118 0 0 1-.07 0c-.022-.007-.042-.018-.083-.059l-57.69-57.69c-.041-.041-.052-.06-.059-.084a.118.118 0 0 1 0-.069c.007-.023.018-.042.059-.083L454.073 512 166.371 224.297c-.041-.04-.052-.06-.059-.083a.118.118 0 0 1 0-.07c.007-.022.018-.042.059-.083l57.69-57.69c.041-.041.06-.052.084-.059a.118.118 0 0 1 .069 0c.023.007.042.018.083.059L512 454.073l287.703-287.702c.04-.041.06-.052.083-.059a.118.118 0 0 1 .07 0Z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 pb-4"  style="border-bottom: 3px dashed #e6e9ed"></div>
                                        </div>
                       </div>`
    }


    let open_new_step = ($id, $class) => {
        $('.' + $class).attr('id', $id).addClass('show')
        $('html, body').animate({
            scrollTop: $('.' + $class).offset().top - 170
        }, 'fast');
    }

    $('.btn-select-p-cat').click(function() {
        open_new_step('secondStep', 'second-collase')
    })
    $('.continue-third-part').click(function() {
        $('.third-collapse').attr('id', 'thirdStep').addClass('show')
        open_new_step('thirdStep', 'third-collapse')
    })
    $('.continue-fourth-part').click(function() {
        open_new_step('fourthStep', 'fourth-collapse')
    })
</script>
@endsection
<!-- TODO refasctore validation of this form -->