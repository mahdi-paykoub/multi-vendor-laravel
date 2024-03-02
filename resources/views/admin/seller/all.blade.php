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
                    <li class="breadcrumb-item active" aria-current="page">لیست مقالات</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
        @foreach($sellers as $seller)
            <div class="col">
                <div class="card radius-15">
                    <div class="card-body text-center">
                        <div class="p-4 border radius-15">
                            <img
                                src="{{image_url_assets($seller->sellerInfo->shop_logo,asset('assets/admin/images/avatar.jpg'))}}"
                                width="110" height="110" class="rounded-circle shadow" alt="">
                            <h5 class="mb-0 mt-5">
                                {{$seller->sellerInfo->name}}
                            </h5>
                            <p class="mb-3">{{$seller->sellerInfo->shop_name}}</p>
                            <div class="d-grid"><a href="{{route('admin.seller.show' ,$seller->id )}}"
                                                   class="btn btn-outline-primary radius-15">
                                    مشاهده مدارک
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
