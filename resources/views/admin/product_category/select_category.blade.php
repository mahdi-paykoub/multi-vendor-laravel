@extends('admin.layouts.app')

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">انتخاب دسته بندی</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
         
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a href="" class="btn btn-primary">افزودن لندینگ</a>
        </div>
    </div>
</div>
<!--end breadcrumb-->

<div class="card">
    <div class="card-body p-4">
        <div>دسته بندی مورد نطر را انتخاب کنید:</div>
        <div class="row">
            @foreach ($cats as $cat)
            <a href="{{route('admin.show.landing.category' ,$cat->id )}}">
                <div class="d-flex align-items-center mt-3">
                    <div>
                        <img src="{{$cat->img}}" alt="" width="100" height="100">
                    </div>

                    <div class="ms-2">{{$cat->title}}</div>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>

</script>

@endsection