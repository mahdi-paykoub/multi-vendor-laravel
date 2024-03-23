@extends('admin.layouts.app')

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">امکانات</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">لیست امکانات</li>
            </ol>
        </nav>
    </div>

</div>
<!--end breadcrumb-->
<div class="card">
    <div class="card-body">
        <ul class="nav nav-tabs nav-primary" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bxs-home font-18 me-1'></i>
                        </div>
                        <div class="tab-title">لوگو سایت</div>
                    </div>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bxs-user-pin font-18 me-1'></i>
                        </div>
                        <div class="tab-title">صفحه اصلی</div>
                    </div>
                </a>
            </li>
            
        </ul>
        <div class="tab-content py-3">
            <!-- logos -->
            <div class="tab-pane fade px-3" id="primaryhome" role="tabpanel">
                @php
                $prev_enL=isset(\App\Models\GlobalOptions::where('key' ,'=' , 'en_logo')->first()->value)?
                \App\Models\GlobalOptions::where('key' ,'=' , 'en_logo')->first()->value
                : '';
                $prev_fnL=isset(\App\Models\GlobalOptions::where('key' ,'=' , 'fa_logo')->first()->value)?
                \App\Models\GlobalOptions::where('key' ,'=' , 'fa_logo')->first()->value
                : '';
                @endphp
                <div class="mt-4">
                    <form action="{{route('admin.set.logo')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                {{--upload image--}}
                                <div class="form-group">
                                    <label for="image_label">لوگوی انگلیسی</label>
                                    <div class="input-group mt-1">
                                        <input type="text" id="en_logo" class="form-control" name="enLogo" aria-label="Image" aria-describedby="button-image" value="{{old('title' ,$prev_enL )}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="en_logo_btn">انتخاب
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                @error('enLogo')
                                <div class="text-danger fw-bold mb-3 mt-1">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="form-group mt-4">
                                    <label for="image_label">لگوی فارسی</label>
                                    <div class="input-group mt-1">
                                        <input type="text" id="fa_logo" class="form-control" name="faLogo" aria-label="Image" aria-describedby="button-image" value="{{old('title' ,$prev_fnL )}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="fa_logo_btn">انتخاب
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @error('faLogo')
                                <div class="text-danger fw-bold mb-3 mt-1">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="text-end mt-4">
                                    <button class="btn btn-danger px-4">ذخیره</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- sliders -->
            <div class="tab-pane fade show active" id="primaryprofile" role="tabpanel">
                <!-- top bar -->
                <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                    <h5 class="fw-bold text-primary">
                        تاپ بار
                    </h5>
                    <small>تعیین تصویر تاپ بار </small>
                </div>
                @php
                $topBar =\App\Models\GlobalOptions::where('key', '=' , 'top_bar_img')->first();

                $topBar_value =$topBar != null ? json_decode($topBar->value): null ;
                @endphp
                @if ($topBar_value != null)
                <div class="mb-3">
                    <img src="{{$topBar_value->img}}" alt="" class="w-100" style="height: 80px;object-fit:cover;border-radius:8px">
                </div>
                @endif

                <form action="{{route('admin.set.top.bar.img')}}" method="post" class="mb-4">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="image_label">تصویر</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="topBar_img" class="form-control" name="img" value="" aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="topBar_img_btn">انتخاب
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="">عنوان</label>
                            <input type="text" name="title" class="form-control mt-1" value="">
                        </div>
                        <div class="col-3">
                            <label for="">لینک</label>
                            <input type="text" name="link" class="form-control mt-1" value="">
                        </div>
                        <div class="col-2 text-center">
                            <button class="btn btn-primary mt-4">ثبت</button>
                        </div>
                    </div>
                </form>
                {{--slider--}}
                <div>
                    <div class="">
                        <div class="card-">
                            <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                                <h5 class="fw-bold text-primary">
                                    اسلایدر
                                </h5>
                                <small>تعیین اسلایدر صفحه اصلی</small>
                            </div>
                            <div class="row fw-bold border-bottom border-top mt-4 py-3">
                                <div class="col-3">
                                    تصویر
                                </div>
                                <div class="col-3">
                                    عنوان
                                </div>
                                <div class="col-4">
                                    لینک
                                </div>
                                <div class="col-2">
                                    اقدامات
                                </div>
                            </div>
                            @php
                            $sliders =\App\Models\GlobalOptions::where('key', 'main_sliders')->get();
                            @endphp
                            @if (count($sliders) != 0)
                            @foreach($sliders as $slide)
                            <div class="row my-3">
                                <div class="col-3">
                                    <img src="{{ json_decode($slide['value'])->img }}" style="object-fit: cover" class="shadow" width="100%" height="150" alt="">
                                </div>
                                <div class="col-3">
                                    {{ json_decode($slide['value'])->title }}
                                </div>
                                <div class="col-4">
                                    {{ json_decode($slide['value'])->link }}
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-danger">حذف</button>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                            @endif
                            <div class="text-end mb-4">
                                <button class="btn btn-primary create-slider-inp w-100 mt-4">افزودن اسلایدر</button>
                            </div>
                            <form action="{{route('admin.set.main.slider')}}" method="post">
                                @csrf
                                <div class="for_add_sliders"></div>
                                <div class="mt-4">
                                    @error('slider')
                                    <div class="text-danger fw-bold mb-3 mt-1">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    <button class="btn btn-secondary w-100 d-none for-add-s-db">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--banner--}}
                <div class="mt-5">
                    <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                        <h5 class="fw-bold text-primary">
                            بنر صفحه اصلی
                        </h5>
                        <small>تعیین چهار بنر صفحه اصلی</small>
                    </div>
                </div>
                @php
                $mainBanners = App\Models\GlobalOptions::where('key', 'main_banners')->get();
                @endphp
                <div class="row">
                    @if (count($mainBanners) != 0)
                    @foreach ($mainBanners as $mainBanners)
                    <div class="col-6 col-lg-3 mt-3">
                        <a href="">
                            <img src="{{json_decode($mainBanners['value'])->img}}" class="w-100 object-cover br15 h-100" alt="">
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="text-end mb-4">
                    <button class="btn btn-primary create-banner-inp w-100 mt-4">افزودن بنر</button>
                </div>
                <form action="{{route('admin.set.main.first.banner')}}" method="post">
                    @csrf
                    <div class="for_add_banners"></div>
                    <div class="mt-4">
                        @error('slider')
                        <div class="text-danger fw-bold mb-3 mt-1">
                            {{$message}}
                        </div>
                        @enderror
                        <button class="btn btn-secondary d-none for-add-b-db w-100">ارسال</button>
                    </div>

                </form>


                <div class="mt-5">
                    <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                        <h5 class="fw-bold text-primary">
                           
                        </h5>
                        <small>تعیین  بنر های صفحه اصلی</small>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // en logo
        document.getElementById('en_logo_btn').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'en_logo';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });

        //  fa logo
        document.getElementById('fa_logo_btn').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'fa_logo';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });
    });



    let createNewSlider = (id) => {
        return `
             <div class="row mt-4 align-items-center" id="slider_${id}">
                         <div class="col-4">
                             <div class="form-group">
                                 <label for="image_label">تصویر</label>
                                 <div class="input-group mt-1">
                                     <input type="text" id="image_${id}" class="form-control" name="slider[${id}][img]"
                                            aria-label="Image" aria-describedby="button-image">
                                    
                                         <button class="btn btn-outline-secondary button-image-clicked" type="button">انتخاب
                                         </button>
                                   
                                 </div>
                             </div>
                         </div>
                         <div class="col-3">
                             <label for="">عنوان</label>
                             <input type="text" class="form-control w-100 mt-1" name="slider[${id}][title]">
                         </div>
                         <div class="col-3">
                             <label for="">لینک</label>
                             <input type="text" class="form-control w-100 mt-1" name="slider[${id}][link]">
                         </div>
                         <div class="col-2 text-center">
                             <div>عملیات</div>
                             <button
                                onclick="document.getElementById('slider_${id}').remove()"
                                class="btn btn-danger mt-1">حذف</button>
                         </div>
                     </div>
            `
    }

    $('.create-slider-inp').click(function() {

        $('.for-add-s-db').removeClass('d-none')
        $parent_of_attr_html = $('.for_add_sliders')
        $id = $parent_of_attr_html.children().length;

        $parent_of_attr_html.append(createNewSlider($id))

        $('.button-image-clicked').click(function() {
            $this = $(this)

            event.preventDefault();

            inputId = $this.prev().attr('id');

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        })
    })


    $('.create-banner-inp').click(function() {

        $('.for-add-b-db').removeClass('d-none')
        $parent_of_attr_html = $('.for_add_banners')
        $id = $parent_of_attr_html.children().length;

        $parent_of_attr_html.append(createNewSlider($id))

        $('.button-image-clicked').click(function() {
            $this = $(this)

            event.preventDefault();

            inputId = $this.prev().attr('id');

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        })
    })

    // input
    let inputId = '';

    // set file link
    function fmSetLink($url) {
        document.getElementById(inputId).value = $url;
    }
</script>

@endsection