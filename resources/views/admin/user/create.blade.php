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
        <div class="breadcrumb-title pe-3">کاربران</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن کاربر جدید</li>
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
            <h5 class="card-title">افزودن کاربر جدید</h5>
            <hr/>
            <form action="{{route('admin.user.store')}}" method="post">
                @csrf
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">نام کاربر</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{old('name')}}" placeholder="نام کاربر را وارد کنید">

                                </div>
                                @error('name')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label class="form-label">ایمیل کاربر</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email"
                                           value="{{old('email')}}" placeholder="ایمیل کاربر را وارد کنید">

                                </div>
                                @error('email')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label class="form-label">رمز عبور کاربر</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password"
                                           value="{{old('password' )}}" placeholder="پسورد کاربر را بسازید">

                                </div>
                                @error('password')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label class="form-label">تکرار رمز عبور</label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           name="password_confirmation"
                                           value="{{old('password_confirmation' )}}"
                                           placeholder="پسورد کاربر را  تکرار کنید">

                                </div>
                                @error('password_confirmation')
                                <div class="text-danger fw-bold mb-3">
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

@endsection
