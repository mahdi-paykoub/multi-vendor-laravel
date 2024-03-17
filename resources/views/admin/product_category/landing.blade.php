@extends('admin.layouts.app')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3"> تنظیمات صفحه لندینگ دسته بندی</div>

</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body p-4">

        @if (count($cat_sliders) != 0)
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i = 0 ; count($cat_sliders) > $i ; $i++)
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" class="@if ($i == 0)  active @endif" aria-current="@if ($i == 0)  true @endif"></li>
                @endfor


            </ol>
            <div class="carousel-inner">
                @foreach ($cat_sliders as $cat_slider)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img src="{{json_decode($cat_slider['value'])->img}}" style="height:250px;object-fit:cover;" class="d-block w-100" alt="...">

                    <div class="carousel-caption @if(!$loop->first) d-none @endif">
                        <h5>{{json_decode($cat_slider['value'])->title}}</h5>

                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">قبلی</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">بعدی</span>
            </a>
        </div>
        @endif

        <!-- slider -->
        <div class="text-end mb-4">
            <button class="btn btn-primary create-slider-inp w-100 mt-4">افزودن اسلایدر</button>
        </div>
        <form action="{{route('admin.create.landing.slider' , $cat_id)}}" method="post">
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


        @if (count($cat_sliders) != 0)
        <div class="row">
            @foreach ($cat_banners as $cat_banner)
            <div class="col-6 mt-2">
                <img src="{{json_decode($cat_banner['value'])->img}}" class="w-100" style="object-fit:cover" height="180" alt="">
            </div>
            @endforeach
        </div>
        @endif

        <!-- banner -->
        <div class="text-end">
            <button class="btn btn-primary create-banner-inp w-100 mt-4">افزودن بنر</button>
        </div>
        <form action="{{route('admin.create.landing.banner' , $cat_id)}}" method="post">
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
    </div>
</div>
@endsection

@section('scripts')
<script>
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