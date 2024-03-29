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
            <h5 class="card-title">افزودن دسته جدید</h5>
            <hr/>
            <form action="{{route('admin.article-category.store')}}" method="post">
                @csrf
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">عنوان دسته</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                           name="title"
                                           value="{{old('title' )}}" placeholder="عنوان دسته را وارد کنید">

                                </div>
                                @error('title')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror

                                <div class="mb-3">
                                    <label class="form-label">نامک دسته</label>
                                    <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                           name="slug"
                                           value="{{old('slug')}}" placeholder="عنوان دسته را وارد کنید">

                                </div>
                                @error('slug')
                                <div class="text-danger fw-bold mb-3">
                                    {{$message}}
                                </div>
                                @enderror


                                @php
                                    $parent_id = 0;
                                    if (request('parent')){
                                        $parent_id = request('parent');
                                    }
                                @endphp
                                <input type="hidden" name="parent" value="{{$parent_id}}">

                                    <div class="mt-4 mb-3">
                                        دسته پدر:
                                    </div>
                                    @php
                                        if (request('parent')):
                                            $parent = \App\Models\ArticleCategory::find(request('parent'));
                                    @endphp
                                    <div>
                                        <a class="btn btn-success px-4 me-3">
                                            {{$parent->title}}
                                        </a>
                                    </div>
                                    @php
                                        else:
                                            echo 'ندارد';
                                        endif;
                                    @endphp
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary px-5">افزودن دسته</button>
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
