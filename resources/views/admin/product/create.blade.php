@extends('admin.layouts.app')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">فروشگاه</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن محصول جدید</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">تنظیمات</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"><span class="visually-hidden">فهرست کشویی</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item"
                                                                                       href="javascript:;">عمل</a>
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
            <h5 class="card-title">افزودن محصول جدید</h5>
            <hr>
            <div class="form-body mt-4">
                <form action="{{route('admin.product.store')}}" method="post">
                    <div class="row">
                        @csrf
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">عنوان محصول</label>
                                    <input type="text" class="form-control" name="title"
                                           value="{{old('title')}}" placeholder="عنوان محصول را وارد کنید">
                                </div>
                                @error('title')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">توضیحات</label>
                                    <textarea class="form-control" name="description"
                                              rows="3">{{old('description')}}</textarea>
                                </div>
                                @error('description')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                {{--upload image--}}
                                <div class="my-2">
                                    <label for="">تصویر شاخص</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                           aria-label="Image" aria-describedby="button-image" value="{{old('image')}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-image">
                                            انتخاب
                                        </button>
                                    </div>
                                </div>

                                @error('image')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror


                                <button type="button" class="mt-4 btn w-100 btn-success add-attr">افزودن ویژگی ثابت
                                </button>
                                {{--for attr--}}
                                <div class="parent-of-attr-html"></div>

                                <button type="button" class="mt-4 btn w-100 btn-primary add-variable-attr">افزودن ویژگی
                                    تغییر
                                    دهنده قیمت
                                </button>
                                <div class="parent-of-variable-attr"></div>


                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="border border-3 p-4 rounded">
                                <div class="row mb-4">
                                    <div>تعیین بر اساس ویژگی</div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">ذخیره محصول</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end row-->
            </div>
        </div>

        <div id="attributes"
             data-attributes="{{\App\Models\Attr::all()->where('is_variable'  , '=' , false)->pluck('name')}}"></div>
        <div id="varAttributes"
             data-attributes="{{\App\Models\Attr::all()->where('is_variable'  , '=' , true)->pluck('name')}}"></div>


    </div>

@endsection
@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1000,height=500');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }

        let changeAttributeValues = (event, id) => {
            let valueBox = $(`select[name='attributes[${id}][value]']`);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })

            $.ajax({
                type: 'POST',
                url: '/admin/attribute/values',
                data: JSON.stringify({
                    name: event.target.value
                }),
                success: function (data) {
                    valueBox.html(`
                            ${
                        data.data.map(function (item) {
                            return `<option value="${item}">${item}</option>`
                        })
                    }
                        `);

                    $('.attribute-select').select2({tags: true});
                }
            });
        }


        let createNewAttr = ({attributes, id}) => {
            return `<div class="row align-items-center mt-3" id="attribute-${id}">
                    <div class="col-5">
                        <label class="form-label">ویژگی محصول</label>
                        <select name="attributes[${id}][name]" onchange="changeAttributeValues(event, ${id});"
                                class="attribute-select form-control">
                            <option value="">انتخاب کنید</option>
                            ${
                attributes.map(function (item) {
                    return `
                                            <option value="${item}">${item}</option>
                                            `
                })
            }
                        </select>

                    </div>
                    <div class="col-5">
                        <label class="form-label">مقدار ویژگی محصول</label>
                        <select name="attributes[${id}][value]" class="attribute-select form-control">
                            <option value="">انتخاب کنید</option>
                        </select>
                    </div>
                    <div class="col-2 mt-4">
                        <button class="btn btn-danger btn-close p-2" type="button"
                                onclick="document.getElementById('attribute-${id}').remove()"></button>
                    </div>
                </div>`
        }

        //add attr
        $('.add-attr').click(function () {
            $parent_of_attr_html = $('.parent-of-attr-html')
            $id = $parent_of_attr_html.children().length;
            let attributes = $('#attributes').data('attributes');

            $parent_of_attr_html.append(createNewAttr({
                attributes,
                id: $id
            }))
            $('.attribute-select').select2({tags: true});
        })

        let changeVarAttributeValues = (event, id) => {
            let valueBox = $(`select[name='varAttributes[${id}][value]']`);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })

            $.ajax({
                type: 'POST',
                url: '/admin/varAttribute/values',
                data: JSON.stringify({
                    name: event.target.value
                }),
                success: function (data) {
                    valueBox.html(`
                            ${
                        data.data.map(function (item) {
                            return `<option value="${item}">${item}</option>`
                        })
                    }
                    `);

                    /* $('.attribute-select').select2({tags: true});*/
                }
            });
        }


        let addVarAttr = ({attributes, id}) => {
            return `<div class="row mt-2 border-bottom pb-4" id="varAttribute-${id}">
                        <div class="col-6 mt-2">
                           <label for="">نوع ویژگی</label>
                           <select name="varAttributes[${id}][name]"
                                class="var-attribute-select form-control"
                                onchange="changeVarAttributeValues(event, ${id});">
                                <option value="-1">ندارد</option>
                                    ${
                attributes.map(function (item) {
                    return `<option value="${item}">${item}</option>`
                })
            }
                            </select>
                        </div>
                        <div class="col-6 mt-2">
                             <label for="">مقدار ویژگی</label>
                             <select name="varAttributes[${id}][value]" class="var-attribute-select form-control">
                                 <option value="-1">ندارد</option>
                             </select>
                        </div>
                        <div class="col-6 mt-2">
                            <label for="">قیمت</label>
                            <input type="text" class="form-control mt-1" name="varAttributes[${id}][price]">
                        </div>
                        <div class="col-6 mt-2">
                            <label for="">تعداد</label>
                            <input type="text" class="form-control mt-1" name="varAttributes[${id}][quantity]">
                        </div>
                    </div>`
        }

        $('.add-variable-attr').click(function () {
            $parent_variable_attr = $('.parent-of-variable-attr')
            $id = $parent_variable_attr.children().length;
            let attributes = $('#varAttributes').data('attributes');
            $parent_variable_attr.append(addVarAttr({
                attributes,
                id: $id
            }))


            $('.var-attribute-select').select2({tags: true});
        })
    </script>

@endsection

