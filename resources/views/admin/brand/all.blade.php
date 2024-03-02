@extends('admin.layouts.app')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 justify-content-between">
       <div class="d-flex align-items-center">
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
       <div>
           <a class="btn btn-primary me-auto" href="{{route('admin.brand.create')}}">افزودن برند</a>
       </div>
    </div>
    <!--end breadcrumb-->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
        @foreach($brands as $brand)
            <div class="col-12 col-lg-4">
                <div class="card shadow-none border radius-15">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="fm-icon-box radius-15 bg-primary text-white"><i class="lni lni-google-drive"></i>
                            </div>
                            <div class="ms-auto font-24"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                        </div>
                        <h5 class="mt-3 mb-0">{{$brand->name}}</h5>
                        <div class="progress mt-3" style="height: 7px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
