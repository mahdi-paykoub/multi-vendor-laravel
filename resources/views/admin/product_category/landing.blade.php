@extends('admin.layouts.app')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">دسته ها</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">افزودن دسته جدید</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">تنظیمات</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"><span class="visually-hidden">فهرست کشویی</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="javascript:;">عمل</a>
                <a class="dropdown-item" href="javascript:;">عمل دیگر</a>
                <a class="dropdown-item" href="javascript:;">هر چیز دیگر اینجا</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">لینک
                    جدا کننده</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body p-4">
        <form action="{{route('admin.landing.product.category')}}" method="post">
            @csrf
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <label class="form-label">انتخاب دسته بندی:</label>

                                <select name="" id="" class="form-control">
                                    <option value="" class="">دسته بندی مورد نظر را انتخاب نمایید</option>
                                </select>
                            </div>
                            @error('title')
                            <div class="text-danger fw-bold mb-3">
                                {{$message}}
                            </div>
                            @enderror


                            <div class="mt-4">
                                <button class="create-slider-inp btn btn-primary w-100" type="button">افزودن اسلایدر جدید</button>
                            </div>
                            <div class="for_add_sliders"></div>

                            <div class="mt-4">
                                <button class="create-banner btn btn-primary w-100" type="button">افزودن بنر جدید</button>
                            </div>
                            <div class="for_add_banners"></div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
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
   

    $('.create-banner').click(function() {
        $('.for-add-s-db').removeClass('d-none')
        $parent_of_attr_html = $('.for_add_banners')
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