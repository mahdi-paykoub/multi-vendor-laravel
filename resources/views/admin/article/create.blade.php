@extends('admin.layouts.app')
@section('styles')
    <style>
        .ck-editor__editable_inline {
            height: 600px;
        }
    </style>
@endsection

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">مقالات</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن مقاله جدید</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">تنظیمات</button>
                <button type="button"
                        class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"><span class="visually-hidden">فهرست کشویی</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a
                        class="dropdown-item" href="javascript:;">عمل</a>
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
            <h5 class="card-title">افزودن مقاله جدید</h5>
            <hr/>
            <form action="{{route('admin.article.store')}}" method="post">
                @csrf
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">عنوان مقاله</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           name="title"
                                           value="{{old('title' )}}" placeholder="عنوان مقاله را وارد کنید">

                                </div>
                                @error('title')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">نامک</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                           name="slug"
                                           value="{{old('slug' )}}" placeholder="نامک مقاله را وارد کنید">

                                </div>
                                @error('slug')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">توضیحات کوتاه</label>
                                    <textarea class="form-control @error('title') is-invalid @enderror"
                                              name="description"
                                              rows="3">{{old('description') }}</textarea>
                                </div>
                                @error('description')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                {{--set category--}}
                                <div class="mb-3">
                                    <label class="form-label">انتخاب دسته بندی</label>
                                    <select name="categories[]" id="" class="select-category-2 form-control" multiple>
                                        @foreach(\App\Models\ArticleCategory::all() as $cat)
                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

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

                                <div class="mt-3">
                                    <label class="form-label">توضیحات اصلی</label>
                                    <textarea class="form-control" id="editor" name="body">
                                        {{old('body')}}
                                    </textarea>
                                </div>
                                @error('body')
                                <div class="text-danger fw-bold mb-3 mt-2">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary px-5">افزودن مقاله</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </form>
        </div>
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
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'),
                {
                    ckfinder: {
                        uploadUrl: "{{route('articleCKEditor.upload' , ['_token' =>csrf_token()])}}"
                    }
                }
            )
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $(".select-category-2").select2({
            maximumSelectionLength: 2,

        });
    </script>
@endsection
