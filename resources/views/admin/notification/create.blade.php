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
    <div class="breadcrumb-title pe-3">پیغام</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">افزودن پیغام جدید</li>
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
        <h5 class="card-title">افزودن پیغام جدید</h5>
        <hr />
        <form action="{{route('admin.notification.store')}}" method="post">
            @csrf
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <label class="form-label">عنوان پیغام</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title' )}}" placeholder="عنوان پیغام را وارد کنید">

                            </div>
                            @error('title')
                            <div class="text-danger fw-bold mb-3">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">عنوان پیغام</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="link" value="{{old('title' )}}" placeholder="لینک پیغام را وارد کنید">

                            </div>
                            @error('link')
                            <div class="text-danger fw-bold mb-3">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">توضیحات</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">
                                {{old('description')}}
                                </textarea>
                            </div>
                            @error('description')
                            <div class="text-danger fw-bold mb-3">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="text-end">
                                <button class="btn btn-primary" type="submit">ارسال پیام</button>
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
    document.addEventListener("DOMContentLoaded", function() {

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
        .create(document.querySelector('#editor'), {
            ckfinder: {
                uploadUrl: "{{route('articleCKEditor.upload' , ['_token' =>csrf_token()])}}"
            }
        })
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