@extends('admin.layouts.app')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">دسته بندی ها</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">لیست دسته بندی ها</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">عملیات</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">فهرست کشویی</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end" style="">
                    <a class="dropdown-item" href="{{route('admin.product-category.create')}}">افزودن دسته</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="w-100 border-top">
        @include('admin.layouts.productCategory' , ['productCategories' => $productCategories])
    </div>
@endsection
