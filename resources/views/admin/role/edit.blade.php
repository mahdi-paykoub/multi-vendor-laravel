@extends('admin.layouts.app')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">مقالات</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ویرایش مقاله</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">ویرایش مقاله</h5>
            <hr/>
            <form action="{{route('admin.user.update' , $user->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">نام کاربر</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{old('name' , $user->name) }}"
                                           placeholder="نام کاربر را وارد کنید">

                                </div>
                                @error('name')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label class="form-label">ایمیل کاربر</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                           name="email"
                                           value="{{old('email' , $user->email) }}"
                                           placeholder="ایمیل کاربر را وارد کنید">

                                </div>
                                @error('email')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary px-5">ویرایش</button>
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
