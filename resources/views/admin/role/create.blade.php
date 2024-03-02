@extends('admin.layouts.app')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">نقش ها</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">افزودن نقش جدید</li>
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
            <h5 class="card-title">افزودن نقش جدید</h5>
            <hr/>
            <form action="{{route('admin.role.store')}}" method="post">
                @csrf
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">عنوان نقش</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{old('name')}}" placeholder="عنوان نقش را وارد کنید">

                                </div>
                                @error('name')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">توضیح</label>
                                    <input type="text" class="form-control @error('label') is-invalid @enderror"
                                           name="label"
                                           value="{{old('name')}}" placeholder="توضیح نقش را وارد کنید">

                                </div>
                                @error('label')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="mb-3">
                                    <label class="form-label">دسترسی های نقش</label>
                                    <select name="permissions[]" class="form-control select-permission" id="" multiple>
                                        @foreach(\App\Models\Permission::all() as $permission)
                                            <option value="{{$permission->id}}">
                                                {{$permission->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('permissions')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary px-5">افزودن نقش</button>
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
        $(".select-permission").select2({

        });
    </script>
@endsection
