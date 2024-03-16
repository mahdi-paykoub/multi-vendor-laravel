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
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-bs-toggle="tab" href="#primarycontact" role="tab" aria-selected="false">
                    <div class="d-flex align-items-center">
                        <div class="tab-icon"><i class='bx bxs-microphone font-18 me-1'></i>
                        </div>
                        <div class="tab-title">منو ها</div>
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
                                            <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب
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
                                            <button class="btn btn-outline-secondary" type="button" id="button-image2">انتخاب
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
                    @php
                    $sliders =\App\Models\GlobalOptions::where('key', '=' , 'mainSlider')->first();
                    $sliders_values =isset( $sliders['value']) ?json_decode($sliders['value']) :[] ;
                    @endphp

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
                            @foreach($sliders_values as $sliders_value)
                            <div class="row my-3">
                                <div class="col-3">
                                    <img src="{{$sliders_value->img}}" style="object-fit: cover" class="shadow" width="100%" height="150" alt="">
                                </div>
                                <div class="col-3">
                                    {{$sliders_value->title}}
                                </div>
                                <div class="col-4">
                                    {{$sliders_value->link}}
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-danger">حذف</button>
                                </div>
                            </div>
                            <hr>
                            @endforeach
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
                                    <button class="btn btn-primary d-none for-add-s-db">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--first banner--}}
                <div class="mt-5">
                    <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                        <h5 class="fw-bold text-primary">
                            بنر صفحه اصلی
                        </h5>
                        <small>تعیین چهار بنر صفحه اصلی</small>
                    </div>
                </div>
                <form action="{{route('admin.set.main.first.banner')}}" method="post">
                    @csrf
                    @php
                    $first_banner_1= isset(\App\Models\GlobalOptions::where('key' ,'=' ,
                    'first_banner_1')->first()->value) ?
                    json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_1')->first()->value) :
                    '';
                    $first_banner_2= isset(\App\Models\GlobalOptions::where('key' ,'=' ,
                    'first_banner_2')->first()->value) ?
                    json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_2')->first()->value) :
                    '';
                    $first_banner_3= isset(\App\Models\GlobalOptions::where('key' ,'=' ,
                    'first_banner_3')->first()->value) ?
                    json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_3')->first()->value) :
                    '';
                    $first_banner_4= isset(\App\Models\GlobalOptions::where('key' ,'=' ,
                    'first_banner_4')->first()->value) ?
                    json_decode( \App\Models\GlobalOptions::where('key' ,'=' , 'first_banner_4')->first()->value) :
                    '';
                    @endphp
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{$first_banner_1 === '' ? url('assets/admin/images/img-not-loaded.jpg') :$first_banner_1->img}}" class="w-100 object-cover" height="100" alt="">
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="image_label">تصویر</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="first_banner_img_inp1" class="form-control" name="first_banner[1][img]" value="{{old('first_banner[1][img]' ,$first_banner_1 === '' ? '' :$first_banner_1->img   )}}" aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="first_banner_img1">انتخاب
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="">عنوان</label>
                            <input type="text" name="first_banner[1][title]" class="form-control mt-1" value="{{old('first_banner[1][title]' ,$first_banner_1 === '' ? '' :$first_banner_1->title   )}}">
                        </div>
                        <div class="col-3">
                            <label for="">لینک</label>
                            <input type="text" name="first_banner[1][link]" class="form-control mt-1" value="{{old('first_banner[1][link]' ,$first_banner_1 === '' ? '' :$first_banner_1->link   )}}">
                        </div>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <div class="col-3">
                            <img src="{{$first_banner_2 === '' ? url('assets/admin/images/img-not-loaded.jpg') :$first_banner_2->img}}" class="w-100 object-cover" height="100" alt="">
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="image_label">تصویر</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="first_banner_img_inp2" class="form-control" name="first_banner[2][img]" value="{{old('first_banner[2][img]' ,$first_banner_2 === '' ? '' :$first_banner_2->img   )}}" aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="first_banner_img2">انتخاب
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="">عنوان</label>
                            <input type="text" name="first_banner[2][title]" class="form-control mt-1" value="{{old('first_banner[2][title]' ,$first_banner_2 === '' ? '' :$first_banner_2->title   )}}">
                        </div>
                        <div class="col-3">
                            <label for="">لینک</label>
                            <input type="text" name="first_banner[2][link]" class="form-control mt-1" value="{{old('first_banner[2][link]' ,$first_banner_2 === '' ? '' :$first_banner_2->link   )}}">
                        </div>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <div class="col-3">
                            <img src="{{$first_banner_3 === '' ? url('assets/admin/images/img-not-loaded.jpg') :$first_banner_3->img}}" class="w-100 object-cover" height="100" alt="">
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="image_label">تصویر</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="first_banner_img_inp3" class="form-control" name="first_banner[3][img]" value="{{old('first_banner[3][img]' ,$first_banner_3 === '' ? '' :$first_banner_3->img   )}}" aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="first_banner_img3">انتخاب
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="">عنوان</label>
                            <input type="text" name="first_banner[3][title]" class="form-control mt-1" value="{{old('first_banner[3][title]' ,$first_banner_3 === '' ? '' :$first_banner_3->title   )}}">
                        </div>
                        <div class="col-3">
                            <label for="">لینک</label>
                            <input type="text" name="first_banner[3][link]" class="form-control mt-1" value="{{old('first_banner[3][link]' ,$first_banner_3 === '' ? '' :$first_banner_3->link   )}}">
                        </div>
                    </div>
                    <div class="row mt-4 align-items-center">
                        <div class="col-3">
                            <img src="{{$first_banner_4 === '' ? url('assets/admin/images/img-not-loaded.jpg') :$first_banner_4->img}}" class="w-100 object-cover" height="100" alt="">
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="image_label">تصویر</label>
                                <div class="input-group mt-1">
                                    <input type="text" id="first_banner_img_inp4" class="form-control" name="first_banner[4][img]" value="{{old('first_banner[4][img]' ,$first_banner_4 === '' ? '' :$first_banner_4->img   )}}" aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="first_banner_img4">انتخاب
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="">عنوان</label>
                            <input type="text" name="first_banner[4][title]" class="form-control mt-1" value="{{old('first_banner[4][title]' ,$first_banner_4 === '' ? '' :$first_banner_4->title   )}}">
                        </div>
                        <div class="col-3">
                            <label for="">لینک</label>
                            <input type="text" name="first_banner[4][link]" class="form-control mt-1" value="{{old('first_banner[4][link]' ,$first_banner_4 === '' ? '' :$first_banner_4->link   )}}">
                        </div>
                    </div>

                    <div class="text-end mt-4">
                        <button class="btn-primary btn">ذخیره</button>
                    </div>
                </form>
            </div>
            <!-- menu -->
            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                {{--blog menu--}}
                <div class="alert border-0 border-start border-5 border-primary alert-dismissible fade show py-2">
                    <h5 class="fw-bold text-primary">
                        منو اصلی وبلاگ
                    </h5>
                    <small>تعیین منوی اصلی در بالای صفحه</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'en_logo';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });

        // second button
        document.getElementById('button-image2').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'fa_logo';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });

        //first banner img 1
        document.getElementById('first_banner_img1').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'first_banner_img_inp1';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });
        //first banner img 2
        document.getElementById('first_banner_img2').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'first_banner_img_inp2';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });
        //first banner img 3
        document.getElementById('first_banner_img3').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'first_banner_img_inp3';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });
        //first banner img 4
        document.getElementById('first_banner_img4').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'first_banner_img_inp4';

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });

        //top bar img
        document.getElementById('topBar_img_btn').addEventListener('click', (event) => {
            event.preventDefault();

            inputId = 'topBar_img';

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
                                     <div class="input-group-append">
                                         <button class="btn btn-outline-secondary" type="button"
                                                 id="button-image-${id}">انتخاب
                                         </button>
                                     </div>
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

        document.getElementById('button-image-' + $id).addEventListener('click', (event) => {

            event.preventDefault();

            inputId = 'image_' + $id;

            window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
        });
    })
    // input
    let inputId = '';

    // set file link
    function fmSetLink($url) {
        document.getElementById(inputId).value = $url;
    }
</script>

@endsection